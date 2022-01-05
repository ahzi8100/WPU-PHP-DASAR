<?php 
// $mahasiswa=[
//     ["Sandhika Galih","23423423","Teknik Informatika","sandhika@mail.com"],
//     ["Doddy","2342422","Teknik Industri","doddy@mail.com"]
// ];

// Array Associative
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NIM: <?= $mhs["nim"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>