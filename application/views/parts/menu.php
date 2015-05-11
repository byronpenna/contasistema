<ul class="menu">
	<li>
		<a href=<?php echo site_url("home") ?> >Inicio</a>
	</li>
	<li>
		<a href="#">Cuentas</a>
		<ul>
			<li>
				<a href=<?php echo site_url("cuentas/addCuenta") ?> >
					Gestion de cuentas
				</a>
			</li>
			<li>
				<a href=<?php echo site_url("partidas/agregarPartida") ?> >
					Partidas
				</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Reportes</a>
		<ul>
			<li>
				<a href=<?php echo site_url("libros/mayor") ?> >
					Libro mayor
				</a>
			</li>
			<li>
				<a href="#">
					Libro diario
				</a>
			</li>
		</ul>
	</li>
</ul>