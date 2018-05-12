<?php

require_once __DIR__ . '/../src/viewd.php';
require_once __DIR__ . '/../src/viewdloader.php';
require_once __DIR__ . '/../src/generationtimed.php';

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
$gt = new GeNERATIONTiMED(5);
$gt->bindToViEWD($footer);

$site->print();

