<?php

declare(strict_types=1);

use App\Core\Infrastructure\Environment;
use Yiisoft\Yii\Runner\Console\ConsoleApplicationRunner;

$root = dirname(__DIR__, 2);

require_once  $root . '/vendor/autoload.php';

Environment::prepare();

(new ConsoleApplicationRunner(
    rootPath: $root,
    debug: $_ENV['YII_DEBUG'],
    checkEvents: $_ENV['YII_DEBUG'],
    environment: $_ENV['YII_ENV']
))->run();
