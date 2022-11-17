<?php

// statis adalah mepertahankan nilai aslinya

function text(){
    static $a = "Saya bisa coding dan desain"; //mendefinisikan variabel lokal
    // variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
    // static mempertahankan nilainya diluar scope
    echo "$a";
    $a; // menambahkan fungsi increment
}
text();
?>