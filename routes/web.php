<?php
use App\Http\Controllers\AboutUsController;
use App\Models\AboutUs;
use App\Models\Companyinfo;
use App\Models\Service;
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

Route::get('/', [ App\Http\Controllers\FrontendController::class,'index'])->name('welcome');
Route::get('/details/{id}', [ App\Http\Controllers\FrontendController::class,'details'])->name('details');

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware' => 'auth'], function () {
    Route::resource('/about-us', App\Http\Controllers\Admin\AboutUsController::class);
    Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('/portfolio', App\Http\Controllers\Admin\PortfolioController::class);
    Route::resource('/question', App\Http\Controllers\Admin\AskedQuestionController::class);
    Route::resource('/company-info', App\Http\Controllers\Admin\CompanyinfoController::class);
    Route::resource('/experiance', App\Http\Controllers\Admin\ExperianceController::class);
    Route::resource('/intro', App\Http\Controllers\Admin\IntroController::class);

});


// view()->composer('app', function ($view) {
//     $companyinfo=Companyinfo::where('id','1')->get();
//      $view->with('companyinfo',$companyinfo);
// });

