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
    // Parameter pada Fungsi


    function print_text($skill, $angka) {
        $tempat = "Gedung ".$skill." ".$angka;
        echo "---------";
        echo $tempat;
        echo "---------";
    }

    function jarak() {
        echo "<br>";
    }

    print_text("Coding", 1);
    jarak();
    print_text("Design", 2);
    jarak();
    print_text("DevOps", 3);

    ?>

</body>
</html>