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
	<a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a> 
    </nav>
	<div id="wrapper">
	<div id="content-wrapper">
	<div class="container-fluid">
	          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item keterangan">Lapor Desa</li>
          </ol>
		  <h1>Laporan <?php echo $data_desa->Nama_desa ?></h1>
		  <?php echo form_open('Laporan/lapor')?>
		<input type="text" name="ID" value="<?php echo $ID ?>" style="display:none;"></input>
		<input type="text" name="ID_fasilitator" value="<?php echo $ID_fasilitator ?>" style="display:none;"></input>

		<table class="table table-bordered table-responsive" style="height:50%;">	
		<thead>
			<tr>
				<th>No</th>
				<th>Indikator</th>
				<th>Jawaban</th>
			</tr>
		</thead>
				<tbody>
				<?php foreach($data_indikator as $hasil){ ?>
					<tr>
					<td> <?php echo $hasil->No ?></td>
						<td><?php echo $hasil->Deskripsi ?></td>
						<td><select name="<?php echo $hasil->No ?>" >
				<option value="1">  </option>
				<option value="2">Ya</option>
				<option value="3">Tidak</option>
				
				</select>
		        </td>
					</tr>
				<?php } ?>

			</tbody>
	</table>
	<a  class="btn btn-md btn-success" href="<?php echo base_url() ?>index.php/Fasilitator">Kembali</a>
	<button type="submit" class="btn btn-md btn-success">Simpan</button>
	<?php echo form_close()?>
	
	</div>
	</div>
	</div>
	</body>
</html>