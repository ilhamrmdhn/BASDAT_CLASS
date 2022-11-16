<?php

// variabel lokal haya isi di akses dari scope dimana dia di definisikan
$nama = " guantenggg bingittzzz";

function halodunia(){
    $nama = "Pak Saiful"; // variabel lokal
    echo $nama;
}

halodunia(); // objek
echo $nama;

?>