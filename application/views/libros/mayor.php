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
</head>
<body>
	<div class="col-lg-12">
		<?php $this->load->view("parts/menu.php"); ?>	
		<h2>Libro mayor</h2>
		<div class="row">
			<div class="col-lg-4">
				<label>Seleccione tipo de cuenta</label>
				<select name="cbTipoCuenta" class="form-control cbTipoCuenta">
					<option value="-1"></option>
					<option value="1">Activo</option>
					<option value="2">Pasivo</option>
					<option value="3">Capital</option>
				</select>		
				<label>Seleccione cuenta</label>
				<select name="cbTipoCuenta" class="cbTipoCuenta form-control">
					<option value="1"></option>
				</select>		
			</div>
		</div>
		<table class="table">
			<thead>
				<tr class="text-center">
					<td colspan="2">Nombre cuenta</td>
				</tr>
				<tr>
					<td>Cargo</td>
					<td>Abono</td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</body>
</html>