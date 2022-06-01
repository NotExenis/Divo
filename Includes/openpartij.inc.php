<?php
require 'private/conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_leden WHERE lid_partij = :id";
$stmt = $db->prepare($sql);
$stmt->execute(array('id' => $id));

?>

<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
      <br>
        <a href="index.php?page=add_lid&id=<?= $id ?>" name="id" class="btn btn-dark">Add leden</a>

        <div class="col-sm">
            <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Voornaam</th>
            <th scope="col">Acternaam</th>
            <th scope="col">Woonplaats</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($stmt as $r){ ?>
            <tr>
              <td><?= $r ['lid_voornaam']?></td>
              <td><?= $r ['lid_achternaam']?></td>
              <td><?= $r ['lid_woonplaats']?></td>
              <td>
                <form action="index.php?page=edit_lid" method="post">
                  <input type="hidden" value="<?= $r['lid_id'] ?>" name="lid_id"  >
                  <button class="btn btn-warning">Edit</button>
                </form>
              </td>
              <td>
                <form action="PHP/delete_lid.php" method="POST">
                  <input type="hidden" value="<?= $r['lid_id'] ?>" name="lid_id">
                  <button onclick="return confirm('Weet u het zeker?')" class="btn btn-warning">Delete</button>
                </form>
              </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>

    </div>
  </div>
    <div class="col-sm">

    </div>
  
</div>