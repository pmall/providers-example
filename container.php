<?php

require __DIR__ . '/vendor/autoload.php';

$providers = glob(__DIR__ . '/config/*/*.php');

return new Ellipse\Container($providers);
