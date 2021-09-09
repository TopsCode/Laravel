<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//routing using function to load views

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tripti', function(){


//     return view('tripti');
// });

// Route::get('/',function(){

//     return view('hello_world');

// });

// //routing pass routing name

// Route::get('/about-us',function(){

//     return view('about_us');
// });

// //direct load views in routing
// Route::view('welcome','welcome_page');

// //load using parameters or pass ID
// Route::get('welcome/{id}',function($id){
//     echo "<h2 align='center'>Id printing is :$id</h2>";
// });

// //routing with simple controller

// Route::get('/home',"Feedback@index");
// Route::get('/showdata',"Feedback@show");
// Route::get('/showdata/{id}',function($id){
//     echo "<h2 align='center'>User data show on this id :$id</h2>";
// });
// Route::get('/editdata',"Feedback@edit");
// Route::get('/updatedata',"Feedback@update");
// Route::get('/storedata',"Feedback@store");
// Route::get('/deldata',"Feedback@destroy");

//routing load adata through anchor link

// Route::get('/',function(){
//     return view('welcome');
// });

// Route::get('/',function(){
//     return view('home');
// });

// Route::view("About","about_us");
// Route::view("Home","home");
// Route::view("World","hello_world");
// Route::view("Tripti","tripti");
// Route::view("Welcome","welcome");
// Route::view("Page","welcome_page");
//Route data load
// Route::get('/','about@Brijesh');


//simple design load using ruting

// Route::get('/','Home@index');
// Route::get('/contact_us','Contact@index');
// Route::get('/about_us','About@index');
// Route::get('/laravel_introduction','Laravelintro@index');


//material design load project using routing

// Route::get('/','RealController@index');
// Route::get('/login','RealController@login');
// Route::get('/register','RealController@register');
// Route::get('/','RealController@pricing');
// Route::get('/','RealController@fetaures');


//cafe routing start here

// Route::get('/','CafeHomeController@index');
// Route::get('/aboutus','CafeHomeController@aboutus');
// Route::get('/ourmenus','CafeHomeController@menus');
// Route::get('/ourchefs','CafeHomeController@chefs');
// Route::get('/contactus','CafeHomeController@contact');
//cafe admin routing load here
Route::get('/admin','CafeAdminController@index');
Route::get('/admin/admin-dashboard','CafeAdminController@dashboard');
//laravel default auth

// Auth::routes();
// Route::get('/', 'HomeController@index')->name('home');    
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/manageblogs', 'HomeController@show');

// Route::get('/addgallery', 'AddGalleryController@index');
// Route::get('/managegallery', 'AddGalleryController@show');


//our custome cruid operations

Route::get('/','HomeCruidApp@index');
// Route::post('/contact','ContactController@index');
//resource automatically default set all route methods
Route::resource('/contact','ContactController');
Route::resource('/register','RegisterController');
Route::get('/showdata','RegisterController@show');
Route::get('/read/{rid}','RegisterController@read');
Route::get('/deletedata/{rid}','RegisterController@destroy');
Route::get('/editdata/{rid}','RegisterController@edit');
Route::post('/updatedata/{rid}','RegisterController@update');

