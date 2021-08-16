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
    // && juga ||
    // Dan juga Atau

    // || boleh 1 syarat saja yang memenuhi
    // && harus 2 syarat yang memenuhi

    $uang_programmer = 1000;
    $harga_keyboard = 3000;
    $uang_designer = 4000;

    if ($uang_programmer > $harga_keyboard || $uang_designer > $harga_keyboard) {
        echo "Boleh beli keyboard<br>";
    } else {
        echo "Engga bisa beli keyboard<br>";
    }
    ?>

</body>
</html>