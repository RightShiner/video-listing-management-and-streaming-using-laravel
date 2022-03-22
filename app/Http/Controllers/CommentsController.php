<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class CommentsController extends Controller
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
    public function save(Request $request)
    {
        if($request['replyID'] == '')
        {
            $parent =0;
        }
        else
        {
            $parent = $request['replyID'];
        }
        $data = DB::table('comments')->insert(array(
            'comment'   => $request['comment'],
            'poster'    => Auth::user()->id,
            'video_id'  => $request['videoID'],
            'parent_id'  => $parent,
            'date_posted' => date('Y-m-d'),
        ));

        if($data)
        {
            return response()->json("Comment Added Successfully");
        }
        else
        {
            return response()->json("Failure Posting Comment, Please, try again");
        }
    }

    public function storeBlogComment(Request $request)
    {
        if($request['replyID'] == '')
        {
            $parent =0;
        }
        else
        {
            $parent = $request['replyID'];
        }
        $data = DB::table('tblblog_comments')->insert(array(
            'comment'   => $request['comment'],
            'poster'    => Auth::user()->id,
            'video_id'  => $request['videoID'],
            'parent_id'  => $parent,
            'date_posted' => date('Y-m-d'),
        ));

        if($data)
        {
            return response()->json("Comment Added Successfully");
        }
        else
        {
            return response()->json("Failure Posting Comment, Please, try again");
        }
    }

    
    public function show($id)
    {
        //
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
