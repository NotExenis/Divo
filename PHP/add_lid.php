<?php 
require '../private/conn.php';
$id = $_POST['id'];
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$geboorte = $_POST['geboorte'];
$woonplaats = $_POST['woonplaats'];
$geslacht = $_POST['geslacht'];
$kieslijst = $_POST['kieslijst'];

$sql = "INSERT INTO tbl_leden (lid_voornaam, lid_tussenvoegsel, lid_achternaam, lid_geboorte, lid_woonplaats, lid_geslacht, lid_partij, lid_kieslijst)
        VALUES (:voornaam, :tussenvoeg, :achternaam, :geboorte, :woonplaats, :geslacht, :partij_id, :kieslijst)";
$stmt = $db->prepare($sql);
$stmt->execute(array(
    ':voornaam'=>$voornaam,
    ':tussenvoeg'=>$tussenvoegsel,
    ':achternaam'=>$achternaam,
    ':geboorte'=>$geboorte,
    ':woonplaats'=>$woonplaats,
    ':geslacht'=>$geslacht,
    ':partij_id'=>$id,
    ':kieslijst'=>$kieslijst
));
header('location: ../index.php?page=home_admin');
?>