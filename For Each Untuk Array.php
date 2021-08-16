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
    // For Loop pada PHP

    // for(variabelAwal(mulai), batas(syarat), perubahan)

    $hewan = ["anjing", "babi", "cicak", "domba", "kucing", "buaya"];

    for($i = 0; $i < count($hewan) - 1; $i++)
    {
        echo "---------";
        echo $hewan[$i];
        echo "--------- <br>";
    }

    // FOREACH PADA PHP
    // Keuntungannya penulisannya menjadi lebih simpel
    // Tetapi mengeluarkan semua isi arraynya
    foreach($hewan as $h) {
        echo "---------";
        echo $h;
        echo "--------- <br>";
    }
    ?>

</body>
</html>