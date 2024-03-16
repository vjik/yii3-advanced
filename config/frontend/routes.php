<?php

declare(strict_types=1);

use Yiisoft\Router\Route;

return [
    Route::get('/')
        ->action(\App\Gateways\Frontend\ExampleAction\ExampleAction::class)
        ->name('site/index')
];
