<?php

declare(strict_types=1);

namespace App\Gateways\Frontend;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

final class HelloWebAction
{
    public function __invoke(
        ResponseFactoryInterface $responseFactory
    ): ResponseInterface
    {
        return $responseFactory->createResponse(200);
    }
}
