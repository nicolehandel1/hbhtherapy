<div class="section srvpg-hero-section abt-section ins-section" id="ef">
    <div class="section-content abt-content">

        <div class="single-hero-info srvpg-title-wrap">
            <h1 class="pg-title"><?php the_field( 'ins_section_title_' ); ?></h1>
        </div>
        
        <div class="srvpg-summary-wrap">
            <p class="srvpg-summary"><?php the_field( 'ins_section_content' ); ?></p>
            
            <a class="btn" href="<?php get_field( 'ins_button_link' ); ?>" target="_blank"><?php the_field( 'ins_button_label' ); ?></a>
        </div>

    </div>
</div>