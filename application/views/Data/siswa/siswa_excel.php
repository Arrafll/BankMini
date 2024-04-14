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

            <th>Jenis Kelamin</th>

            <th>Tanggal Lahir</th>



        </tr>

    </thead>

    <tbody>

        <?php foreach ($model as $data) { ?>

            <tr>

                <td><?php echo $data->nisn ?></td>

                <td><?php echo $data->nama ?></td>

                <td><?php echo $data->jenis_kelamin ?></td>
                <td><?php echo $data->date ?></td>


            </tr>

        <?php  } ?>

    </tbody>

</table>