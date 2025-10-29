<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\ProfileController;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Login Page
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');

// Student Registration
Route::get('/register', [StudentController::class, 'showRegister'])->name('register');
Route::post('/register', [StudentController::class, 'registerStudent'])->name('registerStudent');

// Prevent POST / errors
Route::post('/', function () {
    return redirect('/login');
});


// Default Landing
Route::view('/', 'welcome');

/*
|--------------------------------------------------------------------------
| Protected Routes (Requires Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard (Visible to both Admins & Students)
    Route::get('/dashboard', function () {
        $students = Student::all();
        $courses = Course::all();
        $users = User::all();
        return view('dashboard.dashboard', compact('students', 'courses', 'users'));
    })->name('dashboard');

    // Profile Routes
    Route::get('/dashboard/profile', [ProfileController::class, 'showProfile'])->name('profile.show');
    Route::post('/dashboard/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

    /*
    |--------------------------------------------------------------------------
    | Shared Student + Admin Routes (View only)
    |--------------------------------------------------------------------------
    */
    Route::prefix('dashboard')->group(function () {
        // View Students (Both admin & student)
        Route::get('/students', function () {
            $students = Student::all();
            return view('dashboard.students.students', compact('students'));
        })->name('students.index');

        // View Courses (Both admin & student)
        Route::get('/cources', function () {
            $courses = Course::all();
            return view('dashboard.cources.cources', compact('courses'));
        })->name('courses.index');
    });

    /*
    |--------------------------------------------------------------------------
    | Admin-only Routes
    |--------------------------------------------------------------------------
    */
    Route::middleware(['admin'])->prefix('dashboard')->group(function () {

        // ===== Courses Routes =====
        Route::get('/cources/create', [CourcesController::class, 'create'])->name('courses.create');
        Route::post('/cources/store', [CourcesController::class, 'store'])->name('courses.store');
        Route::get('/cources/update', [CourcesController::class, 'updateForm'])->name('courses.updateForm');
        Route::post('/cources/update', [CourcesController::class, 'updateCourse'])->name('courses.updateCourse');
        Route::get('/cources/delete', [CourcesController::class, 'delete'])->name('courses.delete');
        Route::post('/cources/delete', [CourcesController::class, 'destroy'])->name('courses.destroy');

        // ===== Students Routes =====
        Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
        Route::post('/students', [StudentController::class, 'store'])->name('students.store');
        Route::get('/students/delete-form', function () {
            return view('dashboard.students.delete.delete');
        })->name('students.deleteForm');
        Route::post('/students/delete', [StudentController::class, 'deleteByName'])->name('students.deleteByName');
        Route::get('/students/update', [StudentController::class, 'updateForm'])->name('students.updateForm');
        Route::post('/students/update', [StudentController::class, 'updateStudent'])->name('students.update');
    });
});
