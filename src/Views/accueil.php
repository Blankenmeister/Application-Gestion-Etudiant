<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= HOME_URL ?>assets/js/script.js" defer></script>
    <script src="<?= HOME_URL ?>assets/js/ajax/requeteConnexion.js" defer></script>
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestion des étudiants</title>
    <script>
        const HOME_URL = "<?= HOME_URL ?>";
    </script>
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIMPLON</a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="fw-bold btn" type="submit">Connexion</button>
    </div>
  </div>
</nav>
</header>

<div class='section-accueil'>
<div class='pt-5 contenair-connexion'>
<h1 class='mb-5'>Bienvenue !</h1>
  
<form>
<div class="mx-5 mb-3">
  <label for="formGroupExampleInput" class="form-label">Email*</label>
  <input type="text" class="form-control" id="mailConnexion" value="" placeholder="sonia.blanken@gmail.com">
</div>
<div class="m-5 mb-3">
  <label for="formGroupExampleInput2" class="form-label">Mot de passe*</label>
  <input type="text" class="form-control" id="mdpConnexion" value="" placeholder="******">
</div>
<button type="button" class="m-5 fw-bold btn btn-primary" onclick="AjaxConnexion(event)">Connexion</button>
<div id="message"></div>
</form>
</div>
</div>
