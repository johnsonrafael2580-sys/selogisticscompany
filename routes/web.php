<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ShipmentController as AdminShipmentController;
use App\Http\Controllers\DashboardController; // Client Dashboard Controller

/*
|--------------------------------------------------------------------------
| Web Routes - SE Global Logistics
|--------------------------------------------------------------------------
*/

// 1. PUBLIC ROUTES
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/track-shipment', [TrackingController::class, 'track'])->name('track.shipment');

// About Us Section
Route::get('/about/overview', function () {
    $company = (object)[
        'name' => 'SE Global Logistics',
        'tagline' => 'Reliable Clearing & Forwarding',
        'mission' => 'To simplify global trade by providing transparent logistics solutions.',
        'vision' => 'To be the industry leader in East Africa.',
        'hero_image' => 'public/assets/images/picha14.png'
    ];

    $values = collect([
        (object)['name' => 'Integrity'],
        (object)['name' => 'Professionalism'],
        (object)['name' => 'Efficiency'],
        (object)['name' => 'Accountability'],
    ]);

    $about = (object)[
        'title' => 'Redefining Logistics in East Africa',
        'description' => 'SE Global Logistics Company Limited is a premier clearing and forwarding firm headquartered in Dar es Salaam, Tanzania. We bridge the gap between global markets and East African commerce.',
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d'
    ];

    return view('pages.overview', compact('company', 'values', 'about'));
})->name('overview');

Route::get('/about/management', function () { return view('pages.management'); })->name('management');
Route::get('/about/structure', function () { return view('pages.structure'); })->name('structure');

// Services Section
Route::prefix('services')->group(function () {
    Route::get('/customs', function () { return view('pages.customs'); })->name('services.customs');
    Route::get('/freight', function () { return view('pages.freight'); })->name('services.freight');
    Route::get('/warehousing', function () { return view('pages.warehousing'); })->name('services.warehousing');
});

// Policies & Others
Route::prefix('policy')->group(function () {
    Route::get('/quality', function () { return view('pages.quality'); })->name('policy.quality');
    Route::get('/safety', function () { return view('pages.safety'); })->name('policy.safety');
    Route::get('/privacy', function () { return view('pages.privacy'); })->name('policy.privacy');
});

Route::get('/news/vacancies', function () { return view('pages.vacancies'); })->name('news.vacancies');
Route::get('/news/tenders', function () { return view('pages.tenders'); })->name('news.tenders');
Route::get('/gallery', function () { return view('pages.gallery'); })->name('gallery');


// 2. AUTHENTICATION ROUTES
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// 3. DASHBOARD REDIRECT LOGIC
// Hii route inashughulikia mlango mkuu wa dashboard baada ya login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        // Kama ni user wa kawaida, mpeleke kwenye dashboard yake
        return redirect()->route('client.dashboard');
    })->name('dashboard');

    // Hii ndio route ya dashboard ya mteja uliyoiomba
    Route::get('/client/dashboard', [DashboardController::class, 'index'])->name('client.dashboard');
});


// 4. ADMIN ROUTES
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('customers', CustomerController::class);
    Route::get('/shipments', [AdminShipmentController::class, 'index'])->name('shipments.index'); 
    Route::get('/shipments/create', [AdminShipmentController::class, 'create'])->name('shipments.create');
    Route::post('/shipments/store', [AdminShipmentController::class, 'store'])->name('shipments.store');
    Route::get('/shipments/{id}/edit', [AdminShipmentController::class, 'edit'])->name('shipments.edit');
    Route::put('/shipments/{id}/update', [AdminShipmentController::class, 'update'])->name('shipments.update');
    Route::delete('/shipments/{id}', [AdminShipmentController::class, 'destroy'])->name('shipments.destroy');
});


// 5. USER ROUTES (Shipment Specific)
Route::middleware(['auth'])->group(function () {
    Route::get('/user/shipments', [ShipmentController::class, 'index'])->name('shipments.index');
    Route::get('/shipments/{id}', [ShipmentController::class, 'show'])->name('shipments.show');
});

Route::get('/compliance', function () {
    return view('pages.compliance-dashboard');
})->name('compliance.index');

// 6. UTILITY ROUTE
Route::get('/clear-everything', function() {
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    return "Cache imesafishwa kikamilifu! Sasa unaweza kuendelea.";
});