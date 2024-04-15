<?php

include_once __DIR__ . '/../Includes/header.php';

?>



<!-- <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Promotions</a>
  </li>
</ul> -->

<ul class="mx-3 mt-5 nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#accueil" type="button" role="tab" aria-controls="accueil" aria-selected="true">Accueil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="promotion-tab" data-bs-toggle="tab" data-bs-target="#promotion" type="button" role="tab" aria-controls="promotion" aria-selected="false">Promotions</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="accueil" role="tabpanel" aria-labelledby="accueil-tab">

  <h5 class="mx-3 mt-3">Cours du jour</h5>



  </div>
  <div class="tab-pane fade" id="promo" role="tabpanel" aria-labelledby="promo-tab">...</div>
</div>
