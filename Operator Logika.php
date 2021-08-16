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
    // Operator Logika
    // == === > >= < <= !=
    $password = "1234";
    $password2 = 1235;

    // === Menguji tidak hanya nilai tapi juga tipe data
    
    if( $password === $password2 ){
        echo "Anda berhasil login!<br>";
    } else {
        echo "Anda gagal login! Passwordnya salah!<br>";
    }
    
    if( $password != $password2 ){
        echo "Password Tidak Sama<br>";
    } else {
        echo "Passwordnya sama!<br>";
    }
    ?>

</body>
</html>