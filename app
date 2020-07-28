<?php

use App\FullnameSurvey;
use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('Text transformer');

$app->add( new FullnameSurvey());

$app->run();
