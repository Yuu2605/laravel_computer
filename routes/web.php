<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;


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

    Route::prefix('admin')->group(function () {
        Route::get('/login', [AuthController::class,'login'])->name('auth.login');
        Route::post('/login', [AuthController::class,'submitLogin'])->name('auth.loginSubmit');
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
        // echo url('/resources/views/login.php');
        Route::post('/logout',[LogoutController::class,'logout']);
        Route::get('dang-ky', function () {
            $user = new \App\Models\User;
            $user->fullname ='dai';
            $user->role = -1;
            $user->email = 'dai@example.com';
            $user->password = bcrypt('123456789');
            $user->save();
            echo " create user success";
        });
        Route::get('/add-users',[UsersController::class,'create'])->name('user.form');
        Route::post('/add-users',[UsersController::class,'store'])->name('user.store');
        Route::get('/list-users',[UsersController::class,'index'])->name('user.list');
    });



// Route::get('/Dashboard', function () {
//     return "test";
// });