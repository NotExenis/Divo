<?php 
require '../private/conn.php';
$id = $_POST['id'];
$sql = "DELETE FROM tbl_partij WHERE partij_id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(array( 
    ':id'=>$id
));
header('location:../index.php?page=home_admin');

?>