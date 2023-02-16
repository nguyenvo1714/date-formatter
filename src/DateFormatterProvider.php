<?php

use Illuminate\Support\ServiceProvider;

class DateFormatterProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/demo.php');
    }
}