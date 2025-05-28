<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register1', [UserController::class, 'register']); //in postman type post method and http://localhost:8000/api/register1
Route::post('login', [UserController::class, 'login']);
Route::post('products',[productController::class, 'addProduct']); 
Route::get('list', [productController::class,'list']) ;














// hamadema hodama widiayata sidu wenwa wishwamathawata sthuthinwantha weewa. ad interview ekn raveeshat pass wenn puluwn weewa. pass wela lagadima wdt enn puluuwn unat wishwa mathawata
// sthuthi wantha weewa. hmadema hodama widiyt sidu wenawa. mt sathutin me intern kalaye wada karala danuma gdk wadi karagena sthutin ynn puluwn unata wishwamathawani obta sthuthi wantha wewa.