<html>
	<head>
	<title>Pedestana</title>
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
        <button type="button" class="btn tombol" id="histori">Laporan</button>
        </li>

      </ul>
	  		  <?php
		  
		  if(isset($this->session->userdata['nama'])){
			  $username=$this->session->userdata('nama');
			  $data_fasilitator=$this->session->userdata('data_fasilitator');
			  $id_fasilitator=$this->session->userdata('id_fasilitator');
			  $data_laporan=$this->session->userdata('laporan_fasilitator');
			  $jumlah_laporan=$this->session->userdata('jumlah_laporan')->jumlah;
			
		  }else{
			 redirect('/Login');
		  } 
		  ?>
		 
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Fasilitator</a>
            </li>
            <li class="breadcrumb-item keterangan">Overview</li>
          </ol>
		  <div id="overview-page">
		  </div>
		  
		  <div id="histori-page" class="table-responsive" style="display:none;">
		<table class="table-dark table-striped" style="width:100%;text-align:center;">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th>Status</th>
		</tr>
		</thead>
	     <tbody>

                <?php
                    $no = 1; 
                    foreach($data_laporan as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Nama_desa ?></td>
                    <td><?php echo $hasil->Status ?></td>
					<?php if($hasil->Status=='Proses Pelaporan'){?>
					<td>
					
                        <a href="<?php echo base_url() ?>index.php/Laporan/lapor_desa/<?php echo $hasil->ID?>/<?php echo $hasil->ID_DESA?>" class="btn btn-sm btn-success">Lapor</a>
						</td>
					<?php } else {?>
					<?php } ?>
					
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		  </div>
		<!--  
		<div id="tambah-laporan" >
			<?php echo form_open('Laporan/simpan/'.$id_fasilitator)?>
				<select name="ID_DESA" >
				<?php foreach($data_desa as $hasil){ ?>
				<option value="<?php echo $hasil->ID_desa?>"><?php echo $hasil->Nama_desa?></option>
				<?php } ?>
				</select>
		<table class="table table-bordered table-responsive">	
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
				<option value="1">Tidak</option>
				<option value="2">Ya</option>
				</select>
		        </td>
					</tr>
				<?php } ?>

			</tbody>
	</table>
	<input type="submit" value="submit">
	<?php echo form_close()?>
	</div>
	-->

		
		
		
		</div>
	</div>
		

        </div>
		
		<script>
		$(document).ready(function(){
    $("#tambah").click(function(){
        $("#tambah-laporan").show();
		$("#overview-page").show();
		$("#histori-page").hide();
		$("#tambah").css("background-color","#FFC600");
		$("#histori").css("background-color","");
		$("#overview").css("background-color","");
		$("#overview").removeClass('dipilih');
	
		
    });
	
     $("#overview").click(function(){
		$("#tambah-laporan").hide();
		$("#overview-page").show();
		$("#histori-page").hide();
		$("#overview").css("background-color","#FFC600");
		$("#histori").css("background-color","");
		$("#tambah").css("background-color","");
		
		
    });
	    
		$("#histori").click(function(){
		$("#tambah-laporan").hide();
		$("#overview-page").hide();
		$("#histori-page").show();
		$("#histori").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#tambah").css("background-color","");
		$("#overview").removeClass('dipilih');
		
		
    });
	
	 
	
});
		
		</script>
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



	</body>
</html>
