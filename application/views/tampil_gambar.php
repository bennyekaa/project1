<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Gambar</title>
</head>

<body>
    <center>
        <h3>Halo</h3>
        <br>
        <?php foreach ($berkas as $row) { ?>
            <img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>" width="400" height="550">
        <?php } ?>
    </center>
</body>


</html>