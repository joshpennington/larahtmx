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
    return view('pages.home');
})->name('page-home');

Route::get('/about', function () {
    return view('pages.about');
})->name('page-about');

Route::get('/login', function () {
    return view('pages.login');
})->name('page-login');

Route::get('/users', function () {
    return view('pages.users');
})->name('page-users');


Route::get('/htmx/nav', function () {
    return view('layout.navigation');
})->name('htmx-nav');

Route::get('/htmx/users', function () {
    return view('users.table')
        ->with('users', collect([
            [
                'username' => 'TheRealBobLeBlah',
                'email' => 'bob@bobleblah.com'
            ]
        ]));
})->name('htmx-users');

Route::get('/htmx/users-add-row', function () {
    return view('users.table-add-row');
})->name('htmx-users-add-row');
