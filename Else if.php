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
    // Else if
    // Boleh punya lebih dari 1 kondisi

    $uang_programmer = 1000;
    $harga_keyboard = 2000;
    $uang_designer = 3000;

    if ($uang_programmer > $harga_keyboard) {
        echo "Berhasil dibeli!<br>";
    } else if($uang_designer > $harga_keyboard) {
        echo "Berhasil dibeli!<br>";
    }
    else {
        echo "Uang tidak cukup!<br>";
    }
    ?>

</body>
</html>