<?php

require __DIR__ . '/vendor/autoload.php';

$files = glob(__DIR__ . '/config/*/*.php');

return new Ellipse\Container(array_reduce($files, function (array $providers, string $file): array {

    return array_merge($providers, require $file);

}, []));
