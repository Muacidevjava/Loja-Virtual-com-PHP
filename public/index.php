<?php
// router.php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
   session_start();

   define('DEFAUT_CONTROLLER', 'home');
   define('DEFAULT_METHOD', 'index');

   require __DIR__ . '/../vendor/autoload.php';

  //require __DIR__ . '/../App/Function/functions_twig.php';

   require __DIR__ . '/bootstrap/bootstrap.php';
}
