<?php

//FRONT CONTROLLER

//SETTINGS
session_start();
$_SESSION['user'] = 'admin';
ini_set('dispalay_errors', 1);
error_reporting(E_ALL);



//FILES
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('ADG_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/admin');
require_once(ROOT . '/components/Router.php');

//BD

//ROUTER
$router = new Router();
$router->AnalysisQuery();

// $string = '21-12-2019';

// $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

// $replacment = 'Mouth: $2, Day: $1, Year: $3';

// echo preg_replace($pattern, $replacment, $string);
