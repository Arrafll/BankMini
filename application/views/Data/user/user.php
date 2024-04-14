<script src="<?= base_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('tes.js'); ?>"></script>
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>DataTables/datatables.min.css" />

<script type="text/javascript" src="<?= base_url(); ?>DataTables/datatables.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>DataTables/data.js"></script>
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
                <img style="margin-top:-15px;width:100px;" src="<?= base_url(); ?>vendor/images/icon/logo.png" alt="Logo"> </a>
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
                            <li><a href="<?= base_url('admin'); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                    <span class="glyphicon glyphicon-user"></span> Data <span class="caret"></span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="<?= base_url('Data/Data_user'); ?>">User</a></li>
                                            <li><a href="<?= base_url('Data/Data_siswa'); ?>">Siswa</a></li>
                                            <li><a href="<?= base_url('Data/TahunAjaran'); ?>">Tahun Ajaran</a></li>

                                            <!-- Dropdown level 2 -->

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="<?= base_url('Tabungan'); ?>"><span class="glyphicon glyphicon-usd"></span> Tabungan</a></li>

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




    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Data User</h5>
            </div>
            <div class="panel-body">
                <?= $this->session->flashdata('message'); ?>

                <a href="<?= base_url('Data/Data_user/tambah'); ?>" class="btn btn-primary" style="margin-bottom:15px;">Tambah</a>


                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width:10px;">No</th>
                            <th style="text-align:center;">Gambar</th>
                            <th style="text-align:center;">Username</th>
                            <th style="text-align:center;">Nama</th>
                            <th style="text-align:center;">Tanggal Dibuat</th>

                            <th style="text-align:center;">Hapus</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user1 as $data) {  ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <div class="col text-center">
                                        <img style="height:70px; width:70px;" src="<?php echo base_url('vendor/images/profile/') . $data['image']; ?>" class="rounded-circle z-depth-0" alt="avatar image" height="50">
                                    </div>
                                </td>
                                <td>
                                    <div class="col text-center">
                                        <?= $data['username']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="col text-center">
                                        <?= $data['name']; ?>
                                    </div>

                                </td>
                                <td>
                                    <div class="col text-center">
                                        <?= date('d F Y', $data['date_created']); ?>
                                    </div>
                                </td>

                                <td>
                                    <div class="col text-center">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $data['id']; ?>">
                                            Hapus
                                        </button>
                                        <!-- Modal -->

                                    </div>
            </div>
            </td>
            <div class="modal fade" id="hapus<?= $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                        </div>
                        <div class="modal-body">
                            <p>Anda yakin ingin menghapus akun <?= $data['name']; ?> ?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="<?= base_url('Data/Data_user/hapus/') . $data['id']; ?>" method="post">
                                <input type="hidden" name="username" value="<?= $data['username']; ?>">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </tr> <?php $no++;
                        } ?> </tbody>
        <tfoot>

        </tfoot>
        </table>

        </div>
    </div>
</div>
<footer class="pull-left footer">
    <p class="col-md-12">
        <hr class="divider">

    </p>
</footer>
</div>