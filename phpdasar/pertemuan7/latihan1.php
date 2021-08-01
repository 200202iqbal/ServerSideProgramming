<?php
// // variabel scope 
// $x = 10;

// function tampilX()
// {
//     global $x;
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

// // Superglobals
// // variabel global milik PHP
// // merupakan array assosiatif
// echo "<br>";
// #var_dump($_GET);
// #var_dump($_POST);
// #var_dump($_SERVER);

// // $_GET
// #$_GET["nama"] = "Muhammad Iqbal Tawakal";
// #$_GET["nrp"] = "111130006";
// var_dump($_GET);

$mahasiswa = [
[
    "nrp" => "111130006",
    "nama" => "Muhammad Iqbal Tawakal",
    "email" => "muhiqbal@gmail.com",
    "jurusan" => "Teknik Elektro",
    "gambar" => "iqbal.png"
],
[
    "nrp" => "111130005",
    "nama" => "Muhammad Bale ",
    "email" => "bale@gmail.com",
    "jurusan" => "Teknik Mesin",
    "gambar" => "bale.png"
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
    
        <!-- <li><img src="img/<?= $mhs["gambar"];?>" alt=""></li> -->
        <!-- <li><?= $mhs["nrp"];?></li> -->
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=
        <?= $mhs["nrp"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"];?></a>
        </li>
    
    <?php endforeach ; ?>
    </ul>
</body>
</html>
