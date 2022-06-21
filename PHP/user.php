<?php 
require '../private/conn.php';

$votes = 3;
$role = 'user';

foreach(range(1, 100) as $index){

    $postcode = mt_rand(1111,9999);
    $pincode = 6666;
    $ww = password_hash($pincode, PASSWORD_DEFAULT);

    $sql = "SELECT user_postcode FROM tbl_users WHERE user_postcode = :postcode";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':postcode',$postcode);
    $stmt->execute();
    $r = $stmt->fetch();

    $sql2 = 'INSERT INTO tbl_users (user_postcode, user_pincode, user_role, lid_votes)
             VALUES                (:postcode, :pincode, :urole, :votes)';
    $stmt2 = $db->prepare($sql2);
    $stmt2->execute(array(
        ':postcode'=>$postcode,
        ':pincode'=>$ww,
        ':urole'=>$role,
        ':votes'=>$votes,
    ));
}
