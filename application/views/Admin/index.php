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
	</head>
	<body >
	<nav class="navbar navbar-expand-xl  bg-nav">
	<h3>PEDESTANA</h3>
	</nav>
	
	<div class="container-fluid">
	

	<table style="width:100%;margin:0 0 2% 0;">
		<tr >
			<td><button type="button" class="btn btn-primary btn-block" id="tb1">Fasilitator</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="tb2">Desa</button></td>
			<td><button type="button" class="btn btn-primary btn-block" id="tb3">BNPB</button></td>
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
	</div>
		<script>
		$(document).ready(function(){
    $("#tb1").click(function(){
        $("#table1").show();
		$("#table2").hide();
		$("#table3").hide();
		
    });
	
     $("#tb2").click(function(){
        $("#table1").hide();
		$("#table2").show();
		$("#table3").hide();
		
    });
	
	  $("#tb3").click(function(){
        $("#table1").hide();
		$("#table2").hide();
		$("#table3").show();
		
    });
	
});
		</script>



	</body>
</html>
