<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\AllCategoriesComponent;
use App\Http\Livewire\AllProductsComponent;
use App\Http\Livewire\AllSubCategoriesComponent;
use App\Http\Livewire\CreateCategoriesComponent;
use App\Http\Livewire\CreateProductComponent;
use App\Http\Livewire\CreateSubCategoriesComponent;
use App\Http\Livewire\UpdateCategoriesComponent;
use App\Http\Livewire\UpdateProductsComponent;
use App\Http\Livewire\UpdateSubCategoriesComponent;
use App\Http\Livewire\Users\AllProductsComponent as UsersAllProductsComponent;
use App\Http\Livewire\Users\UserHomeComponent;
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

Route::get('/', UserHomeComponent::class)->name('user-home');
Route::get('/allproducts', UsersAllProductsComponent::class)->name('user-all-products');


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', AdminDashboardComponent::class)->name('admin-dashboard');
        Route::get('/dashboard/allcategories', AllCategoriesComponent::class)->name('admin-dashboard-allcategories');
        Route::get('/dashboard/createcategories', CreateCategoriesComponent::class)->name('admin-dashboard-createcategories');
        Route::get('/dashboard/updatecategories/{category_id}', UpdateCategoriesComponent::class)->name('admin-dashboard-updatecategories');

        Route::get('/dashboard/allsubcategories', AllSubCategoriesComponent::class)->name('admin-dashboard-allsubcategories');
        Route::get('/dashboard/createsubcategories', CreateSubCategoriesComponent::class)->name('admin-dashboard-createsubcategories');
        Route::get('/dashboard/updatesubcategories/{subcategory_id}', UpdateSubCategoriesComponent::class)->name('admin-dashboard-updatesubcategories');

        Route::get('/dashboard/allproducts', AllProductsComponent::class)->name('admin-dashboard-allproducts');
        Route::get('/dashboard/createproducts', CreateProductComponent::class)->name('admin-dashboard-createproducts');
        Route::get('/dashboard/updateproducts/{product_id}', UpdateProductsComponent::class)->name('admin-dashboard-updateproducts');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
