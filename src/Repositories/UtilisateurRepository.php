<?php

// namespace src\Repositories;

// use src\Models\Utilisateur;
// use PDO;
// use src\Models\Database;

class UtilisateurRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.php';
  }

  // Exemple d'une requête avec query :
  // il n'y a pas de risques, car aucun paramètre venant de l'extérieur n'est demandé dans le sql.
//   public function getAllFilms()
//   {
//     $sql = "SELECT cine_films.ID, 
//       cine_films.NOM, 
//       cine_films.URL_AFFICHE, 
//       cine_films.LIEN_TRAILER, 
//       cine_films.RESUME, 
//       cine_films.DUREE, 
//       cine_films.DATE_SORTIE, 
//       cine_films.ID_CLASSIFICATION_AGE_PUBLIC AS ID_CLASSIFICATION, 
//       GROUP_CONCAT(cine_categories.NOM) AS NOMS_CATEGORIES, 
//       GROUP_CONCAT(cine_categories.ID) AS ID_CATEGORIES, 
//       cine_classification_age_public.INTITULE as NOM_CLASSIFICATION 
//     FROM cine_films
//     LEFT JOIN cine_relations_films_categories ON cine_films.ID = cine_relations_films_categories.ID_FILMS 
//     LEFT JOIN cine_categories ON cine_relations_films_categories.ID_CATEGORIES = cine_categories.ID
//     INNER JOIN cine_classification_age_public ON cine_films.ID_CLASSIFICATION_AGE_PUBLIC = cine_classification_age_public.ID
//     GROUP BY cine_films.ID;";

//     return  $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Film::class);
//   }


  /**
   * Exemple d'une requête préparée, avec prepare, bindParam et execute :
   * - prepare : permet d'écrire la requête sql, en remplaçant les nom des variables par :variable.
   * Il est aussi possible de mettre un '?', mais c'est moins lisible, surtout quand on a beaucoup de paramètres à passer.
   * - bindParam : permet d'associer un :variable avec la vraie variable.
   * - execute : permet d'exécuter le sql complet. 
   * 
   * L'id est un paramètre donné par le code, il y a un risque d'altération de la donnée.
   * Pour éviter des injections on prépare (on désamorce) la requête.
   */

//   public function getThisUtilisateurById($id): Utilisateur
//   {
    // $sql = "SELECT cine_films.ID, 
    //   cine_films.NOM, 
    //   cine_films.URL_AFFICHE, 
    //   cine_films.LIEN_TRAILER, 
    //   cine_films.RESUME, 
    //   cine_films.DUREE, 
    //   cine_films.DATE_SORTIE, 
    //   cine_films.ID_CLASSIFICATION_AGE_PUBLIC AS ID_CLASSIFICATION, 
    //   GROUP_CONCAT(cine_categories.NOM) AS NOMS_CATEGORIES, 
    //   GROUP_CONCAT(cine_categories.ID) AS ID_CATEGORIES, 
    //   cine_classification_age_public.INTITULE as NOM_CLASSIFICATION 
    // FROM cine_films
    // LEFT JOIN cine_relations_films_categories ON cine_films.ID = cine_relations_films_categories.ID_FILMS 
    // LEFT JOIN cine_categories ON cine_relations_films_categories.ID_CATEGORIES = cine_categories.ID
    // INNER JOIN cine_classification_age_public ON cine_films.ID_CLASSIFICATION_AGE_PUBLIC = cine_classification_age_public.ID
    // WHERE cine_films.ID = :id
    // GROUP BY cine_films.ID";

//     $statement = $this->DB->prepare($sql);
//     $statement->bindParam(':id', $id);
//     $statement->execute();
//     $statement->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
//     return $statement->fetch();
//   }

  /**
   * Un autre exemple d'une requête préparée, avec prepare et execute :
   * Cette fois-ci on donne les paramètres tout de suite lors du execute, sous forme d'un tableau associatif.
   */
//   public function getThoseFilmsByClassificationAge($Id_Classification): array
//   {
//     $sql = "SELECT cine_films.ID, 
//       cine_films.NOM, 
//       cine_films.URL_AFFICHE, 
//       cine_films.LIEN_TRAILER, 
//       cine_films.RESUME, 
//       cine_films.DUREE, 
//       cine_films.DATE_SORTIE, 
//       cine_films.ID_CLASSIFICATION_AGE_PUBLIC AS ID_CLASSIFICATION, 
//       GROUP_CONCAT(cine_categories.NOM) AS NOMS_CATEGORIES, 
//       GROUP_CONCAT(cine_categories.ID) AS ID_CATEGORIES, 
//       cine_classification_age_public.INTITULE as NOM_CLASSIFICATION 
//     FROM cine_films
//     LEFT JOIN cine_relations_films_categories ON cine_films.ID = cine_relations_films_categories.ID_FILMS 
//     LEFT JOIN cine_categories ON cine_relations_films_categories.ID_CATEGORIES = cine_categories.ID
//     INNER JOIN cine_classification_age_public ON cine_films.ID_CLASSIFICATION_AGE_PUBLIC = cine_classification_age_public.ID
//     WHERE cine_films.ID_CLASSIFICATION_AGE_PUBLIC = :Id_Classification
//     GROUP BY cine_films.ID";

//     $statement = $this->DB->prepare($sql);

//     $statement->execute([':Id_Classification' => $Id_Classification]);

//     return $statement->fetchAll(PDO::FETCH_CLASS, Film::class);
//   }


  // Construire la méthode getThoseFilmsByName() Et oui, parce qu'on peut avoir plusieurs films avec le même nom !
//   public function getThoseUtilisateurByName($NOM): array
//   {
    // $sql = "SELECT cine_films.ID, 
    //   cine_films.NOM, 
    //   cine_films.URL_AFFICHE, 
    //   cine_films.LIEN_TRAILER, 
    //   cine_films.RESUME, 
    //   cine_films.DUREE, 
    //   cine_films.DATE_SORTIE, 
    //   cine_films.ID_CLASSIFICATION_AGE_PUBLIC AS ID_CLASSIFICATION, 
    //   GROUP_CONCAT(cine_categories.NOM) AS NOMS_CATEGORIES, 
    //   GROUP_CONCAT(cine_categories.ID) AS ID_CATEGORIES, 
    //   cine_classification_age_public.INTITULE as NOM_CLASSIFICATION 
    // FROM cine_films
    // LEFT JOIN cine_relations_films_categories ON cine_films.ID = cine_relations_films_categories.ID_FILMS 
    // LEFT JOIN cine_categories ON cine_relations_films_categories.ID_CATEGORIES = cine_categories.ID
    // INNER JOIN cine_classification_age_public ON cine_films.ID_CLASSIFICATION_AGE_PUBLIC = cine_classification_age_public.ID
    // WHERE cine_films.NOM LIKE :NOM
    // GROUP BY cine_films.ID;";

    // $statement = $this->DB->prepare($sql);

//     $statement->execute([':NOM' => "%" . $NOM . "%"]);

//     return $statement->fetchAll(PDO::FETCH_CLASS, Utilisateur::class);
//   }

  /**
   * Permet de créer un nouveau film. Retourne l'objet film avec son Id fraîchement créé par la BDD.
   *
   * @param Utilisateur $film
   * @return Utilisateur
   */
  // public function CreateThisUtilisateur(Utilisateur $utilisateur): Utilisateur
  // {
  //   $sql = "INSERT INTO " . PREFIXE . "utlisateur (NOM, PRENOM, , MAIL, MOT_DE_PASSE, COMPTE_ACTIVE) VALUES (:nom, :prenom, :mail, :motDePasse, :compteActive);";

  //   $statement = $this->DB->prepare($sql);

  //   $statement->execute([
  //     ':nom'               => $utilisateur->getNom(),
  //     ':url_affiche'       => $utilisateur->getPrenom(),
  //     ':lien_trailer'      => $utilisateur->getMail(),
  //     ':resume'            => $utilisateur->getMotDePasse(),
  //     ':duree'             => $utilisateur->getCompteActive()
  //   ]);

  //   $id = $this->DB->lastInsertId();
  //   $utilisateur->setId($id);

  //   return $utilisateur;
  // }

  // Construire la méthode updateThisFilm()
//   public function updateThisFilm(Film $film): bool
//   {
//     $sql = "UPDATE " . PREFIXE . "films 
//             SET NOM = :nom, 
//                 URL_AFFICHE = :url_affiche, 
//                 LIEN_TRAILER = :lien_trailer, 
//                 RESUME = :resume, 
//                 DUREE = :duree, 
//                 DATE_SORTIE = :date_sortie, 
//                 ID_CLASSIFICATION_AGE_PUBLIC = :id_classification 
//             WHERE ID = :id;";

//     $statement = $this->DB->prepare($sql);

//     $success = $statement->execute([
//       ':id'                => $film->getId(),
//       ':nom'               => $film->getNom(),
//       ':url_affiche'       => $film->getUrlAffiche(),
//       ':lien_trailer'      => $film->getLienTrailer(),
//       ':resume'            => $film->getResume(),
//       ':duree'             => $film->getDuree(),
//       ':date_sortie'       => $film->getDateSortie(),
//       ':id_classification' => $film->getIdClassification()
//     ]);

//     return $success;
//   }

//   // Construire la méthode deleteThisFilm()
//   public function deleteThisFilm($Id): bool
//   {
//     $sql = "DELETE FROM " . PREFIXE . "relations_films_categories WHERE ID_FILMS = :Id;
//             DELETE FROM " . PREFIXE . "projections WHERE ID_FILMS = :Id;
//             DELETE FROM " . PREFIXE . "films WHERE ID = :Id";

//     $statement = $this->DB->prepare($sql);

//     return $statement->execute([':Id' => $Id]);
//   }

//   public function addFilmToCategories(Film $film): bool
//   {
//     $sql = "INSERT INTO " . PREFIXE . "relations_films_categories (ID_CATEGORIES, ID_FILMS) VALUES (:id_category0, :id_film)";
//     for ($i = 1; $i < sizeof($film->getIdCategories()); $i++) {
//       $sql .= ", (:id_category$i, :id_film)";
//     }
//     $sql .= ";";
//     $statement = $this->DB->prepare($sql);
//     $variables = [":id_film" => $film->getId()];

//     for ($i = 0; $i < sizeof($film->getIdCategories()); $i++) {
//       $variables[":id_category$i"] = $film->getIdCategories()[$i];
//     }

//     return $statement->execute($variables);
//   }

//   public function removeFilmToCategories(Film $film): bool
//   {
//     $sql = "DELETE FROM ". PREFIXE . "relations_films_categories WHERE ID_FILMS = :id_film";
//     $statement = $this->DB->prepare($sql);
//     return $statement->execute([":id_film" => $film->getId()]);
//   }
}