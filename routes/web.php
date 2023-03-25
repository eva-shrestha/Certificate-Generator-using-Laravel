<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CertificatedetailsController;


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

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/admindashboard', function () {
//     return view('admindashboard');
// })->middleware(['admin'])->name('admindashboard');

// Route::get('/dashboard',[TemplateController::class,'userdashboard'])->name('dashboard');

// Route::get('/test',[CertificatedetailsController::class,'certificate'])->name('test');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[TemplateController::class,'userdashboard'])->name('dashboard');

    Route::get('/certificatedetails/{template_id}/create',[CertificatedetailsController::class,'create'])->name('certificatedetails.create');
    Route::post('/certificatedetails/{template_id]/store',[CertificatedetailsController::class,'store'])->name('certificatedetails.store');


});

// Route::get('/download',[CertificatedetailsController::class,'downloadPDF'])->name('downloadpdf');

Route::get('/download', function(){
    $pdf = PDF::loadView('downloadpdf');
    return $pdf->download('pdf_file.pdf');
});

Route::prefix('admin')->middleware(['admin'])->group(function (){
    Route::get('/admindashboard', function () {
        return view('admindashboard');
    })->name('admindashboard');

    Route::get('/templates',[TemplateController::class,'index'])->name('templates.index');
    Route::get('/templates/create',[TemplateController::class,'create'])->name('templates.create');
    Route::post('/templates/store',[TemplateController::class,'store'])->name('templates.store');
    Route::put('/templates/{id}',[TemplateController::class,'update'])->name('templates.update');
    Route::get('/templates/{id}/edit',[TemplateController::class,'edit'])->name('templates.edit');
    Route::delete('/templates/{id}',[TemplateController::class, 'destroy'])->name('templates.destroy');
});


require __DIR__.'/auth.php';
