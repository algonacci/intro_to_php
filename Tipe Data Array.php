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
    // Tipe Data Array
        $kotak = array("anjing", "kura-kura", "koala");
        $nama = ["Eric", "Hilman", "Tya"];

        echo $kotak[0]."<br>";
        echo $kotak[1]."<br>";
        echo $kotak[2]."<br>";
        print_r($kotak)."<br>";
        "<br>";
        echo $nama[0]."<br>";
        echo $nama[1]."<br>";
        echo $nama[2]."<br>";
        print_r($nama)."<br>";
    ?>

</body>
</html>