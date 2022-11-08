<?php

// class jpone
class jpone{
    // property
    var $kepsek;
    var $guru;
    var $murid;

    // function lilik
    function lilik(){
        return "Pak Lilik";
    }

    // function saiful
    function saiful(){
        return "Pak Saiful";
    }

    // function hasan
    function hasan(){
        return "Hasan";
    }

}

// instansiasi
$sekolah = new jpone();

// isi property
$sekolah->kepsek = "Kepsek kita adalah";
$sekolah->guru = "Guru kita adalah";
$sekolah->murid = "Murid kita adalah";

// tampilkan
echo $sekolah->kepsek," ",$sekolah->lilik();
echo "<br />";
echo $sekolah->guru," ",$sekolah->saiful();
echo "<br />";
echo $sekolah->murid," ",$sekolah->hasan();

?>