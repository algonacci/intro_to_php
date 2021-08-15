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
    // Metode Associative Array
    // array_values, array_keys, array_merge
    $data = array(  "nama" => "Eric",
                    "umur" => 20,
                    "pekerjaan" => "Programmer"
                );

    $data2 = array( "teman" => "Hilman",
                    "laptop" => "Asus",
                    "pekerjaan sampingan" => "Pengacara" 

                );


    print_r( array_values($data) ); // Mengubah key menjadi memakai indeks
    print_r( array_keys($data) ); // Mengembalikan key / kata kunci
    print_r( array_merge($data, $data2) ); // Menggabungkan array

    ?>

</body>
</html>