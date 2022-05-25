

<form action="php/add_beheer.php" method="POST" enctype="multipart/form-data">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
                <p class="text-danger">
                    <?php 
                    if(isset($_SESSION['melding'])){
                        echo $_SESSION['melding'];
                        unset($_SESSION['melding']);
                    }
                    ?>
                </p>


              <h2 class="fw-bold mb-2 text-uppercase">Voeg een beheerder toe</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Kies een code" name="code" class="form-control form-control-lg">
                <label class="form-label" >Eigen code</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="4 Cijfer pincode" name="pincode" class="form-control form-control-lg">
                <label class="form-label" >Pincode</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" name="id" type="submit">Voeg toe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
