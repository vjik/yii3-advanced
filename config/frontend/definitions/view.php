<?php

declare(strict_types=1);

use Yiisoft\Yii\View\ViewRenderer;

return [
    ViewRenderer::class => [
        '__construct()' => [
            'viewPath' => '',
            'layout' => '@root/gateways/frontend/layout/main.php'
        ],
    ],
];
