<?php



use App\Http\Controllers\admin\auth\LoginControllerAdmin;
 use App\Http\Controllers\admin\auth\LogoutControllerAdmin;
use App\Http\Controllers\admin\DoctorsController;
use App\Http\Controllers\admin\HomeControllerAdmin;
use App\Http\Controllers\admin\MajorsControllerAdmin;
  use App\Http\Controllers\MailController;
 use App\Http\Controllers\OrderController;
 use App\Http\Controllers\site\auth\LogoutControllerSite;
use App\Http\Controllers\site\DoctrControllerS;
use App\Http\Controllers\site\HomeControllerSite;
 use App\Http\Controllers\site\MajorControllerS;
use App\Http\Controllers\site\ReservationControllerSite;
use App\Http\Controllers\site\RigsterController;
use App\Models\doctors;
use App\Models\majors;
use App\Models\reservations;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
 --------------------------------------------------------------------------
  Web Routes
 --------------------------------------------------------------------------
 
  Here is where you can register web routes for your application. These
  routes are loaded by the RouteServiceProvider and all of them will
  be assigned to the "web" middleware group. Make something great!
 
*/

Route::get('/create', function () {
    $user = User::create([
        'name' => 'admin',
        'email' => 'admin@app.com',
        'password' => '123456789',
        'phone' => '01155991724',

    ]);
    return '';
});


Route::prefix('clinic')->group(function () {

    Route::get('/home', HomeControllerSite::class)->name('home');
    Route::get('/majors', MajorControllerS::class)->name('majors')->middleware('auth');

    Route::get('/doctors', DoctrControllerS::class)->name('doctors');

    Route::get('/register', [RigsterController::class, 'show'])->name('register.show');

    Route::post('/register', [RigsterController::class, 'register'])->name('register.store');


    Route::resource('/reservation', ReservationControllerSite::class);
    // Route::get('/login', [\App\Http\Controllers\site\auth\LoginControllerSite::class, 'show'])->name('login.show');
    Route::get('/login', [\App\Http\Controllers\site\auth\LoginControllerSite::class, 'show'])->name('login.show');
    Route::post('/logout', LogoutControllerSite::class)->name('logout');






    // Route::get('/login', function () {
    //     return view("web.site.pages.login.index");
    // })->name('login');








    Route::get('/send-email', MailController::class);
    Route::get('/order-store', [OrderController::class, 'store']);
});



Route::prefix('dashboard')->as('admin.')->group(function () {


    Route::middleware('auth')->group(function () {
        Route::get('/admin', HomeControllerAdmin::class)->name('dashboard');
        Route::resource('/majors', MajorsControllerAdmin::class);

        Route::resource('/doctors', DoctorsController::class);

        Route::post('/logout', LogoutControllerAdmin::class)->name('auth.logout');


    });

    /*********************************************** */

    Route::get('/login', [LoginControllerAdmin::class, 'show'])->name('auth.login.show');
    Route::post('/login', [LoginControllerAdmin::class, 'authenticate'])->name('auth.login');

});




Route::get('/one-to-many', function () {
    $doctors = doctors::create([
        'name' => 'jacabcbj',
        'image' => null,


    ]);
    $major = majors::make([
        'name' => 'kacbk',
        'image' => 'ncaklmclam',

    ]);
    $major->doctors()->associate($major->id)->save();


    $reservations = reservations::make([
        'name' => 'nameee',
        'phone' => '0112050200',
        'email' => 'email@example.com',
        // 'image'=>'0'
        // 'category_id'=>$category->id,
    ]);

    $reservations->doctors()->associate($doctors->id)->save();
    return dd('success');

});