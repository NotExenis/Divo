<?php 
require 'private/conn.php';

$sql = "SELECT * FROM tbl_users WHERE user_role ='admin' ";
$stmt = $db->prepare($sql);
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
            <th scope="col">naam</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </thead>
        <tbody>
        <?php foreach($stmt  as $r){ ?>
            <tr>

            <td><?= $r['admin_naam'] ?></td>
            <td>
                <form action="index.php?page=edit_beheer">
                    <input type="hidden" value="<?= $r['user_id'] ?>">
                    <button class="btn btn-warning">Edit</button>
                </form>
            </td>
            <td>
                <form action="php/delete_beheer.php">
                    <input type="hidden" value="<?= $r['user_id'] ?>">
                    <button class="btn btn-warning">Delete</button>
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