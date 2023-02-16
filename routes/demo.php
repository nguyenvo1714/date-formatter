<?php

use Illuminate\Support\Facades\Route;

Route::get('date-format', [\Nguyenvc\DateFormatter\Http\Controllers\DemoController::class, 'formatDate']);