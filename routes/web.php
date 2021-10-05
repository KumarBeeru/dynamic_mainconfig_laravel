<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMTPController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
    //return view('welcome');
    return redirect("/smtp-config");
});

Route::get("/send-mail", [SMTPController::class, "index"])->name("send-form");
Route::post("/send-mail", [SMTPController::class, "send"])->name("send-mail");

Route::get("/smtp-config", [SMTPController::class, "create"])->name("smtp-form");
Route::post("/smtp-config", [SMTPController::class, "store"])->name("smtp-submit");
