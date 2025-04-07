<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Raihan Nugraha",
        "nrp" => "243040072",
        "email" => "rrraihaann@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Antoni Wijaya",
        "nrp" => "303840733",
        "email" => "antinitony21@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Tuara Dwialdi Genta Lesmana",
        "nrp" => "314738734",
        "email" => "taura..dwaldi@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rio Satria Gunawan",
        "nrp" => "3488739383",
        "email" => "riosgnwn@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Yogas Raphael",
        "nrp" => "324423424",
        "email" => "yogasraphael@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Labyib Baihan Nizhar",
        "nrp" => "234442342",
        "email" => "datboibip@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fauzan Ramadhan",
        "nrp" => "2134233424",
        "email" => "fauzanramadhan@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rihans Achmad Fariza",
        "nrp" => "23433423",
        "email" => "rhsnfariza@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Andri Iqbal Maulana",
        "nrp" => "234324234",
        "email" => "adnriiqbal@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Hilma Haliman Hilmannudin",
        "nrp" => "23423354",
        "email" => "hlmahlmnnn@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizki</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li> 
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>           
        </ul>
    <?php endforeach; ?>
    
</body>
</html>