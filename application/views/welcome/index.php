<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("resources/js/views/welcome/script.js") ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("resources/js/views/welcome/functions.js") ?> ></script>
</head>
<body>
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
</body>
</html>