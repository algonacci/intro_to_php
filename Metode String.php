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
    // Metode String
    // strlen && str_word_count
    // str_replace(find, replace, string)
    // str_repeat(text, times); str_shuffle(text)

    $teks = "Halo semuanya, selamat datang ";

    echo strlen($teks)."<br>"; // Menghitung jumlah karakter yang ada termasuk spasi atau baris kosong
    echo str_word_count($teks)."<br>"; // Menghitung jumlah kata
    echo str_replace("Halo", "Hai" ,$teks)."<br>"; // Mengganti kata
    echo str_repeat("Halo ", 10)."<br>";
    echo str_repeat(str_replace("Halo", "Haiii" ,$teks), 10)."<br>"; 
    ?>

</body>
</html>