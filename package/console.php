#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use  kollex\Command\ImportCommand;

$app = new Application();

$app->add(new ImportCommand());
$app->run();
