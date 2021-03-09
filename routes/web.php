<?php

use App\Models\Day;
use App\Models\Doctor;
use App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DoctorsListController;

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

Auth::routes();
Route::get('/', [DoctorController::class, 'all'])->name('all');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/article', [ArticleController::class, 'showArticle'])->name('showArticle');
Route::get('/doctors', [DoctorController::class, 'doctorList', DoctorController::class, 'dateTime'])->name('doctorList');
Route::get('/doctors/{id}/profile', [DoctorController::class, 'doctorProfile'])->name('doctorProfile');
Route::get('/drlist', [DoctorController::class, 'dateTime'])->name('dateTime');

Route::get('doctor/{id}', function ($id) {
    $time = Doctor::findOrfail($id);
     foreach ($time->times as $item){
         echo "ساعت کاری".$item->hour. "<br><br>";
         echo "روز".$item->date. "<br><br>";
     }
});

// Route::get('/doctors/{id}/profile', [DoctorController::class, 'dateAndtime']);

// Route::get('post/{id}/role', function ($id) {
//     $user = User::find($id);
//     foreach ($user->roles as $role) {
//         return $role->name;
//     }
// });







// ==============================insert_image fetch_image
// Route::get('store_image', [DoctorsListController::class, 'all']);
// Route::post('store_image/insert_image', [DoctorsListController::class, 'insert_image']);
// Route::get('store_image/fetch_image/{id}', [DoctorsListController::class, 'fetch_image']);
// ==============================
