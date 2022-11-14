<?php

// array adalah tipe data yang berisi beberapa tipe data (string maupun interger)
// keynya diawali dengan angka 0 dst

// array asosiatif
// keynya berubah menjadi tipe data string

$siswa = [

    // keynya bisa int/string
    1 => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi'
];

// echo "siapa yang paling ganteng? {$siswa[1]}";



$togel = [
    [1,2,3,4,5],
    [6,7,8,9,22],
    [12,15,13,14,51],
    [19,21,31,47,35]
];

// cara memanggil array
// echo $togel[2][3];

// array push
// array push berguna untuk menerima 2 parameter, parameter pertama : untuk target, parameter kedua untuk nilai yang akan dimasukan

$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// cara pertama untuk menambah item
array_push($buah, 'timun');

// cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo "<br />";
echo $sayur[3];

?>