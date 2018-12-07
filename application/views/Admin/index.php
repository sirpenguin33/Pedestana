<html>
	<head>
	<title>Pedestana</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/script.js')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap4.css')?>" >
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>
	<script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/datatables-demo.js')?>"></script>
	
	
	</head>
	</head>
	<body >
    <nav class="navbar navbar-expand navbar-dark bg-nav">

     <h1 style="color:white;">Pedestana</h1>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
        <button type="button" class="btn tombol" id="overview">Overview</button>
		</li>
		
		<li class="nav-item">
		<button type="button" class="btn tombol" id="tb1">Fasilitator</button>
        </li>
        <li class="nav-item dropdown">
          <button type="button" class="btn tombol" id="tb3">Desa</button>
        </li>
        <li class="nav-item">
        <button type="button" class="btn tombol" id="tb2">BNPB</button>
        </li>
		<li class="nav-item">
        <button type="button" class="btn tombol" id="tambah">Tambah</button>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item keterangan">Overview</li>
          </ol>

          <!-- DataTables Example -->
		<table style="width:100%;margin:0 0 2% 0;">
		<tr >
			
			
		</tr>
	</table>
		<div class="table-responsive" id="table1">
		<button type="button" class="btn btn-success button-tambah">Tambah</button>
		<table class="table-dark table-striped" style="width:100%;text-align:center;">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Umur</th>
		<th>Pendidikan</th>
		<th>Nomer Telepon</th>
		</tr>
		</thead>
	     <tbody>

                <?php
                    $no = 1; 
                    foreach($data_fasilitator as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Nama_fasilitator ?></td>
                    <td><?php echo $hasil->Tanggal_Lahir ?></td>
					<td><?php echo $hasil->Umur ?></td>
					<td><?php echo $hasil->Pendidikan ?></td>
                    <td><?php echo $hasil->No_Hp ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		</div>
		
			
	
	
		<div class="table-responsive" id="table2">
		<button type="button" class="btn btn-success button-tambah">Tambah</button>
		<table class="table-dark table-striped" style="width:100%;text-align:center;">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama BNPB</th>
		<th>Tanggal Lahir</th>
		<th>Umur</th>
		<th>Pendidikan</th>
		<th>Nomer Telepon</th>
		</tr>
		</thead>
	     <tbody>

                <?php
                    $no = 1; 
                    foreach($data_bnpb as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Nama_bnpb ?></td>
                    <td><?php echo $hasil->Tanggal_Lahir ?></td>
					<td><?php echo $hasil->Umur ?></td>
					<td><?php echo $hasil->Pendidikan ?></td>
					<td><?php echo $hasil->No_Hp ?></td>
					<td>
                        <a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		</div>

		<div class="table-responsive" id="table3">
		<button type="button" class="btn btn-success button-tambah">Tambah</button>
		<table class="table-dark table-striped" style="width:100%;text-align:center;">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th>Lokasi</th>
		<th>Kategori</th>
		<th>BNPB</th>
		<th>Fasilitator</th>
		</tr>
		</thead>
	     <tbody>

                <?php
                    $no = 1; 
                    foreach($data_desa as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Nama_desa ?></td>
                    <td><?php echo $hasil->Lokasi ?></td>
					<td><?php echo $hasil->Kategori ?></td>
					<td><?php echo $hasil->Nama_bnpb ?></td>
					<td><?php echo $hasil->Nama_fasilitator ?></td>
					<td>
                        <a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		</div>
		
		<div class="container-fluid" id="form-tambah">
		<table style="width:100%;">
		<tr>
			<td><button type="button" class="btn btn-primary btn-block" id="form-fasilitator">Fasilitator</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="form-desa">Desa</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="form-bnpb">BNPB</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="form-akun">Akun</button></td>
		</tr>
		<form action="<?php echo base_url() ?>index.php/Fasilitator/simpan" method="post">
		<tr>
		<td><label for="name">Nama : </label> </td>
		<td><input type="text" class="form-control" name="Nama_fasilitator" placeholder="Masukkan nama"> </td>
		</tr>
		<tr >
		<td><label for="birthday">Tanggal Lahir : </label> </td>
		<td><input type="date" class="form-control" name="Tanggal_Lahir"> </td>
		</tr>
		<tr>
		<td><label for="age">Umur : </label> </td>
		<td><input type="number" class="form-control" name="Umur" placeholder="Masukkan umur"> </td>
		</tr>
		<tr>
		<td><label for="education">Pendidikan : </label> </td>
		<td> 
		<select name="Pendidikan" >
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="D3">D3</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
		</select>
		</td>
		</tr>
		<tr>
		<td><label for="telephone">Nomer Hp : </label> </td>
		<td><input type="number" class="form-control" name="No_Hp" placeholder="Masukkan nomer telepon"> </td>
		</tr>
		<tr>
		<td>
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		</td>
		</tr>
		
		</form>
		</table>
		
		</div>
	</div>
		<script>
		$(document).ready(function(){
    $("#tb1").click(function(){
        $("#table1").show();
		$("#table2").hide();
		$("#table3").hide();
		$("#form-tambah").hide();
		$('.keterangan').text('Fasilitator');
		
    });
	
     $("#tb2").click(function(){
        $("#table1").hide();
		$("#table2").show();
		$("#table3").hide();
		$("#form-tambah").hide();
		$('.keterangan').text('BNPB');
		
    });
	
	  $("#tb3").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").show();
		$("#form-tambah").hide();
		$('.keterangan').text('Desa');
		
    });
	
		  $("#overview").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#overview").show();
		$("#form-tambah").hide();
		$('.keterangan').text('Overview');
		
    });
	$("#tambah").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#overview").hide();
		$("#form-tambah").show();
		$('.keterangan').text('Tambah');
		
    });
	
});
		</script>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

	</body>
</html>
