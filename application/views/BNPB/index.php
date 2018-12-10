<html>
	<head>
	<title>Pedestana</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
	<script href="<?php echo base_url('assets/js/script.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap4.css')?>" >
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
	
	
	</head>
	</head>
	<body >
    <nav class="navbar navbar-expand navbar-dark bg-nav">

     <h1 style="color:white;">Pedestana</h1>
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav side">
        <li class="nav-item active">
        <button type="button" class="btn tombol dipilih" id="overview">Overview</button>
		</li>
		
		<li class="nav-item">
		<button type="button" class="btn tombol" id="tb1">Fasilitator</button>
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
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item keterangan">Overview</li>
          </ol>
		  
		<div class="table-responsive" id="table1">
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
					$edit_id=0;
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
                        <button class="btn btn-sm btn-success" id="edit_fasilitator" onclick=<?php $edit_id=$hasil->ID_fasilitator;?> >Edit</button>
                        <a href="<?php echo base_url() ?>index.php/Fasilitator/hapus/<?php echo $hasil->ID_fasilitator?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>
                </tbody>
		</table>
		</div>
		
			
	
	
		<div class="table-responsive" id="table2">
	
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
                        <a href="<?php echo base_url() ?>index.php/BNPB/edit/<?php echo $hasil->ID_bnpb?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/BNPB/hapus/<?php echo $hasil->ID_bnpb?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		</div>

		<div class="table-responsive" id="table3">
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
                        <a href="<?php echo base_url() ?>index.php/Desa/edit/<?php echo $hasil->ID_desa?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/Desa/hapus/<?php echo $hasil->ID_desa?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		</div>
		
		<table style="width:100%;" id="form-tambah">
		<tr>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-fasilitator">Fasilitator</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-bnpb">BNPB</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-akun">Akun</button></td>
		</tr>
		</table>
		<form action="<?php echo base_url() ?>index.php/Fasilitator/simpan" method="post" id="form-fasilitator" >
		<div class="form-group">
		<label for="name">Nama : </label>
		<input type="text" class="form-control" name="Nama_fasilitator" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="birthday">Tanggal Lahir : </label>
		<input type="date" class="form-control" name="Tanggal_Lahir">
		</div>
		<div class="form-group">
		<label for="age">Umur : </label> 
		<input type="number" class="form-control" name="Umur" placeholder="Masukkan umur">
		</div>
		<div class="form-group">
		<label for="education">Pendidikan : </label>
		<select name="Pendidikan" >
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="D3">D3</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
		</select>
		</div>
		<div class="form-group">
		<label for="telephone">Nomer Hp : </label> 
		<input type="number" class="form-control" name="No_Hp" placeholder="Masukkan nomer telepon"> </td>
		</div>
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		</form>
		<form action="<?php echo base_url() ?>index.php/BNPB/simpan" method="post" id="form-bnpb">
		<div class="form-group">
		<label for="name">Nama : </label>
		<input type="text" class="form-control" name="Nama_bnpb" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="birthday">Tanggal Lahir : </label>
		<input type="date" class="form-control" name="Tanggal_Lahir">
		</div>
		<div class="form-group">
		<label for="age">Umur : </label>
		<input type="number" class="form-control" name="Umur" placeholder="Masukkan umur">
		</div>
		<div class="form-group">
		<label for="education">Pendidikan : </label> 
		<select name="Pendidikan" >
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="D3">D3</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
		</select>
		</div>
		<div class="form-group">
		<label for="telephone">Nomer Hp : </label>
		<input type="number" class="form-control" name="No_Hp" placeholder="Masukkan nomer telepon">
		</div>
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		</form>
		
		<form action="<?php echo base_url() ?>index.php/Login/simpan" method="post" id="form-akun">
		<div class="form-group">
		<label for="name">Username : </label> 
		<input type="text" class="form-control" name="user" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="password">Password : </label> 
		<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
		</div>
		<div class="form-group">
		<label for="education">Job : </label>  
		<select name="job" >
				<option value="fasilitator">Fasilitator</option>
				<option value="bnpb">BNPB</option>
		</select>
		</div>
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		</form>
		</div>
	</div>
		<script>
		$(document).ready(function(){
    $("#tb1").click(function(){
        $("#table1").show();
		$("#tb1").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#overview").removeClass('dipilih');
		$("#tb2").css("background-color","");
		$("#tb3").css("background-color","");
		$("#tambah").css("background-color","");
		$("#table2").hide();
		$("#table3").hide();
		$("#form-tambah").hide();
		$("#form-fasilitator").hide();
		$("#form-bnpb").hide();
		$("#form-akun").hide();
		$('.keterangan').text('Fasilitator');
    });
	
     $("#tb2").click(function(){
        $("#table1").hide();
		$("#table2").show();
		$("#table3").hide();
		$(".form-bnpb").show();
		$("#form-tambah").hide();
		$('.keterangan').text('BNPB');
		$("#form-tambah").hide();
		$("#form-fasilitator").hide();
		$("#form-bnpb").hide();
		$("#form-akun").hide();
		$("#tb2").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#tb1").css("background-color","");
		$("#tb3").css("background-color","");
		$("#tambah").css("background-color","");
		
    });
	
	  $("#tb3").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").show();
		$("#form-tambah").hide();
		$('.keterangan').text('Desa');
		$("#tb3").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#tb2").css("background-color","");
		$("#tb1").css("background-color","");
		$("#tambah").css("background-color","");
		
    });
	
		$("#overview").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#overview-page").show();
		$("#form-tambah").hide();
		$("#form-fasilitator").hide();
		$("#form-bnpb").hide();
		$("#form-akun").hide();
		$('.keterangan').text('Overview');
		$("#overview").css("background-color","#FFC600");
		$("#tb1").css("background-color","");
		$("#tb2").css("background-color","");
		$("#tb3").css("background-color","");
		$("#tambah").css("background-color","");
		
    });
	$("#tambah").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#overview-page").hide();
		$("#form-bnpb").hide();
		$("#form-fasilitator").show();
		$("#form-akun").hide();
		$("#form-tambah").show();
		$('.keterangan').text('Tambah');
		$("#tambah").css("background-color","#FFC600");
		$("#tb1").css("background-color","");
		$("#tb2").css("background-color","");
		$("#tb3").css("background-color","");
		$("#overview").css("background-color","");
		
    });
	$("#btn-bnpb").click(function(){
		$("#form-bnpb").show();
		$("#form-fasilitator").hide();
		$("#form-akun").hide();
		
		
	});
	
		$("#btn-fasilitator").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").show();
		$("#form-akun").hide();
		
		
	});
		$("#btn-akun").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").hide();
		$("#form-akun").show();
		
		
	});
	
});
		
		</script>

        </div>
        <!-- /.container-fluid -->
	<!--
	<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
	-->
		

      </div>
      <!-- /.content-wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
	



	</body>
</html>
