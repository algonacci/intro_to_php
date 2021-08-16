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
    // True or False

    $uang_programmer = 1000;
    $harga_keyboard = 3000;
    $uang_designer = 4000;

    // True or False
    if ($uang_programmer > $harga_keyboard) { // Kalau kondisinya benar, akan langsung dieksekusi
        echo "Berhasil dibeli!<br>";
    } else if($uang_designer > $harga_keyboard) {
        echo "Berhasil dibeli oleh Designer!<br>";

        // If bercabang
        if($uang_designer >= $harga_keyboard * 2) {
            echo "Berhasil membeli 2 keyboard oleh Designer!<br>";
        }

    }
    else {
        echo "Uang tidak cukup!<br>"; // Kalau kondisi diatas tidak terpenuhi, maka akan mengeksekusi kode ini
    }
    ?>

</body>
</html>