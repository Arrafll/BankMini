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

                            <li class="active"><a href="<?= base_url('Tabungan'); ?>"><span class="glyphicon glyphicon-usd"></span> Tabungan</a></li>

                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Pembayaran <span class="caret"></span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?= base_url('Spp'); ?>">Pembayaran Spp</a></li>
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
    <div class="col-md-8 content" style="margin-left:auto; margin-right:auto;">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabungan Siswa
            </div>

            <div class="panel-body">
                <!-- Button trigger modal -->
                <?= $this->session->flashdata('message'); ?>
                <!-- Modal -->
                <div class="modal fade" id="simpan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Simpan Saldo</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('Tabungan/simpan'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="saldo">
                                            Saldo Tabungan
                                        </label>
                                        <input type="text" class="form-control" id="saldo" placeholder="Masukkan username" name="saldo" value="Rp. <?= number_format($tabungan['tabungan'], 0, ",", "."); ?>" readonly>
                                        <input type="hidden" class="form-control" id="saldo" placeholder="Masukkan username" name="id_siswa" value="<?= $tabungan['id_siswa']; ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="nominalr">
                                            Masukkan Nominal
                                        </label>
                                        <input type="text" min="0" class="form-control" name="nominal" id="rupiah" autocomplete="off" required>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="ambil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Ambil Saldo</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('Tabungan/ambil'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="saldo">
                                            Saldo Tabungan
                                        </label>
                                        <input type="text" class="form-control" id="saldo" placeholder="Masukkan username" name="saldo" value="Rp. <?= number_format($tabungan['tabungan'], 0, ",", "."); ?>" readonly>
                                        <input type="hidden" class="form-control" id="saldo" placeholder="Masukkan username" name="id_siswa" value="<?= $tabungan['id_siswa']; ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="nominal">
                                            Masukkan Nominal
                                        </label>
                                        <input type="text" autocomplete="off" min="0" class="form-control" name="nominal" id="rupiah2" autocomplete="off" required>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Ambil</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <p>Nisn : <?= $tabungan['nisn']; ?></p>
                    <input type="hidden" class="form-control" id="Nisn" placeholder="Masukkan username" name="nisn" value="<?= $tabungan['nisn']; ?>" readonly>
                </div>
                <div class="form-group">

                    <p>Nama : <?= $tabungan['nama']; ?></p>

                    <input type="hidden" class="form-control" id="Nama" placeholder="Masukkan username" name="nama" value="<?= $tabungan['nama']; ?>" disabled>
                </div>
                <div class="form-group">
                    <p>Saldo Tabungan : Rp. <?= number_format($tabungan['tabungan'], 0, ",", "."); ?>,-</p>
                    <input type="hidden" class="form-control" id="Nama" placeholder="Masukkan username" name="nama" value="<?= $tabungan['tabungan']; ?>" disabled>

                </div>
                <a href="<?= base_url('Tabungan'); ?>" class="btn btn-default">Tutup</a>
                <button style="width:10%; margin-bottom:px; height:32px;" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#simpan">
                    Simpan
                </button>
                <button style="width:10%; margin-bottom:px; height:32px;" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ambil">
                    Ambil
                </button>
            </div>
        </div>
    </div>
    <footer class="pull-left footer">
        <p class="col-md-12">
            <hr class="divider">

        </p>
    </footer>
</div>
<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
<script type="text/javascript">
    var rupiah2 = document.getElementById('rupiah2');
    rupiah2.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah2.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah2 = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah2 += separator + ribuan.join('.');
        }

        rupiah2 = split[1] != undefined ? rupiah2 + ',' + split[1] : rupiah2;
        return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
    }
</script>