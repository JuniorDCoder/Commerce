<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, '__invoke']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::get('/success', function(){
    return '<h1>Successfully Uploaded</h1>';
})->name('success');
Route::get('/download', [ImageController::class, 'download'])->name('download');

Route::post('/upload_file', [ImageController::class, 'handleImage'])->name('upload-file');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');
Route::post('/register',[RegistrationController::class, 'handleRegistration'])->name('register.submit');
