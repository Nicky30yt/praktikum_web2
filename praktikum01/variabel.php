<?php
   //echo "HELLO WORLD!";

   // membuat Variable
   $nama = "Nicky Bryan Pradana";
   $jurusan = "Teknik Informatika";
   $angkatan = 2023;

   // output
   echo "Nama saya adalah : " . $nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>
<body>
    <h2><?php echo $angkatan ?></h2>
    <p>
        saya kuliah di jurusan <?= $jurusan; ?>
    </p>
</body>
</html>