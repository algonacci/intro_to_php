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
    $hewan = array("anjing", "babi", "koala", "anjing",);
    // Metode Array
    // array_unique, _reverse, shuffle, count, sort

    print_r( array_unique($hewan) ); // Menampilkan hanya yang unique
    print_r( array_reverse($hewan) ); // Membalikkan urutan

    shuffle($hewan); // Mengacak indeks
    print_r($hewan); // Menampilkan indeks yang sudah diacak

    echo count($hewan); // Menghitung jumlah yang di dalam array

    sort($hewan); // Mengurutkan sesuai abjad atau angka dari kecil sampai besar
    print_r($hewan);
    
    ?>

</body>
</html>