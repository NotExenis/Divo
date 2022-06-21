<?php
$id = $_POST['lid_id'];
$sql = "SELECT * FROM tbl_leden WHERE lid_id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(array(
    ':id'=>$id
));
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$id = $r['user_id']
?>


<form action="php/edit_lid.php" method="POST" enctype="multipart/form-data">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Edit lid</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Voornaam" name="voornaam" value="<?= $r['lid_voornaam'] ?>" class="form-control form-control-lg">
                <label class="form-label" >Voornaam</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Tussenvoegsel" name="tussenvoegsel" value="<?= $r['lid_tussenvoegsel'] ?>" class="form-control form-control-lg">
                <label class="form-label" >Tussenvoegsel</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Achternaam" name="achternaam" value="<?= $r['lid_achternaam'] ?>" class="form-control form-control-lg">
                <label class="form-label" >Achternaam</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="date" placeholder="Geboortedatum" name="geboorte" class="form-control form-control-lg">
                <label class="form-label" >Geboortedatum</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Woonplaats" name="woonplaats" value="<?= $r['lid_woonplaats'] ?>" class="form-control form-control-lg">
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
                <input type="text" placeholder="Kieslijst" value="<?= $r['lid_kieslijst'] ?>" name="kieslijst" class="form-control form-control-lg">
                <label class="form-label" >Kieslijst</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" value="<?= $r['lid_id']?>" name="id" type="submit">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
