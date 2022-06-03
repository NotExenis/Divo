<?php 
require '../private/conn.php';
$id = $_POST['id'];
$naam = $_POST['naam'];
$code = $_POST['code'];
$pincode = password_hash($_POST['pincode'], PASSWORD_DEFAULT);


$sql = "UPDATE tbl_users
        SET user_postcode = :code, user_pincode = :pincode, admin_naam = :naam
        WHERE user_id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(array( 
    ':code'=>$code,
    ':pincode'=>$pincode,
    ':naam'=>$naam,
    ':id'=>$id
));
header('location:../index.php?page=beheer_beheer');

?>