<div class="section srvpg-hero-section abt-section ef-section" id="ef">
    <div class="section-content abt-content ins-content">

        <div class="single-hero-info srvpg-title-wrap">
            <h1 class="pg-title"><?php the_field( 'ef_section_title' ); ?></h1>
        </div>
        
        <div class="srvpg-summary-wrap">
            <p class="srvpg-summary"><?php the_field( 'ef_section_content' ); ?></p>
            
            <a class="btn" href="<?php get_field( 'ef_button_link' ); ?>" target="_blank"><?php the_field( 'ef_button_label' ); ?></a>
        </div>

    </div>
</div>