<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/',  					         'HomeController@home');
Route::get('/watch/video/{id?}',  		     'HomeController@watch');
Route::get('/each/category/{id?}',  		'HomeController@eachCategory');
Route::get('/blog/read/{id?}',  		    'HomeController@read');
Route::get('/blog/list',  		            'HomeController@blog');
Route::post('/upload',  					'HomeController@store');
Route::get('logout', 		             'Auth\LoginController@logout');
Route::get('/terms-of-use',  		         'HomeController@terms');
Route::get('/privacy-policy',  		         'HomeController@privacy');
Route::get('/disclaimer',  		            'HomeController@disclaimer');
Route::get('/contact',  		            'HomeController@contact');

//Route::get('/users/login',  		            'HomeController@login')->name('login');
Route::get('/users/register',  		            'HomeController@register');
Route::post('/users/register',  		            'HomeController@saveRegister');

Route::get('/video/upload',  				'VideoUploadController@create');
Route::get('/edit/video/{id?}',  				'VideoUploadController@edit');
Route::post('/video/upload',  				'VideoUploadController@uploadVideo');

Route::get('/category/create',  				'CategoryController@create');
Route::post('/category/create',  				'CategoryController@store');

// channel creation

Route::get('/channel/create',  				    'ChannelController@create');
Route::post('/channel/create',  				'ChannelController@store');
Route::get('/channel/listall',  				    'ChannelController@viewChannels');
Route::get('/channel/edit',  				    'ChannelController@editChannel');
Route::post('/channel/edit',  				    'ChannelController@update');



Route::get('/home', 'HomeController@index');
Route::get('/home/test', 'HomeController@test');

Route::post('/user/registration',  				    'Auth\RegisterController@storeUser');
Route::post('/login/user',  				    'Auth\LoginController@userLogin');

Route::get('/registration/success',  				'Auth\RegisterController@success');

//ads Controller
Route::get('/ads/create',  				'AdsController@create');
Route::post('/ads/create',  				'AdsController@homeAdstore');

//like video
Route::post('/liking/video',  				'LikesController@likeVideo');
Route::post('/disliking/video',  				'LikesController@dislikeVideo');

//posting comments
Route::post('/save/comment',  				'CommentsController@save');
Route::post('/blog-comment/store',  				'CommentsController@storeBlogComment');

//report/flag video
Route::post('/report/video',  				'HomeController@flag');

Route::post('/subscribe/channel',  				'HomeController@subscribe');

Route::get('/single/channel/{val?}',  				'HomeController@singleChannel');

//User Area
Route::get('/users/liked',  				        'UserAreaController@usersThatLikedVideos');
Route::get('/channel/subscribers',  				'UserAreaController@subscribers');
Route::get('/user-area/dashboard',  				'UserAreaController@index')->name('home');
Route::get('/liked/videos',  				        'UserAreaController@likedVideos');
Route::get('/channels/you-subscribed',  			'UserAreaController@channelsYouSubscribe');
Route::get('/uploaded/videos',  			        'UserAreaController@uploadedVideos');

//admin
Route::get('/flaged/videos',  			        'AdminController@flagReport');
Route::post('/get/report',  			        'AdminController@reportJson');
Route::post('/block/video',  			        'AdminController@blockVideo');
Route::get('/free/create',  			        'AdminController@feebeeCreate');
Route::post('/free/create',  			        'AdminController@feebeeStore');
Route::get('/list/freebee',  			        'AdminController@viewFreebees');
Route::get('/deactivate/freebee',  			        'AdminController@deactivate');


//video search
Route::get('/searchVideos/{q?}', 'HomeController@autocomplete');
Route::post('/search/videos', 'HomeController@search'); 

//blog
Route::get('/blog-post/create', 'BlogController@create');
Route::post('/blog-post/create', 'BlogController@savepost');
Route::get('/blog-post/list', 'BlogController@show');
Route::get('/blog-post/edit/{id?}', 'BlogController@edit');
Route::post('/blog-post/update', 'BlogController@update');

//All videos
Route::get('/video/listall',  				       'VideoUploadController@list');
Route::get('//delete/video/{id?}',  			   'VideoUploadController@destroy');
Route::get('/video/background',  				       'VideoUploadController@background');
Route::post('/video/background',  				       'VideoUploadController@videoBackground');
Route::get('/file-upload/progress',  			   'VideoUploadController@index');
Route::post('/fileUploadPost',  				   'VideoUploadController@index')->name('fileUploadPost');
Route::get('/make-money/url',  				           'VideoUploadController@url');
Route::post('/make-money/url',  				       'VideoUploadController@saveUrl');

Route::group(['middleware' => ['auth']], function () 
{
 Route::get('/free/gifts',  				           'HomeController@freeGift');
});
Route::get('file-upload', 'AdminController@fileUpload');

Route::post('file-upload', 'AdminController@fileUploadPost')->name('fileUploadPost');
Route::get('/preroll/create', 'AdminController@preroll');


