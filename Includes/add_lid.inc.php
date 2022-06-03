<?php
$id = $_GET['id'];
?>


<form action="php/add_lid.php" method="POST" enctype="multipart/form-data">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Voeg een lid toe</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Voornaam" name="voornaam" class="form-control form-control-lg">
                <label class="form-label" >Voornaam</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Tussenvoegsel" name="tussenvoegsel" class="form-control form-control-lg">
                <label class="form-label" >Tussenvoegsel</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Achternaam" name="achternaam" class="form-control form-control-lg">
                <label class="form-label" >Achternaam</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="date" placeholder="Geboortedatum" name="geboorte" class="form-control form-control-lg">
                <label class="form-label" >Geboortedatum</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Woonplaats" name="woonplaats" class="form-control form-control-lg">
                <label class="form-label" >Woonplaats</label>
              </div>
              <div class="form-outline form-white mb-4">
                  <label for="m/v">Geslacht</label>
                  <select name="geslacht">
                      <option value="M">Man</option>
                      <option value="V">Vrouw</option>
                  </select>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Kieslijst" name="kieslijst" class="form-control form-control-lg">
                <label class="form-label" >Kieslijst</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" value="<?= $id ?>" name="id" type="submit">Voeg toe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
