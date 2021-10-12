<!doctype html>
<html lang="fr">

<head>

	<link rel="icon" href="<?= base_url('public/img/tab.svg') ?>">

	<!-- CSS -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!--	<link href="--><?php //echo base_url() ?><!--/public/css/bootstrap.min.css" rel="stylesheet">-->
	<link href="<?php echo base_url() ?>/public/css/all.css" rel="stylesheet">
	<!--	<script src="--><?php //echo base_url() ?><!--/public/js/all.js"></script>-->
	<!--	<link rel="icon" href="--><?php //echo base_url('public/img/icon.png') ?><!--">-->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		  rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href="<?php echo base_url() ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/public/css/bootstrap-steps.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/public/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" type="text/css"
		  href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>

	<link rel="stylesheet" href="<?php echo base_url() ?>/public/js/trumbowyg/dist/ui/trumbowyg.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/table/ui/trumbowyg.table.min.css">

	<link href="<?php echo base_url() ?>/public/css/RFStyle.css?v=2.1" rel="stylesheet">

	<!-- JS -->

	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/jquery-clock-timepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/funct.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery.caret.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/print.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<script src="<?php echo base_url() ?>/public/js/gijgo.js" type="text/javascript"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/datepicker-fr.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<!--	<script type="text/javascript" src="--><?php //echo base_url() ?><!--/public/js/popper.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"
			integrity="sha256-cVdRFpfbdE04SloqhkavI/PJBWCr+TuyQP3WkLKaiYo=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/trumbowyg/dist/trumbowyg.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css">
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/template/trumbowyg.template.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/langs/fr.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css">
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/resizimg/resizable-resolveconflict.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/fontfamily/trumbowyg.fontfamily.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/table/trumbowyg.table.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/jquery-resizable/dist/jquery-resizable.min.js"></script>
	<script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>

	<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
	<!--	<script src="https://js.stripe.com/v3/"></script>-->

	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://kit.fontawesome.com/ec9f944071.js" crossorigin="anonymous"></script>

	<link href="<?= base_url('public/css/tail.select/tail.select-default.css') ?>" rel="stylesheet">
	<script type="text/javascript" src="<?= base_url('public/js/tail.select-full.min.js') ?>"></script>

	<!--	DATATABLES -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript"
			src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
	<!--	DATATABLES -->
	<script type="text/javascript" src="<?php echo base_url() ?>/public/js/moment-with-locales.js"></script>
	<script type="module" src="<?= base_url('/public/js/UraTable/UraTable.js') ?>"></script>

	<?php if (isset($script)) echo $script; ?>

	<title><?= isset($title) ? $title : PROJECT_ID ?></title>
</head>

<body>

<!-- The Modal  -->
<div class="modal fade" id="RF_MODAL" tabindex="-1" role="dialog" aria-labelledby="RF_MODAL_LABEL"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" id="RF_MODAL_DIALOG">
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

<div class="row m-0 h-100" id="masterContainer">
	<?php if (!isset($hideMenu) || (!$hideMenu)): ?>
		<div class="global-header-wrapper">
			<div class="col">
				<img class="global-header-logo" src="<?= base_url(PROJECT_LOGO) ?>"
					 alt="Logo LSDP">
			</div>
			<div class="col">
				<span class="page-header-title">
				<?php
				$headerTitleStr = '';

				$roles = session()->get('roles');
				switch (true)
				{
					case $roles & ROLE_ADMIN:
						$headerTitleStr = 'Espace Administrateur';
						break;
				}

				echo $headerTitle ?? $headerTitleStr;
				?>
				</span>
			</div>
			<div class="col global-header-right">

				<?php if (session()->has('logged_in') && session()->get('logged_in')): ?>
					<div class="dropdown show">
						<!-- <a class="notification-badge" href="#">0</a> -->
						<a class="notification-badge" onclick="unavailableFeature()">0</a>

						<a class="global-header-dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false">
							<?php
							$defaultAvatar = base_url('/public/img/icons/avatar.svg');
							$avatar = base_url('/public/img/icons/avatar.svg');
							$avatarStyle = '';
							if (!empty(session()->get('avatar')))
							{
								$avatar = session()->get('avatar');
								$avatarStyle = 'style="border-radius: 50%;"';
							}
							?>
							<img src="<?= $avatar ?>" onerror="this.src='<?= $defaultAvatar ?>'" alt="Icône compte" height="50px"
								 width="50px" <?= $avatarStyle ?>>
							<?= session()->get('firstname') ?> <?= session()->get('lastname') ?>
							<i class="fas fa-chevron-down"></i>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
							<?php if ((!isset($hideSidebar) || !$hideSidebar)):?>

								<?php
								$editLink = '#';
								$roles = session()->get('roles');
								switch (true)
								{
									default:
										$editLink = base_url('Users/editFullPage');
										break;
								}
								?>

								<a class="dropdown-item" href="<?= $editLink; ?>"><i class="far fa-user-circle"></i> Mon compte</a>
							<?php endif;?>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url('Users/logout') ?>"><i class="fas fa-sign-out-alt"></i>Déconnexion</a>
						</div>
					</div>
				<?php endif;?>

			</div>
		</div>
	<?php else:?>
		<div class="global-header-wrapper-no-shadow">
		</div>
	<?php endif;?>


	<div class="m-0 pr-0 pl-0 main-container ">

		<?php if (session()->has('logged_in') && session()->get('logged_in') && (!isset($hideSidebar) || !$hideSidebar)): ?>
			<div class="rf-menu">
				<?= view(VIEW_MENU) ?>
				<a href="javascript:;" class="rf-menu-item" onclick="toggleMenu()">
					<div class="rf-menu-item-div">
						<i class="rf-menu-toggle rf-menu-item-logo fas fa-chevron-right"></i>
					</div>
				</a>
			</div>
		<?php endif;?>

		<div style="position: absolute; top: 140px; right: 40px" id="toast-container">
		</div>

		<div class="rf-container">
			<!-- Content -->
			<?php /** @var mixed $content */
			echo $content; ?>
		</div>
	</div>

	<!-- FOOTER -->
	<div class="rf-footer">
		<div class="footer-home-link col-sm-2 col-2 col-md-2">
			<a href="#"><?= PROJECT_ID ?></a>
		</div>

		<div class="col-sm-3 col-3 col-md-3 offset-2" style="text-align: center">
			<span style="vertical-align: middle; font-size: 28px;">PRÉ-PRODUCTION</span>
		</div>

		<div class="footer-useful-links offset-sm-2 offset-1 offset-md-1 col-sm-4 col-4 col-md-4">
			<a href="#">Mentions légales</a>
			<a href="#">CGV</a>
			<a href="#">Crédits</a>

			<span class="footer-social-networks">
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<a href="#"><i class="fab fa-facebook-square"></i></a>
					<a href="#"><i class="fab fa-instagram-square"></i></a>
				</span>
		</div>
	</div>
</div>

<div class="loading-modal" style="z-index: 10000"></div>


</body>

</html>

<script>
	var menuExpanded = false;
	var menuToggle = $('.rf-menu-toggle');
	var containerInitialWidth;

	var toastIndex = 0;

	$(document).ready(function () {
		<?php
		if (session()->has('alert')){
			echo 'openModal("'.base_url('Users/alert').'","Notification",{"type" : "'.session()->get('alert')['type'].'", "msg" : "'.session()->get('alert')['msg'].'"},true);';
			session()->remove('alert');
		}
		?>
	})

	function toggleMenu()
	{
		menuExpanded = !menuExpanded;

		var menuTitles = $('.rf-menu-item-title');

		if (menuExpanded)
		{
			menuToggle.addClass('fa-chevron-left');
			menuToggle.removeClass('fa-chevron-right');
			menuTitles.show(500);
		}
		else {
			menuToggle.removeClass('fa-chevron-left');
			menuToggle.addClass('fa-chevron-right');
			menuTitles.hide(500);
		}
	}

	$(document).on({
		// fetchStart: function() { $('body').addClass("loading");    },
		// ajaxStart: function() { $('body').addClass("loading");    },
		// ajaxStop: function() { $('body').removeClass("loading"); }
	});
</script>
