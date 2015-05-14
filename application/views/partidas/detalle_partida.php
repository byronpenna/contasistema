<!DOCTYPE html>
<html>
<head>
	<title>Detalle de la partida</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
</head>
<body>
	<div class="col-lg-12">
		<?php $this->load->view("parts/menu.php"); ?>	
		<h2 class="text-center titlePrincipal">Crear partida</h2>
		<!-- <pre>
			<?php echo print_r($partidas) ?>
		</pre>  -->
		<table class="table">
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
			<tbody>
			<!-- [idDetalle] => 20
                    [monto] => 20.00
                    [id_cuenta_fk] => 7
                    [id_partida_fk] => 11
                    [id_tipoingreso_fk] => 1 -->
				<?php 
					foreach ($partidas->detalles as $key => $detalle) {
						$cargo = "";
						$abono = "";
						if($detalle->id_tipoingreso_fk == 1){
							$cargo = "$".$detalle->monto;
						}else{
							$abono = "$".$detalle->monto;
						}
				?>
					<tr>
						<td><?php echo $detalle->nombre ?></td>
						<td></td>
						<td></td>
						<td><?php echo $cargo ?></td>
						<td><?php echo $abono ?></td>
					</tr>
					<?php 

					?>
				<?php 
					}
				?>

			</tbody>
		</table>
		<div class="col-lg-offset-3 col-lg-6 text-center">
			<h3>Comentarios del asiento contable</h3>
			<p><?php echo $partidas->partida[0]->comentario; ?></p>	
		</div>
		
	</div>
</body>
</html>
