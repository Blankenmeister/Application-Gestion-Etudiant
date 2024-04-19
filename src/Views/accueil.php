<?php

include_once __DIR__ . '/Includes/header.php';


?>

  <div class='section-accueil'>
    <div class='pt-5 mb-5 contenair-connexion'>
      <h1 class='mb-5'>Bienvenue !</h1>

      <form>
        <div class="mx-5 mb-3">
          <label for="mailConnexion" class="form-label">Email*</label>
          <input type="text" class="form-control" id="mailConnexion" value="" placeholder="sonia.blanken@gmail.com">
        </div>
        <div class="m-5 mb-3">
          <label for="mdpConnexion" class="form-label">Mot de passe*</label>
          <input type="text" class="form-control" id="mdpConnexion" value="" placeholder="******">
        </div>
        <button type="button" class="mx-5 m-4 fw-bold btn btn-primary" id="btnConnexion" onclick="AjaxConnexion(event)">Connexion</button>

      </form>
    </div>
  </div>
</div>