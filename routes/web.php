<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    check_gate('manage-system');
    return redirect('super/dashboard');
})->name('dashboard');

//Route::group(['middleware' => ['auth','role:admin'], 'prefix' => 'admin', 'as' => 'admin.'],function (){
////    Route::group(['middleware' => 'role:admin'],function (){
//        Route::get('auth',function (){
//            if (\Illuminate\Support\Facades\Gate::denies('manage-system')){
//                abort(403);
//            }
//            return response(auth()->user());
//        });
////    });
//});
//Route::group(['middleware' => 'auth'],function (){
//    Route::group(['middleware' => 'role:users', 'prefix' => 'users', 'as' => 'users.'],function (){
//        Route::get('auth',function (){
////            if (\Illuminate\Support\Facades\Gate::denies('users')){
////                abort(403);
////            }
//            return response(auth()->user());
//        })->name('abdu');
//    });
//});
