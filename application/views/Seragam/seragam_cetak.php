<!doctype html>
<html>
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<head>
    <meta charset="utf-8">
    <title>Struk Pembayaran</title>

    <style>
        @font-face {
            font-family: "u";
            src: url('<?= base_url('u.TTF'); ?>');
        }

        .invoice-box {
            max-width: 320px;
            margin: auto;
            padding: 40px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 13px;
            line-height: 21px;
            font-family: 'u', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }


        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 9px;
            line-height: 11px;
            color: #333;
            padding: 0px;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            font-weight: bold;
            font-size: 9px;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }

        @media print {
            #back {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?= base_url('vendor/images/icon/bank.png'); ?>" style="width:100%; max-width:100px;"><br>
                                Bank Mini SMKN 1 Depok
                            </td>

                            <td>
                                Invoice: <br>
                                Tanggal Pembayaran: <?= date('d F y', $tanggal); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Gang Bhakti Suci No.100. <br>
                                Cimpaeun, Tapos, Kota Depok<br>
                                Jawa Barat, 16459.
                            </td>

                            <td>
                                Onebank SMKN 1 Depok.<br>
                                <?= $user['name']; ?><br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Data Siswa
                </td>

                <td>
                    Keterangan
                </td>
            </tr>
            <tr>
                <td>
                    Nisn
                </td>

                <td>
                    <?= $nisn; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>

                <td>
                    <?= $nama; ?>
                </td>
            </tr>


            <tr>
                <td>
                    Tahun Ajaran
                </td>

                <td>
                    <?= $tahun; ?>/<?= $tahun + 1; ?>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Pembayaran
                </td>

                <td>
                    Jumlah Uang
                </td>
            </tr>

            <tr class="item">
                <td>
                    Pembayaran Kunjungan Industri
                </td>

                <td>
                    Rp. <?= number_format($nominal, 0, ",", "."); ?>,-
                </td>
            </tr>

            <tr class="item last">
                <td>

                </td>

                <td>

                </td>
            </tr>

            <tr class="total">
                <td> Total :</td>

                <td>
                    Rp. <?= number_format($nominal, 0, ",", "."); ?>,-
                </td>
            </tr>
        </table>

    </div>
</body>

</html>

<script>
    window.print();
</script>