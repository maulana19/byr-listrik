
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php echo $title ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css" rel="stylesheet') ?>" />
    <link href="<?php echo base_url('assets/css/animate.min.css" rel="stylesheet') ?>"/>
    <link href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css?v=1.4.0') ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/demo.css" rel="stylesheet') ?>" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css" rel="stylesheet') ?>" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="<?php echo base_url('assets/img/sidebar-5.jpg') ?>">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Kelompok 2
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url() ?>index.php/bayar/">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url() ?>index.php/riwayat_pembayaran/">
                        <i class="pe-7s-clock "></i>
                        <p>Riwayat Pembayaran</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>index.php/listrik_1/">
                        <i class="pe-7s-gleam"></i>
                        <p>Tarif listrik </p>
                    </a>
                </li>
                <li>
                <li>
                    <a href="<?php echo base_url() ?>index.php/Login/">
                        <i class="pe-7s-back-2"></i>
                        <p>Keluar</p>
                    </a>
                </li>
                
                
                
            
            </ul>
        </div>
    </div>

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-16">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-7">
                                <h4 class="title"><?php echo $title ?></h4>
                                <p class="category">Halaman daftar riwayat Pembayaran listrik</p>
                                </div>
                                    <?php echo form_open('riwayat_pembayaran/cari') ?>
                                        <form class="" method="post">
                                            <div class="col-md-3">
                                                <input type="text" name="carian" placeholder="Cari..." class="form-control">
                                            </div>
                                            <div class="col-md-2">  
                                                <button type="submit" name="cari" value="cari" class="btn btn-md btn-fill btn-info" title="Cari"><span class="pe-7s-search"></span></button>
                                                <a  href="<?php echo base_url() ?>index.php/riwayat_pembayaran"><button class="btn btn-md btn-primary btn-fill" title="refresh"> <span class="pe-7s-refresh"></span></button></a>
                                            </div>
                                        </form>
                                        <?php echo form_close() ?>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th><center>No.</center></th>
                                        <th><center>Kode Pembayaran</center></th>
                                        <th><center>ID Petugas</center></th>
                                        <th><center>Tanggal Bayar</center></th>
                                        <th><center>id_pelanggan</center></th>
                                        <th><center>id_daya</center></th>
                                        <th><center>Total Bayar</center></th>
                                        <th><center>Kembalian</center></th>
                                        <th colspan="2"><center>Option</center></th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($data_transaksi as $r) {
                                      ?>    
                                        <tr>
                                            <td><center><?php echo $no++ ?></center></td>
                                            <td><center><?php echo $r->kode_pembayaran?></center></td>
                                            <td><center><?php echo $r->id_petugas?></center></td>
                                            <td><center><?php echo $r->tanggal_pembayaran?></center></td>
                                            <td><center><?php echo $r->id_pelanggan?></center></td>
                                            <td><center><?php echo $r->daya?></center></td>
                                            <td><center>Rp.<?php echo $r->total_bayar?></center></td>
                                            <td><center>Rp.<?php echo $r->kembalian?></center></td>
                                            <td>
                                                <center>  
                                                <a class="btn btn-fill btn-md btn-danger" href="<?php echo base_url()?>index.php/riwayat_pembayaran/hapus/<?php echo $r->id ?>"><span class="pe-7s-trash"></span>      Hapus Data</a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    


                </div>
            </div>
        </div>

        


    </div>
</div>


</body>

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="assets/js/chartist.min.js"></script>

    <script src="assets/js/bootstrap-notify.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>


    <script src="assets/js/demo.js"></script>


</html>
