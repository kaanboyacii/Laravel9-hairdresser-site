<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;

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
    return view('welcome');
});
Route::redirect(uri:'/anasayfa',destination:'/home');
Route::get('/',function() {
    return view('home.index');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[HomeController::class, 'contactus'])->name('contactus');


Route::Get('/test/{id}',[HomeController::class, 'test'])->where('id','[0-9]+');

//ADMIN PANEL ROUTES
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    //ADMIN CATEGORY ROUTES
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/delete/{id}','destroy')->name('delete');
    });
    //ADMIN SERVICE ROUTES
    Route::prefix('/service')->name('service.')->controller(AdminServiceController::class)->group(function() {
        Route::get('/', [AdminServiceController::class, 'index'])->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/delete/{id}','destroy')->name('delete');
    });
});

Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout'])->name('admin_logout');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
