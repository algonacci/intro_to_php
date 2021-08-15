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
    // Associative Array
    // Key => Isi
    $data = array(  "nama" => "Eric",
                    "umur" => 20,
                    "pekerjaan" => "Programmer"
                );

    print_r($data);

    $data['nama'] = "Hilman Ramadhan";

    echo "Namanya adalah ".$data['nama']."<br>";
    echo "Umurnya ".$data['umur']."<br>";
    echo "Pekerjaannya adalah ".$data['pekerjaan']."<br>";
    ?>

</body>
</html>