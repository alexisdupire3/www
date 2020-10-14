#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';


use App\Command\HelloWorldCommande;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Component\Console\Application;


$app = new Application('application','1.0.0');

$app -> add(new HelloWorldCommande());


$app->run();