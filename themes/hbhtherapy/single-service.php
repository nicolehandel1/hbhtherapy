<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HBH_Therapy
 */

get_header(); ?>

<meta property="og:title" content="<?php the_title() ?>"/>
<meta property="og:image" content="<?php the_field( 'blog_header_image' ); ?>"/>
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:description" content="<?php the_field( 'single_excerpt_summary' ); ?>"/>

<article>

<?php

get_template_part( 'post-template-parts/service/component', 'hero');
        
get_template_part( 'post-template-parts/service/component', 'info');?>
    
</article>    
    
<?php get_footer(); ?>