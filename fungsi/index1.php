<?php

// cara membuat function tidak memakai class
function ngoding(){

}

// function bisa di kategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

// mencoba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>Hai gais<h1>";
    echo "<h3>Ketemu lagi bersama gweh<h3>";
}

// mencoba membuat fungsi yang ada paramater
function temen($temen_guweh, $umur){
    echo "<h2>Heyyyy disini gweh sama ($temen_guweh)<h2>";
    echo "<h2>umur die segini ($umur)<h2>";
}

// cara panggil fungsi
// tuliskan nama fungsinya bersama()
sapa_teman();

// jika fungsi menggunakan parameter 
temen("rizki", 20);

//mencoba membuat fungsi menggunakan percabangan
function kasir($nama, $jumlah){
    echo "<h3>hai {$nama}, terima kasih telah berkunjung!! <h3>";
    echo "<h3>dan jangan lupa kembali lagi!! <h3>";

    if ($jumlah > 10){
        echo "<h3>gokillll, kamu dapet mobil karna telah berkunjung sebanyak {$jumlah} kali <h3>";
    }   
}

kasir("Akbar", 9);

?>