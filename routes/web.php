<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/aa/a1',function (){
    return view('aa.a1');
});

Route::get('/aa/a2',function (){
    return view('aa.a2');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('bb/b1',function (){
   return view('bb.b1');
});

Route::get('bb/b2',function (){
    return view('bb.b2');
});


Route::get('dd/d1',function (){
    return view('bb.b1');
});

Route::get('dd/d2',function (){
    return view('bb.b2');
});


Route::get('cc/c1',function (){
    return view('cc/c1');
});

Route::get('cc/c2',function (){
    return view('cc/c2');
});

