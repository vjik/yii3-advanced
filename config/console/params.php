<?php

declare(strict_types=1);

use App\Gateways\Console\HelloWorld;

return [
    'yiisoft/yii-console' => [
        'commands' => [
            'hello-world' => HelloWorld::class,
        ],
    ],
];
