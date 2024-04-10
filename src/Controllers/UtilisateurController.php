<?php

namespace src\Controllers;

use src\Models\Utilisateur;
use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;
use UConverter;

class UtilisateurController
{
  private $UtilisateurRepo;
  
  use Reponse;

  public function __construct()
  {
    $this->UtilisateurRepo = new UtilisateurRepository();
  }

//   public function index()
//   {
//     $films = $this->FilmRepo->getAllFilms();
//     $this->render("Dashboard", ['section' => 'films', 'films' => $films]);
//   }

//   public function show($id)
//   {
//     $film = $this->FilmRepo->getThisFilmById($id);
//     $this->render('Dashboard', ['section' => 'films', 'action' => 'details', 'film' => $film]);
//   }

//   public function edit($id)
//   {
//     $film = $this->FilmRepo->getThisFilmById($id);
//     $categories = $this->CategoryRepo->getAllCategories();
//     $classifications = $this->ClassificationRepo->getAllClassifications();
//     $this->render('Dashboard', ['section' => 'films', 'action' => 'edit', 'film' => $film, 'categories' => $categories, 'classifications' => $classifications]);
//   }

//   public function new()
//   {
//     $categories = $this->CategoryRepo->getAllCategories();
//     $classifications = $this->ClassificationRepo->getAllClassifications();
//     $this->render('Dashboard', ['section' => 'films', 'action' => 'new', 'categories' => $categories, 'classifications' => $classifications]);
//   }

  public function save($data, $id = null)
  {
    foreach ($data as $key => $value) {
      // On enlève les catégories du formatage, car c'est un tableau
      if (!is_array($value)) {
      $data[$key] = htmlspecialchars($value);
      }
    }
    $utilisateur = new Utilisateur($data);
    
    if (!empty($utilisateur->getNom()) &&
    !empty($utilisateur->getPrenom()) && 
    !empty($utilisateur->getMail()) && 
    !empty($utilisateur->getMotDePasse()) && 
    !empty($utilisateur->getCompteActive())) {
      
      if ($id !== null) {
        $utilisateur->setId($id);
        // $this->FilmRepo->updateThisFilm($film);

        // $this->FilmRepo->removeFilmToCategories($film);
        // $this->FilmRepo->addFilmToCategories($film);

      } else {
        $film = $this->UtilisateurRepo->CreateThisUtilisateur($utilisateur);
        // $this->FilmRepo->addFilmToCategories($film);
      }
      header('location: /dashboard/films/details/' . $film->getId());
      
      die;
    // }else {
    //   $categories = $this->CategoryRepo->getAllCategories();
    //   $classifications = $this->ClassificationRepo->getAllClassifications();
    //   if ($id !== null) {
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'edit', 'film' => $film, 'categories' => $categories, 'classifications' => $classifications, 'error' => 'Tous les champs sont requis.']);
    //     die;
    //   } else {
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'new', 'film' => $film, 'categories' => $categories, 'classifications' => $classifications, 'error' => 'Tous les champs sont requis.']);
    //     die;
    //   }
    }

  }

//   public function delete($id)
//   {
//     $this->FilmRepo->deleteThisFilm($id);
//     $films = $this->FilmRepo->getAllFilms();
//     $this->render("Dashboard", ['section' => 'films', 'films' => $films]);
//   }
}
