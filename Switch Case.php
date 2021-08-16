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
    // Switch Case

    $nama = "Eric ";


    switch ($nama) {
        case "Endy":
            echo "Namanya Endy<br>";
            break;
        case "Retha":
            echo "Namanya Retha<br>";
            break;
        case "Hilman":
            echo "Namanya Hilman<br>";
            break;
        case "Eric Julianto":
            echo "Namanya Eric Julianto<br>";
            break;
        default:
            echo "Tidak ada yang benar<br>";
    }

    ?>

</body>
</html>