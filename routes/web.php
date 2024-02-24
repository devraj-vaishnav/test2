<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\JoinController;

Route::get('/index', [CategoryController::class,'index'])->name('index');

Route::get('/create', [CategoryController::class,'create'])->name('create');

Route::post('/store', [CategoryController::class,'store'])->name('store');

Route::get('/delete/{id}', [CategoryController::class,'delete'])->name('delete');

Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('edit');

Route::get('/update/{id}', [CategoryController::class,'update'])->name('update');

//Expense

Route::get('/expensecreate', [ExpenseController::class,'expense'])->name('expensecreate');
Route::post('/expensestore', [ExpenseController::class,'expensestore'])->name('expensestore');
Route::get('/expanseindex', [ExpenseController::class,'expenseindex'])->name('expenseindex');
Route::get('/expensedelete/{id}', [ExpenseController::class,'expensedelete'])->name('expensedelete');
Route::get('/expenseedit/{id}', [ExpenseController::class,'expenseedit'])->name('expenseedit');
Route::post('/expenseupdate/{id}', [ExpenseController::class,'expenseupdate'])->name('expenseupdate');


// JOIN
Route::get('/join', [JoinController::class,'join']);

//Category
//Route::get('category', [ExpenseController::class,'index']);
//Route::gt('category/create', [ExpenseController::class,'create']);
//Route::post('category/sore', [ExpenseController::class,'store']);
//Route::get('category/edit/{id}', [ExpenseController::class,'edit']);
//Route::post('category/update/{id}', [ExpenseController::class,'update']);
//Route::get('category/delete/{id}', [ExpenseController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',function (){
    return view('auth.login');
});