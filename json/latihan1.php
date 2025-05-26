<?php

// $mahasiswa = [
//     [
//         "nama" => "Suci Khalisyafitri",
//         "nim" => "2217020048",
//         "email" => "sucikhalisyaf@gmail.com"
//     ],
//     [
//         "nama" => "Nurul Akbar",
//         "nim" => "2417020049",
//         "email" => "nurulakbar30@gmail.com"
//     ],
//     [
//         "nama" => "Faizzil Azzim",
//         "nim" => "3017020050",
//         "email" => "FaizzilAzzim03@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
