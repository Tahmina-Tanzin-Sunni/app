<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function () {
    return view('users/users');
});
Route::get('groups', function () {
    return view('groups/groups');
});
Route::get('products', function () {
    return view('products/products');
});
Route::get('categories', function () {
    return view('categories/categories');
});