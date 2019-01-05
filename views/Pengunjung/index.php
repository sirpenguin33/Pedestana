<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pedestana</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/pengunjung/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/pengunjung/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps-libs.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps-panzoom.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps.min.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/maps/indonesia.js')?>" ></script>
    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/pengunjung/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/pengunjung/css/freelancer.min.css')?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  fixed-top text-uppercase" id="mainNav" style="background-color:#001A57;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pedestana</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Cari Desa</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Apa itu Pedestana?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">The Team</a>
            </li>
			  <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link btn btn-success " href="<?php echo base_url() ?>Login" >Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
		<img width=400 height=400 class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url('assets/img/home2.png')?>" alt="">
              <h1 class="text-uppercase mb-0">Pendataan Desa Tangguh Bencana</h1>

	  </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      	<div class="container-fluid">
<select id="indonesia-map-select"  style="overflow-y:auto;" >
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
    </section>
	<script>
	$(document).ready(function(){
		 $("#indonesia-map-select").change(function () {
        var tes = this.value;
        		$('#table-'+tes.replace(/\s/g, "")).show();
		$('#table-page').children().not('#table-'+tes.replace(/\s/g, "")).hide();
    });
		
	});
	</script>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">PEDESTANA</h2>
        <hr class="star-light mb-5">

        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Merupakan Portal Evaluasi Desa Tangguh Bencana untuk mempermudah petugas fasilitator BNPB agar dapat melaporkan perkembangan desa tangguh bencana.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Laporan yang dikirim oleh petugas fasilitator nantinya akan dievaluasi oleh BNPB untuk menentukan kategori yang tepat untuk desa tersebut.</p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">RADIUM</h2>
        <hr class="star-dark mb-5">

        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Merupakan kelompok matakuliah pengembangan aplikasi berbasis web dan sistem jaringan komputer</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Yang beranggotakan tiga orang yaitu: Rohmat yuhdi, RB Yudha, Axel Cristiant <a href="<?php echo base_url('Welcome/about'); ?>">Meet The Team</a>.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Kampus Terpadu UII 
            	<br>Jalan Kaliurang km. 14,5
              <br>Sleman Yogyakarta 55584</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Informatics UII</h4>
            <p class="lead mb-0">Go ahead sign-up to Informatic UII and become part of the family, one for all, all for one.
              <a href="https://pmb.uii.ac.id/">Daftar UII</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; PEDESTANA 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    


src="<?php echo base_url('assets/pengunjung/js/freelancer.min.js')?>"
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/pengunjung/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/pengunjung/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/pengunjung/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/pengunjung/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/pengunjung/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?php echo base_url('assets/pengunjung/js/contact_me.js')?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/pengunjung/js/freelancer.min.js')?>"></script>

  </body>

</html>
