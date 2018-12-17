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
	 <a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a>
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
        <button type="button" class="btn tombol" id="tb3">Desa</button>
        </li>
		<li class="nav-item">
        <button type="button" class="btn tombol" id="tb4">Laporan</button>
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
		  <div id="overview-page" class="container-fluid">
		  
		  <?php
		  
		  if(isset($this->session->userdata['nama'])){
			  $username=($this->session->userdata('nama'));			  
		  }else{
			 redirect('/Login');
		  } 
		  ?>
		  <div class="row table-responsive">
		  <div class="col-lg-6">
		  <table style="width:100%;" class="table">
		  <tr style="text-align:center;border:10px;" class="table" colspan=2 >
		  <th> Data Akun</th>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Username : <?php echo $username ?></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Job : Admin</td>
		  </tr>
		  </table>
		  
		  </div>
		   <div class="col-lg-6">
		  </div>
		  
		  
		  </div>
		  
		  
		 
		  </div>
		  
		  
		<div class="table-responsive" id="table1">
		<table class="table-dark table-striped" style="width:100%;text-align:center;">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
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
				<?php if($hasil->ID_fasilitator=="0"){
				}else{?>
			
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Nama_fasilitator ?></td>
                    <td><?php echo $hasil->Tanggal_Lahir ?></td>
					<td><?php echo $hasil->Pendidikan ?></td>
                    <td><?php echo $hasil->No_Hp ?></td>
                    <td>
                        <a class="btn btn-sm btn-success" id="edit_fasilitator" href="<?php echo base_url() ?>index.php/Fasilitator/edit/<?php echo $hasil->ID_fasilitator?>" >Edit</a>
                        <a href="<?php echo base_url() ?>index.php/Fasilitator/hapus/<?php echo $hasil->ID_fasilitator?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
				<?php }?>

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
				
				<?php if($hasil->ID_bnpb=="0"){
				}else{?>
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
                    <td><?php echo $hasil->Daerah	 ?></td>
					<td><?php echo $hasil->Kategori ?></td>
					<td>
                        <a href="<?php echo base_url() ?>index.php/Desa/edit/<?php echo $hasil->ID_desa?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/Desa/hapus/<?php echo $hasil->ID_desa?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		</div>
		
		<div class="table-responsive" id="table4" style="display:none;">
		<table class="table">
		
		
		<thead>
		<tr style="text-align:center;">
		<th>No</th>
		<th>Laporan Desa</th>
		<th>Oleh(Fasilitator)</th>
		<th>Diperiksa oleh(BNPB)</th>
		<th>Status</th>
		</tr>
		</thead>
	     <tbody>


                <?php
                    $no = 1; 
                    foreach($data_laporan as $hasil){ 
                ?>

                  <tr style="text-align:center;">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Nama_desa ?></td>
                    <td><?php echo $hasil->Nama_fasilitator?></td>
					<td><?php echo $hasil->Nama_bnpb ?></td>
					<?php if($hasil->Status=="Verified"){ ?>
					<td class="alert alert-success" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td> </td>
					<?php } else if($hasil->Status=="Waiting"){ ?>
					<td class="alert alert-danger" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td> </td>
					<?php } else {?>
					<td class="alert alert-info" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td></td>
					<?php } ?>
					<td>
                    <a href="<?php echo base_url() ?>index.php/Laporan/hapus/<?php echo $hasil->ID?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
					
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
		</div>
		
		<table style="width:100%;" id="form-tambah" style="margin:0 0 2% 0;">
		<tr>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-fasilitator" style="background-color:#FFC600;">Fasilitator</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-bnpb">BNPB</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-akun">Desa</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-laporan">Laporan</button></td>
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
		
		<form action="<?php echo base_url() ?>index.php/Desa/simpan" method="post" id="form-akun">
		<div class="form-group">
		<label for="name">Nama desa : </label> 
		<input type="text" class="form-control" name="Nama_desa" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="Location">Lokasi : </label> 
		<select name="Lokasi" >
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="D3">D3</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
		</select>
		</div>
	
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		</form>
		
				<form action="<?php echo base_url() ?>index.php/Laporan/simpan" method="post" id="form-laporan" style="display:none;">
		<div class="form-group">
		<label for="Location">Nama Desa : </label> 
			<select name="ID_DESA" >
			<?php foreach($data_desa as $hasil){ ?>
			<option value="<?php echo $hasil->ID_desa?>"><?php echo $hasil->Nama_desa?></option>
			<?php } ?>
			</select>
		</div>
		<div class="form-group">
		<label for="Fasilitator">Kepada Fasilitator : </label> 
		<select name="ID_FASILITATOR" >
		<?php foreach($data_fasilitator as $hasil){ ?>
		<option value="<?php echo $hasil->ID_fasilitator?>"><?php echo $hasil->Nama_fasilitator?></option>
		<?php } ?>
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
		$("#tb4").css("background-color","");
		$("#tambah").css("background-color","");
		$("#table2").hide();
		$("#table3").hide();
		$("#table4").hide();
		$("#form-tambah").hide();
		$("#overview-page").hide();
		$("#form-fasilitator").hide();
		$("#form-bnpb").hide();
		$("#form-akun").hide();
		$('.keterangan').text('Fasilitator');
		$("#form-laporan").hide();
    });
	
     $("#tb2").click(function(){
        $("#table1").hide();
		$("#table2").show();
		$("#table3").hide();
		$("#table4").hide();
		$("#overview-page").hide();
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
		$("#tb4").css("background-color","");
		$("#tambah").css("background-color","");
		$("#form-laporan").hide();
		
    });
	
	  $("#tb3").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").show();
		$("#table4").hide();
		$("#overview-page").hide();
		$("#overview").removeClass('dipilih');
		$("#form-tambah").hide();
		$("#form-fasilitator").hide();
		$("#form-bnpb").hide();
		$("#form-akun").hide();
		$('.keterangan').text('Desa');
		$("#tb3").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#tb2").css("background-color","");
		$("#tb1").css("background-color","");
		$("#tb4").css("background-color","");
		$("#tambah").css("background-color","");
		$("#form-laporan").hide();
		
    });
	
		  $("#tb4").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#table4").show();
		$("#overview-page").hide();
		$("#overview").removeClass('dipilih');
		$("#form-tambah").hide();
		$("#form-fasilitator").hide();
		$("#form-bnpb").hide();
		$("#form-akun").hide();
		$('.keterangan').text('Desa');
		$("#tb4").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#tb2").css("background-color","");
		$("#tb1").css("background-color","");
		$("#tb3").css("background-color","");
		$("#tambah").css("background-color","");
		$("#form-laporan").hide();
		
    });
	
		$("#overview").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#table4").hide();
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
		$("#tb4").css("background-color","");
		$("#tambah").css("background-color","");
		$("#overview-page").show();
		$("#form-laporan").hide();
		
    });
	$("#tambah").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#table4").hide();
		$("#overview-page").hide();
		$("#form-bnpb").hide();
		$("#form-fasilitator").show();
		$("#form-akun").hide();
		$("#form-laporan").hide();
		$("#form-tambah").show();
		$('.keterangan').text('Tambah');
		$("#tambah").css("background-color","#FFC600");
		$("#tb1").css("background-color","");
		$("#tb2").css("background-color","");
		$("#tb3").css("background-color","");
		$("#tb4").css("background-color","");
		$("#overview").css("background-color","");
		$("#overview").removeClass('dipilih');
		
    });
	$("#btn-bnpb").click(function(){
		$("#form-bnpb").show();
		$("#form-fasilitator").hide();
		$("#form-akun").hide();
		$("#form-laporan").hide();
		});
	
		$("#btn-fasilitator").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").show();
		$("#form-akun").hide();
		$("#form-laporan").hide();
		});
		$("#btn-akun").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").hide();
		$("#form-akun").show();
		$("#form-laporan").hide();
		
	});
		$("#btn-laporan").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").hide();
		$("#form-akun").hide();
		$("#form-laporan").show();
		
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
