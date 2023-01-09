<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php
                // @ berfungsi untuk mengubah nilai menjadi null jika form tidak di isi
                $nama = @$_POST['nama'];
                $jurusan = @$_POST['jurusan'];
                $ayah = @$_POST['ayah'];
                $ibu = @$_POST['ibu'];
                $alamat = @$_POST['alamat'];
                
                echo "Nama = {$nama}";
                echo "<br>";
                echo "Jurusan = {$jurusan}";
                echo "<br>";
                echo "Nama Ayah = {$ayah}";
                echo "<br>";
                echo "Nama Ibu = {$ibu}";
                echo "<br>";
                echo "Alamat = {$alamat}";
                
                $files = $_FILES;
                $folder_upload = "./assets/uploads";
                
                // periksa apakah folder sudah ada
                if(!is_dir($folder_upload)){
    // jika tidak ada maka folder harus dibuat terlebih dahulu
    mkdir($folder_upload, 0777, $rekursif = true);
}

// simpan masing masing file ke dalam variabel
// simpan file ke dalam array dan ubah menjadi objek
$fileFoto = (object) @$_FILES['foto'];

// mulai upload file
$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

// menampilkan link file yang terupload

if ($uploadFotoSukses){
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "<br>Foto : <a href = '{$link}'>{$fileFoto->name}</a>";
    echo "<br>";
}


// Batas ukuran file yang di upload
if ($fileFoto->size > 1000 * 2000){
    die ("File tidak boleh lebih dari 2MB");
}
?>

</body>
</html>