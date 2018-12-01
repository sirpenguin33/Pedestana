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
	<div class="jsmaps-wrapper" id="indonesia-map"></div>
	  <script type="text/javascript">

    $(function() {

      $('#indonesia-map').JSMaps({
        map: 'indonesia',

        textAreaWidth: 0,
        strokeWidth: 0.5
      });

    });
    
  </script>
  </body>
</html>