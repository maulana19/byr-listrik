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
                <li class="active">
                    <a href="<?php echo base_url() ?>index.php/bayar/">
                        <i class="pe-7s-home"></i>
                        <p>Bayar Listrik</p>
                    </a>
                </li>
                <li>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Pilih Pelanggan</h4><br>
                            </div>

                                    <?php echo form_open('bayar/cari') ?>
                                
                                    <form action="" class="form-inline" method="post">
                                        <div class="col-md-4">
                                        <input type="text" name="carian" placeholder="Cari Pelanggan..." class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                        <button type="submit" name="cari" value="cari" class="btn btn-md btn-fill btn-info" title="Cari"><span class="pe-7s-search"></span></button></div>
                                    </form>
                                
                                    <?php echo form_close() ?>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th><center>No.</center></th>
                                        <th><center>Nama</center></th>
                                        <th><center>Besar Listrik (Kwh)</center></th>
                                        <th><center>Harga</center></th>
                                        <th><center>Option</center></th>
                                    </thead>
                                    <tbody> 

                                            <?php 
                                            $no = 1;
                                            // print_r($data_pelanggan);
                                            foreach ($data_pelanggan as $k) {
                                                ?>
                                        <tr>
                                            <td><center><?php echo $no++; ?></center></td>
                                            <td><?php echo $k->nama ?></td>
                                            <td><center><?php echo $k->daya ?></center></td>
                                            <td><center><?php echo $k->gol_tarif ?></center></td>
                                            <td>
                                                <a href="<?php echo base_url()?>index.php/bayar/pilih_pelanggan/<?php echo $k->id ?>" class="btn btn-sm btn-fill btn-success btn-block">Pilih Pelanggan</a></td>
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
