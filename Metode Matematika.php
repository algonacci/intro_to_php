<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <?php 
    // Metode Matematika
    // Round rand(min, max) max min
    $angka1 = 1000;
    $angka2 = 3;
    $angka3 = 2.64;


    echo round($angka3)."<br>"; // Jika diatas koma 5, maka akan dibulatkan keatas

    echo "Angka togel hari ini adalah ".rand(5, 10)."<br>";
    echo "Angka Terbesar hari ini adalah ".max(5, 10, 8, 6)."<br>";
    echo "Angka Terbesar dari kumpulan variabel adalah ".max($angka3, $angka1, $angka2)."<br>";
    echo "Angka Terkecil dari kumpulan variabel adalah ".min($angka3, $angka1, $angka2)."<br>";
    ?>

</body>
</html>