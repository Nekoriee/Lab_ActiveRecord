<?php

use Pcat\ActiveRecord\Controller;
use Pcat\ActiveRecord\Person;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . "/vendor/autoload.php";

$loader = new FilesystemLoader(__DIR__ . '/templates/');
$twig = new \Twig\Environment($loader);

$controller = new Controller($twig);

$person = new Person();
$db_results = $person->getAll();

$controller->showTable($db_results);

