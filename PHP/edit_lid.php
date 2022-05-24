<?php 
require '../private/conn.php';
$id = $_POST['id'];
$voornaam = $_POST['voornaam'];
$geboorte = $_POST['geboorte'];
$achternaam = $_POST['achternaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$woonplaats = $_POST['woonplaats'];
$geslacht = $_POST['geslacht'];
$kieslijst = $_POST['kieslijst'];
if(empty($geboorte)){
    $sql = "UPDATE tbl_leden
        SET lid_voornaam = :voornaam, lid_tussenvoegsel = :tussenvoegsel, lid_achternaam = :achternaam, lid_woonplaats = :woonplaats, lid_geslacht = :geslacht, lid_kieslijst = :kieslijst
        WHERE lid_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute(array(
            ':voornaam'=>$voornaam,
            ':tussenvoegsel'=>$tussenvoegsel,
            ':achternaam'=>$achternaam,
            ':woonplaats'=>$woonplaats,
            ':geslacht'=>$geslacht,
            ':kieslijst'=>$kieslijst,
        )); 
}else{
    $sql = "UPDATE tbl_leden
    SET lid_voornaam = :voornaam, lid_tussenvoegsel = :tussenvoegsel, lid_geboorte = :geboorte, lid_achternaam = :achternaam, lid_woonplaats = :woonplaats, lid_geslacht = :geslacht, lid_kieslijst
    WHERE lid_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(
        ':voornaam'=>$voornaam,
        ':tussenvoegsel'=>$tussenvoegsel,
        ':achternaam'=>$achternaam,
        ':geboorte'=>$geboorte,
        ':woonplaats'=>$woonplaats,
        ':geslacht'=>$geslacht,
        ':kieslijst'=>$kieslijst,
    ));
}


?>