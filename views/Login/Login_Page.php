<!DOCTYPE html>
<html style="height: 100%;">
	<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> Login Page</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
		<script src="<?php echo base_url('assets/js/jsquery-3.1.1.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>" ></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>" ></script>
	</head>
	<body style="height: 100%;">
		<table style="height: 100%; width:100%;"> 
			<tr>
			
			<td style="width:60%;">
			<div class="container-fluid left-side ">
				
					<h1  style="margin:auto;font-size:8vw;">Pedestana</h1>
					
				
					
	<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo base_url('assets/img/img1.jpg')?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url('assets/img/img1.jpg')?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>-->
				
			</div>
			</td>
			
			<td>
				<div class="container-fluid right-side">
					<form class="form-horizontal form-login" action="<?php echo base_url()?>index.php/Login/aksi_login" method="post" style="width:100%;"> 
						<div class="form-group">
							<label class="control-label col-sm-2" for="username">Username:</label>
							<div class="col-sm-10">
								<input type="email" name="username" class="form-control" id="email" placeholder=" Enter Username">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Password:</label>
							<div class="col-sm-10"> 
								<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
							</div>
						</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-default" value="Login" style="background-color:#00A868;color:white;"></button>
						atau
						<a href="<?php echo base_url() ?>index.php/Pengunjung/">masuk sebagai pengunjung</a>
					</div>
				</div>
					</form>
				</div>
			</td>
			</tr>
		</table>
	
	</body>
</html>