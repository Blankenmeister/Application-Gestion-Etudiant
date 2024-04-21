<?php

namespace src\Controllers;

use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

class HomeController
{
    use Reponse;

    public function homepage()
    {
        $this->render("accueil");
    }

    public function pageNotFound()
    {
        echo ('404');
    }


    
    public function auth(): void
    {
        if (!empty(file_get_contents('php://input'))) {
            $data = json_decode(file_get_contents('php://input'));

            if ($data) {
                $mailConnexion = htmlspecialchars($data->mailConnexion);
                $mdpConnexion = $data->mdpConnexion;
                // $mdpHashConnexion = password_hash($data->mdpConnexion, PASSWORD_DEFAULT);
                $utilisateurRepo = new UtilisateurRepository;
                $utilisateurBDD = $utilisateurRepo->recupererUtilisateurParEmail($mailConnexion);

                if ($utilisateurBDD) {
                    // L'utilisateur existe, vérification du mot de passe entré par l'utilisateur et celui en BDD
                    if (password_verify($mdpConnexion, $utilisateurBDD->getMotDePasse())) {
                        // Si le mot de passe est correct, initialisation de la session
                        $_SESSION['connecté'] = true;
                        $_SESSION['role'] = $utilisateurBDD->getNomRole();

                        // Redirection selon le rôle
                        if ($_SESSION['role'] === "etudiant") {
                            include_once __DIR__ . '/../Views/ajax/pageCoursEtudiant.php';
                        } else {
                            include_once __DIR__ . '/../Views/ajax/pageCoursFormateur.php';
                        }
                        exit(); 
                    } else {
                        echo "Mot de passe incorrect!";
                    }
                } else {
                    echo "Aucun utilisateur trouvé avec cet email!";
                }
            }
        }
    }
}


  // var_dump($utilisateur);
                // var_dump($mdpHashConnexion); 

                // var_dump($utilisateurBDD);
                // recupération en objet
                // var_dump($utilisateurBDD->getNom());






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
