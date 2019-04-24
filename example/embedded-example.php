<?php

// Require ViEWD
// You'll usually want to add ViEWD to your autoloader instead.
require_once(__DIR__ . '/../src/ViEWD.php');
require_once(__DIR__ . '/../src/ViEWDLoader.php');

use Voidblaster\ViEWD\ViEWDLoader;
use Voidblaster\ViEWD\ViEWD;

// Create a new instance of ViEWDLoader and specify the templates directory
$viewd = new ViEWDLoader(__DIR__ . '/templates/');

// Load a template (in this case: 'templates/example.tpl.php')
$tpl = $viewd->load('example');

// Assign variables
$me = 'Johnny';
$tpl->set('name', $me);
$tpl->set('title', 'My Title');
$tpl->set('numbers', [10, 20, 30, 40, 50]);

// Output the view
$tpl->print();
