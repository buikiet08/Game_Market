<?php

use App\Http\Controllers\Account\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(
    [],
    function ($route) {

        $route->get('/', [HomeController::class, 'index'])->name('home');


        //account
        Route::group([
            'prefix' => 'account'
        ], function ($router) {
            $router->get('/', [AccountController::class, 'index'])->name("account.login");
            $router->post('/register', [AccountController::class, 'register'])->name("register.login");
        });
    }
);
