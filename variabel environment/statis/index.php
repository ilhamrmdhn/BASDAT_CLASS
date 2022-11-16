<?php

// statis adalah mepertahankan nilai aslinya

function test(){
    static $a = 0; //mendefinisikan variabel lokal
    // variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
    // static mempertahankan nilainya diluar scope
    echo "A : ($a) <br>";
    $a++; // menambahkan fungsi increment
}
test();
test();
test();
?>