<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package logicsoftware
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
        <div class="container">

			<header class="header">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-6">
						<!-- Later replace with => bloginfo( 'name' ); -->
                        <h2 class="header__title"><?php esc_html_e( 'Доставка панелей', 'logicsoftware' ); ?></h2>
                    </div>
                    <div class="col-lg-6 col-md-6 header__right">
                        <button type="button" class="callback" data-toggle="modal" data-target="#callbackModal">
                          <?php esc_html_e( 'Обратный звонок', 'logicsoftware' ); ?>
                        </button>
                        <a href="tel:88004356214" class="header__phone">
                            <i class="fas fa-phone"></i>
							<!-- This can be taken from the admin panel (add page settings) -->
                            8 (800) 435-62-14
                        </a>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light navbar-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenu" aria-controls="topMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="topMenu">
						<?php
						wp_nav_menu( array(
							'theme_location'  => 'menu-top',
							'container'       => false,
							'menu_id'         => 'primary-menu',
							'menu_class'      => 'top-menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'add_li_class'    => 'top-menu__item'
						) );
						?>
                    </div>
                </nav>
            </header>
