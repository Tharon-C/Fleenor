<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
<section class="banner">
		<!-- wrapper -->
		<div class="wrapper clear">

			<!-- header -->
			<header class="header clear" role="banner">


					<!-- nav -->
					<nav class="nav clear" role="navigation">
    
                        <div class="page-wrapper clear">    
                        <!-- logo -->
				    <div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
                    </div>
					<!-- /logo -->
                           
                            <?php  add_custom_nav_menu('menu-2'); ?>
                 </div>
					</nav>
					<!-- /nav -->
					<div class="page-wrapper pad-30px">
						<div class="col-1-2 p-l pad-l-50px">
							<div class="frame caption-1 txt-c">
								<span class="headline-1">Kids Can't Vote</span>
								<span class="headline-2">But You Can!</span>
							</div>
							<a href="#" class="btn-1 button">Get Involved</a>
						</div>
						<div class="col-1-2 p-l">
							<img src="<?php echo get_template_directory_uri(); ?>/img/hero.png" alt="Debe Campos-Fleenor">
						</div>

					</div>

				</section>
				<section class="header-form clear">
					<div class="page-wrapper">
					<?php dynamic_sidebar('widget-area-2'); ?>
					</div>
				</section>
      
			<!-- /header -->
