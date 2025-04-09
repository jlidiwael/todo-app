<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
});


// Route to display all todos (custom URL)
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// Route to display a specific todo by ID (custom URL)
Route::get('/viewTodo/{id}', [TodoController::class, 'show'])->name('todos.show');

// Route to create a new todo (custom URL)
Route::get('/createTodo', [TodoController::class, 'create'])->name('todos.create');

// Route to store a new todo (custom URL)
Route::post('/storeTodo', [TodoController::class, 'store'])->name('todos.store');

// Route to edit a specific todo (custom URL)
Route::get('/editTodo/{id}', [TodoController::class, 'edit'])->name('todos.edit');

// Route to update a todo (custom URL)
Route::put('/updateTodo/{id}', [TodoController::class, 'update'])->name('todos.update');

// Route to delete a todo (custom URL)
Route::delete('/deleteTodo/{id}', [TodoController::class, 'destroy'])->name('todos.destroy');

