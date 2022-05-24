<?php
require '../private/conn.php';
$naam = $_POST['partij_naam'];
$afk = $_POST['afk'];
$orient = $_POST['orie'];
$id = $_POST['id'];

if($_FILES['pic']['tmp_name'] == NULL){
    $sql = "UPDATE tbl_partij 
            SET partij_naam = :naam, partij_afkorting = :afk, partij_orientatie = :orie 
            WHERE partij_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array( 
        ':naam'=>$naam,
        ':afk'=>$afk,
        ':orie'=>$orient,
        ':id'=>$id
    ));
    header('location:../index.php?page=home_admin');
}else {
    $pic = base64_encode(file_get_contents($_FILES['pic']['tmp_name']));

    $sql = "UPDATE tbl_partij 
            SET partij_naam = :naam, partij_afkorting = :afk, partij_orientatie = orie, partij_foto = :pic
            WHERE partij_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array( 
        ':naam'=>$naam,
        ':afk'=>$afk,
        ':orientatie'=>$orient,
        ':pic'=>$pic,
        ':id'=>$id
    ));
    header('location:../index.php?page=home_admin');
}






?>