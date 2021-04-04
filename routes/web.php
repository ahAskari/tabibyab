<?php

use App\Models\Day;
use App\Models\Role;
use App\Models\Doctor;
use App\Http\Controllers;
use App\Http\Controllers\AppointmentController;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DoctorsListController;
use App\Http\Controllers\UserProfileController;
use App\Http\Middleware\RoleMiddleware;
use App\Services\Permission\Traits\HasPermissions;
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


Route::get('/', [DoctorController::class, 'all'])->name('all');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/article', [ArticleController::class, 'showArticles'])->name('showArticles');
Route::get('article/content/{id}', [ArticleController::class, 'article'])->name('article');
Route::get('/doctors', [DoctorController::class, 'doctorList'])->name('doctorList');
Route::get('/allDoctors', [DoctorController::class, 'allDoctor'])->name('allDoctor');
Route::get('/doctors/{id}/profile', [DoctorController::class, 'doctorProfile'])->name('doctorProfile');
Route::get('/drlist', [DoctorController::class, 'dateTime'])->name('dateTime');


// Route::get('/registerss', function () {
//     return view('auth.doctor_register');
// })->name('doctor_register');

// Route::get('/registers', [RegisterController::class, 'assign']);


Route::group(['prefix' => 'panel', 'middleware' => 'role:admin'], function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{role_id}/edit', [RoleController::class, 'edit'])->name(
        'roles.edit'
    );
    Route::post('roles/{role_id}/edit', [RoleController::class, 'update'])->name('roles.update');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/user', [UserProfileController::class, 'userProfile'])->name('user.profile');
    // Route::post('/user', [UserProfileController::class, 'userProfile'])->name('user.profile');
    Route::get('/doctor', [UserProfileController::class, 'doctorProfile'])->name('doctor.profile');
    Route::post('/doctor', [UserProfileController::class, 'EditDoctorProfile'])->name('doctor.update');
});
Route::post('/doctor', [UserProfileController::class, 'select_date_time'])->name('doctor.newTime');  
Route::post('/reserve', [AppointmentController::class, 'reserve'])->middleware('auth')->name('reserve');
Route::post('/addCommetnt',[CommentController::class, 'insert'])->middleware('auth')->name('add-comment');

// Route::prefix('panel')->middleware('role')->group(function () {
//     Route::get('users', [UserController::class, 'index'])->name('users.index');
//     Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//     Route::post('users/{user}/update', [UserController::class, 'update'])->name('users.update');
//     Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
//     Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
//     Route::get('roles/{role_id}/edit', [RoleController::class, 'edit'])->name(
//         'roles.edit'
//     );
//     Route::post('roles/{role_id}/edit', [RoleController::class, 'update'])->name('roles.update');
// });




Auth::routes();













// Route::get('/permission', function () {
//     return view('permission');

    // =============
    // Role::find(1)->givePermissionsTo('delete user');
    // auth()->user()->giveRolesTo('admin');
    // dd(auth()->user()->can('delete user'));
    // =============
    
    // dd(auth()->user()->hasRole('admin'));
    // auth()->user()->refreshRoles('admin','doctor');
    // auth()->user()->withdrawRoles('doctor');
    // auth()->user()->giveRolesTo('admin', 'doctor');
    // auth()->user()->givePermissionsTo(['add user', 'delete user', 'delete post']); // permisson assign

    // auth()->user()->withdrawPermissions('delete user'); //remove permissions
    // auth()->user()->refreshPermission(); // remove all permission
    // auth()->user()->refreshPermission('delete user', 'add user');  // add this permission to user and remove other 
    // dd(auth()->user()->hasPermission('delete user'));
    // dd(auth()->user()->can('delete user'));
// });









// ==============================insert_image fetch_image
// Route::get('store_image', [DoctorsListController::class, 'all']);
// Route::post('store_image/insert_image', [DoctorsListController::class, 'insert_image']);
// Route::get('store_image/fetch_image/{id}', [DoctorsListController::class, 'fetch_image']);
// ============================== 
