<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class BlogController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin/blog/create');
    }

    
    public function savepost(Request $request)
    {
        $image = $request->file('photo');
       if($image =='')
        {
        $post = DB::table('blog')->insert(array(

            'title'            => $request['title'],
            'text'             => $request['description'],
            'poster'           => Auth::user()->id,
            'date_posted'      => date('Y-m-d'),

        ));
        return redirect('/blog-post/create')->with('msg','Successfully Submitted');
        }
        else
        {
            $filename = $image->getClientOriginalName();
            $post = DB::table('blog')->insert(array(

            'title'            => $request['title'],
            'text'             => $request['description'],
            'poster'           => Auth::user()->id,
            'date_posted'      => date('Y-m-d'),
            'filename'         => $filename,

        ));
            $destPath = public_path('blogImages');
            $filePath = $request->file('photo')->move($destPath,$filename);

             return redirect('/blog-post/create')->with('msg','Successfully Submitted');
        }
    }

    public function show()
    {
        $data['show'] = DB::table('blog')
        ->join('users','users.id','=','blog.poster')
        ->paginate(50);
        return view('admin/blog/list',$data);
    }
    public function edit($id)
    {
        $data['edit'] = DB::table('blog')->where('Id','=',$id)->first();
        return view('admin/blog/edit',$data);
    }

    public function update(Request $request)
    {
        $id = $request['id'];
                $post = DB::table('blog')->where('Id','=',$id)->update(array(

            'title'            => $request['title'],
            'text'             => $request['description'],
            'poster'           => Auth::user()->id,
            //'date_posted'      => date('Y-m-d'),
            'updated_at'      => date('Y-m-d'),

        ));
        return redirect('/blog-post/edit/'.$id)->with('msg','Successfully Updated');
    }

    public function destroy($id)
    {
        //
    }
}
