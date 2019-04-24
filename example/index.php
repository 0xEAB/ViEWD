<?php

require_once __DIR__ . '/../src/ViEWD.php';
require_once __DIR__ . '/../src/ViEWDLoader.php';
require_once __DIR__ . '/../src/GeNERATIONTiMED.php';

use Voidblaster\ViEWD\ViEWDLoader;
use Voidblaster\ViEWD\ViEWD;
use Voidblaster\ViEWD\GeNERATIONTiMED;

$viewd = new ViEWDLoader(__DIR__ . '/templates/');

$site = $viewd->load('layout');

$head = $viewd->load('head');
$head->set('title', 'ViEWD example page');
$site->set('head', $head);

$main = $viewd->load('main');
$main->set('content', $viewd->load('content'));
$main->set('headerText', 'This is an example page made with the ViEWD template engine.');
$site->set('main', $main);

$footer = $viewd->load('footer');
$main->set('footer', $footer);
$gt = new GeNERATIONTiMED();
$gt->bindToViEWD($footer);

$site->print();

