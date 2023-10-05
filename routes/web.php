<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;

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
    return view('main');
});

Route::get('/pallet-transfer', function () {
    return view('pallet-transfer');
});


// Transfer related routes
Route::post('/save-transfer', [TransferController::class, 'saveTransfer']);

