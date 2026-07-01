<?php

/*
 | Front controller for running PHPageBuilder as a standalone site.
 | This uses the "without Composer" setup from the README: it loads the
 | package helpers and registers the built-in PSR-0 autoloader, so no
 | vendor/ folder or build step is required on the server.
 */

require_once __DIR__ . '/src/Core/helpers.php';
spl_autoload_register('phpb_autoload');

$config = require __DIR__ . '/config.php';

$phpb = new PHPageBuilder\PHPageBuilder($config);
$phpb->handleRequest();
