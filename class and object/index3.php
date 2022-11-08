<?php
//class smkjp1

class smkjp1{
    //properti
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    //funciton berlari
    function berlari(){
        return "berlari 1000 langkah";
    }

}
//instansiasi
$sekolah = new smkjp1();

//eksperimen
$smkjpone = new smkjp1();

//isi property
$sekolah->guru = "pak saipul";
$sekolah->murid = "ahmad kurniawan";

//tampilkan
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ",$sekolah->berlari();

//tampilkan dari objek $smkjpone
echo "<br />";
echo $smkjpone->guru,$smkjpone->berlari();
echo "<br />";
echo $smkjpone->murid,$smkjpone->berdiri();

?>