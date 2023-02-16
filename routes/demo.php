<?php

use Illuminate\Support\Facades\Route;

Route::get('date-format', [\Nguyenvc\DateFormatter\Controllers\DemoController::class, 'formatDate']);