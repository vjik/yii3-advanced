<?php

declare(strict_types=1);

use Yiisoft\Yii\Runner\Http\HttpApplicationRunner;

require_once dirname(__DIR__, 2) . '/bootstrap.php';

(new HttpApplicationRunner(
    rootPath: dirname(__DIR__, 3),
    debug: $_ENV['YII_DEBUG'],
    checkEvents: $_ENV['YII_DEBUG'],
    environment: $_ENV['YII_ENV'],
    diGroup: 'di-frontend',
    paramsGroup: 'params-frontend',
))->run();
