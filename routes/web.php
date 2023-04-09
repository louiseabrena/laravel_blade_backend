<?php

use App\Models\Project;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ContactsController;
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
    return view('welcome', [
        'projects' => Project::all(),
    ]);
});

Route::get('/project/{project:slug}', function (Project $project) {
    return view('project', [
        'project' => $project,
    ]);
})->where('project', '[A-z\-]+');

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');

Route::get('/console/contacts/list', [ContactsController::class, 'list'])->middleware('auth');
Route::get('/console/contacts/add', [ContactsController::class, 'addForm'])->middleware('auth');
Route::post('/console/contacts/add', [ContactsController::class, 'add'])->middleware('auth');
Route::get('/console/contacts/edit/{contact:id}', [ContactsController::class, 'editForm'])->where('contact', '[0-9]+')->middleware('auth');
Route::post('/console/contacts/edit/{contact:id}', [ContactsController::class, 'edit'])->where('contact', '[0-9]+')->middleware('auth');
Route::get('/console/contacts/delete/{contact:id}', [ContactsController::class, 'delete'])->where('contact', '[0-9]+')->middleware('auth');
Route::get('/console/contacts/image/{contact:id}', [ContactsController::class, 'imageForm'])->where('contact', '[0-9]+')->middleware('auth');
Route::post('/console/contacts/image/{contact:id}', [ContactsController::class, 'image'])->where('contact', '[0-9]+')->middleware('auth');

Route::get('/console/education/list', [EducationController::class, 'list'])->middleware('auth');
Route::get('/console/education/add', [EducationController::class, 'addForm'])->middleware('auth');
Route::post('/console/education/add', [EducationController::class, 'add'])->middleware('auth');
Route::get('/console/education/edit/{education:id}', [EducationController::class, 'editForm'])->where('education', '[0-9]+')->middleware('auth');
Route::post('/console/education/edit/{education:id}', [EducationController::class, 'edit'])->where('education', '[0-9]+')->middleware('auth');
Route::get('/console/education/delete/{education:id}', [EducationController::class, 'delete'])->where('education', '[0-9]+')->middleware('auth');
Route::get('/console/education/image/{education:id}', [EducationController::class, 'imageForm'])->where('education', '[0-9]+')->middleware('auth');
Route::post('/console/education/image/{education:id}', [EducationController::class, 'image'])->where('education', '[0-9]+')->middleware('auth');

