<!DOCTYPE html>
<html style="height: 100%;">
	<head>
		<meta charset="UTF-8">
		<title> Login Page</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>" ></script>
	</head>
	<body style="height: 100%;">
		<table style="height: 100%; width:100%;"> 
			<tr>
			<td style="width:60%;">
				<div class="container-fluid left-side">
					<h1 class="display-3">Pedestana</h1>
				</div>
			</td>
			<td>
				<div class="container-fluid right-side">
					<form class="form-horizontal form-login" action="/action_page.php">
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Username:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder=" Enter Username">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Password:</label>
							<div class="col-sm-10"> 
								<input type="password" class="form-control" id="pwd" placeholder="Enter password">
							</div>
						</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						</div>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
					</form>
				</div>
			</td>
			</tr>
		</table>
	
	</body>
</html>