<div class="section hero-wrap blog-section">
    <div class="section-content blog-hero-content">

        <div class="single-hero-info blog-hero-info">
            
            <a class="archive-link" href="/mental-health-services/">HBH Services</a>

            <h2><?php the_title(); ?></h2>

            <?php if( get_field('blog_subtitle') ): ?>
            <h1 class="blog-hero-subtitle"><?php the_field( 'blog_subtitle' ); ?></h1>
            <?php endif; ?>

            <?php if ( have_rows( 'blog_author' ) ): ?>
                <?php while ( have_rows( 'blog_author' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'clinician' ) : ?>
                        <?php $blog_authot_clincician = get_sub_field( 'blog_authot_clincician' ); ?>
                        <?php if ( $blog_authot_clincician ) : ?>
                            <?php $post = $blog_authot_clincician; ?>
                            <?php setup_postdata( $post ); ?> 
            
                            <p><?php the_field( 'blog_author_pretext', 'option' ); ?><a class="blog-author" href="<?php the_permalink(); ?>"><?php the_title( ); ?>,
                                <?php $license = wp_get_post_terms($post->ID, 'clinician-licensure'); if ($license) { $out = array(); foreach ($license as $license) {
                                        $out[] = '' .$license->name .'';
                                    }
                                    echo join( ', ',$out ); } ?></a></p>
            
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php elseif ( get_row_layout() == 'other' ) : ?>
                        <?php $blog_author_other = get_sub_field( 'blog_author_other' ); ?>
                        <?php if ( $blog_author_other ) : ?>
                            <?php $post = $blog_author_other; ?>
                            <?php setup_postdata( $post ); ?> 
            
                            <p class="blog-author"><?php the_title(); ?></p>
                            <?php wp_reset_postdata(); ?>
            
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // No layouts found ?>
            <?php endif; ?>

        </div>
        
        <div class="single-clinician-heroimg blog-hero-img">
            <img class="clinician-single-headshot" src="<?php the_field( 'blog_header_image' ); ?>" data-rjs="2" alt="" />
        </div>

    </div>
</div>