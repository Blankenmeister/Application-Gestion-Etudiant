<?php
namespace src\Controllers;


use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

// require_once __DIR__ . '/../Services/Reponse.php';

class HomeController
{
    use Reponse;

    public function homepage() {
      $this->render("accueil");
        
    }

    public function pageNotFound() {
        echo ('404');
    }

   
    public function auth(): void
    {

        if (!empty(file_get_contents('php://input'))) {
            $data = json_decode(file_get_contents('php://input'));

        // $request = file_get_contents('php://input');
        

        // if ($request) {
        //     $decodedRequest = json_decode($request);

        //     if ($decodedRequest) {
        //         $mailConnexion = htmlspecialchars($decodedRequest->mailConnexion);
        //         $mdpConnexion = htmlspecialchars($decodedRequest->mdpConnexion);

        if($data) {

            $mailConnexion = htmlspecialchars($data->mailConnexion);
            $mdpConnexion = password_hash($data->mdpConnexion, PASSWORD_DEFAULT);
            

                $utilisateurRepo = new UtilisateurRepository;

                $utilisateur = $utilisateurRepo->verifierMailSiExist($mailConnexion);
                
                var_dump($utilisateur);

                // include_once __DIR__ . '/../Views/ajax/pageCours.php';
            }
            }
      
      
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
