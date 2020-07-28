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

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!--	DATATABLES -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
	<!--	DATATABLES -->

	<link href="<?php echo base_url()?>/public/css/RFStyle.css" rel="stylesheet">

    <?php if(isset($script)) echo $script;?>

    <title><?php if(isset($title)) echo $title; else echo PROJECT_ID;?></title>

</head>

<body>

    <!-- The Modal  -->
    <div class="modal fade" id="RF_MODAL" tabindex="-1" role="dialog" aria-labelledby="RF_MODAL_LABEL"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="RF_MODAL_TITLE"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="RF_MODAL_BODY">
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-<?php echo THEME_COLOR; ?>">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url()."/public/".PROJECT_LOGO;?>" height="30" class="d-inline-block align-top" alt="">
            <?php echo PROJECT_ID; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url();?>">Accueil <span
                            class="sr-only">(current)</span></a>
                </li>
                <?php
                    // display integrated menu if defined
                    echo $menu ?? '';
                ?>
            </ul>
            <?php if (session()->has('logged_in') && session()->get('logged_in')){
                echo "<span class=\"navbar-text\"> <a href=\"#\"><b>".session()->get('email')."</b></a> |&nbsp;</span><span class=\"navbar-text\"><a href=\"logout\">Déconnexion <i class=\"fas fa-sign-out-alt text-white\"></i></a></span>";
            }
            else echo "<span class=\"navbar-text\"><a href=".base_url().">Connexion <i class=\"fas fa-sign-in-alt text-white\"></i></a></span>";
            ?>

        </div>
    </nav>

        

	<div class="justify-content-center shadow bg-white rounded rf-container">
        <!-- Content -->
        <?php /** @var mixed $content */ echo $content; ?>
    </div>

	<!-- Footer -->
	<footer class="rf-footer bg-<?php echo THEME_COLOR;?>">

		<div class="row">
			<!-- Copyright -->
			<div class="text-left col-4">
				&nbsp; © Copyright <?php echo date("Y");?>
			</div>

			<div class="text-lg-center col-4" style="font-size: 15px">
				
			</div>

			<!-- Copyright -->
			<!-- Copyright -->
			<div class="text-right col-4">
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

</html>
