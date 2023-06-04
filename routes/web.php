<?php

use App\Http\Controllers\Account\AccountController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(
    [
        
    ],
    function ($route) {

        //account
        Route::group([
            'prefix' => 'account'
        ], function ($router) {
            $router->get('/', [AccountController::class, 'index'])->name("account.login");
            $router->post('/', [AccountController::class, 'register'])->name("register.login");
        });

    }
);
