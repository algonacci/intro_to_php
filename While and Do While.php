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
    // While and Do While pada PHP
    // while(syarat)
    $hewan = ["anjing", "babi", "cicak", "domba", "kucing"];

    $i = 0;

    // while($i < count($hewan) ) {
    //     echo $hewan[$i]."<br>";
    //     $i++;
    // }

    do {
        echo $hewan[$i]."<br>";
        $i++;
    } while($i < count($hewan));
    
    ?>

</body>
</html>