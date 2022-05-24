<?php echo "<pre>", print_r($_SESSION), "</pre>"; 
require 'private/conn.php';
$sql = "SELECT * FROM tbl_partij 
        INNER JOIN tbl_orientatie ON tbl_partij.partij_orientatie = tbl_orientatie.or_id WHERE partij_id";
$stmt= $db->prepare($sql);
$stmt->execute();
?>


<div class="container">
  <div class="row">
    <div class="col-sm">


    </div>
    <div class="col-sm">
            <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Partij naam</th>
            <th scope="col">Afkorting</th>
            <th scope="col">Foto</th>
            <th scope="col">Orientatie</th>
            <th scope="col">Open partij</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($stmt  as $r){ ?>
            <tr>
            <td><?= $r['partij_naam'] ?></td>
            <td><?= $r['partij_afkorting'] ?></td>
            <td><img class="as_img" src="data:image/png;base64,<?php echo $r['partij_foto'] ?>" width=100 height=100></td>
            <td><?= $r['li_re'] ?></td>
            <td>
              <a href="index.php?page=openpartij&id=<?= $r['partij_id']?>" class="btn btn-outline-light">Open partij</a>
            </td>
            <td>              
              <form action="index.php?page=edit_partij" method="post">
                <input type="hidden" value="<?= $r['partij_id'] ?>">
                <button class="btn btn-outline-light">Edit</button>
              </form>
            </td>
            <td>
              <form action="php/del_partij.php" method="post">
                <input type="hidden" name="id" value="<?= $r['partij_id'] ?>">
                <button class="btn btn-outline-light">Delete</button>
              </form>
            </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <div class="col-sm">


    </div>
  </div>
</div>