<?php

// Super Global (Semua ini adalah array assosiative)
// $_GET
// $_POST
// $_REQUEST
// $_SERVER
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// $_GET
$mahasiswa=[
    [
    "nama" => "Sandhika Galih",
    "nim" => "23423423",
    "jurusan" => "Teknik Informatika",
    "email" => "sandhika@mail.com",
    "gambar" => "1.png"
    ],
    [
    "nama" => "Doddy",
    "nim" => "2342422",
    "jurusan" => "Teknik Industri",
    "email" => "doddy@mail.com",
    "gambar" => "2.png"
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
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email= <?= $mhs["email"]; ?>&jurusan= <?= $mhs["jurusan"]; ?>&gambar= <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>