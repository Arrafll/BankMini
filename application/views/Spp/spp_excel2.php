<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<h1 align="center">Laporan Pelunasan Bayaran Spp Tahun <?= $tahun ?></h1>
<table border="1" width="100%">

    <thead>

        <tr>

            <th>No</th>
            <th>Nisn</th>

            <th>Nama</th>

            <th>Januari</th>

            <th>Februari</th>

            <th>Maret</th>

            <th>April</th>
            <th>Mei</th>
            <th>Juni</th>
            <th>Juli</th>
            <th>Agustus</th>
            <th>September</th>
            <th>Oktober</th>
            <th>November</th>
            <th>Desember</th>



        </tr>

    </thead>

    <tbody>
        <?php $no = 1; ?>


        <?php foreach ($model as $data) { ?>
            <tr>
                <td><?= $no; ?></td>

                <td><?php echo $data->nisn ?></td>

                <td><?php echo $data->nama ?></td>



                <td><?php echo $data->januari ?></td>
                <td><?php echo $data->februari ?></td>
                <td><?php echo $data->maret ?></td>
                <td><?php echo $data->april ?></td>
                <td><?php echo $data->mei ?></td>
                <td><?php echo $data->juni ?></td>
                <td><?php echo $data->juli ?></td>
                <td><?php echo $data->agustus ?></td>
                <td><?php echo $data->september ?></td>
                <td><?php echo $data->oktober ?></td>
                <td><?php echo $data->november ?></td>
                <td><?php echo $data->desember ?></td>


            </tr>
            <?php $no++; ?>
        <?php } ?>

    </tbody>

</table>