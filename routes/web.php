<?php
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//เมนู User
Route::get('admin/user/index',[UserController::class,'index'])->name('u.index');

//เมนู Category
Route::get('admin/Category/index',[CategoryController::class,'index'])->name('c.index');
Route::get('admin/Category/create',[CategoryController::class,'create'])->name('c.create');
Route::post('admin/category/insert',[CategoryController::class,'insert']);
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('admin/category/update/{id}',[CategoryController::class,'update']);
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);

//เมนู Product
Route::get('admin/Product/index',[ProductController::class,'index'])->name('o.index');
Route::get('admin/Product/create',[ProductController::class,'create'])->name('o.create');
Route::post('admin/producl/insert',[ProductController::class,'insert']);
Route::get('admin/producl/edit/{id}',[ProductController::class,'edit'])->name('p.edit');
Route::post('admin/producl/update/{id}',[ProductController::class,'update']);
Route::get('admin/producl/delete/{id}',[ProductController::class,'delete']);
