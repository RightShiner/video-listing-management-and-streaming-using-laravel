<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function likeVideo(Request $request)
    {
        $id = $request['id'];
        $check = DB::table('tbl_likedvideos')    
                ->where('video_id','=',$id)
                ->where('user_id','=',Auth::user()->id)
                ->count();
        if($check < 1)
        {
        $v = DB::table('tblvideos')    
                ->where('vid','=',$id)
                ->first();
        $likesNum = $v->likes + 1;

        DB::table('tblvideos')->where('vid','=',$id)->update(array(
            'likes'  => $likesNum,
        ));

        DB::table('tbl_likedvideos')->insert(array(
            'video_id'   => $id,
            'user_id'    => Auth::user()->id,
            'like_value'  => 1,
            'date_liked' => date('Y-m-d'),
        ));

         } 
        return response()->json("you have liked this video");
    }

    public function dislikeVideo(Request $request)
    {
        $id = $request['id'];
        $check = DB::table('tbl_likedvideos')    
                ->where('video_id','=',$id)
                ->where('user_id','=',Auth::user()->id)
                ->count();
        if($check < 1)
        {
        $v = DB::table('tblvideos')    
                ->where('vid','=',$id)
                ->first();
        $dislikesNum = $v->dislikes + 1;

        DB::table('tblvideos')->where('vid','=',$id)->update(array(
            'dislikes'  => $dislikesNum,
        ));

        DB::table('tbl_likedvideos')->insert(array(
            'video_id'   => $id,
            'user_id'    => Auth::user()->id,
            'like_value'  => 0,
            'date_liked' => date('Y-m-d'),
        ));
 
        return response()->json("you have dis-liked this video");
         } 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
