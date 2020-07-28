<?php

use App\FullnameSurvey;
use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('Console app');

$app->add( new FullnameSurvey());
$app->add(new \App\EchoNTimesCommand());

$app->run();
