<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;

use App\Mail\SiteEmailSent;

use Illuminate\Http\Request;

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

Route::post('/sendmail', function (Request $request) {

    Mail::to('chalnicol@gmail.com')
        ->send(new SiteEmailSent($request));

    return redirect('/')->with ('success', 'Message sent successfully. Hope to get back you the soonest');

});
