<style>
    .page-template-services_page {
        background-color: #FAF8F4;
    }
    .srvpg-hero-section {
        padding: 0px;
        margin-bottom: -10px;
        
    }
    .service-hero-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        width: 50%;
        padding: 175px 75px 150px 75px;
        background-color: #7BBEB6;
    }
    
    .servicepg-info-wrap {
        width: 50%;
        padding: 175px 75px 75px 75px;
    }
    
    .service-hero-info .pg-title {
        text-align: right;
        margin: 0;
        color: #085962;
    }
    
    .service-hero-info .phone {
        width: 100%;
        text-align: right;
        color: #fff;
    }
    
    .srvpg-summary {
        font-size: 22px;
        line-height: 35px;
    }
    
</style>

<div class="section srvpg-hero-section">
    <div class="section-content blog-hero-content">

        <div class="single-hero-info service-hero-info">

            <h1 class="pg-title"><?php wp_title(''); ?></h1>
            
            <a class="phone" href="tel:<?php the_field( 'header_phone_number_link', 'option' ); ?>"><?php the_field( 'header_phone_number', 'option' ); ?></a>

            <?php if ( have_rows( 'calltoact_button', 'option' ) ) :  while ( have_rows( 'calltoact_button', 'option' ) ) : the_row(); ?>
            <a class="btn" href="<?php the_sub_field( 'calltoact_button_link' ); ?>" target="_blank"><?php the_sub_field( 'calltoact_button_label' ); ?></a>
            	<?php endwhile; endif; ?>

        </div>
        
        <div class="servicepg-info-wrap">
            
            <p class="srvpg-summary"><?php the_field( 'services_summary' ); ?></p>
        
        </div>

    </div>
</div>