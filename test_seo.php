<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Services\SeoMetaService;

$paths = [
    'universities/private-institution-in-malaysia',
    'universities/public-institution-in-malaysia',
    'universities/foreign-universities-in-malaysia',
];

foreach ($paths as $path) {
    $meta = SeoMetaService::resolve($path);
    echo "=== Path: $path ===\n";
    echo "Title: " . ($meta['metaTitle'] ?? 'NOT SET') . "\n";
    echo "Desc: " . substr($meta['metaDescription'] ?? 'NOT SET', 0, 80) . "...\n";
    echo "\n";
}
