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
    $angka1 = 1000;
    $angka2 = 3;
    $angka3 = 2;

    // Operator Matematik
    // + - * / % ++ --
    echo $angka1 + $angka2."<br>";
    echo $angka1 - $angka2."<br>";
    echo $angka1 * $angka2."<br>";
    echo $angka1 + $angka2 * $angka3."<br>"; // 1006 Karena matematika melakukan operasi perkalian terlebih dahulu

    $angka1++;
    echo $angka1."<br>";

    $angka1--;
    echo $angka1."<br>";

    $jumlah_angka = $angka2 + 10 + $angka3;
    echo $jumlah_angka."<br>";

    // Nama = Nilai
    $angka1 = $angka1 + $angka2;
    echo $angka1."<br>";

    // Melakukan operasi langsung
    $angka1 *= $angka2;
    echo $angka1
    ?>

</body>
</html>