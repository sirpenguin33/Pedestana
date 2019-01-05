<html>
	<head>
	<title>Pedestana</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps-libs.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps-panzoom.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps.min.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/maps/indonesia.js')?>" ></script>
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
        <button type="button" class="btn tombol dipilih" style="word-wrap: break-word;" id="overview"><div><img src="<?php echo base_url('assets/img/logo_akun.png')?>" width="30" height="30" class="img-responsive"></div> Data Akun</button>
		</li>
		
		<li class="nav-item">
		<button type="button" class="btn tombol" id="tb1"><div><img src="<?php echo base_url('assets/img/people.png')?>" width="30" height="30" class="img-responsive"></div> Fasilitator</button>
        </li>
        <li class="nav-item">
        <button type="button" class="btn tombol" id="tb2"><div><img src="<?php echo base_url('assets/img/people.png')?>" width="30" height="30" class="img-responsive"></div> BNPB</button>
        </li>
		        <li class="nav-item">
        <button type="button" class="btn tombol" id="tb3"><div><img src="<?php echo base_url('assets/img/home.png')?>" width="30" height="30" class="img-responsive"></div>Desa</button>
        </li>
		<li class="nav-item">
        <button type="button" class="btn tombol" id="tb4"><div><img src="<?php echo base_url('assets/img/page.png')?>" width="30" height="30" class="img-responsive"></div>Laporan</button>
        </li>
		<li class="nav-item">
        <button type="button" class="btn tombol" id="tambah"><div><img src="<?php echo base_url('assets/img/add.png')?>" width="30" height="30" class="img-responsive"></div>Tambah</button>
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
		  <table style="width:100%;" class="table">
		  <tr style="text-align:center;border:10px;background-color:#001A57;color:white;border-color:black;" class="table" colspan=2 >
		  <th> Data Akun</th>
		  </tr>
		<tr>
		<td></td>
		</tr>
		  </table>
		  <table style="width:100%;">
		  <tr style="text-align:left;" rowspan=8>
		  <td>Username : </td>
		  <td><?php echo $username?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Job :</td>
		  <td>Admin</td>
		  </tr>
		  </table>
		
		  
		  
		  </div>
		  
		  
		 
		  </div>
		  
		  
		
		<table class="table table-bordered table-responsive" id="table1" style="width:100%;text-align:center;height:50%;">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Pendidikan</th>
		<th>Nomer Telepon</th>
		<th>Aksi</th>
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
		
			
	
	
	
		<table class="table table-bordered table-responsive" style="width:100%;text-align:center;height:60%;display:none;" id="table2">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama BNPB</th>
		<th>Tanggal Lahir</th>
		<th>Pendidikan</th>
		<th>Nomer Telepon</th>
		<th>Aksi</th>
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

		<table class="table table-responsive table-bordered" style="width:100%;text-align:center;height:60%;display:none;" id="table3">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th>Lokasi</th>
		<th>Kategori</th>
		<th>Aksi</th>
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
		
		<table class="table table-bordered table-responsive" id="table4" style="width:100%;height:60%;display:none;">
		
		
		<thead>
		<tr style="text-align:center;">
		<th>No</th>
		<th>Laporan Desa</th>
		<th>Oleh(Fasilitator)</th>
		<th>Diperiksa oleh(BNPB)</th>
		<th>Status</th>
		<th>Aksi</th>
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
					
					<?php } else if($hasil->Status=="Waiting"){ ?>
					<td class="alert alert-danger" style="text-align:center;"><?php echo $hasil->Status ?></td>
					
					<?php } else {?>
					<td class="alert alert-info" style="text-align:center;"><?php echo $hasil->Status ?></td>
					
					<?php } ?>
					<td>
                    <a href="<?php echo base_url() ?>index.php/Laporan/hapus/<?php echo $hasil->ID?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
					
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
		
		
		<table style="width:100%;" id="form-tambah" >
		<tr>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-fasilitator" style="background-color:#FFC600;">Fasilitator</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-bnpb">BNPB</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-akun">Desa</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="btn-laporan">Laporan</button></td>
		</tr>
		</table>
		<form action="<?php echo base_url() ?>index.php/Fasilitator/simpan" method="post" id="form-fasilitator" style="margin-left:1%;" >
		<div class="form-group">
		<label for="name">Nama : </label>
		<input type="text" class="form-control" name="Nama_fasilitator" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="birthday">Tanggal Lahir : </label>
		<input type="date" class="form-control" name="Tanggal_Lahir">
		</div>
		<div class="form-group">
		<label for="education">Pendidikan : </label>
		<select name="Pendidikan" >
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
		<form action="<?php echo base_url() ?>index.php/BNPB/simpan" method="post" id="form-bnpb" style="margin-left:1%;">
		<div class="form-group">
		<label for="name">Nama : </label>
		<input type="text" class="form-control" name="Nama_bnpb" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="birthday">Tanggal Lahir : </label>
		<input type="date" class="form-control" name="Tanggal_Lahir">
		</div>
		<div class="form-group">
		<label for="education">Pendidikan : </label> 
		<select name="Pendidikan" >
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
		
		<form action="<?php echo base_url() ?>index.php/Desa/simpan" method="post" id="form-akun" style="margin-left:1%;">
		<div class="form-group">
		<label for="name">Nama desa : </label> 
		<input type="text" class="form-control" name="Nama_desa" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="Location">Daerah : </label> 
		<select name="Lokasi" >
   <option selected>Pilih Daerah</option>
   <option value="Aceh">Aceh</option>
   <option value="Kalimantan Timur">Kalimantan Timur</option>
   <option value="Kalimantan Barat">Kalimantan Barat</option>
   <option value="Kalimantan Tengah">Kalimantan Tengah</option>
   <option value="Kalimantan Selatan">Kalimantan selatan</option>
	<option value="Sumatera Utara">Sumatera Utara</option>
	<option value="Riau">Riau</option>
	<option value="Sumatera Barat">Sumatera Barat</option>
	<option value="Jambi">Jambi</option>
	<option value="Bengkulu">Bengkulu</option>
	<option value="Sumatera Selatan">Sumatera selatan</option>
	<option value="Lampung">lampung</option>
	<option value="Bangka Belitung">Bangka Belitung</option>
	<option value="Jawa Barat">Jawa Barat</option>
	<option value="Jawa Tengah">Jawa Tengah</option>
	<option value="Semarang">Semarang</option>
	<option value="Yogyakarta">Yogyakarta</option>
	<option value="Kalimantan Timur">Kalimantan Timur</option>
	<option value="Bali">Bali</option>
	<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
	<option value="Banten">Banten</option>
	<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
	<option value="Maluku">Maluku</option>
	<option value="Papua">Papua</option>
	<option value="Irian Jaya Barat">Irian Jaya Barat</option>
	<option value="Maluku Utara">Maluku Utara</option>
	<option value="Sulawesi Utara">Sulawesi Utara</option>
	<option value="Gorontalo">Gorontalo</option>
	<option value="Sulawesi Tengah">Sulawesi Tengah</option>
	<option value="Sulawesi Selatan">Sulawesi Selatan</option>
	<option value="Sulawesi Barat">Sulawesi Barat</option>
	<option value="Kalimantan Timur">Kalimantan Timur</option>
	<option value="Kalimantan Selatan">Kalimantan Selatan</option>
	<option value="Kalimantan Tengah">Kalimantan Tengah</option>
	<option value="Kalimantan Barat">Kalimantan Barat</option>
		</select>
		</div>
	
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		</form>
		
				<form action="<?php echo base_url() ?>index.php/Laporan/simpan" method="post" id="form-laporan" style="display:none;margin-left:1%;margin-top:1%;">
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
		<?php if($hasil->ID_fasilitator=='0'){}else{ ?>
		<option value="<?php echo $hasil->ID_fasilitator?>"><?php echo $hasil->Nama_fasilitator?></option>
		<?php } ?>
		<?php } ?>
				</select>
		</div>
	
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		</form>
		</div>
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
        $('.keterangan').text('Laporan');
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
		$("#btn-fasilitator").removeClass('dipilih');
		$("#btn-fasilitator").css("background-color","");
		$("#btn-bnpb").css("background-color","#FFC600");
		$("#btn-laporan").css("background-color","");
		$("#btn-akun").css("background-color","");
		
		});
	
		$("#btn-fasilitator").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").show();
		$("#form-akun").hide();
		$("#form-laporan").hide();
		$("#btn-fasilitator").removeClass('dipilih');
		$("#btn-bnpb").css("background-color","");
		$("#btn-fasilitator").css("background-color","#FFC600");
		$("#btn-laporan").css("background-color","");
		$("#btn-akun").css("background-color","");
		});
		$("#btn-akun").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").hide();
		$("#form-akun").show();
		$("#form-laporan").hide();
		$("#btn-fasilitator").removeClass('dipilih');
		$("#btn-fasilitator").css("background-color","");
		$("#btn-akun").css("background-color","#FFC600");
		$("#btn-laporan").css("background-color","");
		$("#btn-bnpb").css("background-color","");
		
	});
		$("#btn-laporan").click(function(){
		$("#form-bnpb").hide();
		$("#form-fasilitator").hide();
		$("#form-akun").hide();
		$("#form-laporan").show();
		$("#btn-fasilitator").removeClass('dipilih');
		$("#btn-fasilitator").css("background-color","");
		$("#btn-laporan").css("background-color","#FFC600");
		$("#btn-bnpb").css("background-color","");
		$("#btn-akun").css("background-color","");
		
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

	



	</body>
</html>
