<?php
/**
 * The template for displaying all single clinicians
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HBH_Therapy
 */

get_header(); ?>

<meta property="og:title" content="<?php the_title() ?>"/>
<meta property="og:image" content="<?php the_field( 'clinician-headshot' ); ?>"/>
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:description" content=""/>

<?php

get_template_part( 'post-template-parts/clinicians/component', 'hero');
        
get_template_part( 'post-template-parts/clinicians/component', 'info');?>
    
<?php get_footer(); ?>