<?php


require_once __DIR__ . '/../Services/Reponse.php';

class HomeController
{
    use Reponse;

    public function homepage() {
      $this->render("accueil");
        // echo ('page accueil');
    }

    public function pageNotFound() {
        echo ('404');
    }
}





// Theophile
// namespace src\Controllers;

// use src\Services\Reponse;

// class HomeController
// {

//   use Reponse;

//   public function index(): void

  
//   {
//     if (isset($_GET['erreur'])) {
//       $erreur = htmlspecialchars($_GET['erreur']);
//     } else {
//       $erreur = '';
//     }
// // include(__DIR__. '/Views/formulaire'); render c'est pareil 
//     $this->render("accueil", ["erreur"=> $erreur]);

//     // $this->render("formulaire");
//   }

//   public function auth(string $password): void
//   {
//     if ($password === 'vercors') {
//       $_SESSION['connecté'] = TRUE;
//       header('location: '.HOME_URL.'dashboard');
//       die();
//     } else {
//       header('location: '.HOME_URL.'?erreur=connexion');
//     }
//   }

//   public function quit()
//   {
//     session_destroy();
//     header('location: '.HOME_URL);
//     die();
//   }

//   public function page404(): void
//   {    
//     header("HTTP/1.1 404 Not Found");
//     $this->render('404');
//   }
// }
