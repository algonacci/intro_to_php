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
    // Callback Function

    function berteriak($callback) {
        echo "HALOOOOOOOOO <br>";

        $callback();
    }

    $panggil = function() {
        echo "Saya anonymous, alias enggak punya nama";
    };

    berteriak($panggil);


    ?>

</body>
</html>