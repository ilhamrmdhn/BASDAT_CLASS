<html>
    <head>
        <title>Form Pesanan</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box-proses">
            <h1>PESANAN HOTEL</h1><br><br>
            <?php 
    $nama = @$_POST['nama'];
    $alamat = @$_POST['alamat'];
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
    
    $totalBf = 1 * $bf;
    $totalAll = $tipe * $totalBf;
    
    echo "Nama : {$nama} <br><br>";
    echo "Alamat : {$alamat} <br><br>";
    echo "Tipe Kamar : Rp.". number_format($tipe,0,',','.') ." <br><br>";
    echo "Lama Menginap : {$bf} malam <br><br>";
    if($uploadFotoSukses){
        $link = "{$folder_upload}/{$fileFoto->name}";
        echo "Foto Diri : <a href='{$link}'>{$fileFoto->name}</a>";
        echo "<br><br>";
    }
    echo "Total harga yang harus dibayar : Rp.". number_format($totalAll,0,',','.') ."<br>";
    ?>
    </div>
    </body>
</html>