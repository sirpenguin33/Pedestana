<html>
<head>
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
<?php 
	$s=$data_laporan->Indikator;
	$id_laporan=$data_laporan->ID;
	$array=str_split($s);
	$indikator=$data_indikator;
	?>
    <nav class="navbar navbar-expand navbar-dark bg-nav">
	
     <h1 style="color:white;">Pedestana</h1>
	<a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a>

    </nav>
	
	<div id="wrapper">
	<div class="container-fluid" >
	<div class="">
	<?php echo form_open('Laporan/verifikasi') ?>
	<input type="text" name="ID_bnpb" value="<?php echo $ID_bnpb?>" style="display:none;"> </input>
	<input type="text" name="ID_laporan" value="<?php echo $id_laporan?>" style="display:none;"> </input>
	<input type="text" name="ID_desa" value="<?php echo $ID_desa?>" style="display:none;"> </input>
	<table class="table table-bordered table-responsive" style="height:50%;">
		<tr>
	<th>No</th>
	<th>Indikator</th>
	<th>Jawaban</th>
	<?php $x=1 ?>
	</tr>
	<?php foreach($indikator as $index => $code){ ?>
	<tr>
	<td><?php echo $x ?></td>
	<td> <?php echo $code->Deskripsi?> </td>
	<td><?php 
	if($array[$index]=="1"){
		echo "Tidak ada jawaban ";
	}else if($array[$index]=="2"){
		echo "Ya";
	}else{
		
		echo "Tidak";
	}
	?></td>
	</tr>
	<?php $x=$x+1; }?>
	</table>
	<div class="form-group">
	<label for="Category">Kategori : </label>
			<select name="Kategori">
				<option value="Utama">Utama</option>
				<option value="Madya">Madya</option>
				<option value="Pratama">Pratama</option>
		</select>
	</div>
	<a  class="btn btn-md btn-success" href="<?php echo base_url() ?>index.php/BNPB">Kembali</a>
	<button type="submit" class="btn btn-md btn-success">Verifikasi</button>
	
	<?php echo form_close()?>
	
	</div>
	</div>
	</div>
</body>
</html>