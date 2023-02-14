<style>
.popup {
  display: none;
  position: fixed;
  padding: 10px;
  left: 50%;
  margin-left: -150px;
  top: 40%;
  margin-top: -100px;
  background: #FFF;
  z-index: 20;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #FFF;
  z-index: -1;
}
.mailster-form {
    padding: 30px 40px;
}  

.close {
    position: fixed;
    font-size: 50px;
    font-weight: 300;
    margin-top: -57px;
    margin-left: 404px;
}    

@media only screen and (max-width: 800px) {
    .popup {
        left: 0;
        margin-left: auto; 
        top: 0;
        margin-top: 56px;
        width: 100%;
        Height: 100%;
    }
    .close {
        position: relative;
        margin: auto;
        float: right;
    }    
    }
    
</style>
<div class="section blg-info-section">
    <div class="section-content blog-info-contnt">
        
        <div class="single-content">
            
            <?php if ( have_rows( 'blog_content' ) ): ?>
                <?php while ( have_rows( 'blog_content' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'section_title' ) : ?>
            
            <h2 class="blog-subtitle"><?php the_sub_field( 'blog_section_title' ); ?></h2>
            
                    <?php elseif ( get_row_layout() == 'section_content' ) : ?>
            
                        <p><?php the_sub_field( 'blog_section_content' ); ?></p>
            
                    <?php elseif ( get_row_layout() == 'image' ) : ?>
            
                        <?php $blog_content_image = get_sub_field( 'blog_content_image' ); ?>
                        <?php if ( $blog_content_image ) : ?>
                            <img src="<?php echo esc_url( $blog_content_image['url'] ); ?>" alt="<?php echo esc_attr( $blog_content_image['alt'] ); ?>" />
                        <?php endif; ?>
            
                    <?php elseif ( get_row_layout() == 'quote' ) : ?>
            
                        <?php the_sub_field( 'quote' ); ?>
                        <?php the_sub_field( 'attribute' ); ?>
            
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // No layouts found ?>
            <?php endif; ?>
            
           <!-- Author ------------->
                
           <?php if ( have_rows( 'blog_author' ) ): ?>
                
           <h1 class="blog-subtitle bauthor-title">About The Author</h1>

           <?php while ( have_rows( 'blog_author' ) ) : the_row(); ?>
		   
           <?php if ( get_row_layout() == 'other' ) : $blog_author_other = get_sub_field( 'blog_author_other' ); if ( $blog_author_other ) :  $post = $blog_author_other;  setup_postdata( $post ); ?>

                <div class="bauthor-wrap">
                    <img class="bauthor-img" src="<?php the_field( 'author_bioheadshot' ); ?>" data-rjs="2" alt="<?php the_field( 'author_bioname' ); ?> Headshot" />
                    <div class="">
                        <h4 class="bauthor-name" rel="author"><?php the_field( 'author_bioname' ); ?></h4>
                        <p class="bauthor-bio"><?php the_field( 'author_bio' ); ?></p>
                    </div>
                </div><?php wp_reset_postdata(); ?>
            
            <?php endif; elseif ( get_row_layout() == 'clinician' ) : $blog_authot_clincician = get_sub_field( 'blog_authot_clincician' ); if ( $blog_authot_clincician ) : $post = $blog_authot_clincician;  setup_postdata( $post ); ?>
            
                <div class="bauthor-wrap">
                    <img class="bauthor-img" src="<?php the_field( 'clinician-headshot' ); ?>" data-rjs="2" alt="<?php the_title( ); ?> Headshot" />
                    <div class="">
                        <h4 class="bauthor-name" rel="author"><?php the_title( ); ?>, <?php $license = wp_get_post_terms($post->ID, 'clinician-licensure'); if ($license) { $out = array(); foreach ($license as $license) { $out[] = '' .$license->name .''; } echo join( ', ',$out ); } ?></h4>
                        <p class="bauthor-bio"><?php the_field( 'author_summary' ); ?> <a href="<?php the_permalink(); ?>" class="bauthor-more">More About Author →</a></p>
                    </div>
                </div><?php wp_reset_postdata(); ?>

                <?php endif; endif; endwhile; else: endif; ?>
            
        </div>
        
        <div class="sidebar">
            
            <p class="clinician-subtitle">Share</p>
            <hr>
            <div class="share-icons">
                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                    <i class="fab fa-facebook-f" alt="Facebook share link"></i> 
                </a>
                
                <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                    <i class="fab fa-twitter" alt="Twitter share link"></i>
                </a>
                
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank">
                    <i class="fab fa-linkedin-in" alt="LinkedIn share link"></i>
                </a>
            </div>
            
            <p class="clinician-subtitle">Appointments</p>
            <hr>
            <a class="phone" href="tel:<?php the_field( 'header_phone_number_link', 'option' ); ?>"><?php the_field( 'header_phone_number', 'option' ); ?></a>

            <a class="btn" href="<?php the_field( 'view_availability_link', 'option' ); ?>" target="_blank"><?php the_field( 'clinician_button_label', 'option' ); ?></a>
                        
            <p class="clinician-subtitle">Subscribe To Our Newsletter</p>
            <hr>
            <button class="btn" href="#" onclick="show('popup')">Subscribe</button>

            <!-- This is what will be included inside the popup -->
            <div class="popup" id="popup">
                  <a class="close" href="#" onclick="hide('popup')">x</a>
                <p class="clinician-subtitle" style="padding-left: 30px;">Subscribe To Our Newsletter</p>
            <hr>
              <?php echo mailster_form( 1 ); ?>
            </div>
            <script>
                $ = function(id) {
                      return document.getElementById(id);
                    }

                    var show = function(id) {
                        $(id).style.display ='block';
                    }
                    var hide = function(id) {
                        $(id).style.display ='none';
                    }
            </script>

        </div>

    </div>
</div>