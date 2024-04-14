<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

    <thead>

        <tr>


            <th>Nisn</th>

            <th>Nama</th>

            <th>Tanggal</th>

            <th>Bulan</th>

            <th>Tahun Ajaran</th>

            <th>Keterangan</th>

            <th>Petugas</th>


        </tr>

    </thead>

    <tbody>

        <?php foreach ($model as $data) { ?>

            <tr>

                <td><?php echo $data->nisn ?></td>

                <td><?php echo $data->nama ?></td>

                <td><?php echo date('d F Y', $data->tanggal); ?></td>
                <td><?php echo $data->bulan ?></td>
                <td><?php echo $data->tahun ?>/<?php echo $data->tahun + 1; ?></td>
                <td><?php echo $data->keterangan ?></td>
                <td><?php echo $data->petugas ?></td>



            </tr>

        <?php  } ?>

    </tbody>

</table>