<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CounsellorController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\ProviderController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\EventRegistrationController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Student\ProfileController;
use App\SEO\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

//Routes
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/signup', function () {
    return view('backend.pages.auth.signup');
})->name('signup');

Route::get('/generate-sitemap', [SitemapController::class, 'generate']);

//static pages
Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('/destinations', [DestinationController::class, 'destinations'])->name('destinations');
Route::get('/destination/details', [DestinationController::class, 'destinationDetails'])->name('destination-details');
Route::get('/how-we-works', [FrontendController::class, 'howWeWork'])->name('how-we-works');
Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');
Route::get('/can-achieve', [FrontendController::class, 'achieve'])->name('achieve');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [FrontendController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/ceo', [FrontendController::class, 'owner'])->name('owner');


//dynami pages
Route::get('/events/{event}/register', [EventRegistrationController::class, 'create'])->name('events.register');
Route::post('/events/{event}/register', [EventRegistrationController::class, 'store'])->name('events.register.store');

Route::get('/courses', [CourseController::class, 'courses'])->name('courses');
Route::get('/course-details', [CourseController::class, 'coursesDetails'])->name('course-details');

Route::get('/providers', [ProviderController::class, 'providers'])->name('providers');
Route::get('/provider-details', [ProviderController::class, 'providerDetails'])->name('provider-details');


// counsellors
Route::get('/counsellors', [CounsellorController::class, 'index'])->name('counsellors');
Route::get('/counsellors/{counsellor}', [CounsellorController::class, 'show'])
    ->name('counsellor.details');

Route::get('/counsellors/{counsellor}/booking', [CounsellorController::class, 'bookingCounsellor'])
    ->name('counsellor.booking');

Route::post('/counsellors/{counsellor}/booking', [CounsellorController::class, 'storeBooking'])
    ->name('booking-session');


//Events
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/event-details', [EventController::class, 'eventDetails'])->name('event-details');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::post('/inquiry-us', [ContactController::class, 'store'])->name('contact.store');


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
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/account/settings', [ProfileController::class, 'accountSettings'])->name('account.settings');
        Route::put('/account/settings', [ProfileController::class, 'updateAccountSettings'])->name('account.settings.update');
    });
