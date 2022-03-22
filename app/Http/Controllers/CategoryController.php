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

class CategoryController extends Controller
{
  
    
    public function index()
    {
        //
    }


    public function create()
    {
        $data['cat'] = DB::table('categories')->get();
       return view('admin/category/create', $data);
    }

   
    public function store(Request $request)
    {

        $save = DB::table('tblcategories')->insert(array(
         
         'cat_desc'      => $request['description'],
         'category_name'         => $request['category'],
         'date_created'     => date('Y-m-d'),
        
        ));
        return redirect('/category/create')->with('msg','Succesfully Upladed');
    }

    public function viewCategories(Request $request)
    {
        //admin View
        $data['cat'] = DB::table('categories')->get();
        return view('admin/category/list',$data);

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
