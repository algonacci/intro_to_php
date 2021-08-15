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
        // Ini adalah single-line komentar
        /* 
            Ini adalah contoh
            Multi-line komentar
            Pada PHP
        */

        // Variabel pada PHP
        $intro = "Hello World!!!!";
        $language = "PHP";

        // Jangan memberikan nama variabel dimulai dengan angka
        // $123 = "Text";       <---- Ini salah
        // $_123 = "Text";      <---- Ini boleh
        $_5 = "5th";

        echo "<h1>$intro</h1>";
        echo "This is my first ". $language ." file <br>";
        echo "Very glad to learn PHP <br>";
        echo "This is my ". $_5 ." programming language";
    ?>

</body>
</html>