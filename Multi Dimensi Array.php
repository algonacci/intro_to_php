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
    // Multi Dimensi Array
    $data = array(
                    array("Programmer", "21", "Coding"),
                    array("Designer", "24", "Design"),
                    array("Manager", "20", "Scrum"),
                );

    // 00 01 02
    // 10 11 12
    // 20 21 22
    
    $data[2][0] = "Project Manager";
    echo $data[1][1]."<br>";
    echo $data[2][2]."<br>";
    echo $data[2][0]."<br>";
    ?>

</body>
</html>