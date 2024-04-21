<?php

namespace src\Repositories;

use src\Models\Utilisateur;
use PDO;
use src\Models\Database;

class UtilisateurRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.php';
  }


  public function recupererUtilisateurParEmail($mailConnexion)
  {

    $sql = "SELECT gest_utilisateur.id_utilisateur, 
    gest_utilisateur.nom,
    gest_utilisateur.prenom,
    gest_utilisateur.mail, 
    gest_utilisateur.mot_de_passe, 
    gest_utilisateur.compte_active, 
    gest_role.nom AS NameRole,
    gest_role.id_role AS IdRole FROM gest_utilisateur
    LEFT JOIN gest_role ON gest_utilisateur.id_role = gest_role.id_role 
    WHERE gest_utilisateur.mail = :mail;";

    $statement = $this->DB->prepare($sql);

    $statement->execute([':mail' => $mailConnexion]);
    $statement->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
    return $statement->fetch();
  }




  // public function recupererUtilisateurParEmail($mailConnexion)
  // {

  //   $sql = "SELECT gest_utilisateur.id_utilisateur, 
  //   gest_utilisateur.nom,
  //   gest_utilisateur.prenom,
  //   gest_utilisateur.mail, 
  //   gest_utilisateur.mot_de_passe, 
  //   gest_utilisateur.compte_active, 
  //   gest_role.nom AS NameRole,
  //   gest_role.id_role AS IdRole FROM gest_utilisateur
  //   LEFT JOIN gest_role ON gest_utilisateur.id_role = gest_role.id_role 
  //   WHERE gest_utilisateur.mail = :mail;";

  //   $request = $this->DB->prepare($sql);

  //   $request->execute([':mail' => $mailConnexion]);
  //   $request->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
  //   $row =  $request->fetch();
  //   if (!$row) {
  //     return false;
  //   }
  //   return $row;
  // }




  // Permet de créer un nouvel utilisateur. 
  // Retourne l'objet de l'utilisateur avec son Id créé par la BDD.
  /* 
   * @param Utilisateur 
   * @return Utilisateur
   */
  public function CreateThisUtilisateur(Utilisateur $utilisateur): Utilisateur
  {
    $sql = "INSERT INTO " . PREFIXE . "utlisateur (NOM, PRENOM, , MAIL, MOT_DE_PASSE, COMPTE_ACTIVE) VALUES (:nom, :prenom, :mail, :motDePasse, :compteActive);";

    $statement = $this->DB->prepare($sql);

    $statement->execute([
      ':nom'          => $utilisateur->getNom(),
      ':prenom'       => $utilisateur->getPrenom(),
      ':mail'         => $utilisateur->getMail(),
      ':motDePasse'   => $utilisateur->getMotDePasse(),
      ':compteActive' => $utilisateur->getCompteActive()
    ]);

    $id = $this->DB->lastInsertId();
    $utilisateur->setIdUtilisateur($id);

    return $utilisateur;
  }
}
