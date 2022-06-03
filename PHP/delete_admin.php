<?php 
require '../private/conn.php';
$id = $_POST['id'];

$sql = "DELETE FROM tbl_users WHERE user_id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
header('location:../index.php?page=beheer_beheer');

?>