<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img {
            width: 600px;
        }
    </style>
</head>

<body>
    <div class="zoom-marker-div">
        <img id="ayam" name="ayam" draggable="false" />
    </div>
</body>

<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/zoom-marker.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/easy-loading.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.mousewheel.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/hammer.min.js"></script>

<script>
    // var initImg = function(item) {

    // }

    // initImg($('#zoom-marker-img'));

    /******************** INIT ZoomMarker here *****************************/
    $(document).ready(function() {
        $('#ayam').zoomMarker({
            src: "<?= base_url('assets/'); ?>img/mountain.jpg",
            rate: 0.2,
            width: 400,
            max: 3000,
            markers: [{
                src: "<?= base_url('assets/'); ?>img/marker.png",
                x: 200,
                y: 200,
                draggable: false
            }],
            enable_canvas: true,
            move_limit: true
        });
    })
</script>

</html>