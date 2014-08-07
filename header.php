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
		<!-- facbook SDK -->
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=544606902327552&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- facbook SDK end-->

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
					<div class="page-wrapper"><!--
						<div class="col-1-2 p-l pad-l-50px">
							<div class="frame caption-1 txt-c">
								<span class="headline-1">All Students</span>
								<span class="headline-2">Matter</span>
							</div>
							<a href="<?php echo do_shortcode("[page_path id='58']"); ?>" class="btn-1 button">Get Involved</a>
						</div>
						<div class="col-1-2 p-l">
							<img src="<?php echo get_template_directory_uri(); ?>/img/hero.png" alt="Debe Campos-Fleenor">
						</div>-->
						<?php echo do_shortcode("[layerslider id='1']"); ?>
					</div>

				</section>
				<section class="header-form clear">
					<div class="page-wrapper">
					<?php dynamic_sidebar('widget-area-2'); ?>
					</div>
				</section>
      
			<!-- /header -->
