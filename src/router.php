<?php


use src\Controllers\HomeController;
use src\Controllers\UtilisateurController;
use src\Services\Routing;

// // $uri = $_SERVER['REQUEST_URI'];
$url = $_SERVER['REDIRECT_URL']; 
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController();
// // $reservationController = new ReservationController();
// // $simplonController = new SimplonController();

switch ($url) {

    case HOME_URL:
        if ($methode == 'GET') {
            $homeController->homepage();
        } else if ($methode === 'POST') {
            $homeController->auth();
        } else {
            $homeController->homepage();
        }
        break;

    

    default:
        // $homeController->pageNotFound();
        break;
}


// use src\Controllers\HomeController;
// use src\Controllers\UtilisateurController;
// use src\Services\Routing;



// // $ReservationController = new ReservationController;
// $HomeController = new HomeController;

// $route = $_SERVER['REDIRECT_URL']; 
// $methode = $_SERVER['REQUEST_METHOD'];

// $routeComposee = Routing::routeComposee($route);

// // var_dump($url)

//     switch ($route) {
//         case HOME_URL:
//         if (isset($_SESSION['connecté'])) {
//             die;
//             } else {
//             $HomeController->index();
//             }
//             break;

        // case HOME_URL.'connexion':
          
        //     if (isset($_SESSION['connecté'])) {
        //         header('location: /dashboard');
        //         die;
        //         } else {
        //         if ($methode === 'POST') {
        //         $HomeController->auth($_POST['password']);
        //         } else {
        //         $HomeController->index();
        //         }
        //         }
        //         break;
    
        // case HOME_URL.'Reserver':
        //     if ($methode === "POST") {
        // //     $data = $_POST;
        // //     
        //     $ReservationController->save($_POST);
        //     header('location: '.HOME_URL.'dashboard');


        // // var_dump();
        // }
        // break;

        // case HOME_URL.'connexion':
        //     //     if (isset($_SESSION['connecté'])) {
        //     //       header('location: /dashboard');
        //     //       die;

//         default:
//     // $HomeController->page404();
//     echo('404');
//     break;
// }


// case HOME_URL.'test':
//     $Reservation = new ReservationRepository();
//      var_dump($Reservation->getAllReservations());


// switch ($route) {
//     case HOME_URL:

//         if (isset($_SESSION['connecté'])) {
//         header('location: '.HOME_URL.'dashboard');
//         die;
//         } else {
//         $HomeController->index();
//         }
//         break;
//     case HOME_URL.'test':
//            $AllUsers= new ReservationRepository();
//             var_dump($Reservation->getReservationID());

//     default:
//         $HomeController->page404();
//         break;
// }





// switch ($route) {
//   case HOME_URL:
//     if (isset($_SESSION['connecté'])) {
//       header('location: '.HOME_URL.'dashboard');
//       die;
//     } else {
//       $HomeController->index();
//     }
//     break;

//   case HOME_URL.'connexion':
//     if (isset($_SESSION['connecté'])) {
//       header('location: /dashboard');
//       die;
//     } else {
//       if ($methode === 'POST') {
//         $HomeController->auth($_POST['password']);
//       } else {
//         $HomeController->index();
//       }
//     }
//     break;

//   case HOME_URL.'deconnexion':
//     $HomeController->quit();
//     break;

//   case str_contains($route, "dashboard"):
//     if (isset($_SESSION["connecté"])) {
//       // On a ici toutes les routes qu'on a à partir du dashboard

//       switch ($route) {
//         case str_contains($route, "films"):
//           // On a ici toutes les routes qu'on peut faire pour les films
//           switch ($route) {
//             case str_contains($route, "new"):
//               if ($methode === "POST") {
//                 $data = $_POST;
//                 $FilmController->save($data);
//               } else {
//                 $FilmController->new();
//               }
//               break;

//             case str_contains($route, 'details'):
//               $idFilm = explode('/', $route);
//               $idFilm = end($idFilm);
//               $FilmController->show($idFilm);
//               break;

//             case str_contains($route, "edit"):
//               $idFilm = explode('/', $route);
//               $idFilm = end($idFilm);
//               $FilmController->edit($idFilm);
//               break;

//             case str_contains($route, "update"):
//               if ($methode === "POST") {
//                 $idFilm = explode('/', $route);
//                 $idFilm = end($idFilm);
//                 $data = $_POST;
//                 $FilmController->save($data, $idFilm);
//               }
//               break;

//             case str_contains($route, "delete"):
//               $idFilm = explode('/', $route);
//               $idFilm = end($idFilm);
//               $FilmController->delete($idFilm);
//               break;

//             default:
//               // par défaut on voit la liste des films.
//               $FilmController->index();
//               break;
//           }

//           break;

//         default:
//           // par défaut une fois connecté, on voit la liste des films.
//           $FilmController->index();
//           break;
//       }
//     } else {
//       header("location: ".HOME_URL);
//       die;
//     }
//     break;

//   default:
//     $HomeController->page404();
//     break;
// }
