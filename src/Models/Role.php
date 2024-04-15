<?php

namespace src\Models;

use src\Services\Hydratation;

class Utilisateur {
    private $IdRole; 
    private $nom;
  
use Hydratation;


    /**
     * Get the value of Id_role
     */
    public function getIdRole()
    {
        return $this->IdRole;
    }

    /**
     * Set the value of Id_role
     */
    public function setIdRole($IdRole): self
    {
        $this->IdRole = $IdRole;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}