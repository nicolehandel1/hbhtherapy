<?php 
$officeBg =  get_field( 'office_header_image');
?>
<style>
    .ofchero-wrap {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #008587;
        width: 100%;
        height: auto;
    }
    .office-hero-info {
        width: 40%;
        height: auto;
        margin: 10%;
        padding: 20px;
        border-radius: 3px;
        background-color: rgba(255, 255, 255, .85);
        transition: .25s ease;
    }
    
@media only screen and (max-width: 1300px) {

}

@media only screen and (max-width: 1100px) {

}

@media only screen and (max-width: 800px) {
    .office-hero-info {
        width: 90%;
        margin: 5%;
    }
}
</style>
<div class="hero-wrap">

    <div class="section-content single-hero-content ofchero-wrap" style="background-image: url('<?php echo $officeBg ; ?>');">

            <div class="office-hero-info">
                <h1 class="pg-title abt-pg-title"><?php the_field( 'page_title' ); ?></h1>
                <a class="phone" href="tel:<?php the_field( 'phone_link' ); ?>"><?php the_field( 'phone_label' ); ?></a>
                <p class="blog-author"><?php the_field( 'address' ); ?></p>
                <p><?php the_field( 'hours' ); ?></p>
                
                <?php $button_link = get_field( 'button_link' );  if ( $button_link ) : ?>
                <a class="btn" href="<?php echo esc_url( $button_link); ?>"><?php the_field( 'button_label' ); ?></a>
                <?php endif; ?>
                
            </div>

    </div>
</div>