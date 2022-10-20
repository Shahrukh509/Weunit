<?php

use App\Http\Livewire\ApplicationComponent;
use App\Http\Livewire\DesignComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PersonalComponent;
use App\Http\Livewire\Frontend\ShareProfileComponent;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreThemeController;
/*============= Update by kamal bd ==========*/
use App\Http\Controllers\HomeController;

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

// Route::get('migrate', function(){
   
//    Artisan::call('migrate');
   
//    return 'migration completed';
    
// });

Route::get('/share-profile', ShareProfileComponent::class)->name('share-profile');

 Route::get('storing-statistics',[App\Http\Controllers\StoreThemeController::class, 'StoreSocialStats']);


Route::get('/', function () {
    return view('auth.login'); 
    // return view('welcome');
});

Route::post('/register-store', [App\Http\Controllers\UserController::class, 'store'])->name('register-store');

Route::get('clear', function () {
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('storage:link');

    return 'cache cleared';
});

Route::get('link', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');

    // $output=null;
    // $retval=null;
    // shell_exec(Artisan::call('storage:link'), $output, $retval);
    // echo "Returned with status $retval and output:\n";

    return 'Storage Linked';
});




Auth::routes();


// Route::get('/design', DesignComponent::class)->name('design');

Route::middleware('auth')->group(function () {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/editProfile', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('editProfile');
    Route::patch('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
    // Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('personal');
    // Route::get('/design', [App\Http\Controllers\DesignController::class, 'index'])->name('design');
    Route::get('/home', HomeComponent::class)->name('home');
    Route::get('/design', DesignComponent::class)->name('design');
    Route::get('/personal', PersonalComponent::class)->name('personal');
    Route::get('/application', ApplicationComponent::class)->name('application');

    // Route::get('/application', [App\Http\Controllers\ApplicationController::class, 'index'])->name('application');

                              // ADDED by SHAHrukh
      Route::post('storing-html',[App\Http\Controllers\StoreThemeController::class, 'StoreHtml']);
      Route::post('storing-background',[App\Http\Controllers\StoreThemeController::class, 'StoreBackground']);
       Route::post('storing-logo',[App\Http\Controllers\StoreThemeController::class, 'StoreLogo']);

       Route::post('storing-about',[App\Http\Controllers\StoreThemeController::class, 'StoreAbout']);

       Route::post('storing-social',[App\Http\Controllers\StoreThemeController::class, 'StoreSocialLinks']);

        Route::get('storing-statistics',[App\Http\Controllers\StoreThemeController::class, 'StoreSocialStats']);

         Route::post('social-cronology',[App\Http\Controllers\StoreThemeController::class, 'StoreSocialCronology']);
            
                              // ENDed
    Route::get('/help', [App\Http\Controllers\HelpController::class, 'index'])->name('help');
    Route::get('/statistics', [App\Http\Controllers\StatisticsController::class, 'index'])->name('statistics');

    Route::post('/store-contact', [App\Http\Controllers\HelpController::class, 'storeContact'])->name('store-contact');

// add by farooq
      Route::get('personalown', 'App\Http\Controllers\PrivateBusinessController@index')->name('personalown');
      Route::post('businessStore','App\Http\Controllers\PrivateBusinessController@businessStore')->name('businessStore');
      Route::post('privateStore','App\Http\Controllers\PrivateBusinessController@privateStore')->name('privateStore');

    // forgot password
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    // forgot password

});


/*============= Update by kamal bd ==========*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/logout', 'destroy')->name('admin_logout');
    Route::get('/admin/profile', 'profile')->name('admin_profile');
    Route::get('/edit/profile', 'editProfile')->name('edit_profile');
    Route::post('/store/profile', 'store')->name('store_profile');

    Route::get('/change-passowrd','changePassword')->name('change_password');
    Route::post('/update-password','updatePassword')->name('update_password');
});

