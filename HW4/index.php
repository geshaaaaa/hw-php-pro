<?php

use Classes\User;
use Classes\CustomException;

spl_autoload_register(function ($namespace) {
    $namespace = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);
    $file = __DIR__ . "/$namespace.php";

    echo $file . '<br>';

    if (!file_exists($file)) {
        throw new Exception("Class $namespace not found");
    }

    require_once $file;
});

try {
    $firstUser = new User();
    $firstUser->setName("Hena");
    $firstUser->setAge(22);
    /*$firstUser->setEmail("gesha2020@gmal.com");*/
    print_r($firstUser->getAll());
}
catch (CustomException $exception)
{
   echo $exception->getMessage();
}
catch  (Exception $e)
{
    echo "Неизвестная ошибка: " . $e->getMessage();
}

