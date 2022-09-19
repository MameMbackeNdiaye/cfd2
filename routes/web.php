<?php

use App\Http\Controllers\Admins\AdminDashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;

use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/projets', 'App\Http\Controllers\ProjetController@index')->name('projets.index');    
Route::get('/projets/{id}', 'App\Http\Controllers\ProjetController@show')->name('projets.show');    
Route::get('/projets/{id}/addFinance', 'App\Http\Controllers\ProjetController@addFinance')->name('projets.addFinace');    
Route::get('/addProject', 'App\Http\Controllers\ProjetController@addProject')->name('projets.addProject');    
Route::get('/addProject/addProjectForm', 'App\Http\Controllers\ProjetController@addProjectForm')->name('projets.addProjectForm');    



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::get("/redirectAuthenticatedUsers", [App\Http\Controllers\Auth\RedirectAuthenticatedUsersController::class, "home"]);

    Route::group(['middleware' => 'checkRole:1'], function() {
        Route::inertia('/Admin/Dashboard', 'Admin/Dashboard')->name('adminDashboard');
    });
    Route::group(['middleware' => 'checkRole:0'], function() {
        Route::inertia('/Dashboard', 'Dashboard')->name('Dashboard');
    });
});

Route::group([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
], function (){
// Route a proteger
});


Route::prefix('admin')->middleware(['auth:sanctum','verified'])->name('admin.')->group
(function(){
    Route::get('dashboard',[App\Http\Controllers\Admins\AdminDashboardController::class,'index'])->name('dashboard');

    Route::prefix('roles')->name('roles.')->group(function(){
        Route::get('/',[App\Http\Controllers\Admins\RoleController::class,'index'])->name('index');
        Route::post('/store',[App\Http\Controllers\Admins\RoleController::class,'store'])->name('store');
        Route::patch('/edit/{id}',[App\Http\Controllers\Admins\RoleController::class,'update'])->name('update'); 
        //Route::post('/update',[App\Http\Controllers\Admins\GestionnaireController::class,'update'])->name('update');
        Route::delete('/delete/{id}',[App\Http\Controllers\Admins\RoleController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('gestionnaires')->name('gestionnaires.')->group(function(){
        Route::get('/',[App\Http\Controllers\Admins\GestionnaireController::class,'index'])->name('index');
        Route::get('/create',[App\Http\Controllers\Admins\GestionnaireController::class,'create'])->name('create');
        Route::post('/store',[App\Http\Controllers\Admins\GestionnaireController::class,'store'])->name('store');
        Route::put('/edit/{id}',[App\Http\Controllers\Admins\GestionnaireController::class,'update'])->name('update');
        //Route::delete('/delete/{id}',[App\Http\Controllers\Admins\RoleController::class, 'delete'])->name('delete');
    });


});



