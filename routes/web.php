<?php

use App\Http\Controllers\categorycontroller;
use App\Models\categoriesmodel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\ActualitésController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\produitcontroller;
use App\Http\Controllers\partenairecontroller;
use App\Http\Controllers\cataloguecontroller;
use App\Http\Controllers\home1controller;
use App\Http\Controllers\aboutuscontroller;
use App\Http\Controllers\actualitescontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\contact1controller;
use App\Http\Controllers\contactformcontroller;
use App\Http\Controllers\home11controller;
use App\Http\Controllers\coordonneescontroller;
use App\Http\Controllers\produit1controller;
use App\Http\Controllers\commentairecontroller;
use App\Http\Controllers\searchcontroller;
use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\catalogue1controller;

use App\Http\Controllers\home1block2controller;

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


route::group(['middleware' => 'admin'], function(){
    route::get('admin/new/dashboard',function (){
        return view('admin.new.dashboard');
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


route::group(['middleware' => ['role:Super-admin|admin']], function(){
route::get('/tables/actualités',[ActualitésController::class,'list'])->name('list');
route::get('/fiche/fiche-actualités',[ActualitésController::class,'add']);
route::post('/fiche/fiche-actualités',[ActualitésController::class,'insert'])->name('insert');
route::get('/fiche/fiche-actualités-edit/{id}',[ActualitésController::class,'edit'])->name('edit');
route::put('/fiche/fiche-actualités-update/{id}',[ActualitésController::class,'update'])->name('update');
route::get('/fiche/fiche-actualités/{id}',[ActualitésController::class,'destroy'])->name('destroy');


route::get('/tables/categories',[categorycontroller::class,'list'])->name('list');
route::get('/fiche/fiche-categories',[categorycontroller::class,'add']);
route::post('/fiche/fiche-categories',[categorycontroller::class,'insert1'])->name('insert1');
route::get('/fiche/fiche-categories-edit/{id}',[categorycontroller::class,'edit'])->name('edit');
route::put('/fiche/fiche-categories-update/{id}',[categorycontroller::class,'update'])->name('update');
route::get('/fiche/fiche-categories/{id}',[categorycontroller::class,'destroy'])->name('destroy');



route::get('/tables/produit',[produitcontroller::class,'list'])->name('list');
route::get('/fiche/fiche-produit',[produitcontroller::class,'add']);
route::post('/fiche/fiche-produit',[produitcontroller::class,'insert3'])->name('insert3');
route::get('/fiche/fiche-produit-edit/{id}',[produitcontroller::class,'edit'])->name('edit');
route::put('/fiche/fiche-produit-update/{id}',[produitcontroller::class,'update'])->name('update');
route::get('/fiche/fiche-produit/{id}',[produitcontroller::class,'destroy'])->name('destroy');








route::get('/tables/catalogue',[cataloguecontroller::class,'list'])->name('list');
route::get('/fiche/fiche-catalogue',[cataloguecontroller::class,'add']);
route::post('/fiche/fiche-catalogue',[cataloguecontroller::class,'insert5'])->name('insert5');
route::get('/fiche/fiche-catalogue-edit/{id}',[cataloguecontroller::class,'edit'])->name('edit');
route::put('/fiche/fiche-catalogue-update/{id}',[cataloguecontroller::class,'update'])->name('update');
route::get('/fiche/fiche-catalogue/{id}',[cataloguecontroller::class,'destroy'])->name('destroy');


Route::get('/new/aboutus1', [Home1Controller::class, 'listHome'])->name('listHome');
Route::get('/new/aboutus/block1', [Home1Controller::class, 'listhomeblock1'])->name('listhomeblock1');
Route::get('/new/aboutus/block2', [Home1Controller::class, 'listhomeblock2'])->name('listhomeblock2');
Route::get('/new/aboutus/block3', [Home1Controller::class, 'listhomeblock3'])->name('listhomeblock3');
Route::get('/new/aboutus/block4', [Home1Controller::class, 'listhomeblock4'])->name('listhomeblock4');
Route::get('/new/aboutus/block5', [Home1Controller::class, 'listhomeblock5'])->name('listhomeblock5');
route::get('/fiche/aboutusfiche/fiche-homeblock1',[home1controller::class,'add']);
route::post('/fiche/aboutusfiche/fiche-homeblock1',[home1controller::class,'inserthomeblock1'])->name('inserthomeblock1');
route::get('/fiche/aboutusfiche/fiche-homeblock1-edit/{id}',[home1controller::class,'edithomeblock1'])->name('edithomeblock1');
route::put('/fiche/aboutusfiche/fiche-homeblock1-update/{id}',[home1controller::class,'updatehomeblock1'])->name('updatehomeblock1');
route::get('/fiche/aboutusfiche/fiche-homeblock1/{id}',[home1controller::class,'destroyhomeblock1'])->name('destroyhomeblock1');




route::get('/fiche/aboutusfiche/fiche-homeblock2',[home1controller::class,'add1']);
route::post('/fiche/aboutusfiche/fiche-homeblock2',[home1controller::class,'inserthomeblock2'])->name('inserthomeblock2');
route::get('/fiche/aboutusfiche/fiche-homeblock2-edit/{id}',[home1controller::class,'edithomeblock2'])->name('edithomeblock2');
route::put('/fiche/aboutusfiche/fiche-homeblock2-update/{id}',[home1controller::class,'updatehomeblock2'])->name('updatehomeblock2');
route::get('/fiche/aboutusfiche/fiche-homeblock2/{id}',[home1controller::class,'destroyhomeblock2'])->name('destroyhomeblock2');





route::get('/fiche/aboutusfiche/fiche-homeblock3',[home1controller::class,'add2']);
route::post('/fiche/aboutusfiche/fiche-homeblock3',[home1controller::class,'inserthomeblock3'])->name('inserthomeblock3');
route::get('/fiche/aboutusfiche/fiche-homeblock3-edit/{id}',[home1controller::class,'edithomeblock3'])->name('edithomeblock3');
route::put('/fiche/aboutusfiche/fiche-homeblock3-update/{id}',[home1controller::class,'updatehomeblock3'])->name('updatehomeblock3');
route::get('/fiche/aboutusfiche/fiche-homeblock3/{id}',[home1controller::class,'destroyhomeblock3'])->name('destroyhomeblock3');



route::get('/fiche/aboutusfiche/fiche-homeblock4',[home1controller::class,'add3']);
route::post('/fiche/aboutusfiche/fiche-homeblock4',[home1controller::class,'inserthomeblock4'])->name('inserthomeblock4');
route::get('/fiche/aboutusfiche/fiche-homeblock4-edit/{id}',[home1controller::class,'edithomeblock4'])->name('edithomeblock4');
route::put('/fiche/aboutusfiche/fiche-homeblock4-update/{id}',[home1controller::class,'updatehomeblock4'])->name('updatehomeblock4');
route::get('/fiche/aboutusfiche/fiche-homeblock4/{id}',[home1controller::class,'destroyhomeblock4'])->name('destroyhomeblock4');





route::get('/fiche/aboutusfiche/fiche-homeblock5',[home1controller::class,'add4']);
route::post('/fiche/aboutusfiche/fiche-homeblock5',[home1controller::class,'inserthomeblock5'])->name('inserthomeblock5');
route::get('/fiche/aboutusfiche/fiche-homeblock5-edit/{id}',[home1controller::class,'edithomeblock5'])->name('edithomeblock5');
route::put('/fiche/aboutusfiche/fiche-homeblock5-update/{id}',[home1controller::class,'updatehomeblock5'])->name('updatehomeblock5');
route::get('/fiche/aboutusfiche/fiche-homeblock5/{id}',[home1controller::class,'destroyhomeblock5'])->name('destroyhomeblock5');
route::post('/email',[home1controller::class,'insertemail'])->name('insertemail');



Route::get('/new/contact1', [contact1Controller::class, 'listcontact'])->name('listcontact');
Route::get('/new/contact/block1', [contact1Controller::class, 'listcontactblock1'])->name('listcontactblock1');
Route::get('/new/contact/block2', [contact1Controller::class, 'listcontactblock2'])->name('listcontactblock2');

route::get('/fiche/contactfiche/fiche-contactblock1',[contact1controller::class,'add']);
route::post('/fiche/contactfiche/fiche-contactblock1',[contact1controller::class,'insertcontactblock1'])->name('insertcontactblock1');
route::get('/fiche/contactfiche/fiche-contactblock1-edit/{id}',[contact1controller::class,'editcontactblock1'])->name('editcontactblock1');
route::put('/fiche/contactfiche/fiche-contactblock1-update/{id}',[contact1controller::class,'updatecontactblock1'])->name('updatecontactblock1');
route::get('/fiche/contactfiche/fiche-contactblock1/{id}',[contact1controller::class,'destroycontactblock1'])->name('destroycontactblock1');




route::get('/fiche/contactfiche/fiche-contactblock2',[contact1controller::class,'add1']);
route::post('/fiche/contactfiche/fiche-contactblock2',[contact1controller::class,'insertcontactblock2'])->name('insertcontactblock2');
route::get('/fiche/contactfiche/fiche-contactblock2-edit/{id}',[contact1controller::class,'editcontactblock2'])->name('editcontactblock2');
route::put('/fiche/contactfiche/fiche-contactblock2-update/{id}',[contact1controller::class,'updatecontactblock2'])->name('updatecontactblock2');
route::get('/fiche/contactfiche/fiche-contactblock2/{id}',[contact1controller::class,'destroycontactblock2'])->name('destroycontactblock2');
route::get('/contact',[contactformcontroller::class,'show'])->name('contact.show');
route::post('/contact',[contactformcontroller::class,'send'])->name('contact.send');





Route::get('/new/home1', [Home11Controller::class, 'listHome1'])->name('listHome1');
Route::get('/new/home/block1', [Home11Controller::class, 'homelistblock1'])->name('homelistblock1');
Route::get('/new/home/block2', [Home11Controller::class, 'homelistblock2'])->name('homelistblock2');
Route::get('/new/home/block3', [Home11Controller::class, 'homelistblock3'])->name('homelistblock3');
Route::get('/new/home/block4', [Home11Controller::class, 'homelistblock4'])->name('homelistblock4');
Route::get('/new/home/block5', [Home11Controller::class, 'homelistblock5'])->name('homelistblock5');
Route::get('/new/home/block6', [Home11Controller::class, 'homelistblock6'])->name('homelistblock6');
Route::get('/new/home/block7', [Home11Controller::class, 'homelistblock7'])->name('homelistblock7');
route::get('/fiche/homefiche/fiche-home1block1',[home11controller::class,'add11']);
route::post('/fiche/homefiche/fiche-home1block1',[home11controller::class,'inserthome1block1'])->name('inserthome1block1');
route::get('/fiche/homefiche/fiche-home1block1-edit/{id}',[home11controller::class,'edithome1block1'])->name('edithome1block1');
route::put('/fiche/homefiche/fiche-home1block1-update/{id}',[home11controller::class,'updatehome1block1'])->name('updatehome1block1');
route::get('/fiche/homefiche/fiche-home1block1/{id}',[home11controller::class,'destroyhome1block1'])->name('destroyhome1block1');



route::get('/fiche/homefiche/fiche-home1block2',[home11controller::class,'add12']);
route::post('/fiche/homefiche/fiche-home1block2',[home11controller::class,'inserthome1block2'])->name('inserthome1block2');
route::get('/fiche/homefiche/fiche-home1block2-edit/{id}',[home11controller::class,'edithome1block2'])->name('edithome1block2');
route::put('/fiche/homefiche/fiche-home1block2-update/{id}',[home11controller::class,'updatehome1block2'])->name('updatehome1block2');
route::get('/fiche/homefiche/fiche-home1block2/{id}',[home11controller::class,'destroyhome1block2'])->name('destroyhome1block2');





route::get('/fiche/homefiche/fiche-home1block3',[home11controller::class,'add13']);
route::post('/fiche/homefiche/fiche-home1block3',[home11controller::class,'inserthome1block3'])->name('inserthome1block3');
route::get('/fiche/homefiche/fiche-home1block3-edit/{id}',[home11controller::class,'edithome1block3'])->name('edithome1block3');
route::put('/fiche/homefiche/fiche-home1block3-update/{id}',[home11controller::class,'updatehome1block3'])->name('updatehome1block3');
route::get('/fiche/homefiche/fiche-home1block3/{id}',[home11controller::class,'destroyhome1block3'])->name('destroyhome1block3');




route::get('/fiche/homefiche/fiche-home1block4',[home11controller::class,'add14']);
route::post('/fiche/homefiche/fiche-home1block4',[home11controller::class,'inserthome1block4'])->name('inserthome1block4');
route::get('/fiche/homefiche/fiche-home1block4-edit/{id}',[home11controller::class,'edithome1block4'])->name('edithome1block4');
route::put('/fiche/homefiche/fiche-home1block4-update/{id}',[home11controller::class,'updatehome1block4'])->name('updatehome1block4');
route::get('/fiche/homefiche/fiche-home1block4/{id}',[home11controller::class,'destroyhome1block4'])->name('destroyhome1block4');




route::get('/fiche/homefiche/fiche-home1block5',[home11controller::class,'add15']);
route::post('/fiche/homefiche/fiche-home1block5',[home11controller::class,'inserthome1block5'])->name('inserthome1block5');
route::get('/fiche/homefiche/fiche-home1block5-edit/{id}',[home11controller::class,'edithome1block5'])->name('edithome1block5');
route::put('/fiche/homefiche/fiche-home1block5-update/{id}',[home11controller::class,'updatehome1block5'])->name('updatehome1block5');
route::get('/fiche/homefiche/fiche-home1block5/{id}',[home11controller::class,'destroyhome1block5'])->name('destroyhome1block5');




route::get('/fiche/homefiche/fiche-home1block6',[home11controller::class,'add16']);
route::post('/fiche/homefiche/fiche-home1block6',[home11controller::class,'inserthome1block6'])->name('inserthome1block6');
route::get('/fiche/homefiche/fiche-home1block6-edit/{id}',[home11controller::class,'edithome1block6'])->name('edithome1block6');
route::put('/fiche/homefiche/fiche-home1block6-update/{id}',[home11controller::class,'updatehome1block6'])->name('updatehome1block6');
route::get('/fiche/homefiche/fiche-home1block6/{id}',[home11controller::class,'destroyhome1block6'])->name('destroyhome1block6');


route::get('/fiche/homefiche/fiche-home1block7',[home11controller::class,'add17']);
route::post('/fiche/homefiche/fiche-home1block7',[home11controller::class,'inserthome1block7'])->name('inserthome1block7');
route::get('/fiche/homefiche/fiche-home1block7-edit/{id}',[home11controller::class,'edithome1block7'])->name('edithome1block7');
route::put('/fiche/homefiche/fiche-home1block7-update/{id}',[home11controller::class,'updatehome1block7'])->name('updatehome1block7');
route::get('/fiche/homefiche/fiche-home1block7/{id}',[home11controller::class,'destroyhome1block7'])->name('destroyhome1block7');





Route::get('/new/coordonnees', [coordonneesController::class, 'listcoordonnees'])->name('listcoordonnees');
route::get('/fiche/fiche-coordonnees',[coordonneesController::class,'add']);
route::post('/fiche/fiche-coordonnees',[coordonneesController::class,'insertcoordonnees'])->name('insertcoordonnees');
route::get('/fiche/fiche-coordonnees-edit/{id}',[coordonneesController::class,'editcoordonnees'])->name('editcoordonnees');
route::put('/fiche/fiche-coordonnees-update/{id}',[coordonneesController::class,'updatecoordonnees'])->name('updatecoordonnees');
route::get('/fiche/fiche-coordonnees/{id}',[coordonneesController::class,'destroycoordonnees'])->name('destroycoordonnees');









route::resource('permissions',App\Http\Controllers\PermissionController::class);
route::get('permissions/{permissionid}/delete',[App\Http\Controllers\PermissionController::class, 'destroy']);


route::resource('roles',App\Http\Controllers\RoleController::class);
route::get('roles/{roleid}/delete',[App\Http\Controllers\RoleController::class, 'destroy']);
route::get('roles/{roleid}/give-permission',[App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
route::put('roles/{roleid}/give-permission',[App\Http\Controllers\RoleController::class, 'givePermissionToRole']);


route::resource('users',App\Http\Controllers\UserController::class);
route::get('users/{userid}/delete', [App\Http\Controllers\UserController::class, "destroy"] );



route::get('/',[homecontroller::class,'home'])->name('home'); 
route::get('/projects/{slug}',[homecontroller::class,'projects'])->name('projects');
route::get('/aboutus',[aboutuscontroller::class,'aboutus'])->name('aboutus');
route::get('/contact',[contactcontroller::class,'contact'])->name('contact');
Route::get('/produit/{slug}', [produit1controller::class, 'show'])->name('produit');
route::get('/actualités',[actualitescontroller::class,'actualités'])->name('actualités');
route::get('/actualités/detailactualités/{slug}',[actualitescontroller::class,'show'])->name('actualités');
route::get('/Quotationrequest',[commentairecontroller::class,'show1'])->name('commentaire.show1');
route::post('/Quotationrequest',[commentairecontroller::class,'send1'])->name('commentaire.send1');
Route::get('/search', [searchcontroller::class, 'search'])->name('search');
Route::get('/categories/{slug}', [categoriescontroller::class, 'show'])->name('categories');
route::get('/catalogue',[catalogue1controller::class,'catalogue'])->name('catalogue');


});