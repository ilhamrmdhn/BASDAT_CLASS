<?php

    $time = (object) $_GET['time'];
    $errors = (object) $_GET['errors'];

?>

<html>
    <head>
        <title>Validasi Form</title>
    </head>
    <body>
        <form action="proses.php">
            <div>
                <label>Nama (Harus input nama)</label><br>
                <input type="text" value="<?php echo $time->nama?>" name="nama">
                <?php
                if($errors->$nama):?>
                <div style="color: red"><?php echo $errors->nama[0]?></div>
                <?php
                endif;
                ?>
            </div>
            <div style="margin-top:10px;">
                <label>Email (Harus input @)</label><br>
                <input type="text" value="<?php echo $time->email?>" name="email">
            </div>
            <div style="margin-top:10px;">
                <label>Username (tidak boleh regex)</label><br>
                <input type="text" value="<?php echo $time->username?>" name="username">
            </div>
            <div style="margin-top:10px;">
                <label>Usia (Harus input angka)</label><br>
                <input type="text value="<?php echo $time->usia?>"" name="usia">
            </div>
            <div style="margin-top:10px;">
                <button>Submit</button>
            </div>
        </form>
    </body>
</html>