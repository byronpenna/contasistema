<!DOCTYPE html>
<html>
<head>
	<title>Nueva cuenta</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("resources/js/views/cuentas/script.js") ?> ></script>
	<script type="text/javascript" src=<?php echo base_url("resources/js/views/cuentas/functions.js") ?> ></script>
</head>
<body>

	<div class="col-lg-12">
		<?php $this->load->view("parts/menu.php"); ?>
		<h2>Agregar nueva cuenta</h2>
		<form id="frmCuenta">
			<div class="row">
				<div class="col-lg-3">
					<label>Tipo de cuenta</label>	
				</div>
				<div class="col-lg-3">
					<select class="form-control" name='cbTipoCuenta' id='cbTipoCuenta'>
						<option value="1">Activo</option>
						<option value="2">Pasivo</option>
						<option value="3">Capital</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<label>Numero de cuenta</label>	
				</div>
				<div class="col-lg-3">
					<input type="number" name="txtNumeroCuenta" id='txtNumeroCuenta' class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<label>Nombre de la cuenta</label>	
				</div>
				<div class="col-lg-3">
					<input type="text" name="txtNombreCuenta" id='txtNombreCuenta' class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<label>Descripcion</label>	
				</div>
				<div class="col-lg-3">
					<textarea name='txtAreaDescrip' id="txtAreaDescrip" class="form-control">
						
					</textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<button class="btn btn-primary" type="submit">Guardar cuenta</button>
				</div>
			</div>
		</form>	
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>Numero cuenta</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Tipo cuenta</th>
				<th>Acciones</th>
			</tr>	
		</thead>
		<tbody>
			<?php 
				foreach ($cuentas as $key => $cuenta) {
			?>
				<tr>
					<td class="hidden">
						<input type="text" name="txtHdIdCuenta" value=<?php echo "'".$cuenta->idCuenta."'" ?> > 
					</td>
					<td><?= $cuenta->numero ?></td>
					<td><?= $cuenta->nombre ?></td>
					<td><?= $cuenta->descripcion ?></td>
					<!-- <td><?= $cuenta->tipo ?></td> -->
					<td>
						<i class='fa fa-times pointer btnDelete'>
					</td>
				</tr>
			<?php 
				}
			?>
		</tbody>
	</table>
</body>
</html>