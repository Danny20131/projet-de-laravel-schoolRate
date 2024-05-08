<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\University;
use App\Models\RatingCriteria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversityRatingController;

Route::get('/', function () {
    $universities = University::all();
    return view('welcome', ['universities' => $universities]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $universities = University::all();
        $critere = RatingCriteria::all();
        $users = User::all();
        $newUserCount = User::where('created_at', '>=', Carbon::now()->subDays(2))->count();
        return view('dashboard', [
            'universities' => $universities,
            'users' => $users,
            'newUserCount' => $newUserCount,
            'critere' => $critere,
        ]);
    })->name('dashboard');
});

/* Route::resource('universities', UniversityController::class);
Route::resource('critere', CritereController::class);
Route::resource('ratings', RatingController::class);
Route::resource('comments', CommentController::class); */
//Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');

// Group all admin routes for better organization and apply middleware for auth and admin role
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    //Route::get('dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::controller(UserController::class)->group(function () {
        Route::get('users', 'index')->name('admin.users.index');
        Route::post('users', 'store')->name('admin.users.store');
        Route::get('users/create', 'create')->name('admin.users.create');
        Route::get('users/{user}', 'show')->name('admin.users.show');
        Route::get('users/{user}/edit', 'edit')->name('admin.users.edit');
        Route::put('users/{user}', 'update')->name('admin.users.update');
        Route::delete('users/{user}', 'destroy')->name('admin.users.destroy');
    });

    Route::controller(UniversityController::class)->group(function () {
        Route::get('universities', 'index')->name('admin.universities.index');
        Route::get('universities/data', 'dataTable')->name('admin.universities.dataTable');
        Route::post('universities', 'store')->name('admin.universities.store');
        Route::get('universities/create', 'create')->name('admin.universities.create');
        Route::get('universities/{university}', 'show')->name('admin.universities.show');
        Route::get('universities/{university}/edit', 'edit')->name('admin.universities.edit');
        Route::put('universities/{university}', 'update')->name('admin.universities.update');
        Route::delete('universities/{university}', 'destroy')->name('admin.universities.destroy');
    });

    Route::controller(CriteriaController::class)->group(function () {
        Route::get('criteres', 'index')->name('admin.criteres.index');
        Route::post('criteres', 'store')->name('admin.criteres.store');
        Route::get('criteres/create', 'create')->name('admin.criteres.create');
        Route::get('criteres/{critere}', 'show')->name('admin.criteres.show');
        Route::get('criteres/{critere}/edit', 'edit')->name('admin.criteres.edit');
        Route::put('criteres/{critere}', 'update')->name('admin.criteres.update');
        Route::delete('criteres/{critere}', 'destroy')->name('admin.criteres.destroy');
    });

    Route::resource('ratings', RatingController::class)->names('admin.ratings');
    Route::resource('comments', CommentController::class)->names('admin.comments');
});

Route::controller(UniversityController::class)->group(function () {
    Route::get('universities/rankings', 'rankings')->name('universities.rankings');
    Route::get('universities', 'index')->name('universities.index');
    Route::get('universities/{university}', 'show')->name('universities.show');
});

Route::controller(UniversityRatingController::class)->group(function () {
    Route::get('ratings', 'index')->name('ratings.index');
    Route::post('ratings', 'store')->name('ratings.store');
    Route::get('ratings/create', 'create')->name('ratings.create');
    Route::get('ratings/{rating}', 'show')->name('ratings.show');
    Route::get('ratings/{rating}/edit', 'edit')->name('ratings.edit');
    Route::put('ratings/{rating}', 'update')->name('ratings.update');
    Route::delete('ratings/{rating}', 'destroy')->name('ratings.destroy');
});

Route::controller(CommentController::class)->group(function () {
    Route::get('comments', 'index')->name('comments.index');
    Route::post('comments', 'store')->name('comments.store');
    Route::get('comments/create', 'create')->name('comments.create');
    Route::get('comments/{comment}', 'show')->name('comments.show');
    Route::get('comments/{comment}/edit', 'edit')->name('comments.edit');
    Route::put('comments/{comment}', 'update')->name('comments.update');
    Route::delete('comments/{comment}', 'destroy')->name('comments.destroy');
});
