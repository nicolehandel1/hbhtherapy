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
    <meta property="og:image" content="<?php the_post_thumbnail() ; ?>"/>
    <meta property="og:url" content="<?php the_permalink(); ?>"/>

    <?php wp_head(); ?>
</head>

<style>
    #menu {
        display: none;
    }

    .menu-content {
        position: fixed;
        margin: 0 auto;
        max-width: 1680px;
        width: 100%;
        z-index: 30;
    }

    .menu-wrap {
        float: right;
        height: 100vh;
        width: 100vw;
        background-color: #008587;
        background-image: url('http://hbhtherapy.local/wp-content/uploads/2022/01/Menu-Butterfly@2x.png');
        background-repeat: no-repeat;
        background-size: contain;
        padding: 20px;
    }

    @media only screen and (max-width: 700px) {

        .menu-wrap {
            width: 100%;
        }

    }

    .hamburger {
        float: right;
        display: flex;
        flex-direction: column;
        height: 25px;
        justify-content: space-between;
        margin: 1em 1em;
        z-index: 3;
    }

    .hamburger:hover {
        cursor: pointer;
        opacity: 0.3;
    }

    .nav-bar {
        width: 40px;
        height: 2px;
        background-color: #008587;
    }

    .one-active {
        background-color: #6f63ff;
        transform: translateY(13px) rotate(45deg);
    }

    .two-active {
        display: none;
    }

    .three-active {
        background-color: #6f63ff;
        transform: translateY(-9px) rotate(135deg);
    }

    .close {
        position: absolute;
        right: 32px;
        top: 32px;
        width: 32px;
        height: 32px;
        opacity: 1;
    }

    .close:hover {
        opacity: 0.3;
    }

    .close:before,
    .close:after {
        position: absolute;
        left: 15px;
        content: ' ';
        height: 40px;
        width: 2px;
        background-color: #F4CC9D;
    }

    .close:before {
        transform: rotate(45deg);
    }

    .close:after {
        transform: rotate(-45deg);
    }

    .hbhmenu ul {
        list-style: none;
        margin: 65px 20px 0 20px;
    }

    .hbhmenu li {
        margin-bottom: 2em;
        font-family: acumin-pro, sans-serif;
        font-weight: 900;
        font-style: normal;
        font-size: 1.5em;
        text-align: right;
    }

    .hbhmenu a {
        color: #F4CC9D;
        text-decoration: none;
    }

    .hbhmenu a:hover {
        color: #fff !important;
    }

    .hbhmenu a:visited {
        color: #F4CC9D;
    }

    .nav-container a.phone {
        margin-bottom: 0px;
        margin-right: 83px;
    }

    @media only screen and (max-width: 800px) {
        .bg-clinicians .butterfly-img-wrap {
            margin-top: 47px;
        }

        .nav-container {
            height: 3.5rem;
        }

        .nav-container a.phone {
            margin: 0px 50px;
            letter-spacing: 0;
            font-size: 14px;
        }
    }

</style>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hbhtherapy' ); ?></a>

        <div class="section-wrapper bg-clinicians"><?php get_template_part( 'page-template-parts/clinicians/component', 'bg');?></div>
        <div class="section-wrapper"></div>

        <header id="masthead" class="site-header">

            <div class="nav-container">
                <div class="hbh-nav-container">
                    <div class="site-branding">
                        <a href="/"><img src="<?php the_field( 'header_desktop_logo', 'option' ); ?>" data-rjs="2" alt="HBH Loho"></a>
                    </div><!-- .site-branding -->

                    <a class="phone" href="tel:<?php the_field( 'header_phone_number_link', 'option' ); ?>">test<?php the_field( 'header_phone_number', 'option' ); ?></a>

                    <div class="site-menu">
                        <nav id="myNav" class="main-navigation">
                            <a href="javascript:void(0);" class="menu-btn" onclick="navToggle()">
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
            <div class="section-wrapper" id="menu">
                <div class="menu-content">
                    <div class="menu-wrap">
                        <a href="javascript:void(0);" class="close" onclick="navToggle()"></a>
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

        </header><!-- #masthead -->

<script>
    function navToggle() {
        var x = document.getElementById("menu");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
    }
</script>