<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" lang="en">
  <head>
    <title>Pedestana</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps.css')?>" >
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps-libs.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps-panzoom.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/jsmaps/jsmaps.min.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/indonesia/maps/indonesia.js')?>" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
	<script src="<?php echo base_url('assets/js/jsquery-3.1.1.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>" ></script>
  </head>
  <body>

	<select id="indonesia-map-select">
   <option selected>Choose an option</option>
   <option value="none">none </option>
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
	  <div class="container-fluid">
	  <div class="jsmaps-wrapper "  id="indonesia-map"></div>
	  <div id="table-page">
	  <h1 id="table-Aceh" style="display:none;">TES1</h1>
	  <h1 id="table-KalimantanTimur" style="display:none;">TES2</h1>
	</div>
	</div>

	  <script type="text/javascript">
		
    $(function() {

      $('#indonesia-map').JSMaps({
        map: 'indonesia',
        textAreaWidth: 0,
	  strokeWidth: 0.5,
	   onReady: function() {
		 $('#indonesia-map-select').on('change', function() {
        $('#indonesia-map').trigger('stateClick', this.value);
		$('#table-'+this.value.replace(/\s/g, "")).show();
		$('#table-page').children().not('#table-'+this.value.replace(/\s/g, "")).hide();

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
  </body>
</html>