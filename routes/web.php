<?php


use App\Jobs\EmailRemJob;
use App\Mail\SendEmailMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/sendemail',function (){
   $job=(new EmailRemJob())->delay(\Illuminate\Support\Carbon::now()->addSecond(5));
    dispatch($job);
   // Mail::send(new SendEmailMailable());
    return "Email Send Properly";
});


