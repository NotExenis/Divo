<?php 
require '../private/conn.php';
$ww = password_hash($_POST['pincode'], PASSWORD_DEFAULT);
$postcode = $_POST['postcode'];

$sql = "INSERT INTO tbl_users(user_postcode, user_pincode)
        VALUES(:postcode, :pincode)";
$stmt = $db->prepare($sql);
$stmt->execute(array( 
    ':postcode'=>$postcode,
    ':pincode'=>$ww
));
header('location:../index.php?page=login')
?>