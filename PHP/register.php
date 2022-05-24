<?php 
require '../private/conn.php';
$ww = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$email = $_POST['email'];

$sql = "INSERT INTO tbl_users(user_postcode, user_pincode)
        VALUES(:email, :wachtwoord)";
$stmt = $db->prepare($sql);
$stmt->execute(array( 
    ':email'=>$email,
    ':wachtwoord'=>$ww
));

?>