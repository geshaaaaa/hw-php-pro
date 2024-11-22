<?php


use Model\Admin;
use Model\User;
use Controller\PropertyControll;
spl_autoload_register(function ($namespace)
{
    $namespace = str_replace("\\", DIRECTORY_SEPARATOR, $namespace);
    $file = __DIR__ . "/$namespace" . ".php";

    if (!file_exists($file)) {
        throw new Exception("Class $namespace not found");
    }

    require_once $file;
});

$admin = new Admin();
$admin->setName("Boris");
$admin->setPosition("Admin");
$admin->setAge(44);
$user = new User();
$user->setPosition("User");
$user->setAge(-22);
$user->setName("Elizabeth");

$controller = new PropertyControll();
echo "У " . $admin->getName() . " ".  $controller->checkAge($admin->getAge())  . " " . $controller->checkPosition($admin->getPosition()) . PHP_EOL;
echo "У " . $user->getName() . " ".  $controller->checkAge($user->getAge()) . " ". $controller->checkPosition($user->getPosition()) . PHP_EOL;
