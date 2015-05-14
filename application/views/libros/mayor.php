<!DOCTYPE html>
<html>
<head>
	<title>Libro mayor</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<!-- scripts -->
		<script type="text/javascript" src=<?php echo base_url("resources/js/views/libros/mayor/script.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("resources/js/views/libros/mayor/functions.js") ?> ></script>
	<!-- css --> 
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/views/libros/mayor/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/views/libros/mayor/media.css") ?> >		
</head>
<body>
	<div class="col-lg-12">
		<?php $this->load->view("parts/menu.php"); ?>	
		<h2 class="titlePrincipal text-center">Libro mayor</h2>
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<div class="sectionForm">
					<label>Seleccione tipo de cuenta</label>
					<select name="cbTipoCuenta" class="form-control cbTipoCuenta">
						<option value="-1"></option>
						<option value="1">Activo</option>
						<option value="2">Pasivo</option>
						<option value="3">Capital</option>
					</select>
				</div>
				<div class="sectionForm">
					<label>Seleccione cuenta</label>
					<select name="cbCuenta" class="cbCuenta form-control">
						<option value="-1"></option>
					</select>
				</div>	
						
			</div>
		</div>
		<table class="table">
			<thead>
				<tr class="text-center">
					<td colspan="2" class="tdNombreCuenta">Nombre cuenta</td>
				</tr>
				<tr>
					<td class="text-center">Cargos</td>
					<td class="text-center">Abonos</td>
				</tr>
			</thead>
			<tbody class="tbMayor">
				<tr>
					<td colspan="2" class="text-center">Seleccione una cuenta para la mayorizacion</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>