<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\StudentController; 
 
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/', function () { 
    return redirect()->route('students.index'); 
}); 
 
Route::resource('students', StudentController::class);