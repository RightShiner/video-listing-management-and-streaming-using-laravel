<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function flagReport()
    {
        $data['flag'] = DB::table('tblreport_video')
        ->join('tblvideos','tblvideos.vid','=','tblreport_video.video_id')
        ->join('users','users.id','=','tblreport_video.user_id')
        ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
        ->paginate(60);
        return view('admin/flagReport',$data);
    } 

   
    public function reportJson(Request $request)
    {
        $id = $request['id'];
        $rep = DB::table('tblreport_video')->where('video_id','=',$id)->first();
        return response()->json($rep->report);
    }

    
    public function blockVideo(Request $request)
    {
        DB::table('tblvideos')->where('vid','=',$request['id'])->update(array(
            'block'         => 1,
        ));
        return response()->json('Video Successfully blocked');
    }

    public function feebeeCreate()
    {
        return view('admin.freebee');
    }

    public function feebeeStore(Request $request)
    {
         $save = DB::table('tblfreebees')->insert(array(
         
         'freebee'         => $request['title'],
         'content'         => $request['description'],
         'created_at'      => date('Y-m-d'),
        
        ));
         return redirect('freebee/create')->with('msg','successfully Submitted');
    }

    public function viewFreebees()
    {
     
        $data['free'] = DB::table('tblfreebees') 
        ->paginate(60);
        return view('admin/listFreebee',$data);
  
    }

    public function deactivate(Request $request)
    {
        DB::table('tblfreebees')->where('Id','=',$request['id'])->update(array(
            'active'         => 0,
        ));
        return response()->json('Successfully Deactivated');
    }

   
    public function fileUpload()

    {

        return view('admin/progress');

    }

 

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function fileUploadPost(Request $request)

    {

        $request->validate([

            'file' => 'required',

        ]);

 

        $fileName = time().'.'.request()->file->getClientOriginalExtension();

 

        request()->file->move(public_path('prerollVideos'), $fileName);

 

        return response()->json(['success'=>'You have successfully upload file.']);

    }

  public function preroll()
  {
    return view('admin.ads.prerollVideo');
  }

}
