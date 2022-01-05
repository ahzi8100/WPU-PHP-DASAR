<?php 

$mahasiswa = [
    ["Sandhika Galih","023131","Teknik Informatika","uzif8100@gmail.com"],
    ["Ahmad Fauzi","023132","Teknik Industri","uzif@gmail.com"],
    ["Erik","1231141","Teknik Geologi","erik@mail.com"]
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

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>NIM: <?= $mhs[1]; ?></li>
        <li>Jurusan: <?= $mhs[2]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>