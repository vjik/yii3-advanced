<?php

declare(strict_types=1);

namespace App\Gateways\Frontend\ExampleAction;

use Psr\Http\Message\ResponseInterface;
use Yiisoft\Yii\View\ViewRenderer;

final class ExampleAction
{
    public function __invoke(
        ViewRenderer $viewRenderer
    ): ResponseInterface
    {
        return $viewRenderer->withViewPath(__DIR__)->render('template');
    }
}
