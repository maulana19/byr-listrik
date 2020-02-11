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
                   Ayo Bayar Listrik !!
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>index.php/riwayat_pembayaran/">
                        <i class="pe-7s-clock "></i>
                        <p>Tentang Anda</p>
                    </a>
                </li>
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
            <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Listrik</h4>
                                <p class="category">Daftar Listrik Yang Tersedia</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" >
                                    <center>
                                        <h1><b><?php echo $total_listrik; ?></b></h1>
                                    </center>
                                </div>

                                <div class="footer">
                                        <center>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>
                                        <i class="fa fa-circle text-danger"></i> 
                                        <i class="fa fa-circle text-warning"></i>
                                    </div>
                                        </center>
                                    <hr>
                                    <center>  
                                    <div class="stats">
                                       <a href="<?php echo base_url() ?>index.php/admin/dashboard/tampil_pelanggan">
                                            <button class="btn btn-center btn-primary btn-fill" >
                                                Selengkapnya
                                            </button>
                                       </a>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Pelanggan</h4>
                                <p class="category"> Pelanggan Yang Terdaftar</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" >
                                    <center>
                                        <h1><b><?php echo $total_pelanggan; ?></b></h1>
                                    </center>
                                </div>

                                <div class="footer">
                                        <center>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>
                                        <i class="fa fa-circle text-danger"></i> 
                                        <i class="fa fa-circle text-warning"></i>
                                    </div>
                                        </center>
                                    <hr>
                                    <center>  
                                    <div class="stats">
                                       <button class="btn btn-center btn-primary btn-fill">Selengkapnya
                                       </button>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Petugas</h4>
                                <p class="category">Daftar Petugas Kami </p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" >
                                    <center>
                                        <h1><b><?php echo $total_petugas ?></b></h1>  
                                    </center>
                                </div>

                                <div class="footer">
                                        <center>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>
                                        <i class="fa fa-circle text-danger"></i> 
                                        <i class="fa fa-circle text-warning"></i>
                                    </div>
                                        </center>
                                    <hr>
                                    <center>  
                                    <div class="stats">
                                       <button class="btn btn-center btn-primary btn-fill">Selengkapnya
                                       </button>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Riwayat</h4>
                                <p class="category">Daftar Riwayat Dari Pembelian</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" >
                                    <center>
                                        <h1><b><?php echo $total_riwayat ?></b></h1>
                                    </center>
                                </div>

                                <div class="footer">
                                        <center>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>
                                        <i class="fa fa-circle text-danger"></i> 
                                        <i class="fa fa-circle text-warning"></i>
                                    </div>
                                        </center>
                                    <hr>
                                    <center>  
                                    <div class="stats">
                                       <button class="btn btn-center btn-primary btn-fill">Selengkapnya
                                       </button>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
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
