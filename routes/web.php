<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/translate', function () {
    return view(('translate'));
});
Route::post('/translate', function (Request $request) {
    $str='';
    $flag=false;
    $keyword = $request['keyword'];
    $translateWord = ['banana' => 'chuối', 'orange' => 'cam', 'strawberry' => 'dâu', 'apple' => 'táo'];
    foreach ($translateWord as $key => $value) {
        if ($keyword == $key) {
            $str=$value;
            $flag=true;
        }
    }
    if(!$flag){
        $str="Không tìm thấy";
    }
    return view('display',compact('str'));
});
