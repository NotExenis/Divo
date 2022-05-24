<?php 
require '../private/conn.php';
$naam = $_POST['partij_naam'];
$orie = $_POST['orie'];
$afk = $_POST['afk'];
$pic = base64_encode(file_get_contents($_FILES['pic']['tmp_name']));

$sql2 = "SELECT * FROM tbl_partij WHERE partij_naam = :naam";
$stmt = $db->prepare($sql2);
$stmt->execute(array( 
    ':naam'=>$naam
));

if($stmt->rowCount() == 0){
        $sql = "INSERT INTO tbl_partij (partij_naam, partij_afkorting, partij_foto, partij_orientatie)
        VALUES(:naam, :afk, :foto, :orientatie)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(
    ':naam'=>$naam,
    ':afk'=>$afk,
    ':foto'=>$pic,
    ':orientatie'=>$orie
    ));
    header('location: ../index.php?page=home_admin');

}else{
    ?> 
    <script type="text/javascript">
     alert("De gekozen partij naam is al in gebruik");
    </script>
<?php 

}


?>