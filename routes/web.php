<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
Route::get('/' ,[AdminDashboardController::class , 'index'])->name('admin.home') ;

Route::prefix('market')->namespace('Market')->group(function(){

//Category

// Route::resource( 'category' ,[CategoryController::class]);

});

});
