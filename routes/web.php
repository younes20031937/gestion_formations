
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EtablissementController;

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
});
Route::group(['middleware' => 'etablissement'], function () {
    Route::get('/etablissement', [EtablissementController::class, 'index'])->name('etablissement.index');
});

Route::group(['middleware' => 'entreprise'], function () {
    Route::get('/entreprise', [EntrepriseController::class, 'index'])->name('entreprise.index');
});
Route::get('formations/signin', function () {
    return view('formations.signin');
})->name('signin');

Route::post('login', [LoginController::class, 'login'])->name('login');

