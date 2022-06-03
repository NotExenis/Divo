<?php
require 'private/conn.php';

$id = $_POST['id'];
$sql = "SELECT * FROM tbl_users WHERE user_id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(array(':id' => $id));
$r = $stmt->fetch();
?>

<form action="php/edit_beheer.php" method="POST" enctype="multipart/form-data">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Edit een beheerder</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Kies een code" name="code" value="<?= $r['user_postcode']  ?>" class="form-control form-control-lg">
                <label class="form-label" >Eigen code</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Pincode opnieuw aub" name="pincode" class="form-control form-control-lg">
                <label class="form-label" >Pincode</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Naam" value="<?= $r['admin_naam'] ?>" name="naam" class="form-control form-control-lg">
                <label class="form-label" >Naam</label>
              </div>
              <input type="hidden" value="<?= $r['user_id'] ?>" name="id">
              <button  class="btn btn-outline-light btn-lg px-5" type="submit">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
