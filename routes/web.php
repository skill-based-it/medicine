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
use App\Http\Controllers\admin\blogcontroller;
use App\Http\Controllers\admin\TechoptimumController;
use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\CustomerMessage;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\CarrerController;


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
Route::get('/productdetails/{product_code}/{id}', [UserController::class, 'productdetails']);
Route::get('/pages/{slug}/{id}', [UserController::class, 'pages']);
Route::get('/categorey_product/{cat_id}/{sub_catid}', [UserController::class, 'categorey_product']);
Route::get('/blogdetails/{id}', [UserController::class, 'blogdetails']);
Route::get('/categoryprod/{id}', [UserController::class, 'categoryprod']);
Route::post('/messageSubmit', [UserController::class, 'messageSubmit']);


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

Route::get('addcontact', [WebsitesettingController::class, 'addcontact']);
Route::post('updatecontact/{id}', [WebsitesettingController::class, 'updatecontact']);


Route::get('addservices', [WebsitesettingController::class, 'addservices']);
Route::post('updateservices/{id}', [WebsitesettingController::class, 'updateservices']);





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


// blogs


Route::get('manageblogs', [blogcontroller::class, 'index']);
Route::get('addblogs', [blogcontroller::class, 'create']);
Route::post('insertblogs', [blogcontroller::class, 'insert']);
Route::get('deleteblogs/{id}', [blogcontroller::class, 'delete']);
Route::get('editblogs/{id}', [blogcontroller::class, 'edit']);
Route::post('updateblogs/{id}', [blogcontroller::class, 'update']);


// Techoptimum

Route::get('addtechoptimum', [TechoptimumController::class, 'index']);
Route::post('updatetechoptimum/{id}', [TechoptimumController::class, 'update']);



Route::get('managetechoptimumcat', [TechoptimumController::class, 'index2']);
Route::get('addtechoptimumcat', [TechoptimumController::class, 'create2']);
Route::post('inserttechoptimumcat', [TechoptimumController::class, 'insert2']);
Route::get('deletetechoptimumcat/{id}', [TechoptimumController::class, 'delete2']);
Route::get('edittechoptimumcat/{id}', [TechoptimumController::class, 'edit2']);
Route::post('updatetechoptimumcat/{id}', [TechoptimumController::class, 'update2']);


Route::get('managetechoptimumbooks', [TechoptimumController::class, 'index3']);
Route::get('addtechoptimumbooks', [TechoptimumController::class, 'create3']);
Route::post('inserttechoptimumbooks', [TechoptimumController::class, 'insert3']);
Route::get('deletetechoptimumbooks/{id}', [TechoptimumController::class, 'delete3']);
Route::get('edittechoptimumbooks/{id}', [TechoptimumController::class, 'edit3']);
Route::post('updatetechoptimumbooks/{id}', [TechoptimumController::class, 'update3']);



// Ajax

Route::get('getsubcategory/{id}', [ProductsController::class, 'getsubcat']);


//about Us

Route::get('/create_aboutus',[AboutUsController::class,'create_aboutus']);
Route::post('/aboutUsUpdateInfo',[AboutUsController::class,'aboutUsUpdateInfo']);
Route::get('/valuesInfo',[AboutUsController::class,'valuesInfo']);
Route::post('/updateValuesInfo',[AboutUsController::class,'updateValuesInfo']);
Route::get('/createValueBox',[AboutUsController::class,'createValueBox']);
Route::post('/insertValueBox',[AboutUsController::class,'insertValueBox']);
Route::get('/manageValueBox',[AboutUsController::class,'manageValueBox']);
Route::get('/editValueBox/{id}',[AboutUsController::class,'editValueBox']);
Route::post('/updateValueBox/{id}',[AboutUsController::class,'updateValueBox']);
Route::get('/deleteValueBox/{id}',[AboutUsController::class,'deleteValueBox']);
Route::get('/beliefSystem',[AboutUsController::class,'beliefSystem']);
Route::post('/updateBeliefSystem',[AboutUsController::class,'updateBeliefSystem']);
Route::get('/founderMessage',[AboutUsController::class,'founderMessage']);
Route::post('/updateFounderMessage',[AboutUsController::class,'updateFounderMessage']);
Route::get('/chairmanMessage',[AboutUsController::class,'chairmanMessage']);
Route::post('/updateChairmanMessage',[AboutUsController::class,'updateChairmanMessage']);
Route::get('/mdMessage',[AboutUsController::class,'mdMessage']);
Route::post('/updateMdMessage',[AboutUsController::class,'updateMdMessage']);


// messages

Route::get('/customerMessages',[CustomerMessage::class,'index']);
Route::get('/deletemessage/{id}',[CustomerMessage::class,'deletemessage']);

// slider
Route::get('/sliderInfo',[SliderController::class,'index']);
Route::get('/createSlider',[SliderController::class,'create']);
Route::post('/insertSlider',[SliderController::class,'insertSlider']);
Route::get('/editSlider/{id}',[SliderController::class,'editSlider']);
Route::post('/updateSlider/{id}',[SliderController::class,'updateSlider']);
Route::get('/deleteSlider/{id}',[SliderController::class,'deleteSlider']);

// career infos
Route::get('/carrer_infos',[CarrerController::class,'carrer_infos']);
Route::post('/carrerinfo_update',[CarrerController::class,'carrerinfo_update']);

//location
Route::get('/createlocation',[CarrerController::class,'createlocation']);
Route::post('/insertLocation',[CarrerController::class,'insertLocation']);
Route::get('/manage_location',[CarrerController::class,'manage_location']);
Route::get('/editlocations/{id}',[CarrerController::class,'editlocations']);
Route::post('/updateLocation/{id}',[CarrerController::class,'updateLocation']);
Route::get('/deletelocation/{id}',[CarrerController::class,'deletelocation']);

//jobs
Route::get('/opening_jobs',[CarrerController::class,'opening_jobs']);
Route::post('/insertJobs',[CarrerController::class,'insertJobs']);
Route::get('/manage_jobs',[CarrerController::class,'manage_jobs']);
Route::get('/editjobs/{id}',[CarrerController::class,'editjobs']);
Route::post('/updateJobs/{id}',[CarrerController::class,'updateJobs']);
Route::get('/deleteJobs/{id}',[CarrerController::class,'deleteJobs']);

// opening
Route::get('/publish_opening',[CarrerController::class,'publish_opening']);
Route::post('/insertOpening',[CarrerController::class,'insertOpening']);
Route::get('/manageopening',[CarrerController::class,'manageopening']);
Route::get('/editopenings/{id}',[CarrerController::class,'editopenings']);
Route::post('/updateOpening/{id}',[CarrerController::class,'updateOpening']);
Route::get('/deleteopening/{id}',[CarrerController::class,'deleteopening']);

// work palce
Route::get('/workplace',[CarrerController::class,'workplace']);
Route::post('/updateWorkplaceInfo',[CarrerController::class,'updateWorkplaceInfo']);

// promisses
Route::get('/carrer_promisses',[CarrerController::class,'carrer_promisses']);
Route::post('/insertPromisses',[CarrerController::class,'insertPromisses']);
Route::get('/managepromisses',[CarrerController::class,'managepromisses']);
Route::get('/editPromisses/{id}',[CarrerController::class,'editPromisses']);
Route::post('/updatepromisses/{id}',[CarrerController::class,'updatepromisses']);
Route::get('/deletepromisses/{id}',[CarrerController::class,'deletepromisses']);


