<?php

declare(strict_types=1);

namespace App\Gateways\Frontend\Application;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Yiisoft\Yii\View\ViewRenderer;

final class NotFoundHandler implements RequestHandlerInterface
{
    public function __construct(
        private ViewRenderer $viewRenderer,
    ) {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->viewRenderer
            ->withViewPath(__DIR__)
            ->withLayout('@root/gateways/frontend/layout/error.php')
            ->render('not-found.php')
            ->withStatus(404);
    }
}
