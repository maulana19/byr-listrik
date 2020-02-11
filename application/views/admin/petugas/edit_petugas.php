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

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


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
                <li >
                    <a href="<?php echo base_url() ?>index.php/listrik/">
                        <i class="pe-7s-gleam"></i>
                        <p>Tarif Listrik</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>index.php/pelanggan/">
                        <i class="pe-7s-users"></i>
                        <p>Pelanggan </p>
                    </a>
                </li>
                <li class="active">
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
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title ?></h4>
                            </div>
                            <div class="content">
                            	<?php echo form_open('petugas/update') ?>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">ID petugas (Otomatis)</label>
                                                <input type="hidden" class="form-control" name="id" value="<?php echo $data_petugas->id ?>">
												<input type="text" class="form-control" name="kode_petugas" readonly="readonly"value="<?php echo $data_petugas->kode_petugas ?>" >
											</div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">Nama</label>
												<input type="text" class="form-control" name="nama" required="required" value="<?php echo $data_petugas->nama ?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">alamat</label>
												<input type="text" class="form-control" name="alamat" required="required" value="<?php echo $data_petugas->alamat ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">Telepon(+62)</label>
												<input class="form-control" type="number" name="telepon" required="required" required="required" value="<?php echo $data_petugas->telepon ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">Jenis Kelamin</label>
												<select class="form-control" name="gender" id="gender">
													<option class="form-control" selected="selected" disabled="disabled" value="<?php echo $data_petugas->gender ?>"><?php echo $gender[$data_petugas->gender] ?></option>
													<option value="1" class="form-control">Laki-Laki</option>
													<option value="0" class="form-control"	> Perempuan</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control" name="akses" id="akses">
                                                    <option class="form-control" value="<?php echo $data_petugas->akses ?>" selected="selected" disabled="disabled"><?php echo $akses[$data_petugas->akses] ?></option>
                                                    <option value="0" class="form-control">Petugas</option>
                                                    <option value="1" class="form-control"  >Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" class="form-control" name="username" required="required" value="<?php echo $data_petugas->username ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">password</label>
                                                <input type="text" class="form-control" name="password" required="required" value="<?php echo $data_petugas->password ?> ">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>


        

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
