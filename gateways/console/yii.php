<?php

declare(strict_types=1);

use Yiisoft\Yii\Runner\Console\ConsoleApplicationRunner;

require_once dirname(__DIR__) . '/bootstrap.php';

(new ConsoleApplicationRunner(
    rootPath: dirname(__DIR__, 2),
    debug: $_ENV['YII_DEBUG'],
    checkEvents: $_ENV['YII_DEBUG'],
    environment: $_ENV['YII_ENV']
))->run();
