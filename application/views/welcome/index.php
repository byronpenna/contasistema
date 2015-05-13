<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<!-- scripts -->
		<script type="text/javascript" src=<?php echo base_url("resources/js/views/welcome/script.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("resources/js/views/welcome/functions.js") ?> ></script>
	<!-- styles -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/views/index/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/views/index/media.css") ?> >
</head>
<body>
	<!-- <div class="container">
		<h2>Login</h2>
		<form id='frm'>
			<div class="row">
				<div class="col-lg-3">
					<label>Usuario:</label>
				</div>
				<div class="col-lg-3">
					<input type="text" name="txtUsuario">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<label>Contraseña:</label>
				</div>
				<div class="col-lg-3">
					<input type="text" name="txtPass">
				</div>
			</div>
			<div class="row" id="divErrorMessage"> 

			</div>
			<div class="row">
				<div class="col-lg-6">
					<button type="submit" class="btn btn-primary">
						Iniciar Sesion
					</button>
				</div>
			</div>
		</form>	
	</div> -->
	<div class = "container">
	<div class="wrapper">
		<form id="frm" class="form-signin">       
		    <h3 class="form-signin-heading">Sistema contable IBPSV</h3>
			<hr class="colorgraph"><br>
			<input type="text" class="form-control" name="txtUsuario" placeholder="Username" required="" autofocus="" />
			<input type="password" class="form-control" name="txtPass" placeholder="Password" required=""/>     		  
			<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
			<div class="row" id="divErrorMessage"> 
				
			</div>
		</form>			
	</div>
	
</div>
</body>
</html>