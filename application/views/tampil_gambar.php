<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Gambar</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/zoom-marker.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/easy-loading.css">
</head>

<body>
    <center>
        <h3>Halo</h3>
        <br>
        <img name="zoom-marker-img" id="zoom-marker-img" draggable="false">
    </center>
</body>

<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/zoom-marker.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/easy-loading.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.mousewheel.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/hammer.min.js"></script>
<script>
    <?php foreach ($berkas as $row) { ?>
        $(document).ready(function() {
            $('#zoom-marker-img').zoomMarker({
                src: "data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>",
                rate: 0.2,
                width: 400,
                max: 3000,
                markers: [{
                    src: "<?= base_url('assets/'); ?>img/marker.png",
                    x: 400,
                    y: 200,
                    size: 50,
                    draggable: false
                }],
                enable_canvas: true,
                move_limit: true
            });
        })
    <?php } ?>
</script>

</html>