<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CorpController;



use App\Http\Controllers\MyTestController;
  
Route::get('list', [MyTestController::class, 'dataTableLogic']);


Route::get('/coba', function(){
    return view('admin.home');
});



Route::get('/admin/corp',[CorpController::class, 'index'])->name('admin.corp.index');
Route::get('/admin/corp/create',[CorpController::class, 'create'])->name('admin.corp.create');
Route::post('/admin/corp/create',[CorpController::class, 'store'])->name('admin.corp.store');
Route::get('/admin/corp/{id}/edit',[CorpController::class, 'edit'])->name('admin.corp.edit');
Route::post('/admin/corp/{id}/update',[CorpController::class, 'update'])->name('admin.corp.update');
Route::get('/admin/corp/{id}/destroy',[CorpController::class, 'destroy'])->name('admin.corp.destroy');





