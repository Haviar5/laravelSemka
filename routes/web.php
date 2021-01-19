<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/checkEmail', [RegisterController::class, 'checkEmailAvailability'])->name('email_available.check');
Route::post('/checkName', [RegisterController::class, 'checkNameAvailability'])->name('name_available.check');


Route::group(['middleware' => ['auth']], function() {

    Route::resource('user' ,UserController::class);
    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('feedbackBlog/{feedback}/delete', [FeedbackController::class, 'destroy'])->name('feedbackBlog.delete');
    Route::get('feedbackBlog/{feedback}/edit', [FeedbackController::class, 'edit'])->name('feedbackBlog.edit');
    Route::get('feedbackBlog/viewMy', [FeedbackController::class, 'viewMy'])->name('feedbackBlog.viewMy');
    Route::resource('feedbackBlog' ,FeedbackController::class);
    Route::resource('aboutUs' ,InfoController::class);
    Route::resource('contact' ,ContactController::class);

});


