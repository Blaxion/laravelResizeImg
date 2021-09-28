<?php


use App\Http\Controllers\PictureController;
use App\Models\Picture;
use Illuminate\Support\Facades\Route;

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
    $pictures = Picture::all();
    return view('welcome',compact('pictures'));
})->name('welcome');


Route::resource('picture', PictureController::class);
Route::post('/resize-file', [PictureController::class, 'resizeImage'])->name('resizeImage');