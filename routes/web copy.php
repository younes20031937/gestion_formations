<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function () {
    // Define routes that require authentication here
    Route::get('/admin',[AdminController::class, "index"]);
});
Route::get("/" , [PageController::class , "index"])->name("formations.index");
Route::get("/formations/{formation}" , [PageController::class , "show"])->name("formations.show-formation");
Route::get("/about" , [PageController::class , "about"])->name("formations.about");
Route::get("/contact" , [PageController::class , "contact"])->name("formations.contact");
Route::get("/formations" , [PageController::class , "formations"])->name("formations.formations");
Route::get("/signup" , [PageController::class , "signup"])->name("formations.signup");
Route::get("/signin" , [PageController::class , "signin"])->name("formations.signin");
Route::get('/generate-qrcode', [PageController::class , "generateQrCode"])->name('generate.qrcode');
Route::get("/events" , [PageController::class , "events"])->name("formations.events");


Route::post("/submit-form" , [EmailController::class , "sendMail"])->name("submit-form");
Route::get('/export-excel', [FormationController::class, 'exportExcel']);
Route::get('/export-pdf', [FormationController::class, 'exportPDF']);


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Add other admin routes here...
});
Route::group(['middleware' => 'etablissement'], function () {
    Route::get('/etablissement', [EtablissementController::class, 'index'])->name('etablissement.index');
    // Other etablissement routes...
});

Route::group(['middleware' => 'entreprise'], function () {
    Route::get('/entreprise', [EntrepriseController::class, 'index'])->name('entreprise.index');
    // Other entreprise routes...
});

