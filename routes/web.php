<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Models\News;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FeedbackController::class, 'index']);

Route::get('/feedback', function () {
    return view('feedback.feedback');
})->name('feedback.feedback');

Route::post('/send-feedback', [FeedbackController::class, 'store'])
    ->name('feedback.send');

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('/admin/news', function () {
    return view('admin.news.create');
})->middleware(['auth', 'verified'])->name('admin/index');

Route::get('/admin/news/list', function () {
    $newsList = \App\Models\News::latest()->paginate(15);
    return view('admin.news.index', compact('newsList'));
})->middleware(['auth', 'verified'])->name('list');

Route::get('/admin/news/edit/{news}', [AdminNewsController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('admin.news.edit');

Route::patch('/admin/news/{news}', [AdminNewsController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('admin.news.update');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('news/upload', [AdminNewsController::class, 'upload'])
        ->name('news.upload');
    Route::resource('news', AdminNewsController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// News pages
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.detail');
Route::get('/about', [AboutController::class, 'about']);
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

require __DIR__.'/auth.php';
