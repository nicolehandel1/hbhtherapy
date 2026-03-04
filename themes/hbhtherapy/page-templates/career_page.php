<?php
/**
 *	Template Name: Career Page
**/

	// get the header
	//set_query_var("body_class", 'about');
	get_header();

	get_template_part( 'page-template-parts/career/component', 'hero');

    get_template_part( 'page-template-parts/career/component', 'reviews');

    get_template_part( 'page-template-parts/career/component', 'roles');

    get_template_part( 'page-template-parts/career/component', 'benefits');

    get_template_part( 'page-template-parts/career/component', 'faq');

    get_template_part( 'page-template-parts/career/component', 'mission');

    get_template_part( 'page-template-parts/career/component', 'cv');
    
 	// get the footer
 	get_footer(); 
 ?>
