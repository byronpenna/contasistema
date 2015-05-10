<!DOCTYPE html>
<html>
<head>
	<title>Creacion de partidas</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<!-- scripts -->
		<script type="text/javascript" src=<?php echo base_url("resources/js/views/partidas/script.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("resources/js/views/partidas/functions.js") ?> ></script>
	<!-- estilos -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/views/partidas/style.css") ?>>
</head>
<body>
	
	<div class="col-lg-12">
		<?php $this->load->view("parts/menu.php"); ?>	
		<h2 class="text-center">Crear partida</h2>
		<div class="row">
			<div class="col-lg-4">
				<form id='frmPartida'>
					<label>
						Seleccione cuenta
					</label>
					<select class="form-control cbCuenta" name='cbCuenta' >
						<?php 
							foreach ($cuentas as $key => $cuenta) {
						?>
							<option value=<?php echo "'".$cuenta->idCuenta."'" ?>><?=$cuenta->nombre?></option>
						<?php 
							}
						?>
					</select>
					<label>
						Tipo de transaccion
					</label>
					<select class="form-control cbTipoTrans" name="cbTipoTrans">
						<option value="1">Cargo</option>
						<option value="2">Abono</option>
					</select>
					<label>Monto</label>
					<input type="text" placeholder='$' class="form-control txtMonto" name="txtMonto">
					<button class="btn btnInsertDetalle">Ingresar detalle</button>
				</form>
			</div>
			<div class="col-lg-4">
				<label>Agregar parcial</label>
				<input type="checkbox" name="ckParcial" class="ckParcial">
				<div class="divParcial hidden">
					<div class="detalleParcial">
						<div class="col-lg-5">
							<label>Monto</label>
							<input type="text" placeholder='0.00' name="txtParcialMonto" class="txtParcialMonto form-control">
						</div>
						<div class="col-lg-5">
							<label>Descripcion</label>
							<textarea name='txtAreaParcialDescripcion' class="txtAreaParcialDescripcion form-control" ></textarea>
						</div>
						<div class="col-lg-2">
							<label>.</label>
							<button class="btn btnMasParcial"  style="vertical-align:bottom">+</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table tbPartidas">
				<thead>
					<tr>
						<th>Cuenta</th>
						<th>Descripcion</th>
						<!-- <th>Tipo</th> -->
						<th>Parcial</th>
						<th>Cargo</th>
						<th>Abono</th>
					</tr>
				</thead>
				<!--
				<tbody id="tbPrincipal">
					<tbody class="tbAsiento">
						<tr class="asientoPrincipal">
							<input type="hidden" class="txtHdIdCuenta" value='7'>
							<input type="hidden" class="txtHdTipoTrans" value='1'>
							<td class="tdCuenta">Cuenta</td>
							<td class="tdDescripcion">Venta de X cosa</td>
							<td class="tdTipo">Cargo</td>
							<td class="tdParcial"></td>
							<td class="tdCargo">$100</td>
							<td class="tdAbono"></td>
						</tr>	
						<tr class="trParcial">
							<td class="tdCuenta">Cuenta</td>
							<td class="tdTipo">Tipo</td>
							<td class="tdDescripcion">Descripcion del parcial</td>
							<td class="tdParcial">$50</td>
							<td class="tdCargo"></td>
							<td class="tdAbono"></td>
						</tr>
					</tbody>
					<tbody class="tbAsiento">
						<tr class="asientoPrincipal">
							<input type="hidden" class="txtHdIdCuenta" value='10'>
							<input type="hidden" class="txtHdTipoTrans" value='2'>
							<td class="tdCuenta">Cuenta2</td>
							<td class="tdDescripcion">Venta de X cosa</td>
							<td class="tdTipo">Abono</td>
							<td class="tdParcial"></td>
							<td class="tdCargo"></td>
							<td class="tdAbono">$200</td>
						</tr>		
					</tbody>
				</tbody>
				-->
			</table>
		</div>
		<div class="row divGenerales">
			<label>Fecha de partida</label>
			<input type="date" name='dtpFecha' class="form-control">
			<label>Descripcion partida</label>
			<textarea class="form-control" name="txtDescripcionPartida"></textarea>
		</div>
		<div class="text-center">
			<button class="btn btnGuardarPartida">Guardar partida</button>	
		</div>		
	</div>
</body>
</html>