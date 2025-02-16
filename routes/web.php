<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\IngredientLogController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

//Home
Route::get('admin/home', 
[HomeController::class, 'index'])
->name('admin.home.index');

//Category
Route::get('admin/category',
[CategoryController::class, 'index'])
->name('admin.category.index');

Route::get('admin/category/export-excel',
[CategoryController::class, 'exportExcel'])
->name('admin.category.exportExcel');

Route::post('admin/category/delete',
[CategoryController::class, 'destroy'])
->name('admin.category.delete');

Route::get('admin/category/create',
[CategoryController::class, 'create'])
->name('admin.category.create');

Route::post('admin/category/save',
[CategoryController::class, 'save'])
->name('admin.category.save');

Route::get('admin/category/edit',
[CategoryController::class, 'edit'])
->name('admin.category.edit');

Route::post('admin/category/update',
[CategoryController::class, 'update'])
->name('admin.category.update');

//Ingredient
Route::get('admin/ingredient',
[IngredientController::class, 'index'])
->name('admin.ingredient.index');

Route::get('admin/ingredient/export-excel',
[IngredientController::class, 'exportExcel'])
->name('admin.ingredient.exportExcel');

Route::post('admin/ingredient/delete',
[IngredientController::class, 'destroy'])
->name('admin.ingredient.delete');

Route::get('admin/ingredient/create',
[IngredientController::class, 'create'])
->name('admin.ingredient.create');

Route::post('admin/ingredient/save',
[IngredientController::class, 'save'])
->name('admin.ingredient.save');

Route::get('admin/ingredient/edit',
[IngredientController::class, 'edit'])
->name('admin.ingredient.edit');

Route::post('admin/ingredient/update',
[IngredientController::class, 'update'])
->name('admin.ingredient.update');

//Ingredient Log
Route::get('admin/ingredientlog',
[IngredientLogController::class, 'index'])
->name('admin.ingredientlog.index');

Route::get('admin/ingredientlog/export-excel',
[IngredientLogController::class, 'exportExcel'])
->name('admin.ingredientlog.exportExcel');

Route::post('admin/ingredientlog/delete',
[IngredientLogController::class, 'destroy'])
->name('admin.ingredientlog.delete');

//Promotion
Route::get('admin/promotion',
[PromotionController::class, 'index'])
->name('admin.promotion.index');

Route::get('admin/promotion/export-excel',
[PromotionController::class, 'exportExcel'])
->name('admin.promotion.exportExcel');

Route::post('admin/promotion/delete',
[PromotionController::class, 'destroy'])
->name('admin.promotion.delete');

Route::get('admin/promotion/create',
[PromotionController::class, 'create'])
->name('admin.promotion.create');

Route::post('admin/promotion/save',
[PromotionController::class, 'save'])
->name('admin.promotion.save');

Route::get('admin/promotion/edit',
[PromotionController::class, 'edit'])
->name('admin.promotion.edit');

Route::post('admin/promotion/update',
[PromotionController::class, 'update'])
->name('admin.promotion.update');

//Customer
Route::get('admin/customer',
[CustomerController::class, 'index'])
->name('admin.customer.index');

Route::get('admin/customer/export-excel',
[CustomerController::class, 'exportExcel'])
->name('admin.customer.exportExcel');

// Route::post('admin/customer/delete',
// [CustomerController::class, 'destroy'])
// ->name('admin.customer.delete');

Route::get('admin/customer/create',
[CustomerController::class, 'create'])
->name('admin.customer.create');

Route::post('admin/customer/save',
[CustomerController::class, 'save'])
->name('admin.customer.save');

Route::get('admin/customer/edit',
[CustomerController::class, 'edit'])
->name('admin.customer.edit');

Route::post('admin/customer/update',
[CustomerController::class, 'update'])
->name('admin.customer.update');


//Employee
Route::get('admin/employee',
[EmployeeController::class, 'index'])
->name('admin.employee.index');

Route::get('admin/employee/export-excel',
[EmployeeController::class, 'exportExcel'])
->name('admin.employee.exportExcel');

Route::post('admin/employee/delete',
[EmployeeController::class, 'destroy'])
->name('admin.employee.delete');

Route::get('admin/employee/create',
[EmployeeController::class, 'create'])
->name('admin.employee.create');

Route::post('admin/employee/save',
[EmployeeController::class, 'save'])
->name('admin.employee.save');

Route::get('admin/employee/edit',
[EmployeeController::class, 'edit'])
->name('admin.employee.edit');

Route::post('admin/employee/update',
[EmployeeController::class, 'update'])
->name('admin.employee.update');