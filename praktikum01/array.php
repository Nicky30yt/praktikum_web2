<?php
//array asosiatif
$mahasiswa = ["Nama"=>"Nicky Bryan Paradana", "Umur"=>19, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";
?>