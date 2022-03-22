<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdsController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('admin/ads/frontpage');
    }

    public function homeAdstore(Request $request)
    {
        $data['save'] = DB::table('homepageads')->insert(array(
            'script'         => $request['script'],
            'description'    => $request['row'],
            'row'            => $request['row'],
            'script'         => $request['script'],
            'banner_size'    => $request['size'],
            'active'         => 1,
            'created_at'     => date('Y-m-d H:i:s'),

         ));

        return redirect('/ads/create')->with('msg','Entered Successfully');
    }

    public function viewHomeAds()
    {
        $data['homeAds'] = DB::table('homepageads')->groupBy('row')->get();
        return view('admin/ads/list');
    }

  
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
    public function videoPayAds(Request $request)
    {
       $data['save'] = DB::table('homepageads')->insert(array(
            'script'         => $request['script'],
            'size'    => $request['row'],
            'row'            => $request['row'],
            'script'         => $request['script'],
            'banner_size'    => $request['size'],
            'active'         => 1,
            'created_at'     => date('Y-m-d H:i:s'),

         ));
    }
}
