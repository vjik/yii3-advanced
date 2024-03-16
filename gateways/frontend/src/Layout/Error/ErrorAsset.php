<?php

declare(strict_types=1);

namespace App\Gateways\Frontend\Layout\Error;

use Yiisoft\Assets\AssetBundle;

final class ErrorAsset extends AssetBundle
{
    public ?string $basePath = '@assets/error';
    public ?string $baseUrl = '@assetsUrl/error';
    public ?string $sourcePath = '@root/gateways/frontend/assets/error';

    public array $css = [
        'style.css',
    ];

}
