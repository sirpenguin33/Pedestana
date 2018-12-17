<html>
	<head>
	<title>Pedestana</title>
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
		  <?php

		  if(isset($this->session->userdata['nama'])){
			  $username=($this->session->userdata('nama'));
			 
			  $data_bnpb=($this->session->userdata('data_bnpb'));
			  $id_bnpb=($this->session->userdata('id_bnpb'));
			  
		  }else{
			 redirect('/Login');
		  }
		
		  ?>
    
	<div id="wrapper">
	
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav side">
        <li class="nav-item active">
        <button type="button" class="btn tombol dipilih" id="overview">Overview</button>
		</li>
		
		<li class="nav-item">
		<button type="button" class="btn tombol" id="laporan">Laporan</button>
        </li>
        <li class="nav-item">
        <button type="button" class="btn tombol" id="desa">Peta Desa</button>
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
		  <div id="overview-page">
		  <?php if($jumlah_laporan==0){?>
		   <div class="alert alert-success" style="text-align:center">Semua Laporan telah Diverifikasi</div>
		  <?php }else{ ?>
		  <div class="alert alert-danger" style="text-align:center">Terdapat <strong><?php echo $jumlah_laporan?></strong> yang belum diverifikasi</div>
		  <?php } ?>
		  <div class="row">
		  <div class="col-lg-6">
		  
		  </div>
		   <div class="col-lg-6">
		  
		  </div>
		  </div>
		</div>
		<div id="laporan-page" style="display:none;">
		<div class="table-responsive">
		<table class="table">
		
		
		<thead>
		<tr>
		<th>No</th>
		<th>Laporan Desa</th>
		<th>Oleh(Fasilitator)</th>
		<th>Diperiksa oleh</th>
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
                    <td><?php echo $hasil->Nama_fasilitator?></td>
					<td><?php echo $hasil->Nama_bnpb ?></td>
					<?php if($hasil->Status=="Verified"){ ?>
					<td class="alert alert-success" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td> </td>
					<?php } else if($hasil->Status=="Waiting"){ ?>
					
					<td class="alert alert-danger" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td>
                    <a href="<?php echo base_url() ?>index.php/BNPB/verif/<?php echo $hasil->ID?>/<?php echo $id_bnpb?>/<?php echo $hasil->ID_DESA?>" class="btn btn-sm btn-success">Verif</a>
                    </td>
					<?php } else {?>
					<td class="alert alert-info" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td></td>
					<?php } ?>
					
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
		</div>
		</div>
		
		<div id="desa-page" class="container-fluid" style="display:none;width:100%;">
		
	  
	  <div class="jsmaps-wrapper" id="indonesia-map" style="padding:10px;"></div>
	  <div id="table-page">
	  <table id="table-KalimantanTimur" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kaltim as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-KalimantanTengah" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kalteng as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  <table id="table-KalimantanSelatan" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kalsel as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	<table id="table-Aceh" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Aceh as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-SumateraUtara" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sumut as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Riau" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Riau as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-SumateraBarat" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sumbar as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Jambi" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Jambi as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Bengkulu" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Bengkulu as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-SumateraSelatan" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sumsel as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Lampung" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Lampung as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Bangka-Belitung" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Babel as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-JawaBarat" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Jabar as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-JawaTengah" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Jateng as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Semarang" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Semarang as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Yogyakarta" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Yogyakarta as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-JawaTimur" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Jatim as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Bali" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Bali as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-NusaTenggaraBarat" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_NTB as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Banten" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Banten as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-NusaTenggaraTimur" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_NTT as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-KalimantanSelatan" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Maluku as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Papua" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Papua as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-IrianJayaBarat" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_IrianJayaBarat as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-MalukuUtara" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_MalukuUtara as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	 <table id="table-SulawesiUtara" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sulut as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-Gorontalo" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Gorontalo as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-SulawesiTengah" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sulteng as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  <table id="table-SulawesiSelatan" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sulsel as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  <table id="table-SulawesiBarat" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Sulbar as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  <table id="table-KalimantanTimur" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kaltim as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-KalimantanSelatan" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kalsel as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-KalimantanTengah" class="table table-responsive" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kalteng as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	</div>
 <script type="text/javascript">
		
    $(function() {
		jQuery.noConflict();
      $('#indonesia-map').JSMaps({
		map: 'indonesia',
        textAreaWidth: 0,
	  strokeWidth: 0.5,
	   onReady: function() {
		 $('#indonesia-map-select').on('change', function() {
        $('#indonesia-map').trigger('stateClick', this.value);
      }); 
	   $('#reset-button').on('click', function() {
        $('#indonesia-map').trigger('stateUnClick');
		$('#indonesia-map-select').trigger('stateUnClick',"none");
      });
	},
	  onStateClick: function(data) {
      if (event.type == 'click') {
	  $('#indonesia-map-select').val(data.name);
	  $('#table-'+data.name.replace(/\s/g, "")).show();
	  $('#table-page').children().not('#table-'+data.name.replace(/\s/g, "")).hide();
	  }
	  
	  }
	  
	  });
	  });
    
  </script> 
					
			</div>
	</div>
		

        </div>
<script>
		$(document).ready(function(){
    $("#laporan").click(function(){
        $("#laporan-page").show();
		$("#overview-page").hide();
		$("#desa-page").hide();
		$("#laporan").css("background-color","#FFC600");
		$("#desa").css("background-color","");
		$("#overview").css("background-color","");
		$("#overview").removeClass('dipilih');
		$('.keterangan').text('Laporan');
	
		
    });
	
     $("#overview").click(function(){
		$("#laporan-page").hide();
		$("#overview-page").show();
		$("#desa-page").hide();
		$("#overview").css("background-color","#FFC600");
		$("#laporan").css("background-color","");
		$("#desa").css("background-color","");
		$('.keterangan').text('Overview');
		
		
    });
	    
		$("#desa").click(function(){
		$("#laporan-page").hide();
		$("#overview-page").hide();
		$("#desa-page").show();
		$("#desa").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#laporan").css("background-color","");
		$("#overview").removeClass('dipilih');
		$('.keterangan').text('Peta Desa');
		
		
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
		

    
      <!-- /.content-wrapper -->

 

    <!-- Scroll to Top Button-->




	</body>
</html>
