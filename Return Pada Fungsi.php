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
    // Return pada Fungsi

    function menghitung($x, $y) {
        $z = $x + $y;
        return $z; // Mengembalikan fungsi
    }

    $hasil = menghitung(2, 4) * 10;
    echo "Hasil dari penjumlahan adalah ".$hasil;

    ?>

</body>
</html>