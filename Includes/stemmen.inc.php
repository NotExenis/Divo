<?php 
$sql = "SELECT * FROM tbl_partij";
$stmt = $db->prepare($sql);
$stmt->execute();
?>
<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
        <br>
          <?php foreach($stmt as $r){?>
        <div class="card">
            <div class="card bg-info">
          <img class="card-img" src="data:image/png;base64,<?= $r['partij_foto'] ?>" width=100 height=100>
          <input type="checkbox" name="partij" value="<?= $r['partij_id']?>"><label class="card-title" for="partij"> <?= $r['partij_naam']?></label>
          
          <a href="index.php?page=openpartij&id=<?= $r['partij_id']?>" class="btn btn-secondary">Zie leden</a>
          <?php } ?>
          <br>

          </div>
        </div>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
<form action="php/lid_script.php">
  <button type="submit">Hoi</button>
</form>