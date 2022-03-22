<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class HomeController extends Controller
{
    
    public function __construct()
    {
       // $this->middleware('auth');
    }
    public function getSessionId($id,$vid){
    $count=  DB::table('sessionupdate')->where('SessionVar','=',$id)->where('video_id','=',$vid)->count();  
    return $count; 
    }

    public function index()
    {

        return view('admin/dashboard');
    }

    public function videos($cat)
    {
      $data = DB::table('tblvideos')
       ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
       ->where('category','=',$cat)
       ->orderBy('vid','DESC')->take(5)->get();
       return $data;
    }

    public function vid($val)
    {
      $data = DB::table('tblvideos')
       ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
       ->orderBy($val,'DESC')->take(5)->get();
       return $data;
    }

    public function home()
    {
       $data['recent']        = $this->vid('vid');
       $data['mostViewed']    = $this->vid('views');
       $data['music']         = $this->videos(3);
       $data['movies']        = $this->videos(16);
       $data['comedy']        = $this->videos(8);
       $data['newsPolitics']  = $this->videos(9);
       $data['entertain']     = $this->videos(10);
       $data['education']     = $this->videos(11);
       $data['scienceTech']   = $this->videos(12);
       $data['sport']         = $this->videos(5);
       $data['travelEvents']   = $this->videos(6);
       $data['beautyMakeup']  = $this->videos(16);
       //dd($data['videos'] );
        $data['bgVideo'] =DB::table('tblbackground_video')->first();
        return view('welcome',$data);
    }
    public function watch($id)
    {
        $sesid = Session::getId();
        //dd($sesid);
        $data['related'] = DB::table('tblvideos')
        ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
        ->orderBy('vid','DESC')->take(5)->get();
        $data['watch'] = DB::table('tblvideos')->where('vid','=',$id)->first();
        $data['sidebarAds'] = DB::table('videoplayads')->take(5)->get();

        $data['comments'] = DB::table('comments')
        ->join('users','users.id','=','comments.poster')
        ->where('video_id','=',$id)->get();

        $data['subscriptions'] = DB::table('tblsubscribe')->where('channel_id','=',$data['watch']->channel_id)->count();

        if($this->getSessionId($sesid,$id)==0)
        {
            DB::table('tblvideos')->where('vid','=',$id)->update(array(
            'views' => $data['watch']->views + 1,
            ));
            DB::table('sessionupdate')->insert(array(
            'SessionVar' => $sesid,
            'video_id'   => $id,
            'Date'       => date('Y-m-d H:i:s')
            ));
        
        }

        return view('home/single',$data);
    }

    public function test()
    {
        return view('admin/test');
    }

     public function flag(Request $request)
    {      
        
        $data = DB::table('tblreport_video')->insert(array(
            'report'   => $request['rpt'],
            'user_id'    => Auth::user()->id,
            'video_id'  => $request['id'],
            'date_reported' => date('Y-m-d'),
        ));

        if($data)
        {
            return response()->json("Video Successfully Reported ");
        }
        else
        {
            return response()->json("Failure Reporting Video, Please, try again");
        }
        

         //return response()->json("Video Successfully Reported ");
    }

     public function subscribe(Request $request)
    {      
      $check = DB::table('tblsubscribe')->where('user_id','=',Auth::user()->id)->count();
      if($check >= 1)
      {
        return response()->json("You Have Already Subscribed to this channel");
      }
        
      $data = DB::table('tblsubscribe')->insert(array(
          
          'user_id'    => Auth::user()->id,
          'channel_id'  => $request['id'],
          'date_subscribed' => date('Y-m-d'),
      ));

        if($data)
        {
            return response()->json("You Have Subcribed Successfully");
        }
        else
        {
            return response()->json("Failed to subcribe, Please, try again");
        }
        

         //return response()->json("Video Successfully Reported ");
    }

    public function singleChannel($val)
    {
      //$id = Auth::user()->id;
      $ch = DB::table('tblchannels')->where('slug','=',$val)
       ->first();
      $data['single'] = DB::table('tblvideos')
       ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
       ->where('channel_id','=',$ch->Id)->paginate(1);
        return view('home/singleChannel',$data);
    }

    public function autocomplete(Request $request)
  {
    $query = $request->input('query');
    $search = DB::table('tblvideos')
      ->where('status', '=', 1)
      ->where('block', '=', 0)
      
      ->where('title', 'LIKE', '%'.$query.'%')
      ->orWhere('description', 'LIKE','%'.$query.'%')
      ->orWhere('keywords', 'LIKE', '%'.$query.'%')
      ->take(150)
      ->get();
    $return_array = null;
    foreach($search as $s)
    {
      $return_array[]  =  ["value"=>$s->title, "data"=>$s->keywords];
    }   
    return response()->json(array("suggestions"=>$return_array));
  }

    public function search(Request $request)
  { 
    $searchWords = explode(",", $request['words'] );
    //$terms = explode(",", $request['words'] );
    //dd($searchWords);
    $strip = trim(str_replace(',', '', $request['words'] ));
   // $str = str_replace(' ', '+', $strip );
    $terms = explode(" ", $strip );
    $str = '+breast+dancing+funny+indian+woman';

   //$data['search'] = DB::Select("select * from tblvideos where MATCH(title, description, keywords) AGAINST('dancing')");
  $cond = '';
  $cond2 = '';
  $cond3 = '';
   //return view('home/search',$data);
    foreach($terms as $term){
            $cond .= "tblvideos.keywords like '%$term%' or ";
            $cond2 .= "tblvideos.title like '%$term%' or ";
            $cond3 .= "tblvideos.description like '%$term%' or ";
        }
        
        //dd($cond);
        $cond = substr($cond, 0,-4);
        $cond2 = substr($cond2, 0,-4);
        $cond3 = substr($cond3, 0,-4);

       $data['search'] = DB::Select("select * from tblvideos join tblchannels on tblchannels.Id = tblvideos.channel_id where (tblvideos.status = 1 and tblvideos.block =0) and ".$cond.'or '.$cond2.'or '.$cond3  ) ;
        
        return view('home/search',$data);


    if($request['words'] == '')
    {
        $query = $request->input('search');
    }
    else
    {
       $query = $request->input('words');
    }

    foreach($searchWords as $searchkeywords =>$value)
   {
  $arr = array($value);
  $words[$searchkeywords] = $value;
    $data['search'] = DB::table('tblvideos')
     ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
      ->where('tblvideos.status', '=', 1)
      ->where('tblvideos.block', '=', 0)
      ->where('tblvideos.keywords', 'LIKE', '%'.$value.'%')
      ->orWhere('tblvideos.title', 'LIKE', '%'.$value.'%')
      ->orWhere('tblvideos.description', 'LIKE','%'.$value.'%')
      ->get();
      
       //dd($arr);
  }
  
  //dd($arr);
 
   
  }
   public function eachCategory($id)
    {
        $data['cat'] =DB::table('categories')->where('catId','=',$id)->first();
       $data['videos'] = DB::table('tblvideos')
       ->join('tblchannels','tblchannels.Id','=','tblvideos.channel_id')
       ->where('category','=',$id)
       ->orderBy('vid','DESC')->paginate(1);
       //dd($data['videos'] );
        return view('home/eachCategory',$data);
    }

    public function blog()
    {
        $data['blog'] = DB::table('blog')
       ->paginate(20);
       return view('home/blog',$data);
    }

     public function mailPost($to,$subject,$message)
    {

          //dd($request->input('message'));

         //$to = "abolarinbabatunde88@gmail.com";
        //$subject= $request->input('subject');
        $from =  "snipetube.com";
        $header = "From:".$from."\r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-type: text/html \r\n";
        $message= $request->input('message');
        $retval = mail ($to,$subject,$message,$header); 

        return $retval;
        
    }

    public function read($id)
    {
        $data['read'] =DB::table('blog')->where('Id','=',$id)->first();
       $data['comments'] = DB::table('tblblog_comments')
        ->join('users','users.id','=','tblblog_comments.poster')
        ->where('video_id','=',$id)->get();
        return view('home/read',$data);
    }

    public function login()
    {
      return view('Auth.login');
    }

    public function register()
    {
      return view('Auth.register');
    }

    public function saveRegister(Request $request)
    {
      $subject = 'Snipetube Registration';

      DB::table('users')->insert(array(

        'first_name'    => $request['firstName'],
        'last_name'     => $request['lastName'],
        'name'          => $request['firstName'],
        'email'         => $request['email'],
        'country'       => $request['country'],
        'province'      => $request['province'],
        'phone'         => $request['phone'],
        'created_at'    => date('Y-m-d H:i:s'),
        'updated_at'    => date('Y-m-d H:i:s'),

      ));
      /*$message = "Your registration on snipetube.com was successfull Your password is <strong>$password</strong>. You should change your password upon login. Thank You.";
      $this->mailPost($request['email'],$subject,$message,$header)*/
      return redirect('/users/register')->with('msg','Successfully Registered. Your password has been sent to your email.');
    }

    public function freeGift()
    {
      $data['display'] = DB::table('tblfreebees')->where('active','=',1)->get();
      return view('home/freeGift',$data);
    }

    public function terms()
  {
    return view('home.terms');
  }
  public function privacy()
  {
    return view('home.privacy_policy');
  }
  public function disclaimer()
  {
    return view('home.disclaimer');
  }
  public function contact()
  {
    return view('home.contact');
  }
  public function sendContactMessage(Request $request)
  {
    DB::table('contact')->insert(array(

      'name'     => $request['name'],
      'email'    => $request['email'],
      'subject'  => $request['subject'],
      'message'  => $request['message'],



    ));
     mail_details( 'ifo@snipetube.com',$request['subject'],$request['message']); 
    return redirect('/contact')->with('msg', 'Message Sent!');
  }

   public function mail_details( $to,$subject,$message){

       $from =  "snipetube.com";
        $header = "From:".$from."\r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-type: text/html \r\n";
        //$message= $request->input('message');
        $retval = mail ($to,$subject,$message,$header); 

        return $retval;
        
        //dd($retval);
    

    }




}
