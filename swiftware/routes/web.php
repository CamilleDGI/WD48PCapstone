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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/stockrooms', function () {

$stockrooms = [
    ['stockroom_number' => 'B_001','status' => 'Active','customer' => 'ABC Company'],
    ['stockroom_number' => 'B_002','status' => 'Open','customer' => ''],
    ['stockroom_number' => 'B_003','status' => 'Active','customer' => 'XYZ Company'],
    ['stockroom_number' => 'B_004','status' => 'Open','customer' => ''],
    ['stockroom_number' => 'B_005','status' => 'Under Maintenance','customer' => ''],
    ['stockroom_number' => 'B_006','status' => 'Open','customer' => '']
];

    return view('stockrooms', ['stockrooms' => $stockrooms]);
});