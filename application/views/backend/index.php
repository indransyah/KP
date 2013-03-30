<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo base_url('assets/css/bootstrap-cerulean.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-responsive.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url('js/html5shiv.js') ?>"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png') ?>">
    </head>

    <body>
        <?php echo $header; ?>
        <div class="container-fluid" style="margin-top: 30px;">
            <div class="row-fluid">
                <?php echo $sidebar; ?>
                <div class="span9">
                    <h3 style="margin-top: 0px;">Dashboard</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Library</a> <span class="divider">/</span></li>
                        <li class="active">Data</li>
                    </ul>
                    <div class="content well">
                        <legend><?php echo $title ?></legend>
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-transition.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-alert.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-modal.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-dropdown.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-scrollspy.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-tab.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-tooltip.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-popover.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-button.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-collapse.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-carousel.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-typeahead.js') ?>"></script>

    </body>
</html>