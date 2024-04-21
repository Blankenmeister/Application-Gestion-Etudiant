
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= HOME_URL ?>">SIMPLON</a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="fw-bold btn" type="submit">Déconnexion</button>
    </div>
  </div>
</nav>

<section-Vp id='sectValiderPresence'>
  <ul class="mx-3 mt-5 nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#accueil" type="button" role="tab" aria-controls="accueil" aria-selected="true">Accueil</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="accueil" role="tabpanel" aria-labelledby="accueil-tab">
      <h5 class="mx-3 mt-3">Cours du jour</h5>
      <div class="contenair-cours">
        <div class="flex">
          <h3>DWMW3</h3>
          <p class="date"><?php echo date ('d-m-Y') ?></p>
        </div>
        <p>15 participants</p>
        <p>Code*</p>
        <input class="form-control" type="text" placeholder="Entrer code" aria-label="default input example">
        <div class="d-grid d-md-flex justify-content-md-end">
          <button class="my-4 btn btn-primary" id='btnValiderPresence' type="button">Valider présence</button>
        </div>
      </div>
    </div>
  </div>
</section-Vp>

<section-Sr id='sectSignatureRecueillie'>
  <ul class="mx-3 mt-5 nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#accueil" type="button" role="tab" aria-controls="accueil" aria-selected="true">Accueil</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="accueil" role="tabpanel" aria-labelledby="accueil-tab">
      <h5 class="mx-3 mt-3">Cours du jour</h5>
      <div class="contenair-cours">
        <div class="flex">
          <h3>DWMW3</h3>
          <p class="date"><?php echo date ('d-m-Y') ?></p>
        </div>
        <p>15 participants</p>
        <p>Code*</p>
        <input class="form-control" type="text" placeholder="" aria-label="default input example">
        <div class="d-grid d-md-flex justify-content-md-end">
          <button class="my-4 btn btn-secondary" id='btnSignatureRecueillie' type="button">Signature Recueillie</button>
        </div>
      </div>
    </div>
  </div>
</section-Sr>

<script src="./assets/js/scriptPageEtudiant.js" defer></script>