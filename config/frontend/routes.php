<?php

declare(strict_types=1);

use Yiisoft\Router\Route;

return [
    Route::get('/')
        ->action(\App\Gateways\Frontend\HelloWebAction::class)
        ->name('site/index')
];
