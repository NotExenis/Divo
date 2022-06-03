<?php 

$sql = "SELECT * FROM tbl_orientatie";
$stmt = $db->prepare($sql);
$stmt->execute();
?>

<form action="php/add_partij.php" method="POST" enctype="multipart/form-data">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Voeg partij toe</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Partij naam" name="partij_naam" class="form-control form-control-lg">
                <label class="form-label" >Partij naam</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Afkorting" name="afk" class="form-control form-control-lg">
                <label class="form-label">Afkorting</label>
              </div>

              <div class="form-outline form-white mb-4">
                <select name="orie">
                  <?php foreach($stmt as $r){ ?>
                  <option value="<?= $r['or_id'] ?>"><?= $r['li_re'] ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="file" name="pic" class="form-control form-control-lg">
                <label class="form-label">Foto</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Voeg toe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
