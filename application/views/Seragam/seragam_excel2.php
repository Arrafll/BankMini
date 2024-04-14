<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>


<h1>Laporan Pembayaran Seragam Tahun Ajaran - <?= $tahun; ?></h1>

<table border="1" width="100%">

    <thead>

        <tr>
            <th>No</th>

            <th>Nisn</th>

            <th>Nama</th>


            <?php if ($tahun == 'Semua Tahun Ajaran') { ?>
                <th>Tahun Ajaran</th>
            <?php } ?>

            <th>Total Bayaran</th>

            <th>Keterangan</th>


        </tr>

    </thead>

    <tbody>

        <?php $no = 1;
        foreach ($model as $data) { ?>
            <tr>
                <td align="center"><?= $no; ?></td>

                <td align="left"><?php echo $data->nisn ?></td>

                <td><?php echo $data->nama ?></td>

                <?php if ($tahun == 'Semua Tahun Ajaran') { ?>
                    <td><?= $data->date ?>/<?= $data->date + 1 ?></td>
                <?php } ?>

                <td>Rp. <?php echo number_format((1500000 - $data->bayar_seragam), 0, ",", ".") ?>,-</td>

                <td><?php echo $data->ket_seragam ?></td>



            </tr>
        <?php $no++;
        } ?>

    </tbody>

</table>