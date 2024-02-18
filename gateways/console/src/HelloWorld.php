<?php

declare(strict_types=1);

namespace App\Gateways\Console;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yiisoft\Yii\Console\ExitCode;

#[AsCommand(
    name: 'hello-world',
    description: 'Example of console command'
)]
final class HelloWorld extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo 'Hello, World!';
        return ExitCode::OK;
    }
}
