<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CounsellorController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\ProviderController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\EventRegistrationController;
use App\SEO\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

//Routes
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/signup', function () {
    return view('backend.pages.auth.signup');
})->name('signup');

Route::get('/generate-sitemap', [SitemapController::class, 'generate']);

Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('/courses', [CourseController::class, 'courses'])->name('courses');
Route::get('/counsellors', [CounsellorController::class, 'counsellors'])->name('counsellors');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/destinations', [EventController::class, 'index'])->name('destinations');
Route::get('/how-we-works', [EventController::class, 'index'])->name('how-we-works');


// quick links
Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');


Route::get('/events/{event}/register', [EventRegistrationController::class, 'create'])->name('events.register');
Route::post('/events/{event}/register', [EventRegistrationController::class, 'store'])->name('events.register.store');


Route::get('/course-details', [CourseController::class, 'coursesDetails'])->name('course-details');

Route::get('/providers', [ProviderController::class, 'providers'])->name('providers');
Route::get('/provider-details', [ProviderController::class, 'providerDetails'])->name('provider-details');



// Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');
// Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');
// Route::get('/student-information', [FrontendController::class, 'studentInformation'])->name('student-information');
// Route::get('/course-details', [FrontendController::class, 'courseDetails'])->name('course-details');

// Route::get('/courses/{slug}', [FrontendController::class, 'singleCourse'])->name('single-course');
// Route::get('/course/enroll/{slug}', [FrontendController::class, 'showEnrollCourse'])
//     ->name('enroll-course');

// Route::post('/course/enroll/{slug}', [FrontendController::class, 'storeEnrollCourse'])
//     ->name('course.enroll');



// Route::get('/blogs', [BlogController::class, 'index'])
//     ->name('blogs');

// Route::get('/blogs/{slug}', [BlogController::class, 'show'])
//     ->name('blog-details');



// Route::get('/events/{slug}', [EventController::class, 'show'])
//     ->name('event-details');
// Route::post('/inquiry-us', [ContactController::class, 'store'])
//     ->name('contact.store');

// Route::post('/subscribe', [SubscriberController::class, 'store'])
//     ->name('subscribe.store');

//student routes
Route::prefix('student')
    ->name('student.')
    ->middleware(['auth', 'active.user'])
    ->group(function () {
        Route::get('/dashboard', [StudentController::class, 'dashboard'])
            ->name('dashboard');
        Route::get('/profile', [StudentController::class, 'profile'])
            ->name('profile');
    });
