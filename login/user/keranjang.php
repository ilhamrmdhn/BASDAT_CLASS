<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <h1>Cart</h1>
        <h3>Keranjang anda terisi : </h3>

        <table class="table" border="1" cellpadding="8" cellspacing="0" style="box-shadow: 2px 2px 2px lightgray;">
    <thead class="thead-dark">
        <tr>
            <th style="text-align:center;">ID Buku</th>
            <th style="text-align:center;">Katalog</th>
            <th style="text-align:center;">Judul Buku</th>
            <th style="text-align:center;">Pengarang</th>
            <th style="text-align:center;">Tahun terbit</th>
            <th style="text-align:center;">Penerbit</th>
        </tr>
        </thead>
        
        <?php

        include '../koneksi.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi,"select * from buku where id_buku = '$id_buku'" );
        
        foreach($data as $buku)
            echo "<tr>";
            echo "<td>".$buku['id_buku'] ."</td>";
            echo "<td>".$buku['id_katalog']."</td>";
            echo "<td>".$buku['judul_buku']."</td>";
            echo "<td>".$buku['pengarang']."</td>";
            echo "<td>".$buku['thn_terbit']."</td>";
            echo "<td>".$buku['penerbit']."</td>";

            ?>
    </body>
</html>