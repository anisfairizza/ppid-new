<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Informasi\C_Permohonan as InformasiC_Permohonan;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('home');});
Route::get('/profil', function () {return view('profil');});
Route::get('/struktur', function () {return view('struktur');});
Route::get('/visi-misi', function () {return view('visimisi');});
Route::get('/tugas-fungsi', function () {return view('tugasfungsi');});
Route::get('/daftar-informasi-publik', function () {return view('daftarinformasi');});
Route::get('/informasi-berkala', function () {return view('informasiberkala');});
Route::get('/informasi-setiap-saat', function () {return view('informasisetiapsaat');});
Route::get('/informasi-serta-merta', function () {return view('informasisertamerta');});
Route::get('/informasi-dikecualikan', function () {return view('informasidikecualikan');});
Route::get('/akuntabilitas-kinerja', function () {return view('akuntabilitaskinerja');});
Route::get('/sp-informasi', function () {return view('spinformasi');});
Route::get('/admin', function () {return view('admin');});
Route::get('/form-ajuan', function () {return view('formajuan');});
Route::post('/form-ajuan', [InformasiC_Permohonan::class, 'store']);
Route::get('/permohonan-informasi', [InformasiC_Permohonan::class, 'all']);
Route::get('/detail-permohonan/{id}', [InformasiC_Permohonan::class,'show'])->name('detail-permohonan');
Route::get('/login', function () {return view('login');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


