<?php

// Théophile

// On charge les classes et les repositories à la demande :
function ChargerClasses($classe)
{
  try {
    if(str_contains($classe, "src")){
      $classe = str_replace('src', '', $classe);
      $classe = str_replace('\\', '/', $classe);
      require_once __DIR__. $classe . ".php";
    }
    else {
      throw new Error("La classe $classe est introuvable.");
    }
  } catch (Error $e) {
    echo "Une erreur est survenue : " . $e->getMessage();
  }
}
// La demande justement :
spl_autoload_register('ChargerClasses');





// function classLoader($className)
// {
//     $filePathClass = $className . '.php';

//     $folderPathClasses = __DIR__ . '/Classes/';
//     $folderPathModels = __DIR__ . '/Models/';
//     $folderPathRepositories = __DIR__ . '/Repositories/';
//     $folderPathControllers = __DIR__ . '/Controllers/';

//     if (file_exists($folderPathClasses . $filePathClass)) {
//         require $folderPathClasses . $filePathClass;
//     }

//     if (file_exists($folderPathModels . $filePathClass)) {
//         require $folderPathModels . $filePathClass;
//     }

//     if (file_exists($folderPathRepositories . $filePathClass)) {
//         require $folderPathRepositories . $filePathClass;
//     }

//     if (file_exists($folderPathControllers . $filePathClass)) {
//         require $folderPathControllers . $filePathClass;
//     }
// }

// spl_autoload_register('classLoader');




