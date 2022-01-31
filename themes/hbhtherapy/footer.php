<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HBH_Therapy
 */

?>

<footer id="colophon" class="site-footer">
    <div class="section-wrapper home-srv-wrap site-info">
        <div class="section-content footer-section">

            <div class="footer-content">
                <div class="footer-logo-container"><img class="footer-logo" src="/wp-content/uploads/2022/01/Short-Logo.png" alt="HBH Logo"></div>

                <!-- Column One -->
                <div class="footer-container">

                    <?php if ( have_rows( 'footer_column_one_content', 'option' ) ): ?>
                    <?php while ( have_rows( 'footer_column_one_content', 'option' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'category_title' ) : ?>

                    <h4><?php the_sub_field( 'category' ); ?></h4>

                    <?php elseif ( get_row_layout() == 'page_link' ) : ?>
                    <?php $footer_page_link = get_sub_field( 'footer_page_link' ); ?>
                    <?php if ( $footer_page_link ) : ?>

                    <a href="<?php echo esc_url( $footer_page_link); ?>">
                        <p><?php the_sub_field( 'item' ); ?></p>
                    </a>

                    <?php endif; ?>
                    
                    <?php elseif ( get_row_layout() == 'external_link' ) : ?>
                    
                    <a href="<?php the_sub_field( 'link' ); ?>">
                        <p><?php the_sub_field( 'item_name' ); ?></p>
                    </a>

                    <?php elseif ( get_row_layout() == 'footer_email' ) : ?>
                    
                    <a href="mailto:<?php the_sub_field( 'email' ); ?>">
                        <p><?php the_sub_field( 'email' ); ?></p>
                    </a>
                    
                    <?php elseif ( get_row_layout() == 'text' ) : ?>
                    <p><?php the_sub_field( 'text' ); ?></p>

                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php // No layouts found ?>
                    <?php endif; ?>

                </div>


                <!-- Column Two -->
                <div class="footer-container">

                    <?php if ( have_rows( 'footer_column_two_content', 'option' ) ): ?>
                    <?php while ( have_rows( 'footer_column_two_content', 'option' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'category_title' ) : ?>

                    <h4><?php the_sub_field( 'category' ); ?></h4>

                    <?php elseif ( get_row_layout() == 'page_link' ) : ?>
                    <?php $footer_page_link = get_sub_field( 'footer_page_link' ); ?>
                    <?php if ( $footer_page_link ) : ?>

                    <a href="<?php echo esc_url( $footer_page_link); ?>">
                        <p><?php the_sub_field( 'item' ); ?></p>
                    </a>

                    <?php endif; ?>
                    
                    <?php elseif ( get_row_layout() == 'external_link' ) : ?>
                    
                    <a href="<?php the_sub_field( 'link' ); ?>">
                        <p><?php the_sub_field( 'item_name' ); ?></p>
                    </a>

                    <?php elseif ( get_row_layout() == 'footer_email' ) : ?>
                    
                    <a href="mailto:<?php the_sub_field( 'email' ); ?>">
                        <p><?php the_sub_field( 'email' ); ?></p>
                    </a>
                    
                    <?php elseif ( get_row_layout() == 'text' ) : ?>
                    <p><?php the_sub_field( 'text' ); ?></p>

                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php // No layouts found ?>
                    <?php endif; ?>

                </div>

                <!-- Column Three -->
                <div class="footer-container">

                    <?php if ( have_rows( 'footer_column_three_content', 'option' ) ): ?>
                    <?php while ( have_rows( 'footer_column_three_content', 'option' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'category_title' ) : ?>

                    <h4><?php the_sub_field( 'category' ); ?></h4>

                    <?php elseif ( get_row_layout() == 'page_link' ) : ?>
                    <?php $footer_page_link = get_sub_field( 'footer_page_link' ); ?>
                    <?php if ( $footer_page_link ) : ?>

                    <a href="<?php echo esc_url( $footer_page_link); ?>">
                        <p><?php the_sub_field( 'item' ); ?></p>
                    </a>

                    <?php endif; ?>
                    
                    <?php elseif ( get_row_layout() == 'external_link' ) : ?>
                    
                    <a href="<?php the_sub_field( 'link' ); ?>">
                        <p><?php the_sub_field( 'item_name' ); ?></p>
                    </a>

                    <?php elseif ( get_row_layout() == 'footer_email' ) : ?>
                    
                    <a href="mailto:<?php the_sub_field( 'email' ); ?>">
                        <p><?php the_sub_field( 'email' ); ?></p>
                    </a>
                    
                    <?php elseif ( get_row_layout() == 'text' ) : ?>
                    <p><?php the_sub_field( 'text' ); ?></p>

                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php // No layouts found ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="copy-privacy">
                <p>©2021 Handel Behvioral Health | Privacy Notice | Sitemap</p>
            </div>

        </div>
    </div> <!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>

</html>