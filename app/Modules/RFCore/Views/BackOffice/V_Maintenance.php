<!doctype html>
<html lang="fr">
<head>
	<link href="<?php echo base_url()?>/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/public/css/all.css" rel="stylesheet">

	<script type="text/javascript" src="<?php echo base_url()?>/public/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/public/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/public/js/bootstrap.min.js"></script>

	<link href="<?php echo base_url()?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">

	<script type="text/javascript" src="<?php echo base_url()?>/public/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/public/js/dataTables.bootstrap4.min.js"></script>

	<script src="<?php echo base_url()?>/public/js/gijgo.js" type="text/javascript"></script>
	<link href="<?php echo base_url()?>/public/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="<?php echo base_url()?>/public/js/funct.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/public/js/jquery.caret.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/public/js/print.min.js"></script>

	<link href="<?php echo base_url()?>/public/css/RFStyle.css" rel="stylesheet">
	<title>Maintenance</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-<?php echo THEME_COLOR; ?>">
	<a class="navbar-brand" href="#">
		<img src="<?php echo base_url()."/public/".PROJECT_LOGO;?>" height="40" class="d-inline-block align-top" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
			aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<?php
			// display integrated menu if defined
			echo $menu ?? '';
			?>
		</ul>
	</div>
</nav>

<div class="rf-container justify-content-center shadow bg-white rounded text-center">
	<img src="<?php echo base_url()."/public/".PROJECT_LOGO_MAINTENANCE;?>" width="1000" class="d-inline-block align-top" alt="" style="margin-bottom: 40px">
	<h3>Site temporairement indisponible pour cause de maintenance.</h3>
	<br>
	<h3>Veuillez revenir ultérieurement.</h3>
</div>
<!-- Footer -->
<footer class="rf-footer">

	<div class="row">
		<!-- Copyright -->
		<div class="text-left col-6">
			© Copyright 2019
		</div>
		<!-- Copyright -->
		<!-- Copyright -->
		<div class="text-right col-6">
			<a href="<?php echo base_url();?>" class="text-white"><strong>Accueil</strong></a>
			<span class="col-2"> - </span>
			<a href="#" class="text-white"><strong>Mentions Légales</strong></a>
			<span class="col-2"> - </span>
			<a href="#" class="text-white"><strong>Contact</strong></a>
		</div>
		<!-- Copyright -->
	</div>



</footer>
<!-- Footer -->
</body>
