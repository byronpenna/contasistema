<style>
body {
    padding-top: 50px;
}
</style>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">IBPSV</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://github.com/fontenele/bootstrap-navbar-dropdowns" target="_blank">Visita</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuentas<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li>
							<a href=<?php echo site_url("cuentas/addCuenta") ?> >
								Gestion de cuentas
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href=<?php echo site_url("partidas/agregarPartida") ?> >
								Partidas
							</a>
						</li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
							<a href=<?php echo site_url("libros/mayor") ?> >
								Libro mayor
							</a>
						</li>
						<li>
							<a href=<?php echo site_url("libros/diario") ?> >
								Libro diario
							</a>
						</li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- <ul class="menu">
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
</ul> -->