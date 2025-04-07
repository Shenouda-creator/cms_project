<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
   
// Route::group(
//     ['prefix' => LaravelLocalization::setLocale()],
//     function () {


//     }
// );
Route::prefix('dashboard')->as('dashboard.')->group(function(){
Route::get('/home',HomeController::class)->name('home');
Route::get('/permissions',[PermissionController::class, 'index'])->name('permissions.index');
Route::get('/roles',[RoleController::class, 'index'])->name('roles.index');
});
