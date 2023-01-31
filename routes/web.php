<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\AllCategoriesComponent;
use App\Http\Livewire\CreateCategoriesComponent;
use App\Http\Livewire\UpdateCategoriesComponent;
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
    return view('welcome');
});


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', AdminDashboardComponent::class)->name('admin-dashboard');
        Route::get('/dashboard/allcategories', AllCategoriesComponent::class)->name('admin-dashboard-allcategories');
        Route::get('/dashboard/createcategories', CreateCategoriesComponent::class)->name('admin-dashboard-createcategories');
        Route::get('/dashboard/updatecategories/{category_id}', UpdateCategoriesComponent::class)->name('admin-dashboard-updatecategories');
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
