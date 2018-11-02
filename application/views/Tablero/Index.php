<!DOCTYPE html>
<html>
<head>
	<title>Tablero</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/tablero/index/style.css") ?> >
</head>
<body>
	<?php 
		$this->load->view("parts/header.php");
	?>
	<video width="100%" autoplay class="videoBanner" loop>
  		<source  type="video/mp4" src=<?php echo base_url("Content/videos/Tablero/index/baner.mp4") ?>>
	  	<!-- <source src="movie.ogg" type="video/ogg">-->
		Your browser does not support the video tag.
	</video>
	<div class="contenidoCuerpo">
		<div class="navegacion">
			<h2>Navegación</h2>
			<div class="row container parametroBusqueda">
				Categorias
			</div>
			<div class="row container parametroBusqueda">
				Hashtags
			</div>
		</div>
		<div class="noticias">
			<div >
				<?php 
					if(isset($articulos)){
						foreach ($articulos as $key => $articulo) {
				?>
					<div class="col-lg-6">
						<div class="container row noticia">
							<img class='imgNoticia' src=<?php echo base_url("Content/img/tablero/noticias/".$articulo->_idArticulo."/fondo.png") ?> >
							<h4 class="tituloNoticia">
								<?php 
									echo $articulo->_titulo;
								?>
							</h4>
							<div class="contenido">
								<?php 
									echo $articulo->_breveDescripcion;
								?>
							</div>
							<div class="footerNoticia">

							</div>	
						</div>	
					</div>
				<?php 
						}
					}
				?>
			</div>
			
		</div>
	</div>
	<?php 
		$this->load->view("parts/footer.php");
	?>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/reina/index/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/reina/index/script.js") ?>></script>
</body>
</html>