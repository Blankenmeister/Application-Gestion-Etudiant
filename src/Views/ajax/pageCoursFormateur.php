

 <header>
      <nav class="mb-5 navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SIMPLON</a>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="fw-bold btn" id="btnDeconnexion" type="submit">Déconnexion</button>
          </div>
        </div>
      </nav>
    </header>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Promotions</button>
    <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"> 
  <h5 class="mx-3 mt-5">Cours du jour</h5>
  
  <section-ValiderPres id='ValiderPres'>
    <div class="contenair-cours">
      <div class="flex">
        <h3>DWMW3 - après-midi</h3>
        <p class="date"><?php echo date('d-m-Y')?></p>
      </div>
      <p>15 participants</p>
      <div class="d-grid d-md-flex justify-content-md-end">
      <button class="my-3 btn btn-primary" id='btnValiderPresence' type="button">Valider présence</button>
      </div>
    </div>
</section-ValiderPres>


<section-SignEnCours id='SignEnCours'>
<div class="contenair-cours" id="afficherCode">
      <div class="flex">
        <h3>DWMW3 - après-midi</h3>
        <p class="date"><?php echo date('d-m-Y')?></p>
      </div>
      <p>15 participants</p>
      <div class="flexCode">
      <p class="mb-0 code">39440</p>
      </div>
      <div class="d-grid d-md-flex justify-content-md-end">
      <button class="my-3 btn btn-warning" id='btnSignatureEnCours' type="button">Signatures en cours</button>
      </div>
    </div>
</section-SignEnCours>

<section-SignRecu>
    <div class="mb-5 contenair-cours">
      <div class="flex">
        <h3>DWMW3 - matin</h3>
        <p class="date"><?php echo date('d-m-Y')?></p>
      </div>
      <p>15 participants</p>
      <div class="d-grid d-md-flex justify-content-md-end">
      <button class="my-3 btn btn-success" id='btnSignaturesRecu' type="button">Signatures recueillies</button>
      </div>
    </div>
</section-SignRecu>
</div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">.<p>coucou2</p>..</div>
</div>

<script src="./assets/js/scriptPageFormateur.js" defer></script> 

