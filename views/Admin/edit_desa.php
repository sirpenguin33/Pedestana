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
	<body>
	    <nav class="navbar navbar-expand navbar-dark bg-nav">

     <h1 style="color:white;">Pedestana</h1>
    </nav>
	<div id="wrapper">
	<div id="content-wrapper">
	<div class="container-fluid">
	          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item keterangan">Edit Desa</li>
          </ol>
		 <?php echo form_open('Desa/update')?>
		<div class="form-group" style="display:none;">
		<label for="name">ID desa : </label> 
		<input type="text" class="form-control" name="id_desa"value="<?php echo $data_desa->ID_desa?>" placeholder="Masukkan nama">
		</div>

		<div class="form-group">
		<label for="name">Nama desa : </label> 
		<input type="text" class="form-control" value="<?php echo $data_desa->Nama_desa?>" name="Nama_desa" placeholder="Masukkan nama">
		</div>
		<div class="form-group">
		<label for="Location">Lokasi : </label> 
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
		<a  class="btn btn-md btn-success" href="<?php echo base_url() ?>index.php/Admin">Kembali</a>
		
		<?php echo form_close()?>
		  
	
	</div>
	</div>
	</div>
	</body>
</html>