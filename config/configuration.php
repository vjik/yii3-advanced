<?php

declare(strict_types=1);

return [
    'config-plugin-options' => [
        'source-directory' => 'config',
    ],
    'config-plugin' => [
        'params' => 'common/params.php',
        'di' => 'common/definitions/*',
        'di-console' => '$di',
        'di-frontend' => [
            '$di',
            '$di-web',
            'frontend/definitions/*',
        ],
        'params-web' => '$params',
        'params-console' => [
            '$params',
            'console/params.php',
        ],
    ],
    'config-plugin-environments' => [
        'development' => [],
        'testing' => [],
        'production' => [],
    ],
];
