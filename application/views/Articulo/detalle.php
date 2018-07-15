<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Titulo" ?></title>
	<?php
		$this->load->view("parts/head.php");
	?> 
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/articulos/detalle/style.css") ?> >
	
</head>
<body>
	

	<div class="row marginNull divCuerpoNoticia">
		<div class="marginNull row titulo">
			<h3>
				<?php echo $articulo->_titulo; ?>
			</h3>
		</div>
		<div class="divContenidoCuerpoNoticia">
			<div class="row marginNull contenedorImagenContenidoCuerpo">
			<img class="imgContenidoCuerpo" src=<?php echo base_url("Content/img/articulos/".$articulo->_idArticulo."/min.jpg") ?> >
			</div>
			<div class="row marginNull">
				<?php 
					echo $articulo->_articulo;
				?>
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