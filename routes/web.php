<?php

use Illuminate\Support\Facades\Route;

use App\Notifications\EmailNotification;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
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

Route::get('/send-notification', function () {
	$users = User::all();
	foreach ($users as $key => $value) {
		//$user->notify(new EmailNotification());	
		Notification::send($value, new EmailNotification());
	}
	return redirect()->back();
    
});


Auth::routes();
//rakib new line
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
