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

class VideoUploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
  
    
    public function index()
    {
        return view('admin/uploadVideo/index');
    }

    function get_video_attributes($video, $ffmpeg) {

 $hours='';
 $mins ='';
 $secs ='';
 $ms ='';
    $command = $ffmpeg . ' -i ' . $video . ' -vstats 2>&1';  
    $output = shell_exec($command);  

    $regex_duration = "/Duration: ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}).([0-9]{1,2})/";
    //$regex_duration = "/Duration: ([^\r\n]*), ([^,]*), ([0-9]{1,4})x([0-9]{1,4})/";
    if (preg_match($regex_duration, $output, $regs)) {
        $hours = $regs [1] ? $regs [1] : null;
        $mins = $regs [2] ? $regs [2] : null;
        $secs = $regs [3] ? $regs [3] : null;
        $ms = $regs [4] ? $regs [4] : null;
    }

    return array (
            'hours' => $hours,
            'mins' => $mins,
            'secs' => $secs,
            'ms' => $ms
    );

}

    public function create()
    {
        $channelExist = DB::table('tblchannels')->where('user_id','=',Auth::user()->id)->count();
        if($channelExist == 0)
        {
            return redirect('/channel/create')->with('msg','Please, create a channel before you can upload a video');
        }

        $data['cat'] = DB::table('categories')->get();
       return view('admin/uploadVideo/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('photo');
        $path = $image->getPathName();
        $destPath = public_path('videos');

        $filename = $image->getClientOriginalName();
        $filePath = $request->file('photo')->move($destPath,$filename);

        $ffmpeg = FFMpeg\FFMpeg::create(array(
         'ffmpeg.binaries'  => 'C:/wamp64/www/ffmpeg/bin/ffmpeg.exe', 
         'ffprobe.binaries' => 'C:/wamp64/www/ffmpeg/bin/ffprobe.exe', 
         'timeout'          => 3600, // The timeout for the underlying process
         'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));

         $ffprobe = FFMpeg\FFProbe::create(array(
         'ffmpeg.binaries'  => 'C:/wamp64/www/ffmpeg/bin/ffmpeg.exe', 
         'ffprobe.binaries' => 'C:/wamp64/www/ffmpeg/bin/ffprobe.exe', 
         'timeout'          => 3600, // The timeout for the underlying process
         'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));
$fmpeg= "C:/wamp64/www/ffmpeg/bin/ffmpeg.exe";
//$ffprobe= "C:/wamp64/www/ffmpeg/bin/ffprope.exe";
        //$image = $request->file('photo');
          
          //$paths = "C:/wamp64/www/ziocracy/videos/Add Watermark to a Video.mp4";
          
          
//dd($path);
        //$vid = $_FILES['video']['tmp_name'];

        $video_attributes = $this->get_video_attributes($filePath, $fmpeg);
        
        $times ='' . $video_attributes['mins'] . ':'. $video_attributes['secs'] . '';
        dd($times);

        //$cmd = "ffmpeg -i $videofile -ss $getseconds -s $size -f image2 -vframes 1 $imagepath";

        //$ffprobe = FFMpeg\FFProbe::create();
        
       // $media = FFMpeg::open($paths);

//$durationInSeconds = $media->getDurationInSeconds();
 //shell_exec($time);
        /********** Get video duration ************/
        $duration = round($ffprobe->format($filePath)->get('duration'));
       $minutes = $duration/60;
       $rm = floor($minutes);
       $sec = round(($minutes-$rm)*60);
       $time = $rm.':'.$sec;
       /********** End Get video duration ************/

       $ffm = 'C:/wamp64/www/ffmpeg/bin/ffmpeg.exe';
       $videofile = $path;
       /********** Get Video Thumbnail ************/
       $getseconds = 6;
       $imagepath = public_path('screenshot');

       $storagepath = public_path('screenshot');
       $size ="240x145";
       $cmd = "FFMpeg -i $filePath -ss $getseconds -s $size -f image2 -vframes 1 $imagepath";
   $name = explode('.', $filename);
   $imagename = "$name[0].jpg";
 VideoThumbnail::createThumbnail($filePath, $storagepath, $imagename, $getseconds, $width = 240, $height = 147);
 /**********End Get video thumbnail ************/

       //$thumb = VideoThumbnail::createThumbnail($filePath, $imagepath, 'thumb.jpg', 2, 600, 600);

       shell_exec($cmd);
       //dd($videofile);
// dd($time);
//dd($video_attributes);
        //dd($duration);
    }

    public function uploadVideo(Request $request)
    {

        $ffmpeg = FFMpeg\FFMpeg::create(array(
         'ffmpeg.binaries'  => 'C:/wamp64/www/ffmpeg/bin/ffmpeg.exe', 
         'ffprobe.binaries' => 'C:/wamp64/www/ffmpeg/bin/ffprobe.exe', 
         'timeout'          => 3600, // The timeout for the underlying process
         'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));

         $ffprobe = FFMpeg\FFProbe::create(array(
         'ffmpeg.binaries'  => 'C:/wamp64/www/ffmpeg/bin/ffmpeg.exe', 
         'ffprobe.binaries' => 'C:/wamp64/www/ffmpeg/bin/ffprobe.exe', 
         'timeout'          => 3600, // The timeout for the underlying process
         'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));

         $video = $request->file('photo');
        $path = $video->getPathName();
        $destPath = public_path('videos');

        $filename = $video->getClientOriginalName();
        $filesize_in_bytes = filesize($path);
        $getInMB = $filesize_in_bytes/1048576;
        $filesize = number_format($getInMB,2);
        if($filesize > 60)
        {
            return back()->with('msg','File size should not be more than 60MB');
        }

        $filePath = $request->file('photo')->move($destPath,$filename);

       //get Duration
       $duration = round($ffprobe->format($filePath)->get('duration'));
       $minutes = $duration/60;
       $rm = floor($minutes);
       $sec = round(($minutes-$rm)*60);
       $time = $rm.':'.$sec;

       //Get Image frame
       $getseconds = 6;
       $imagepath = public_path('screenshot');
       $storagepath = public_path('screenshot');
       $size ="240x145";
       $cmd = "FFMpeg -i $filePath -ss $getseconds -s $size -f image2 -vframes 1 $imagepath";
       $name = explode('.', $filename);
       $imagename = "$name[0].jpg";
       VideoThumbnail::createThumbnail($filePath, $storagepath, $imagename, $getseconds, $width = 270, $height = 169);

       $channel = DB::table('tblchannels')
        ->where('user_id', '=',Auth::user()->id)
        ->first();

        $save = DB::table('tblvideos')->insert(array(
        'title'             => $request['title'],
        'description'       => $request['description'],
        'keywords'          => $request['keywords'],
        'category'          => $request['category'],
        'poster'            => Auth::user()->id,
        'date_uploaded'     => date('Y-m-d'),
        'updated_at'        => date('Y-m-d'),
        'image_path'        => $imagename,
        'video_path'        => $filename,
        'random_code'       => '',
        'duration'          => $time,
        'channel_id'        => $channel->Id,

        ));
        return redirect('/video/upload')->with('msg','Succesfully Upladed');
    }

    public function list()
    {
        $data['videos'] = DB::table('tblvideos')
       ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
       ->orderBy('vid','DESC')->paginate(60);
       return view('admin/uploadVideo/listVideos',$data);
    }

    
    public function edit($id)
    {
       $data['cat'] = DB::table('categories')->get();
       $data['edit'] = DB::table('tblvideos')->where('vid','=',$id)->first();
       return view('admin/uploadVideo/edit',$data);
    }

    
    public function update(Request $request, $id)
    {
        $save = DB::table('tblvideos')->where('video','=',$id)->update(array(
          'title'           => $request['title'],
         'description'      => $request['description'],
         'keywords'         => $request['keywords'],
         'category'         => $request['category'],
         'poster'           => Auth::user()->id,
        'date_uploaded'     => date('Y-m-d'),
        'updated_at'        => date('Y-m-d'),
        
        'random_code'       => '',
        'duration'          => $time,
        'channel_id'        => $channel->Id,

        ));
        return redirect('/video/upload')->with('msg','Succesfully Uploaded');    }

    public function destroy($id)
    {
        $delete = DB::table('tblvideos')->where('vid','=',$id)->delete();
        return back()->with('msg','Succesfully Deleted');
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
    public function background()
    {
      return view('admin/uploadVideo/videoBackground');
    }
    public function videoBackground(Request $request)
    {
       $request->validate([
            'video' => 'required',
        ]);
        $destPath = public_path('backgroundVideos');
        $video = $request->file('video');

        $filename = $video->getClientOriginalName();

      $count = DB::table('tblbackground_video')->count();
      $data = DB::table('tblbackground_video')->first();
      if($count ==0)
      {
      $save = DB::table('tblbackground_video')->insert(array(
        'title'             => $request['title'],
        'description'       => $request['description'],        
        'poster'            => Auth::user()->id,
        'date_uploaded'     => date('Y-m-d'),
        'updated_at'        => date('Y-m-d'),   
        'video_path'        => $filename,
        ));

      $filePath = $request->file('video')->move($destPath,$filename);
      return redirect('/video/background')->with('msg','Successfully Uploaded');

       }
       else
       {
        $save = DB::table('tblbackground_video')->where('Id','=',$data->Id)->update(array(
        'title'             => $request['title'],
        'description'       => $request['description'],        
        'poster'            => Auth::user()->id,
        'date_uploaded'     => date('Y-m-d'),
        'updated_at'        => date('Y-m-d'),   
        'video_path'        => $filename,
        ));
        $filePath = $request->file('video')->move($destPath,$filename);
        return redirect('/video/background')->with('msg','Successfully Uploaded');

       }
       
    }

    public function url()
    {
      return view('admin/uploadVideo/makeMoneyUrl');
    }

    public function saveUrl(Request $request)
    {
      $count = DB::table('tblmoney_url')->count();
      //$data = DB::table('tblbackground_video')->first();
      if($count ==0)
      {
      $save = DB::table('tblmoney_url')->insert(array(
        'url'             => $request['url'],
        'updated_at'        => date('Y-m-d'),   
       
        ));

      return redirect('/make-money/url')->with('msg','Successfully Saved');

       }
       else
       {
        $save = DB::table('tblmoney_url')->where('Id','=',1)->update(array(
        'url'             => $request['url'],
        'updated_at'        => date('Y-m-d'),   
       
        ));

      return redirect('/make-money/url')->with('msg','Successfully Saved');

       }
    }


}
