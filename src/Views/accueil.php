<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= HOME_URL ?>assets/js/form-field-checker.js" defer></script>
    <script src="<?= HOME_URL ?>assets/js/section-display.js" defer></script>
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Gestion des étudiants</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">SIMPLON</a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="fw-bold btn" type="submit">Connexion</button>
    </div>
  </div>
</nav>

<form>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Email*</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="sonia.blanken@gmail.com">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Mot de passe*</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="******">
</div>
<button type="button" class="fw-bold btn btn-primary">Connexion</button>
</form>