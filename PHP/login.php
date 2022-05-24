<?php 
require '../private/conn.php';
session_start();
$post = $_POST['postcode'];
$pin = $_POST['pincode'];

$sql = "SELECT * FROM tbl_users WHERE user_pincode = :pincode";
$stmt = $db->prepare($sql);
$stmt->execute(array( 
    ':pincode'=>$pin
));
$r = $stmt->fetch();

if($pin == $r['user_pincode'] && $post == $r['user_postcode']){
    $_SESSION['role'] = $r['user_role'];
    $_SESSION['user_id'] = $r['user_id'];
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){
            header('location:../index.php?page=home_admin');
        }else{
            header('location:../index.php?page=home');

        }
    }else{
        header('location:../index.php?page=login');

    }
}

?>