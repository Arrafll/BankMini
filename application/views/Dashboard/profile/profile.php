<script src="<?= base_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('tes.js'); ?>"></script>
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">


<style>
    input.hidden {
        position: absolute;
        left: -9999px;
    }

    #profile-image1 {
        cursor: pointer;

        width: 100px;
        height: 100px;
        border: 2px solid #03b1ce;
    }

    .tital {
        font-size: 16px;
        font-weight: 500;
    }

    .bot-border {
        border-bottom: 1px #f8f8f8 solid;
        margin: 5px 0 5px 0
    }

    .wrimagecard {
        margin-top: 0;
        margin-bottom: 1.5rem;
        text-align: center;
        position: relative;
        background: #fff;
        box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);
        border-radius: 8px;
        transition: all 0.3s ease;
        font-family: 'Raleway', sans-serif;
    }

    .wrimagecard .fa {
        position: relative;
        font-size: 70px;
    }

    .wrimagecard-topimage_header {
        padding: 90px;
    }

    a.wrimagecard:hover,
    .wrimagecard-topimage:hover {
        box-shadow: 2px 4px 8px 0px rgba(46, 61, 73, 0.2);
    }

    .wrimagecard-topimage a {
        width: 100%;
        height: 50%;
        display: block;
    }

    .wrimagecard-topimage_title {
        padding: 20px 24px;
        height: 100px;
        padding-bottom: 0.75rem;
        position: relative;
    }

    .wrimagecard-topimage a {
        border-bottom: none;
        text-decoration: none;
        color: #525c65;
        transition: color 0.3s ease;
    }
</style>
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
                        <img style="height:40px;width:50px;" src="<?php echo base_url('vendor/images/profile/') . $user['image']; ?>" class="" alt="avatar image" height="">
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

        <div class="panel panel-default" style="width:70%;">
            <div class="panel-heading">
                Profileku <a href="<?= base_url('Admin/edit'); ?>" style="margin-left:82%;" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            </div>


            <div class="panel-body" style="">
                <?= $this->session->flashdata('message'); ?>
                <div class="box box-info">

                    <div class="box-body">
                        <div class="col-sm-6">
                            <div align="center"> <img alt="User Pic" style="height:250px; width:250px;" src="<?= base_url('vendor/images/profile/') . $user['image']; ?>">


                                <!--Upload Image Js And Css-->







                            </div>

                            <br>

                            <!-- /input-group -->
                        </div>
                        <div class="col-sm-6">
                            <h4 style="color:#00b1b1;"><?= $user['name']; ?> </h4></span>
                            <span>
                                <p><?= $user['jabatan']; ?></p>
                            </span>
                        </div>

                        <div class="clearfix"></div>
                        <hr style="margin:5px 0 5px 0;">

                        <div class="col-sm-5 col-xs-6 tital ">Username:</div>
                        <div class="col-sm-7"><?= $user['username']; ?></div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital ">Nama:</div>
                        <div class="col-sm-7 col-xs-6 "><?= $user['name']; ?></div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>



                        <div class="col-sm-5 col-xs-6 tital ">Tanggal Dibuat</div>
                        <div class="col-sm-7"><?= date('d F Y', $user['date_created']); ?></div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>


            </div>
        </div>
    </div>
    <footer class="pull-left footer">
        <p class="col-md-12">
            <hr class="divider">

        </p>
    </footer>
</div>
<script>
</script>