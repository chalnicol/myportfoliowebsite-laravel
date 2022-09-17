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

    // return $request;
    $blackListed = array( 'crytotrume' );

    if ( in_array( strtolower($request->name), $blackListed )) {

        // return redirect('/')->with ('error', 'You are no longer allowed to make emails to this site.');
        
        return redirect('/')->with ('success', 'Thank you for your message. Hope to get back to you the soonest.');
    }


    Mail::to('chalnicol@gmail.com')
        ->send(new SiteEmailSent($request));

    return redirect('/')->with ('success', 'Thank you for your message. Hope to get back to you the soonest.');

});
