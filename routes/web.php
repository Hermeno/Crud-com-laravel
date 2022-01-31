<?php
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/
Route::prefix('app')->group(function() {
    Route::get('/', [userController::class,'index'])->name('app-index');
    Route::get('/insert', [userController::class,'create'])->name('app-create');
    Route::post('/', [userController::class,'store'])->name('app-store');
    Route::get('/{id}/insert', [userController::class,'edit'])->where('id', '[0-9]+')->name('app-edit');
    Route::put('/{id}', [userController::class,'update'])->where('id', '[0-9]+')->name('app-update');
    Route::delete('/{id}', [userController::class,'delete'])->where('id', '[0-9]+')->name('app-delete');
});
