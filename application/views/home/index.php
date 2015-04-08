<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php 
		$this->load->view("parts/loads.php");
	?>
	<!-- scripts -->
		<script type="text/javascript" src=<?php base_url("resouces/js/views/cuentas/script.js") ?> ></script>
		<script type="text/javascript" src=<?php base_url("resouces/js/views/cuentas/functions.js") ?> ></script>
</head>
<body>
	<?php $this->load->view("parts/menu.php") ?>
</body>
</html>