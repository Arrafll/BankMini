<script src="<?= base_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('tes.js'); ?>"></script>
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>


<link href="<?= base_url('style.css'); ?>" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="modal fade" id="Logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width:450px;margin-left:100px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Logout</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin Logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('Master/logout'); ?>" class="btn btn-danger">Logout</a>


            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">
                <img style="margin-bottom:5px;width:120px;" src="<?= base_url(); ?>vendor/images/icon/bank.png" alt="Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li style="margin-top:8px;"><a href="<?= base_url('Admin/profile'); ?>"><?= $user['name']; ?></a></li>
                <li class="nav-item avatar">
                    <a class="nav-link p-0" href="#" data-toggle="modal" data-target="#ModalGambar">
                        <img style="height:40px;width:50px;" src="<?php echo base_url('vendor/images/profile/') . $user['image']; ?>" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                    </a>
                    <div class="modal fade" id="ModalGambar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width:450px;margin-left:100px">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Foto Profil <?= $user['name']; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <img class="center" style="height:380px;width:380px;margin-left:17px;" src="<?php echo base_url('vendor/images/profile/') . $user['image']; ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown ">
                    <a href="#" style="margin-top:15px;margin-left:-5px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="margin-top:20px;">
                        <li class="dropdown-header">SETTINGS</li>
                        <li class=""><a href="<?= base_url('Admin/edit'); ?>">Edit Profile</a></li>

                        <li class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#Logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url('Admin'); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                            <?php if ($user['jabatan'] == 'admin') { ?>
                                <li class="panel panel-default" id="dropdown">
                                    <a data-toggle="collapse" href="#dropdown-lvl1">
                                        <span class="glyphicon glyphicon-user"></span> Data <span class="caret"></span>
                                    </a>

                                    <!-- Dropdown level 1 -->
                                    <div id="dropdown-lvl1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li><a href="<?= base_url('Data/Data_user'); ?>">User</a></li>
                                                <li><a href="<?= base_url('Data/Data_siswa'); ?>">Siswa</a></li>
                                                <li><a href="<?= base_url('Data/TahunAjaran'); ?>">Tahun Ajaran</a></li>


                                                <!-- Dropdown level 2 -->

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>


                            <li><a href="<?= base_url('Tabungan'); ?>"><span class="glyphicon glyphicon-usd"></span> Tabungan</a></li>

                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Pembayaran <span class="caret"></span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="<?= base_url('Spp'); ?>">Pembayaran Spp</a></li>
                                            <li><a href="<?= base_url('Seragam'); ?>">Pembayaran Seragam</a></li>
                                            <li><a href="<?= base_url('Ki'); ?>">Pembayaran Kunjungan Industri</a></li>

                                            <!-- Dropdown level 2 -->

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl3">
                                    <span class="glyphicon glyphicon-list-alt"></span> Laporan <span class="caret"></span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?= base_url('Spp/laporan_spp'); ?>">Laporan Bayaran Spp</a></li>
                                            <li><a href="<?= base_url('Seragam/laporan_seragam'); ?>">Laporan Bayaran Seragam</a></li>
                                            <li><a href="<?= base_url('Ki/laporan_ki'); ?>">Laporan Bayaran KI</a></li>


                                            <!-- Dropdown level 2 -->

                                        </ul>
                                    </div>


                                </div>
                            </li>

                            <li><a href="#" data-toggle="modal" data-target="#Logout"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>

                            <!-- Dropdown-->



                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default" style="width:35%;float:left;">
            <div class="panel-heading">
                Data Siswa
            </div>

            <div class="panel-body">
                <form action="<?= base_url('spp/bayar'); ?>" method="POST">
                    <div class="form-group">
                        <table class="table table-stripped">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="active" style="width:100px;">Nisn</td>
                                    <td class="active" style="width:30px;">:</td>
                                    <td class="active">
                                        <?= $spp['nisn']; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Nama</td>
                                    <td>:</td>
                                    <td><?= $spp['nama']; ?></td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $spp['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Tahun Ajaran</td>
                                    <td>:</td>
                                    <td><?= $spp['date']; ?> / <?= $spp['date'] + 1; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Total Tagihan</td>
                                    <?php if (!$bulan['total_bayar'] == 0) { ?>

                                        <td>:</td>
                                        <td>Rp. <?= number_format($bulan['total_bayar'], 0, ",", "."); ?>,-</td>
                                </tr>
                            <?php } ?>
                            <?php if ($bulan['total_bayar'] == 0) { ?>

                                <td>:</td>
                                <td>Lunas</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                        <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                        <input type="hidden" class="form-control" id="Nisn" placeholder="Masukkan username" name="nisn" value="<?= $spp['nisn']; ?>" </div> <div class="form-group">
                        <input type="hidden" class="form-control" id="Nama" placeholder="Masukkan username" name="nama" value="<?= $spp['nama']; ?>" readonly>
                    </div>


                    <a href="<?= base_url('Spp'); ?>" class="btn btn-primary">&nbsp;Kembali&nbsp;</a>

            </div>
            </form>
        </div>
    </div>
    <div class="panel panel-default" style="width:60%;float:right;margin-left:3%">
        <div class="panel-heading">
            Pembayaran Spp Bulanan - Tahun <?= $tahun['tahun']; ?> / <?= $tahun['tahun'] + 1; ?>
        </div>

        <div class="panel-body">
            <form action="<?= base_url('spp/bayar'); ?>" method="POST">
                <div class="form-group">
                    <?php
                    $tagihan = 350000;



                    ?>

                    <table class="table table-stripped">
                        <thead>

                            <th>No</th>
                            <th>Bulan</th>
                            <th>Status</th>
                            <th>Tagihan</th>
                            <th></th>
                        </thead>

                        <tr>
                            <td>1</td>
                            <td>Januari</td>
                            <td>
                                <?= $bulan['januari']; ?></td>
                            <?php if ($bulan['januari'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['januari'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>"> <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="bulan" value="januari">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['januari'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>

                                <?php } ?>
                                <?php if ($bulan['januari'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>

                        </tr>
                        <tr>

                            <td>2</td>
                            <td>Februari</td>
                            <td>
                                <?= $bulan['februari']; ?></td>
                            <?php if ($bulan['februari'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['februari'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="februari">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['februari'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['februari'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>
                        <tr>

                            <td>3</td>
                            <td>Maret</td>
                            <td>
                                <?= $bulan['maret']; ?></td>
                            <?php if ($bulan['maret'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['maret'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="maret">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['maret'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['maret'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>
                        <tr>

                            <td>4</td>
                            <td>April</td>
                            <td>
                                <?= $bulan['april']; ?></td>
                            <?php if ($bulan['april'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['april'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">
                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="april">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['april'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['april'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>


                        <tr>

                            <td>5</td>
                            <td>Mei</td>
                            <td>
                                <?= $bulan['mei']; ?></td>
                            <?php if ($bulan['mei'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['mei'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">
                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="bulan" value="mei">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['mei'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['mei'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>

                        <tr>

                            <td>6</td>
                            <td>Juni</td>
                            <td>
                                <?= $bulan['juni']; ?></td>
                            <?php if ($bulan['juni'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['juni'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="bulan" value="juni">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['juni'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['juni'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>
                        <tr>

                            <td>7</td>
                            <td>Juli</td>
                            <td>
                                <?= $bulan['juli']; ?></td>
                            <?php if ($bulan['juli'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['juli'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="juli">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['juli'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['juli'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>

                        <tr>

                            <td>8</td>
                            <td>Agustus</td>
                            <td>
                                <?= $bulan['agustus']; ?></td>
                            <?php if ($bulan['agustus'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['agustus'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="agustus">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['agustus'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['agustus'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>

                        <tr>

                            <td>9</td>
                            <td>September</td>
                            <td>
                                <?= $bulan['september']; ?></td>
                            <?php if ($bulan['september'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['september'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="september">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['september'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['september'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>

                        <tr>

                            <td>10</td>
                            <td>Oktober</td>
                            <td>
                                <?= $bulan['oktober']; ?></td>
                            <?php if ($bulan['oktober'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['oktober'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="oktober">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['oktober'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['oktober'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>

                        <tr>

                            <td>11</td>
                            <td>November</td>
                            <td>
                                <?= $bulan['november']; ?></td>
                            <?php if ($bulan['november'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['november'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="november">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['november'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['november'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                            </form>
                        </tr>
                        <tr>

                            <td>12</td>
                            <td>Desember</td>
                            <td>
                                <?= $bulan['desember']; ?></td>
                            <?php if ($bulan['desember'] == 'Belum Lunas') { ?>
                                <td>Rp. <?= number_format($tagihan, 0, ",", "."); ?>,-</td>
                            <?php } ?>
                            <?php if ($bulan['desember'] == 'Lunas') { ?>
                                <td>Rp. 0,-</td>
                            <?php } ?>

                            <form action="<?= base_url('Spp/bayar'); ?>" method="POST">

                                <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                                <input type="hidden" name="nisn" value="<?= $spp['nisn']; ?>">
                                <input type="hidden" name="nama" value="<?= $spp['nama']; ?>">
                                <input type="hidden" name="total" value="<?= $bulan['total_bayar']; ?>">
                                <input type="hidden" name="tahun" value="<?= $tahun['tahun']; ?>">
                                <input type="hidden" name="bulan" value="desember">
                                <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                                <?php if ($bulan['desember'] == 'Belum Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" formtarget="_blank" onClick="openWindowReload(this)">Bayar</button></td>
                                <?php } ?>

                                <?php if ($bulan['desember'] == 'Lunas') { ?>
                                    <td>

                                        <button type="submit" class="btn btn-success" disabled>Bayar</button></td>
                                <?php } ?>
                        </tr>
                    </table>
                    <input type="hidden" name="petugas" value="<?= $user['name']; ?>">
                    <input type="hidden" name="id_siswa" value="<?= $spp['id_siswa']; ?>">
                    <input type="hidden" class="form-control" id="Nisn" placeholder="Masukkan username" name="nisn" value="<?= $spp['nisn']; ?>" </div> <div class="form-group">
                    <input type="hidden" class="form-control" id="Nama" placeholder="Masukkan username" name="nama" value="<?= $spp['nama']; ?>" readonly>
                </div>




        </div>
        </form>
    </div>
</div>
</div>
<footer class="pull-left footer">
    <p class="col-md-12">
        <hr class="divider">
        Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
    </p>
</footer>
</div>

<script>
    function openWindowReload(link) {
        setTimeout(function() {
            location.reload();

        }, 2000);
    }
</script>