<?php

include_once __DIR__ . '/../Includes/header.php';

?>



<ul class="mx-3 mt-5 nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="homeTab" data-bs-toggle="tab" data-bs-target="#accueil" type="button" role="tab" aria-controls="accueil" aria-selected="true">Accueil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="promotionTab" data-bs-toggle="tab" data-bs-target="#promotion" type="button" role="tab" aria-controls="promotion" aria-selected="false">Promotions</button>
  </li>
</ul>
<section-ValiderPres id='ValiderPres'>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="accueil" role="tabpanel" aria-labelledby="accueil-tab">
    <h5 class="mx-3 mt-3">Cours du jour</h5>
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
  </div>
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
  </div>
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
  </div>
</div>
</div>
</section-SignRecu>


<script src="./assets/js/scriptPageFormateur.js" defer></script>