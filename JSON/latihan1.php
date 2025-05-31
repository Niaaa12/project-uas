<?php
// $mahasiswa = [
//     [
//         "nama" => "Kurnia Ningsih",
//         "NIM" => "2217020116",
//         "Email" => "ningsih@gmail.com"
//     ],
//     [
//         "nama" => "Kurnia Ningsih",
//         "NIM" => "2217020116",
//         "Email" => "ningsih@gmail.com"
//     ]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', '');
$db = $dbh -> prepare('SELECT * FROM data_mahasiswa');
$db -> execute();

$data_mahasiswa = $db -> fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>