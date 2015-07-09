<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header" role="banner">
	<div class="container fhl-header">
		<div class="row">
            <div class="col-md-6 no-padding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php //bloginfo( 'name' ); ?>
                    <img src="<?php echo get_template_directory_uri().'/img/fhl-logo.png'; ?>"/>
                </a>
            </div>
            <div class="site-branding col-md-6 no-padding">
                <div class="web-contact">
                    <div class="line-1">Call us 04 12 781 601 OR 08 8382 8517</div>
                    <div class="line-2">24 hrs 7 days a week</div>
                    <div class="line-3">If you need us outside of general business hours</div>
                    <div class="line-4">we Are always here to help</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 right no-padding" style="line-height: 0;">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'menu' => 'id','theme_location' => 'header', 'menu_id' => 'header-menu' ) ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<div id="content" class="site-content">
