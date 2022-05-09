<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\NameController;
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

Route::get('/', function () {

    $helloWorld = "Hello World  !";
    return view('pages.helloworld',compact("helloWorld"));
});


route::get('/test',[testController::class,'test']);
route::get('/testController/{id}',[testController::class, 'showById']);

//view with blade

Route::get('/home',function(){

return view('pages.home');

});

Route::get('/about',function(){

    return view('pages.about');
});

Route::get('/contact',function(){


    return view('pages.contact');

});

route::get('/person',[NameController::class,'index']);