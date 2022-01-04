<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ResultController;

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

//publci Route
Route::get("/publicexam", [ExamController::class, 'public_index'])->name('publicexam.index');
Route::get("/publiccategory", [CategoryController::class, 'public_index'])->name('publiccategory.index');
// Route::get('/category_show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category_show/{id}', [ExamController::class, 'show'])->name('single_category');
Route::get('/question_show/{id}', [QuestionController::class, 'show'])->name('questions_page');

Route::post("/publicresult", [ResultController::class, 'store'])->name('publicresult.index');

//User Route
Route::get("add_user", [AdminController::class, 'create']);
Route::post("add_user/store", [AdminController::class, 'store'])->name('user.store');
Route::get("/user", [AdminController::class, 'index'])->name('user.index');
Route::get("user/edit/{id}", [AdminController::class, 'edit'])->name('user.edit');
Route::post("user/update/{id}", [AdminController::class, 'update'])->name('user.update');
Route::get("user/destroy/{id}", [AdminController::class, 'destroy'])->name('user.destroy');
//Category Route

Route::get("add_category", [CategoryController::class, 'create']);
Route::post("add_category/store", [CategoryController::class, 'store'])->name('category.store');
Route::get("/category", [CategoryController::class, 'index'])->name('category.index');
Route::get("category/edit/{id}", [CategoryController::class, 'edit'])->name('category.edit');
Route::post("category/update/{id}", [CategoryController::class, 'update'])->name('category.update');
Route::get("category/destroy/{id}", [CategoryController::class, 'destroy'])->name('category.destroy');

//Exam Route
Route::get("add_exam", [ExamController::class, 'create']);
Route::post("add_exam/store", [ExamController::class, 'store'])->name('exam.store');
Route::get("/exam", [ExamController::class, 'index'])->name('exam.index');
Route::get("exam/edit/{id}", [ExamController::class, 'edit'])->name('exam.edit');
Route::post("exam/update/{id}", [ExamController::class, 'update'])->name('exam.update');
Route::get("exam/destroy/{id}", [ExamController::class, 'destroy'])->name('exam.destroy');


//Question Route
Route::get("add_question", [QuestionController::class, 'create']);
Route::post("add_question/store", [QuestionController::class, 'store'])->name('question.store');
Route::get("/question", [QuestionController::class, 'index'])->name('question.index');
Route::get("question/edit/{id}", [QuestionController::class, 'edit'])->name('question.edit');
Route::post("question/update/{id}", [QuestionController::class, 'update'])->name('question.update');
Route::get("question/destroy/{id}", [QuestionController::class, 'destroy'])->name('question.destroy');

//Answer Route
Route::get("add_answer", [AnswerController::class, 'create']);
Route::post("add_answer/store", [AnswerController::class, 'store'])->name('answer.store');
Route::get("/answer", [AnswerController::class, 'index'])->name('answer.index');
Route::get("answer/edit/{id}", [AnswerController::class, 'edit'])->name('answer.edit');
Route::post("answer/update/{id}", [AnswerController::class, 'update'])->name('answer.update');
Route::get("answer/destroy/{id}", [AnswerController::class, 'destroy'])->name('answer.destroy');


//Result Route


Route::get("/result", [ResultController::class, 'index'])->name('result.index');


Route::get("result/destroy/{id}", [ResultController::class, 'destroy'])->name('result.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
