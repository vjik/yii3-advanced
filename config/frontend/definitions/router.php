<?php

declare(strict_types=1);

use Yiisoft\Router\Group;
use Yiisoft\Router\RouteCollection;
use Yiisoft\Router\RouteCollectionInterface;
use Yiisoft\Router\RouteCollectorInterface;

return [
    RouteCollectionInterface::class => static function (RouteCollectorInterface $collector) {
        $collector->addGroup(
            Group::create()
                ->routes(
                    ...require dirname(__DIR__) . '/routes.php',
                )
        );

        return new RouteCollection($collector);
    },
];
