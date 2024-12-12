<?php

use App\Models\User;
use App\Models\Review;
use App\Models\Session;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminDashController;



Route::get('/dashboard', [AdminDashController::class, 'index'])->name('dashboard');
Route::get('/',function(){
    return view('auth.login');
});
Route::get('admin/profile',function(){
    return dd('admin profile page');
});


// Guest Routes
Route::get('/home', function() {
    $reviews = Review::where('isFeatured', '1')->latest()->paginate(5);
    return view('guest.home',['reviews' => $reviews]);
})->name('guest.home');
Route::get('/about', [GuestController::class, 'about'])->name('guest.about');
Route::get('/blogs', function() {
    $blogs = Blog::latest()->paginate(20);
    return view('guest.blogs',['blogs' => $blogs]);
})->name('guest.blogs');
Route::get('/blog/{blog}', [BlogController::class, 'viewBlog']);
Route::get('/services', [GuestController::class, 'services'])->name('guest.services');
Route::get('/contact', [GuestController::class, 'contacts'])->name('guest.contacts');
Route::get('/join', [GuestController::class, 'join'])->name('guest.join');

// Route Actions for CRUD
// USER CRUDs
Route::post('/new-user', [AdminDashController::class, 'newUser']);
Route::put('/archive-user/{user}', [AdminDashController::class, 'archiveUser']);
Route::put('/edit-user/{user}', [AdminDashController::class, 'updateUserChanges']);
Route::delete('/delete-user/{user}', [AdminDashController::class, 'deleteUser']);

// REVIEW CRUDs
Route::post('/add-review', [ReviewController::class, 'addReview']);
Route::put('/edit-review/{review}', [ReviewController::class, 'updateReviewChanges']);
Route::delete('/delete-review/{review}', [ReviewController::class, 'deleteReview']);

// BLOG CRUDs
Route::get('/add-blog', [BlogController::class, 'addBlog']);
Route::post('/new-blog', [BlogController::class, 'newBlog']);
Route::get('/edit-blog/{blog}', [BlogController::class, 'editBlog']);
Route::put('/edit-blog/{blog}', [BlogController::class, 'updateBlogChanges']);
Route::delete('/delete-blog/{blog}', [BlogController::class, 'deleteBlog']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    //Middleware for checking if the usertype of the logged in user is Admin or not
    Route::middleware('admin')->group(function(){

        //Routes for Admin Dashboard's Main Pages
        Route::get('/created-accounts', [AdminDashController::class, 'createdAccountsPage'])->name('created-accounts');
        Route::get('/user-activity', [AdminDashController::class, 'userActivityPage'])->name('user-activity');
        Route::get('/manage-reviews', [AdminDashController::class, 'manageReviewsPage'])->name('manage-reviews');
        Route::get('/manage-user', [AdminDashController::class, 'manageUserPage'])->name('manage-user');
        Route::get('/add-user', [AdminDashController::class, 'addUserPage'])->name('add-user');
        Route::get('/edit-user/{user}', [AdminDashController::class, 'editUser'])->name('edit-user');

    });

    
});

