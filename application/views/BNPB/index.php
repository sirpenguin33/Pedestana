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
		<h1 id="tes"> </h1>
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
		  <div class="alert alert-danger" style="text-align:center">Terdapat <strong><?php echo $jumlah_laporan?></strong> Laporan yang belum diverifikasi</div>
		  <?php } ?>
<div class="container-fluid">
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
		  <td>Nama : </td>
		  <td><?php echo $data_bnpb->Nama_bnpb?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Pendidikan :</td>
		  <td><?php echo $data_bnpb->Pendidikan?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Tanggal Lahir :</td>
		  <td><?php echo $data_bnpb->Tanggal_Lahir?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Job :</td>
		  <td>BNPB</td>
		  </tr>
		  </table>
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
	
	<select id="indonesia-map-select"  style="overflow-y:auto;" >
   <option selected>Pilih Daerah</option>
   <option value="Aceh">Aceh</option>
   <option value="Kalimantan Timur">Kalimantan Timur</option>
   <option value="Kalimantan Barat">Kalimantan Barat</option>
   <option value="Kalimantan Tengah">Kalimantan Tengah</option>
   <option value="Kalimantan Selatan">Kalimantan selatan</option>
	<option value="Sumatera Utara">Sumatera Utara</option>
	<option value="Riau">riau</option>
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

	  
	  <div class="jsmaps-wrapper" id="indonesia-map" style="padding:10px;"></div>
	  
	  <div id="table-page" class="container-fluid table-responsive">
	  <table id="table-KalimantanTimur" class="table" style="display:none;">
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
	  	  <table id="table-KalimantanTengah" class="table " style="display:none;">
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
	  <table id="table-KalimantanBarat" class="table" style="display:none;">
	  <tr>
	  <th>Nama Desa</th>
	  <th>Kategori</th>
	  <th>Daerah</th>
	  </tr>
	  <?php foreach($data_Kalbar as $hasil){?>
		<tr>
		<td><?php echo $hasil->Nama_desa ?></td>
		<td><?php echo $hasil->Kategori?></td>	
		<td><?php echo $hasil->Daerah?></td>
		</tr>
	  <?php } ?>
	  </table>
	  	  <table id="table-KalimantanTengah" class="table " style="display:none;">
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
	  <table id="table-KalimantanSelatan" class="table " style="display:none;">
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
	  	<table id="table-Aceh" class="table " style="display:none;">
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
	  	  <table id="table-SumateraUtara" class="table " style="display:none;">
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
	  	  <table id="table-Riau" class="table " style="display:none;">
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
	  	  <table id="table-SumateraBarat" class="table " style="display:none;">
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
	  	  <table id="table-Jambi" class="table " style="display:none;">
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
	  	  <table id="table-Bengkulu" class="table " style="display:none;">
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
	  	  <table id="table-SumateraSelatan" class="table " style="display:none;">
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
	  	  <table id="table-Lampung" class="table " style="display:none;">
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
	  	  <table id="table-Bangka-Belitung" class="table " style="display:none;">
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
	  	  <table id="table-JawaBarat" class="table " style="display:none;">
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
	  	  <table id="table-JawaTengah" class="table " style="display:none;">
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
	  	  <table id="table-Semarang" class="table " style="display:none;">
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
	  	  <table id="table-Yogyakarta" class="table " style="display:none;">
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
	  	  <table id="table-JawaTimur" class="table " style="display:none;">
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
	  	  <table id="table-Bali" class="table " style="display:none;">
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
	  	  <table id="table-NusaTenggaraBarat" class="table " style="display:none;">
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
	  	  <table id="table-Banten" class="table " style="display:none;">
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
	  	  <table id="table-Maluku" class="table " style="display:none;">
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
		  
		  <table id="table-NusaTenggaraTimur" class="table " style="display:none;">
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
	  	  <table id="table-KalimantanSelatan" class="table " style="display:none;">
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
	  	  <table id="table-Papua" class="table " style="display:none;">
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
	  	  <table id="table-IrianJayaBarat" class="table " style="display:none;">
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
	  	  <table id="table-MalukuUtara" class="table " style="display:none;">
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
	  <table id="table-SulawesiTenggara" class="table " style="display:none;">
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
	  	 <table id="table-SulawesiUtara" class="table " style="display:none;">
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
	  	  <table id="table-Gorontalo" class="table " style="display:none;">
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
	  	  <table id="table-SulawesiTengah" class="table " style="display:none;">
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
	  <table id="table-SulawesiSelatan" class="table " style="display:none;">
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
	  <table id="table-SulawesiBarat" class="table " style="display:none;">
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
	  <table id="table-KalimantanTimur" class="table " style="display:none;">
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
	  	  <table id="table-KalimantanSelatan" class="table " style="display:none;">
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
	  	  <table id="table-KalimantanTengah" class="table " style="display:none;">
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
	<p id="tes"> </p>
 <script type="text/javascript">
		
    $(function() {
		jQuery.noConflict();
      $('#indonesia-map').JSMaps({
		map: 'indonesia',
        textAreaWidth: 0,
	  strokeWidth: 0.5,
	   onReady: function() {
		 $('#indonesia-map-select').on('change', function() {
        var tes=this.value;
		$('#indonesia-map').trigger('stateClick', tes);
		$('#table-'+tes.replace(/\s/g, "")).show();
		$('#table-page').children().not('#table-'+tes.replace(/\s/g, "")).hide();


		
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
	  })(JQuery);
    
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
