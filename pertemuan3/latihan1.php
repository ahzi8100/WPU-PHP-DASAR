<!-- <?php
// Pengulangan
// for
//while
// do.. while
//foreach: pengulangan khusu array

// for ( $i = 0; $i < 5; $i++) {
//     echo "Hello world ";
// }

// $i = 0;
// while( $i < 5 ){
//     echo "Hello world <br>";
// $i++;
// }

// $i = 0;
// do {
//     echo "Hello world <br>";
// $i++;
// } while ( $i < 5 );

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    


    <?php for ( $i = 5; $i <= 5; $i++ ) : ?>
        <tr>
            <?php for ( $j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>

</body>
</html>
<!-- 
// for ( $i = 1; $i <= 5; $i++) {
        //     echo "<tr>";
        //     for ( $j = 1; $j <= 5; $j++) {
        //         echo "<td>$i,$j</td>";
        //     }
        //     echo "</tr>";
        // } -->