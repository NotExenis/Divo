<?php 
session_start();
require '../private/conn.php';
$ww = password_hash($_POST['pincode'], PASSWORD_DEFAULT);
$code = $_POST['code'];
$role = 'admin';
$naam = $_POST['naam'];

$sql2 = "SELECT * FROM tbl_users WHERE user_postcode = :code";
$stmt2 = $db->prepare($sql2);
$stmt2->bindParam(':code', $code);
$stmt2->execute();

if($stmt2->rowCount() == 0){
    $sql = "INSERT INTO tbl_users (user_postcode, user_pincode, user_role, admin_naam)
        VALUES (:code, :pincode, :role, :naam)";
$stmt = $db->prepare($sql);
$stmt->execute(array( 
    ':pincode'	=> $ww,
    ':code'	=> $code,
    ':role'	=> $role,
    ':naam'=>$naam
));   

header('location: ../index.php?page=home_admin');
}else{

    $_SESSION['melding'] = "Deze code is al in gebruik";
    header('location: ../index.php?page=add_beheer');

}


?>