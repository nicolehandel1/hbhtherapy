<?php
/**
 *	Template Name: About Page
**/

	// get the header
	//set_query_var("body_class", 'firm');
	get_header();

	get_template_part( 'page-template-parts/about/component', 'hero');

    get_template_part( 'page-template-parts/about/component', 'offices');

    
 	// get the footer
 	get_footer(); 
 ?>
