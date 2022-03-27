<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HBH_Therapy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/gzp8yat.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta property="og:title" content="<?php the_title() ?>"/>
    <meta property="og:image" content="<?php the_post_thumbnail() ?>"/>
    <meta property="og:url" content="<?php the_permalink(); ?>"/>

    <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hbhtherapy' ); ?></a>

        <div class="section-wrapper bg-about"><?php get_template_part( 'page-template-parts/about/component', 'bg');?></div>
        <div class="section-wrapper bg-clinicians"><?php get_template_part( 'page-template-parts/clinicians/component', 'bg');?></div>
        
        <div class="section-wrapper"></div>

        <header id="masthead" class="site-header">

            <div class="nav-container">
                <div class="hbh-nav-container">
                    <div class="site-branding">
                        <a href="/"><img src="<?php the_field( 'header_desktop_logo', 'option' ); ?>" data-rjs="2" alt="HBH Logo"></a>
                    </div><!-- .site-branding -->

                    <a class="phone" href="tel:<?php the_field( 'header_phone_number_link', 'option' ); ?>"><?php the_field( 'header_phone_number', 'option' ); ?></a>

                    <div class="site-menu" href="javascript:void(0);"  onclick="navToggle()">
                        <p class="menu-label">menu</p>
                        <nav id="myNav" class="main-navigation">
                            <a class="menu-btn" >
                                <div class="hamburger">
                                    <div class="nav-bar one"></div>
                                    <div class="nav-bar two"></div>
                                    <div class="nav-bar three"></div>
                                </div>
                            </a>
                            <!-- Button to close the overlay navigation -->
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>

            <!-- Overlay content -->
            <div class="menu-right">
            <div class="menu-section-wrap" id="menu">
                <div class="menu-content">
                    <div class="menu" id="menu-content">
                        <a href="javascript:void(0);" class="menu-btn" onclick="navToggle()">
                                <div class="hamburger">
                                    <div class="nav-bar one-active"></div>
                                    <div class="nav-bar two-active"></div>
                                    <div class="nav-bar three-active"></div>
                                </div>
                            </a>
                        <div class="hbhmenu">
                            <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                    ?>
                        </div>
                    </div>
                </div>
            </div>
                </div>

        </header><!-- #masthead -->