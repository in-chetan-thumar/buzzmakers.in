<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


//Start Frontend Route
Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home');
Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('frontend.about');
Route::get('/blogs', [\App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('frontend.blog');
Route::get('/career', [\App\Http\Controllers\Frontend\CareersController::class, 'index'])->name('frontend.careers');
Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('frontend.contact');
Route::post('/contact-store', [\App\Http\Controllers\Frontend\ContactController::class, 'store'])->name('frontend.contact.store');
Route::get('/news', [\App\Http\Controllers\Frontend\NewsController::class, 'index'])->name('frontend.news');
Route::get('/our-work', [\App\Http\Controllers\Frontend\WorkController::class, 'index'])->name('frontend.work');
Route::get('/pooja-entertainment', [\App\Http\Controllers\Frontend\PoojaentController::class, 'index'])->name('frontend.poojaent');
Route::get('/jiomeet', [\App\Http\Controllers\Frontend\JioController::class, 'index'])->name('frontend.jio');
Route::get('/llumar', [\App\Http\Controllers\Frontend\LlumarController::class, 'index'])->name('frontend.llumar');
Route::get('/salvi-chemical', [\App\Http\Controllers\Frontend\SalviController::class, 'index'])->name('frontend.salvi');
Route::get('/nutra-care', [\App\Http\Controllers\Frontend\NutraCareController::class, 'index'])->name('frontend.nutra');
Route::get('/sarvotkarsh', [\App\Http\Controllers\Frontend\SarvotkarshController::class, 'index'])->name('frontend.sarvotkarsh');
Route::get('/purusham', [\App\Http\Controllers\Frontend\PurushamController::class, 'index'])->name('frontend.purusham');
Route::get('/services-strategy', [\App\Http\Controllers\Frontend\Services\StrategyController::class, 'index'])->name('frontend.services.strategy');
Route::get('/services-content', [\App\Http\Controllers\Frontend\Services\ContentController::class, 'index'])->name('frontend.services.content');
Route::get('/services-technology', [\App\Http\Controllers\Frontend\Services\TechnologyController::class, 'index'])->name('frontend.services.technology');
Route::get('/services-design', [\App\Http\Controllers\Frontend\Services\DesignController::class, 'index'])->name('frontend.services.design');
Route::get('/services-studio', [\App\Http\Controllers\Frontend\Services\StudioController::class, 'index'])->name('frontend.services.studio');
// End Front End Route


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [App\Http\Controllers\Admin\DashBoardController::class, 'root'])->name('root');

    // News Controller
    Route::resource("news-list", \App\Http\Controllers\Admin\NewsController::class);

    // Pagelist Controller
    Route::resource('page-list', \App\Http\Controllers\Admin\PageController::class);
    Route::get('/pagemanagement/status/{id}', [\App\Http\Controllers\Admin\PageController::class, 'changeStatus'])->name('pagemanagements.status');

    // Blog Controller
    Route::resource("blog-list", \App\Http\Controllers\Admin\BlogController::class);

    //FAQs Controller
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqsController::class);

    // Contacts Controller
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactsController::class);
    Route::get('/contacts-export', [\App\Http\Controllers\Admin\ContactsController::class, 'export'])->name('contacts.export');
    Route::get('/contacts-document-download/{path}', [\App\Http\Controllers\Admin\ContactsController::class, 'download'])->name('contacts.document.download');

    // User Profile Controller
    Route::resource('profiles', \App\Http\Controllers\Admin\UserProfileController::class);
    Route::get('/profile', [\App\Http\Controllers\Admin\UserProfileController::class, 'index'])->name('profile.index');
    Route::post('/change/password', [\App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('change.password');

    // User Controller Route
    Route::resource('usermanagements', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/usermanagement/status/{id}', [\App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('usermanagements.status');

    // Email Template Controller
    Route::resource('emailtemplates', \App\Http\Controllers\Admin\EmailTemplateController::class);
    Route::get('/email-template', [\App\Http\Controllers\Admin\EmailTemplateController::class, 'index'])->name('emailtemplate.index');

    // Role Controller
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\RoleController::class, 'changeStatus'])->name('role.status');

    Route::get('/run-artisan/{type}/{action}', function ($type, $action) {
        if (in_array($type, ['view', 'route', 'config', 'cache', 'storage']) and in_array($action, ['clear', 'cache', 'link'])) {
            Artisan::call($type . ':' . $action); // this will do the command line job
            dd("success");
        } else {
            abort(404);
        }
    });

});
