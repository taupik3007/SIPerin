<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CorpController;
use App\Http\Controllers\admin\ManageStudentController;
use App\Http\Controllers\admin\ManageMajorController;
use App\Http\Controllers\admin\ManageClassController;




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

Route::get('/admin/user',[ManageStudentController::class, 'index'])->name('admin.user.index');
Route::get('/admin/user/create',[ManageStudentController::class, 'create'])->name('admin.user.create');
Route::post('/admin/user/create',[ManageStudentController::class, 'store'])->name('admin.user.store');
Route::get('/admin/user/{id}/edit',[ManageStudentController::class, 'edit'])->name('admin.user.edit');
Route::post('/admin/user/{id}/update',[ManageStudentController::class, 'update'])->name('admin.user.update');
Route::get('/admin/user/{id}/destroy',[ManageStudentController::class, 'destroy'])->name('admin.user.destroy');


Route::get('/admin/major',[ManageMajorController::class, 'index'])->name('admin.major.index');
Route::get('/admin/major/create',[ManageMajorController::class, 'create'])->name('admin.major.create');
Route::post('/admin/major/create',[ManageMajorController::class, 'store'])->name('admin.major.store');
Route::get('/admin/major/{id}/edit',[ManageMajorController::class, 'edit'])->name('admin.major.edit');
Route::post('/admin/major/{id}/update',[ManageMajorController::class, 'update'])->name('admin.major.update');
Route::delete('/admin/major/{id}/destroy',[ManageMajorController::class, 'destroy'])->name('admin.major.destroy');


Route::get('/admin/class',[ManageClassController::class, 'index'])->name('admin.class.index');
Route::get('/admin/class/create',[ManageClassController::class, 'create'])->name('admin.class.create');
Route::post('/admin/class/create',[ManageClassController::class, 'store'])->name('admin.class.store');
Route::get('/admin/class/{id}/edit',[ManageClassrController::class, 'edit'])->name('admin.class.edit');
Route::post('/admin/class/{id}/update',[ManageClassController::class, 'update'])->name('admin.class.update');
Route::delete('/admin/class/{id}/destroy',[ManageClassController::class, 'destroy'])->name('admin.class.destroy');



