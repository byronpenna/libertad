<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/welcome/style.css") ?> >
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/welcome/media.css") ?> >
</head>
<body>
	<input type="hidden" class="txtHdBuscar" value=<?php echo site_url("welcome/buscar") ?> >
	<div class="divBuscador row">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<h3></h3>	
				<img class="imgBuscador" src=<?php echo base_url("Content/img/generales/logo.png") ?>>
				<div class="divBusqueda ">
					<input class="form-control txtBuscar" placeholder="Buscar articulos">
					<button class="btn btnBuscador" >Buscar</button>
				</div>
			</div>
		</div>
		
		
	</div>
	
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("content/js/paginas/welcome/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("content/js/paginas/welcome/script.js") ?>></script>
</body>
</html>