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
		<select name="Lokasi" value="<?php echo $data_desa->Lokasi ?>">
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
		<label for="Category">Kategori : </label>
		<select name="Kategori"  value="<?php echo $data_desa->Kategori?>">
				<option value="Belum">Belum</option>
				<option value="Bagus">Bagus</option>
				<option value="Jelek">Jelek</option>
		</select>		
		</div>
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		
		<?php echo form_close()?>
		  
	
	</div>
	</div>
	</div>
	</body>
</html>