<?php

namespace App\Http\Controllers;
//namespace Pbmedia\LaravelFFMpeg;
use Illuminate\Http\Request;

use App\Http\Controllers\Input;
use VideoThumbnail;
use Carbon\Carbon;
use FFMpeg;
use FFProbe;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use DB;
use Auth;

class ChannelController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }  
    
    public function index()
    {
        //
    }


    public function create()
    {
        $data['cat'] = DB::table('categories')->get();
       return view('admin/channel/create', $data);
    }

   
    public function store(Request $request)
    {
        $image = $request->file('photo');
        $path = $image->getPathName();
        $destPath = public_path('channel-logo');

        $filename = $image->getClientOriginalName();
        $filePath = $request->file('photo')->move($destPath,$filename);

        $check = DB::table('tblchannels')
        ->where('channel_name', '=',$request['channel'])
        ->where('status', '=',1)->count();

        $checkUserChannel = DB::table('tblchannels')
        ->where('user_id', '=',Auth::user()->id)
        ->where('status', '=',1)->count();
        if($check == 1)
        {
            return back()->with('msg','Channel Name already taken, Please, choose another name');
        }
        if($checkUserChannel ==1)
        {
            return back()->with('msg','You have already created a channel.You are only allowed to create One channel');
        }

        $slug = str_replace(' ', '-', $request['channel']);

        $save = DB::table('tblchannels')->insert(array(
         
         'channel_name'      => $request['channel'],
         'description'       => $request['description'],
         'created_at'        => date('Y-m-d'),
         'slug'              => $slug,
         'status'            => 1,
         'channel_logo'      => $filename,
         'user_id'           =>Auth::user()->id,
        
        ));

        
        return redirect('/channel/create')->with('msg','Succesfully Upladed');
    }

    public function viewChannels()
    {
        // admin view
        $data['channels'] = DB::table('tblchannels')
        ->join('users','users.id','=','tblchannels.user_id')
        ->get();
        return view('admin/channel/list', $data);
    }

    public function editChannel()
    {
       $count = DB::table('tblchannels')
       ->where('user_id','=',Auth::user()->id)
       ->count();
       $data['channel'] = DB::table('tblchannels')
       //->where('Id','=',$id)
       ->where('user_id','=',Auth::user()->id)
       ->first();
       if($count == 0)
       {
        return redirect('/channel/create')->with('msg','You do not have an active channel, You can create one');
       }
       return view('admin/channel/editChannel',$data);
    }

    
    public function update(Request $request)
    {
        $image = $request->file('photo');
        $id = $request['channelID'];
        $slug = str_replace(' ', '-', $request['channel']);
        if($image =='') {   
        $save = DB::table('tblchannels')->where('Id','=',$id)->update(array(
         
         'channel_name'      => $request['channel'],
         'description'       => $request['description'],
         'created_at'      => date('Y-m-d'),
         'status'            => 1,
         'slug'              => $slug,
         'user_id'           =>Auth::user()->id,
        
         ));

        return back()->with('msg','Succesfully Updated');
       }
       else
       {
          $path = $image->getPathName();
        $destPath = public_path('channel-logo');

        $filename = $image->getClientOriginalName();
        $filePath = $request->file('photo')->move($destPath,$filename);
        
        $save = DB::table('tblchannels')->where('Id','=',$id)->update(array(
         
         'channel_name'      => $request['channel'],
         'description'       => $request['description'],
         'created_at'        => date('Y-m-d'),
         'status'            => 1,
         'slug'              => $slug,
         'channel_logo'      => $filename,
         'user_id'           =>Auth::user()->id,
        
         ));

        return back()->with('msg','Succesfully Updated');

       }

       
    }

    
    public function disableChannel($id)
    {
        //admin disable
    }

     public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
 
        $fileName = time().'.'.request()->file->getClientOriginalExtension();
 
        request()->file->move(public_path('files'), $fileName);
 
        return response()->json(['success'=>'You have successfully upload file.']);
    }
}
