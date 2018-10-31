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
  		<source  type="video/mp4" src=<?php echo base_url("Content/videos/Reina/index/baner.mp4") ?>>
	  	<!-- <source src="movie.ogg" type="video/ogg">-->
		Your browser does not support the video tag.
	</video>
	<div class="marginNull noticias">
		<div class="row container">
			<div class="col-lg-4">
				<div class="container row noticia">
					<img class="imgPrincipal" src=<?php echo base_url("Content/img/tablero/noticias/1/fondo.png") ?> >	
					<div class="cuerpoNoticia">
						Este es el texto de encima					
					</div>
				</div>	
				
			</div>
			<div class="col-lg-4">
				<div class="container row noticia">

					<img class="imgPrincipal" src=<?php echo base_url("Content/img/tablero/noticias/1/fondo.png") ?> >	
				</div>	
				
			</div>
			<div class="col-lg-4">
				Noticia 3
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