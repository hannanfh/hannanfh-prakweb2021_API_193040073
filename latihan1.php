<?php

$mahasiswa =
  //  [
  // // //   [
  // // //     "name" => "Hannan Fakhrul Hakim",
  // // //     "nrp" => "193040073",
  // // //     "email" => "193040073@mail.unpas.ac.id"
  // // //   ],
  // // //   [
  // // //     "name" => "Dadang Turbo",
  // // //     "nrp" => "193040070",
  // // //     "email" => "193040070@mail.unpas.ac.id"
  // // //   ]
  // // // ];


  $dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
