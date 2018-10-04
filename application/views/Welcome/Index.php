<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/index/style.css") ?> >
	
</head>
<body>
	<?php 
		$this->load->view("parts/header.php");
	?>
	<?php 
		$this->load->view("parts/componentes/slider.php");
	?>

	<?php 
		$this->load->view("parts/footer.php");
	?>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>