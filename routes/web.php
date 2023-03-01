<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\SubcategoriesController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\DivisionsController;
use App\Http\Controllers\admin\DistrictsController;
use App\Http\Controllers\admin\WebsitesettingController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\LogoutController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\AdvertisementController;
use App\Http\Controllers\admin\ProductsController;


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


// Users

Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/products', [UserController::class, 'products']);
Route::get('/support', [UserController::class, 'support']);
Route::get('/careers', [UserController::class, 'careers']);
Route::get('/techoptimum', [UserController::class, 'techoptimum']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/productdetails', [UserController::class, 'productdetails']);


// Admin

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/adminlogout', [LogoutController::class,'logout']);


// Pages
 
Route::get('managepage', [PageController::class, 'index']);
Route::get('addpages', [PageController::class, 'create']);
Route::post('insertpages', [PageController::class, 'insert']);
Route::get('deletepage/{id}', [PageController::class, 'delete']);
Route::get('editpage/{id}', [PageController::class, 'edit']);
Route::post('updatepages/{id}', [PageController::class, 'update']);


// Website Settings

Route::get('addsettings', [WebsitesettingController::class, 'index']);
Route::post('updatesettings/{id}', [WebsitesettingController::class, 'update']);


// Profile

Route::get('profile/{id}', [ProfileController::class, 'index']);
Route::post('updateprofile/{id}', [ProfileController::class, 'update']);



// Categories

Route::get('managecategories', [CategoriesController::class, 'index']);
Route::get('addcategories', [CategoriesController::class, 'create']);
Route::post('insertcategories', [CategoriesController::class, 'insert']);
Route::get('deletecategories/{id}', [CategoriesController::class, 'delete']);
Route::get('editcategories/{id}', [CategoriesController::class, 'edit']);
Route::post('updatecategories/{id}', [CategoriesController::class, 'update']);



// Sub Categories

Route::get('managesubcategories', [SubcategoriesController::class, 'index']);
Route::get('addsubcategories', [SubcategoriesController::class, 'create']);
Route::post('insertsubcategories', [SubcategoriesController::class, 'insert']);
Route::get('deletesubcategories/{id}', [SubcategoriesController::class, 'delete']);
Route::get('editsubcategories/{id}', [SubcategoriesController::class, 'edit']);
Route::post('updatesubcategories/{id}', [SubcategoriesController::class, 'update']);




// Products

Route::get('manageproducts', [ProductsController::class, 'index']);
Route::get('addproducts', [ProductsController::class, 'create']);
Route::post('insertproducts', [ProductsController::class, 'insert']);
Route::get('deleteproducts/{id}', [ProductsController::class, 'delete']);
Route::get('editproducts/{id}', [ProductsController::class, 'edit']);
Route::post('updateproducts/{id}', [ProductsController::class, 'update']);

// Ajax

Route::get('getsubcategory/{id}', [ProductsController::class, 'getsubcat']);