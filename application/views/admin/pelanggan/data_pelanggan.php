<!DOCTYPE html>
<html lang="en">
<body>

<div class="wrapper">
    

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-13">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-8">
                                <h4 class="title">Tampil Daftar Pelanggan</h4>
                                <p class="category">Ini Adalah Halaman Berisi Data Pelanggan Anda</p>
                                    <a class="btn btn-md btn-fill btn-success" href=""><span class="pe-7s-plus"></span>      Tambah Data Pelanggan</a>
                                </div>
                                
                                        <form class="" method="post">
                                            <div class="col-md-3">
                                                <input type="text" name="carian" placeholder="Cari Pelanggan..." class="form-control">
                                            </div>
                                            <div class="col-md-1">  
                                                <button type="submit" name="cari" value="cari" class="btn btn-md btn-fill btn-info" title="Cari"><span class="pe-7s-search"></span></button>
                                            </div>
                                        </form>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th>No.</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Telepon (+62)</th>
										<th colspan="2"><center>Option</center></th>
									</thead>
                                    <tbody>
									<?php 
									$no = $this->uri->segment('3') + 1;
									foreach ($pelanggan as $pelanggan) {
									  ?>	
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $pelanggan->nama ?></td>
											<td><?php echo $pelanggan->alamat ?></td>
											<td>+62<?php echo $pelanggan->telepon ?></td>    
											<td>
												<a href="" class="btn btn-fill btn-sm btn-info"><span class="pe-7s-tools"></span>      Ubah Data</a>
                                            </td>
                                            <td>
												<a href="" class="btn btn-fill btn-sm btn-danger"><span class="pe-7s-trash"></span>      Hapus Data</a>
											</td>
										</tr>
									<?php } ?>

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


</html>
