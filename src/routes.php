<?php
Route::get('/admin/login', function () {
    return redirect('/o365auth/init');
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/admin', function () {
        return "ADMIN";
    })->name('admin');
});

Route::middleware(['verified'])->group(function () {
    Route::get('/my', function () {
        return "MY";
    })->name('my');
});
