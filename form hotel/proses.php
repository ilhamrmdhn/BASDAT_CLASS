<?php 
    $nama = @$_POST['nama'];
    $checkIn = @$_POST['alamat'];
    $tipe = @$_POST['tipe'];
    $bf = @$_POST['breakfast'];
    $files = $_FILES;
    $folder_upload = "./assets/uploads";
    
    if(!is_dir($folder_upload)){
        mkdir($folder_upload, 0777, $rekursif = true);
    }
    
    $fileFoto = (object) @$_FILES['foto'];

    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );
    
    $totalBf = 0 * $bf;
    $totalAll = $tipe + $totalBf;

    echo "Nama Pemesanan Kamar : {$nama} <br>";
    echo "Tanggal Check In : {$alamat} <br>";
    echo "Harga Kamar ". number_format($tipe,0,',','.') ." <br>";
    echo "Menginap Untuk {$bf} malam, Jadi harganya ". number_format($totalBf,0,',','.') ."<br>";
    echo "Total Harga ". number_format($totalAll,0,',','.') ."<br>";
    if($uploadFotoSukses){
        $link = "{$folder_upload}/{$fileFoto->name}";
        echo "Foto Diri : <a href='{$link}'>{$fileFoto->name}</a>";
        echo "<br>";
    }
?>