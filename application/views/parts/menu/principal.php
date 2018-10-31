<nav class="navBarMenu navbar navbar-default navbar-static">
    <div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand textoLogoMenu" href="#">
			<img src=<?php echo base_url("Content/img/generales/logo_pequeno.png") ?> >
			
			
		</a>
	</div>
	
	
	<div class="collapse navbar-collapse js-navbar-collapse barraMenu">
		<ul class="nav navbar-nav">
			<li>
				<a class="dropdown-toggle textoBarraMenu" href=<?php echo site_url("welcome/test") ?> >
				Inicio
				</a>

			</li>
			<li>
				<a  class="dropdown-toggle textoBarraMenu" href=<?php echo site_url("Enroque/index") ?> >
					Enroque
				</a>
			</li>
			<li>
				<a  class="dropdown-toggle textoBarraMenu" href=<?php echo site_url("Tablero/index") ?> >
					Tablero
				</a>
			</li>
			<!--
			<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle textoBarraMenu" data-toggle="dropdown">Tablero <b class="caret"></b></a>
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-6">
						<ul>
							<li class="dropdown-header">Piezas</li>
							<li><a href="#">Opcion 1</a></li>
							<li class="disabled"><a href="#">Opcion 2</a></li>
							<li><a href="#">Opcion 3</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Otro menu</li>
							<li><a href="#">Opcion 1</a></li>
							<li><a href="#">Opcion 2</a></li>
							
						</ul>
					</li>
					<li class="col-sm-6">
						<ul>
							<li class="dropdown-header">Piezas</li>
							<li><a href="#">Opcion 1</a></li>
							<li class="disabled"><a href="#">Opcion 2</a></li>
							<li><a href="#">Opcion 3</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Otro menu</li>
							<li><a href="#">Opcion 1</a></li>
							<li><a href="#">Opcion 2</a></li>
							
						</ul>
					</li>
				</ul>
			</li>-->
			<li>
				<a class="dropdown-toggle textoBarraMenu" href=<?php echo site_url("Jaque/index") ?> >
					JAQUE
				</a>
			</li>
			<li>
				<a <?php echo "href='".site_url("Reina/index")."' " ?> 
				class="dropdown-toggle textoBarraMenu">La reina</a>
			</li>
		</ul>
		
	</div><!-- /.nav-collapse -->
</nav>