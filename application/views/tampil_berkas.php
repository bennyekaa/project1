<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3><center>Tampil Berkas</center></h3>
        <hr/>
        <a href="<?php echo base_url(); ?>index.php/upload/create">Tambah Berkas</a>
        <hr/>
        <table border="1" width="100%" style="text-align:center;">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Keterangan</th>
            </tr>
            <?php 
                $no = 1;
                foreach($berkas->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>"></td>
                        <td><?php echo $row->keterangan_berkas; ?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>

