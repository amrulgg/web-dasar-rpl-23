<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    
<h1>PHP Dasar</h1>


<?php

$umur = 22;
$nama = "zikrillah";

echo 'umur : ' . $umur;

echo '<br>';

echo "umur :  $umur " ;

echo '<br>';


$array_nama = ['zikrillah', 'izwan', 'aldi'];

echo 'Data Nama ke 1 : ' . $array_nama[0];
echo '<br>';
echo 'Data Nama ke 2 : ' . $array_nama[1];
echo '<br>';
echo 'Data Nama ke 3 : ' . $array_nama[2];
echo '<br>';

$array_identitas = [
    'zikrillah' => ['nama' => 'zikrillah', 'umur' => '20'],
    'reza' => ['nama' => 'rezaldi', 'umur' => '32'],
];

echo $array_identitas['zikrillah']['umur'];
echo '<hr>';


//perulangan foreach
echo 'perulangan foreach dari array <br>';
foreach($array_nama as $key => $isi){

    echo $isi . '<br>';
};

//contoh cetak dari php
echo 'Cetak dari PHP';


?>

</body>
</html>
