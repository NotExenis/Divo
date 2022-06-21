<?php 
require '../private/conn.php';

$partijen = ['Volkspartij voor Vrijheid en Democratie', 'Democraten 66', 'Partij voor de Vrijheid', 'Christen-Democratisch Appèl', 'Socialistische Partij', 'Partij van de Arbeid', 'GroenLinks', 'Partij voor de Dieren', 'ChristenUnie', 'Forum voor Democratie','JA21', 'Staatkundig Gereformeerde Partij', 'DENK', 'Volt Nederland', 'BoerBurgerBeweging', 'BIJ1'. '50PLUS', 'Onafhankelijke Politiek Nederland'];
$afkorting = ['VVD','D66','PVV','CDA','SP','PvdA','GL','PvdD','CU','FVD','JA21','SGP','DENK','Volt','BIJ1','50+','OPNL'];
$afk2= "";
$array2 = "";


$sql = "SELECT or_id FROM tbl_orientatie";
$stmt = $db->prepare($sql);
$stmt->execute();
$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($partijen as $partij){
        $naam = "$partij";
        $sql2 = "INSERT INTO tbl_partij (partij_naam)
                VALUES(:naam)";
        $stmt2 = $db->prepare($sql2);
        $stmt2->bindParam(':naam',$naam);
        $stmt2->execute();
}

foreach($afkorting as $afk){
    $afk2 = "$afk";
    $sql2 = "UPDATE tbl_partij SET partij_afkorting = :afk";
    $stmt2 = $db->prepare($sql2);
    $stmt2->bindParam(':afk',$afk2);
    $stmt2->execute();
    echo "$afk2 ";
}





