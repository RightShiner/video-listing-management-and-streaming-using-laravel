<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Carbon\Carbon;

class UserAreaController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $data['recent'] = DB::table('tblvideos')
        ->join('tblsubscribe','tblsubscribe.channel_id','=','tblvideos.channel_id')
        ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
        //->where('tblsubscribe.id','=',Auth::user()->id)
        ->where('tblvideos.date_uploaded','>=',Carbon::now()->subDay())
        ->get();

         return view('admin/dashboard',$data);
    }

   
    public function usersThatLikedVideos()
    {
        $channel = DB::table('tblchannels')->where('user_id','=',Auth::user()->id)->first();
        $data['usersLiked'] = DB::table('users')
        ->join('tbl_likedvideos','tbl_likedvideos.user_id','=','users.id')
        ->where('tbl_likedvideos.channel_id','=',$channel->Id)
        ->get();
        return view('admin/userArea/userLiked',$data);
    }

    public function subscribers()
    {
        $channel = DB::table('tblchannels')->where('user_id','=',Auth::user()->id)->first();
        $data['subscribe'] = DB::table('tblsubscribe')
        ->join('users','users.id','=','tblsubscribe.user_id')
        ->where('tblsubscribe.channel_id','=',$channel->Id)
        ->paginate(60);
        return view('admin/userArea/subscribers',$data);
    }

    public function likedVideos()
    {
        $channel = DB::table('tblchannels')->where('user_id','=',Auth::user()->id)->first();
        $data['liked'] = DB::table('tblvideos')
        //->join('users','users.id','=','tblsubscribe.user_id')
        ->where('channel_id','=',$channel->Id)
         ->where('likes','>',0)
        ->paginate(60);
        return view('admin/userArea/likedVideos',$data);
    }

   
    public function channelsYouSubscribe()
    {
        $data['subscribed'] = DB::table('tblsubscribe')
        ->join('tblchannels','tblchannels.Id','=','tblsubscribe.channel_id')
        ->where('tblsubscribe.user_id','=', Auth::user()->id)
        ->paginate(60);
        return view('admin/userArea/yourSubscription',$data);
    }



    public function uploadedVideos()
    {
        $channel = DB::table('tblchannels')->where('user_id','=',Auth::user()->id)->first();
        $data['allVideos'] = DB::table('tblvideos')
        ->where('channel_id','=',$channel->Id)
        ->paginate(60);
        return view('admin/userArea/uploadedVideos',$data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
