<!DOCTYPE html>
<html>
<head>
	<title>Libro diario</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("resources/js/views/libros/diario/script.js") ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("resources/js/views/libros/diario/functions.js") ?> ></script>
</head>
<body>
	<div class="col-lg-12">
		<?php $this->load->view("parts/menu.php"); ?>	
		<h2 class="titlePrincipal text-center">Libro diario</h2>
		<div class="row col-lg-offset-3 col-lg-6 text-center">
			<label>Ingrese fecha</label>
			<input type="date" class="dtpFecha form-control">
			<button class="btn btn-primary btnBuscar btnGuardar" type="button" >
				Cargar partidas
			</button>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Fecha</td>
					<td>Comentario</td>
					<td>Accion</td>
				</tr>
			</thead>
			<tbody class="tbPartida">
				<tr class="trNoRegistro">
					<td class="text-center" colspan="3">Seleccione fecha y acontinuacion busque</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>