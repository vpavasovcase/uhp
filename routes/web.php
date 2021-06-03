<?php

use App\Models\Visit;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function (Request $request) {

    session(['ip' => $request->ip()]);
    session(['loggedin' => time()]);



    return view('home');
});


Route::get('admin', function () {

    $visits = Visit::all();


    $grouped = $visits->groupBy('ip');

    return view('admin', ['visitors' => $grouped]);
});


Route::get('ajax-leave', function (Request $request) {



    $visit = new Visit();
    $visit->ip = session('ip');
    $visit->login = session('loggedin');
    $visit->logout = time();
    $visit->user_agent = $request->header('User-Agent');
    $visit->save();

    Session::flush();




    return 1;
});
