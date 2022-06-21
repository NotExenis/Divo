<?php 

require '../private/conn.php';

$sql = "SELECT lid_id FROM tbl_leden";
$stmt = $db->prepare($sql);
$stmt->execute();
$r = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $firstname = [
            'Johnathon',
            'Anthony',
            'Erasmo',
            'Raleigh',
            'Nancie',
            'Tama',
            'Camellia',
            'Augustine',
            'Christeen',
            'Luz',
            'Diego',
            'Lyndia',
            'Thomas',
            'Georgianna',
            'Leigha',
            'Alejandro',
            'Marquis',
            'Joan',
            'Stephania',
            'Elroy',
            'Zonia',
            'Buffy',
            'Sharie',
            'Blythe',
            'Gaylene',
            'Elida',
            'Randy',
            'Margarete',
            'Margarett',
            'Dion',
            'Tomi',
            'Arden',
            'Clora',
            'Laine',
            'Becki',
            'Margherita',
            'Bong',
            'Jeanice',
            'Qiana',
            'Lawanda',
            'Rebecka',
            'Maribel',
            'Tami',
            'Yuri',
            'Michele',
            'Rubi',
            'Larisa',
            'Lloyd',
            'Tyisha',
            'Samatha',
        ];
    
        $lastname = [
            'Mischke',
            'Serna',
            'Pingree',
            'Mcnaught',
            'Pepper',
            'Schildgen',
            'Mongold',
            'Wrona',
            'Geddes',
            'Lanz',
            'Fetzer',
            'Schroeder',
            'Block',
            'Mayoral',
            'Fleishman',
            'Roberie',
            'Latson',
            'Lupo',
            'Motsinger',
            'Drews',
            'Coby',
            'Redner',
            'Culton',
            'Howe',
            'Stoval',
            'Michaud',
            'Mote',
            'Menjivar',
            'Wiers',
            'Paris',
            'Grisby',
            'Noren',
            'Damron',
            'Kazmierczak',
            'Haslett',
            'Guillemette',
            'Buresh',
            'Center',
            'Kucera',
            'Catt',
            'Badon',
            'Grumbles',
            'Antes',
            'Byron',
            'Volkman',
            'Klemp',
            'Pekar',
            'Pecora',
            'Schewe',
            'Ramage',
        ];
        foreach($r as $row){
                $timestamp = mt_rand(1, time());
                $randomDate = date("Y-m-d", $timestamp);
                $srting = "";
                $string = $lastname;
                $sql = "UPDATE tbl_leden SET lid_geboorte = :datum, lid_achternaam = :achternaam WHERE lid_id = :id";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':achternaam',$last);
                $stmt->bindParam(':id',$row);
                $stmt->bindParam(':datum',$randomDate);
                $stmt->execute();
                echo json_encode($randomDate);
        } 


//         $geslacht = ['M', 'V'];

// foreach($firstname as $first){
//     $id = $r;
//     $sex = $geslacht;
//     echo "$first <br/>";
//     $sql = "INSERT INTO tbl_leden (lid_voornaam)
//             VALUES(:naam)";
//     $stmt = $db->prepare($sql);
//     $stmt->execute(array(
//         ':naam'=>$first, 
//     ));
// }


