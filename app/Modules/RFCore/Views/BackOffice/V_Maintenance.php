<?php
/**
 * @var $content string
 * @var $menu string
 */
?>

<!doctype html>
<html lang="fr">

<head>
    <link href="<?php echo base_url() ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/public/css/all.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('public/img/tab-icon.png') ?>">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js" integrity="sha256-cVdRFpfbdE04SloqhkavI/PJBWCr+TuyQP3WkLKaiYo=" crossorigin="anonymous"></script>

    <link href="<?php echo base_url() ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/public/css/bootstrap-steps.min.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/trumbowyg/dist/trumbowyg.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/template/trumbowyg.template.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/langs/fr.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/resizimg/resizable-resolveconflict.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/jquery-resizable/dist/jquery-resizable.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/js/trumbowyg/dist/ui/trumbowyg.min.css">

    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url() ?>/public/js/gijgo.js" type="text/javascript"></script>
    <link href="<?php echo base_url() ?>/public/css/gijgo.min.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/funct.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/jquery.caret.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/public/js/print.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!--	DATATABLES -->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
            src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
    <!--	DATATABLES -->

    <link href="<?php echo base_url() ?>/public/css/RFStyle.css" rel="stylesheet">

    <?php if (isset($script)) echo $script; ?>

    <title><?= isset($title) ? $title:PROJECT_ID?></title>

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

<div class="row m-0 h-100">
    <div class="row m-0 col-sm-12 pr-0 pl-0" style="z-index: 1; min-height: calc(100vh - 50px)">

        <div class="col-sm-12 h-100 d-flex pr-0 pl-0">
            <div class="col-sm-12 text-center pt-7">
                <img src="<?= base_url('public/img/juridip-01.svg');?>" alt="JuriDIP logo" width="400px" class="pb-7">
                <h3>Site temporairement indisponible pour cause de maintenance.</h3>
                <br>
                <h3>Veuillez réessayer ultérieurement.</h3>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <div class="row m-0 col-sm-12 pr-0 pl-0" style="z-index: 0">
        <div class="col-sm-12 bg-accent">
            <div class="row rf-footer m-0">
                <div class="text-left col-sm-6 d-flex" style="align-items: center">
                    <div class="col-sm-12">
                        <a href="#"
                           onclick="openModal('<?= base_url('WebFox/LegalNotice/display/' . KEY_INDEX_LEGAL_NOTICE) ?>','<?= lang('app.legalNotices.editMenu.legalNotice') ?>')"
                           class="footer-link"><?= lang('app.legalNotices.editMenu.legalNotice') ?></a>
                        <span class="col-2"> - </span>
                        <a href="#"
                           onclick="openModal('<?= base_url('WebFox/LegalNotice/display/' . KEY_INDEX_GTS) ?>','<?= lang('app.legalNotices.editMenu.GTS') ?>')"
                           class="footer-link"><?= lang('app.legalNotices.editMenu.GTSShort') ?></a>
                        <span class="col-2"> - </span>
                        <a href="#"
                           onclick="openModal('<?= base_url('WebFox/Contact/display') ?>','<?= lang('app.contacts.contact') ?>')"
                           class="footer-link"><?= lang('app.contacts.contact') ?></a>
                    </div>
                </div>

                <div class="text-right col-sm-6">
                    <img src="<?php echo base_url('public/img/juridip-logo-blanc.svg') ?>" alt="JuriDIP logo"
                         height="50px"
                         style="margin: -10px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
