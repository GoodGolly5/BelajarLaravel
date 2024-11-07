<?php
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return view('testmenu.testdisplay');
})->name('test1');

Route::get('/test2', function () {
    return view('testmenu.testdisplay2');
})->name('test2');

Route::get('/home', [CoursesController::class, 'getHomeCourses'])->name('home');
Route::get('/popular', [CoursesController::class, 'getAllCourses'])->name('popular');

Route::get('/about', function () {
    return view('main.about');
})->name('about');

Route::get('/datsci', [CoursesController::class, 'getDatsciCourses'])->name('datsci');
Route::get('/netsecure', [CoursesController::class, 'getNetSecureCourses'])->name('netsecure');

Route::get('/readmore/{NamaKursus}/{KontenCourse}', function($NamaKursus, $KontenCourse){
    return view('main.readmore', ['NamaKursus' => $NamaKursus, 'KontenCourse' => $KontenCourse]);
})->name('readmore');

Route::get('/writer', [CategoriesController::class, 'getWriterName'])->name('writer');







