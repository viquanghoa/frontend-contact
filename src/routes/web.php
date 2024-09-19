<?php

use Illuminate\Support\Facades\Route;
use YourVendorName\PackageName\Http\Controllers\ContactController;

$middleware = config('hoavq.middleware');

Route::middleware([$middleware])->group(function () {
    Route::get('contact', [ContactController::class, 'index']);
});
