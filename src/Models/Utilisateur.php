<?php

namespace src\Models;

use src\Services\Hydratation;

class Utilisateur {
  private $IdUtilisateur; 
  private $nom;
  private $prenom;
  private $mail;
  private $motDePasse; 
  private $compteActive;
  private $IdRole;
  private $IdPromotion;

  use Hydratation;

  
  /**
   * Get the value of Id
   */
  public function getIdUtilisateur()
  {
    return $this->IdUtilisateur;
  }

  /**
   * Set the value of Id
   */
  public function setIdUtilisateur($IdUtilisateur): self
  {
    $this->Id_utilisateur = $IdUtilisateur;

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

  /**
   * Get the value of prenom
   */
  public function getPrenom()
  {
    return $this->prenom;
  }

  /**
   * Set the value of prenom
   */
  public function setPrenom($prenom): self
  {
    $this->prenom = $prenom;

    return $this;
  }

  /**
   * Get the value of mail
   */
  public function getMail()
  {
    return $this->mail;
  }

  /**
   * Set the value of mail
   */
  public function setMail($mail): self
  {
    $this->mail = $mail;

    return $this;
  }

  /**
   * Get the value of motDePasse
   */
  public function getMotDePasse()
  {
    return $this->motDePasse;
  }

  /**
   * Set the value of motDePasse
   */
  public function setMotDePasse($motDePasse): self
  {
    $this->motDePasse = $motDePasse;

    return $this;
  }

  /**
   * Get the value of compteActive
   */
  public function getCompteActive()
  {
    return $this->compteActive;
  }

  /**
   * Set the value of compteActive
   */
  public function setCompteActive($compteActive): self
  {
    $this->compteActive = $compteActive;

    return $this;
  }
}
