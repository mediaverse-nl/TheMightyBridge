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

Route::get('/env', function () {
    return \App\Models\User::all()->toJson();
});

Route::get('/', function () {
    return "<h1>test home</h1>
            <a href='/'>go to home page</a>
            <a href='/test'>go to test page</a>
            <a href='/test-4'>go to test page <b>4</b></a>
            ";
});


Route::get('/test', function () {
    return "<h1>test page</h1>
            <a href='/'>go to home page</a>
            <a href='/test'>go to test page</a>
            <a href='/test-4'>go to test page <b>4</b></a>
            ";
});

Route::get('/test-{id}', function ($id) {
    return "<h1>test page works id $id</h1>
            <a href='/'>go to home page</a>
            <a href='/test'>go to test page</a>
            <a href='/test-4'>go to test page <b>4</b></a>
            ";
});
