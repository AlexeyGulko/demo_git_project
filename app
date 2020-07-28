<?php

use App\EchoNTimesCommand;
use App\FullnameSurvey;
use App\SayHelloCommand;
use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('Text transformer');

$app->add(new SayHelloCommand());
$app->add(new FullnameSurvey());
$app->add(new EchoNTimesCommand());

$app->run();
