<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\ActualitésController;
use App\Http\Controllers\categorycontroller;

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
    return view('welcome');
});
route::group(['middleware' => 'admin'], function(){
    route::get('admin/dashboard',function (){
        return view('admin.dashboard');
    });
    route::get('/tables/datatable',function (){
        return view('admin.tables.datatable');
    });
    route::get('/fiche/fiche-actualités',function (){
        return view('admin.fiche.fiche-actualités');
    });



});


route::get('/auth/login',[authcontroller::class,'login_admin']);
route::post('/auth/login',[authcontroller::class,'auth_login_admin'])->name('login');
route::get('/auth/login',[authcontroller::class,'logout_admin'])->name('logout');

route::group(['middleware' => ['role:Super-admin|Admin|Staff']], function() {

route::get('/tables/actualités',[ActualitésController::class,'list'])->name('list');
route::get('/fiche/fiche-actualités',[ActualitésController::class,'add']);
route::post('/fiche/fiche-actualités',[ActualitésController::class,'insert'])->name('insert');
route::get('/fiche/fiche-actualités-edit/{id}',[ActualitésController::class,'edit'])->name('edit');
route::put('/fiche/fiche-actualités-update/{id}',[ActualitésController::class,'update'])->name('update');
route::get('/fiche/fiche-actualités/{id}',[ActualitésController::class,'destroy'])->name('destroy');

route::get('/tables/categories',[categorycontroller::class,'list'])->name('list');
route::get('/fiche/fiche-categories',[categorycontroller::class,'add']);
route::post('/fiche/fiche-categories',[categorycontroller::class,'insert'])->name('insert');
route::get('/fiche/fiche-categories-edit/{id}',[categorycontroller::class,'edit'])->name('edit');
route::put('/fiche/fiche-categories-update/{id}',[categorycontroller::class,'update'])->name('update');
route::get('/fiche/fiche-categories/{id}',[categorycontroller::class,'destroy'])->name('destroy');



route::resource('permissions',App\Http\Controllers\PermissionController::class);
route::get('permissions/{permissionid}/delete',[App\Http\Controllers\PermissionController::class, 'destroy']);


route::resource('roles',App\Http\Controllers\RoleController::class);
route::get('roles/{roleid}/delete',[App\Http\Controllers\RoleController::class, 'destroy']);
route::get('roles/{roleid}/give-permission',[App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
route::put('roles/{roleid}/give-permission',[App\Http\Controllers\RoleController::class, 'givePermissionToRole']);


route::resource('users',App\Http\Controllers\UserController::class);
route::get('users/{userid}/delete', [App\Http\Controllers\UserController::class, "destroy"] );


});