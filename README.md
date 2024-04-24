# Application-Gestion-Etudiant

### CONTEXTE  
Simplon cherche à s'émanciper des solutions externes utilisées pour ses services.  
On vous a demandé de créer une application de gestion des élèves, qui permettra de gérer  
les absences et les retards.   
Le cahier des charges et les maquettes vous sont fournies.  
L'application devra être fonctionnelle  
et mise en ligne en fin de brief, pour faire une démo.


**En tant que developpeur full stack, pour arriver au bout de ce gros contrat, vous devrez:**  
Créer un site responsive  
Gérer un backend avec MVC, qui communiquera avec le front sous format d'API, en JSON  
Permettre au front, construit en SPA, de récupérer et interagir avec le back, en asynchrone  
Gérer une base de données  
Construire les composants d'accès aux données à la main  
Déployer votre application sur le serveur de Simplon  
Faire des tests en développement  
Proposer un gitflow précis et construit  
Donner une documentation de déploiement et de suivi de projet  
​

### INSTALLATION  
**Le fichier config-exemple.php se trouve à la racine du projet.**  
Lors de l'installation en production,  
veuillez renseigner le fichier config-exemple.php avec les bonnes informations  
relatives à la base de données.  
Renommez-le en config.php.


Voici à quoi correspond les champs : 

DB_HOST: L'adresse de l'hôte de la base de données.  
DB_NAME: Le nom de la base de données.  
DB_USER: Le nom d'utilisateur pour se connecter à la base de données.  
DB_PWD: Le mot de passe pour se connecter à la base de données.  
HOME_URL: L'url de la page d'accueil.  


1 Cloner ce dépôt : git clone https://github.com/Blankenmeister/Application-Gestion-Etudiant  
2 Créer une base de données MySQL avec le fichier simplonsign.sql dans le dossier migration  
3 Remplir les informations de configuration dans le fichier config.php  
4 Lancer le serveur PHP (local via wamp)  


### MIGRATION
Le fichier script SQL est stocké dans le dossier Migration.

### VERSIONS
Le programme a été conçu avec:  
PHP 8.2.13  
MySQL 8.2.0 

### Fichiers:
Le fichier jpg du MCD se trouve dans le dossier /public/assets/images/