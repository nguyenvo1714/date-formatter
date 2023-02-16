<?php

namespace Nguyenvc\DateFormatter\Controllers;

use Nguyenvc\DateFormatter\DateFormatter;
use Illuminate\Http\Request;

class DemoController
{
    public function formatDate(Request $request): string
    {
        return DateFormatter::format($request->date);
    }
}