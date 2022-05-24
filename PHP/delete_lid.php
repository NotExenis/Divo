<?php 
require '../private/conn.php';
$id = $_POST['lid_id'];

$sql = "DELETE FROM tbl_leden WHERE lid_id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(array(
    ':id'=>$id
));

header('location: ../index.php?page=home_admin');

?>