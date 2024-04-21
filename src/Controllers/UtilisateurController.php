<?php

namespace src\Controllers;

use src\Models\Utilisateur;
use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

class UtilisateurController
{
  private $UtilisateurRepo;

  use Reponse;

  public function __construct()
  {
    $this->UtilisateurRepo = new UtilisateurRepository();
  }
}
