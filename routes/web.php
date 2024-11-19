<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComputerRegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Route::group(['middleware' => 'auth'], function () {

	Route::get('computers', function () {
		return view('users.modal.com-reg');
	})->name('computer');

	Route::get('service-1', function () {
		return view('el-enjineer.service1');
	})->name('service-1');

	Route::get('service-2', function () {
		return view('el-enjineer.service2');
	})->name('service-2');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');
	
	Route::get('dashboard',[DashboardController::class, 'countUser'])->name('dashboard');

	// login logout controller
Route::get('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'destroy']);

	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);

	Route::get('/users', [UserController::class, 'showUsers'])->name('users');

		//create user controller 
	Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
	Route::post('/create-user', [UserController::class, 'store'])->name('store-user');

//update user controller 
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update-user');

//delete user controller
Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('destroy-user');

	//computer register controllers
	Route::get('computers', [ComputerRegController::class, 'showComs'])->name('createCom');
	Route::get('/computer-register', [ComputerRegController::class, 'create'])->name('comReg');
	Route::post('/computer-register', [ComputerRegController::class, 'store'])->name('store-com');

	//printer register controllers
	Route::get('printers', [ComputerRegController::class, 'showPrinters'])->name('showPrinters');
	Route::get('/printer-register', [ComputerRegController::class, 'createPrinter'])->name('printerReg');
	Route::post('/printer-register', [ComputerRegController::class, 'storePrinter'])->name('storePrinter');


});

Route::group(['middleware' => 'guest'], function () {

    //Route::get('/register', [RegisterController::class, 'create']);
    //Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/', function () {
	return view('auth.login');
});