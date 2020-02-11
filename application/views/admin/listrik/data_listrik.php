	<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Daftar Listrik</title>

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
                    <a href="<?php echo base_url() ?>index.php/transaksi/">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url() ?>index.php/listrik/">
                        <i class="pe-7s-gleam"></i>
                        <p>Tarif Listrik</p>
                    </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>index.php/pelanggan/">
                        <i class="pe-7s-users"></i>
                        <p>Pelanggan </p>
                    </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>index.php/petugas/">
                        <i class="pe-7s-id"></i>
                        <p>Petugas </p>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Listrik</h4>
                                <p class="category">Ini Adalah Halaman yang berisi data tarif dari listrik yag tersedia</p>
                            </div>
                            <?php echo $this->session->flashdata('notif') ?>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th><center>No.</center></th>
										<th><center>Daya Listrik (VA)</center></th>
										<th><center>Harga</center></th>
										<th colspan="2"><center>Option</center></th>
									</thead>
                                    <tbody>
											<?php 
											$no = $this->uri->segment('3') + 1;
											foreach ($daya as $listrik) {
											  ?>	
									<tr>
										<td><center><?php echo $no++ ?></center> </td>
										<td><center><?php echo $listrik->daya ?>VA</center></td>
										<td><center>Rp.<?php echo $listrik->gol_tarif ?></center></td>
										<td>
                                            <center>  
											<a class="btn btn-md btn-fill btn-info" href="<?php echo base_url()?>index.php/listrik/edit/<?php echo $listrik->id ?>"><span class="pe-7s-tools"></span>Edit </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
											<a href="<?php echo base_url()?>index.php/listrik/hapus/<?php echo $listrik->id ?>" class="btn btn-md btn-fill btn-danger"><span class="pe-7s-trash"></span>Hapus
											</a>
                                            </center>
										</td>
									</tr>
										<?php } ?>

										<a class="btn btn-fill btn-success" href="<?php echo base_url() ?>index.php/listrik/tambah"><span class="pe-7s-plus"></span>      Tambah Listrik</a>
                                    </tbody>
                                </table>
                                <?php 
                                echo $this->pagination->create_links(); ?>

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
