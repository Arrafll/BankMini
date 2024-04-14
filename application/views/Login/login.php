<script src="<?= base_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('tes.js'); ?>"></script>
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Website CSS style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- Website Font style -->

    <link rel="stylesheet" href="form1.css">
    <!-- Google Fonts -->


    <title>MegaMenu Design</title>
    <style>
        #playground-container {
            height: 500px;
            overflow: hidden !important;


        }

        .main {
            margin-top: 70px;
            -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            padding: 0px;
        }

        .fb:focus,
        .fb:hover {
            color: FFF !important;
        }

        body {
            height: 100%;
            background-image: url('vendor/images/background/kelas.png');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Raleway', sans-serif;
        }

        .left-side {
            padding: 0px 0px 38px;
            background: linear-gradient(#896deb, #6b66c6);
            /* Standard syntax */
            background-size: cover;
        }

        .left-side h1 {
            font-size: 60px;
            font-weight: 900;
            color: #FFF;
            padding: 50px 10px 00px 26px;
        }

        .left-side p {
            font-weight: 600;
            color: #FFF;
            padding: 10px 10px 10px 26px;
        }


        .fb {
            background: #2d6bb7;
            color: #FFF;
            padding: 10px 15px;
            border-radius: 18px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 15px;
            margin-left: 26px;
            -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
        }

        .tw {
            background: #20c1ed;
            color: #FFF;
            padding: 10px 15px;
            border-radius: 18px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 15px;
            -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
        }

        .right-side {
            padding: 30px 0px 100px;
            background: #FFF;
            background-size: cover;
            min-height: 514px;
        }

        .right-side h1 {
            font-size: 30px;
            font-weight: 700;
            color: #000;
            padding: 50px 10px 00px 50px;
        }

        .right-side p {
            font-weight: 600;
            color: #000;
            padding: 10px 50px 10px 50px;
        }

        .form {
            padding: 10px 50px 10px 50px;
        }

        .form-control {
            box-shadow: none !important;
            border-radius: 0px !important;
            border-bottom: 1px solid #9100ff !important;
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
        }

        .btn-deep-purple {
            background: #84d14e;
            border-radius: px;
            padding: 5px 35px;
            color: #FFF;
            font-weight: 600;
            float: right;
            -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.24);
        }

        button {
            position: right;
            float: right;
            outline: none;
            text-decoration: none;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-transform: uppercase;
            height: 34px;
            width: 70px;
            opacity: 1;
            background-color: #ffffff;
            border: 1px solid rgba(22, 76, 167, 0.6);
            span;
            color: rgba(22, 76, 167, 1);
            font-size: 13px;
            font-weight: 610;
            letter-spacing: 0.7px;
            ;
        }

        .saep {
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2 main">
            <div class="col-sm-6 left-side" style="height:auto;">
                <h1>One<br>Bank.</h1>
                <p>Bank Mini SMK Negeri 1 Depok</p>
                <br><br><br><br><br><br><br><br>
                <div class="saep">
                    <p>
                        <span class="glyphicon glyphicon-home"></span> <b> Location </b> : Gang Bhakti Suci No.100, Cimpaeun, Tapos, 16459<br>
                        <span class="glyphicon glyphicon-phone"></span> Phone : 021-8790-7233<br>
                        <span class="glyphicon glyphicon-envelope"></span> Email : smkn1depok@gmail.com</p>
                </div>
            </div>
            <!--col-sm-6-->

            <div class="col-sm-6 right-side" style="height:537px;">
                <h1>Login</h1>
                <p>Masukan Username Dan Password..</p>

                <!--Form with header-->
                <div class="form">
                    <form action="<?php echo base_url('Master') ?>" method="post">
                        <div class="form-group">
                            <?= $this->session->flashdata('message'); ?>
                            <label for="form2">Username</label>
                            <input type="text" placeholder=" Username" id="form2" class="form-control" type="text" name="username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>

                        <div class="form-group">
                            <label for="form4">Password</label>
                            <input type="password" id="form4" class="form-control" type="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>

                        <div class="text-xs-center">
                            <button type="submit">
                                <span>Login</span>
                            </button>
                            <form>
                        </div>


                </div>
                <!--/Form with header-->

            </div>
            <!--col-sm-6-->


        </div>
        <!--col-sm-8-->

    </div>
    <!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="form1.js"></script>

</body>

</html>