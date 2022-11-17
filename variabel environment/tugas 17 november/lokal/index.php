<?php

// variabel lokal haya isi di akses dari scope dimana dia di definisikan
$text = " Siswa XII RPL";

function halodunia(){
    $text = "Saya adalah"; // variabel lokal
    echo $text;
}

halodunia(); // objek
echo $text;

?>