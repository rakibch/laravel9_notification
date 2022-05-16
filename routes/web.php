<?php

use Illuminate\Support\Facades\Route;

use App\Notifications\EmailNotification;
use App\Models\User;
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
	$user = User::find(1);
    $user->notify(new EmailNotification());
});


Auth::routes();
//rakib new line
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
