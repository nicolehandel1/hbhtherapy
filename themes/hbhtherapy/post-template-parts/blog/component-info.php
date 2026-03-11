<div class="section blg-info-section">
    <div class="section-content blog-info-contnt">

        <div class="single-content">

            <?php if (have_rows('blog_content')):
while (have_rows('blog_content')): the_row();

switch (get_row_layout()):

case 'section_title': ?>
            <h2 class="blog-subtitle"><?php the_sub_field('blog_section_title'); ?></h2>
            <?php break;

case 'section_content': ?>
            <p><?php the_sub_field('blog_section_content'); ?></p>
            <?php break;

case 'image':
$img = get_sub_field('blog_content_image');
if ($img): ?>
            <img src="<?=esc_url($img['url']);?>" alt="<?=esc_attr($img['alt']);?>">
            <?php endif; break;

case 'quote':
the_sub_field('quote');
the_sub_field('attribute');
break;

endswitch;
endwhile;
endif;
?>

            <?php if (have_rows('blog_author')): ?>
            <h4 class="blog-subtitle bauthor-title">About The Author</h4>

            <?php while (have_rows('blog_author')): the_row();

$post = get_sub_field('blog_author_other') ?: get_sub_field('blog_authot_clincician');

if ($post): setup_postdata($post); ?>

            <div class="bauthor-wrap">

                <?php if (get_row_layout()=='other'): ?>

                <img class="bauthor-img" src="<?php the_field('author_bioheadshot');?>" alt="<?php the_field('author_bioname');?> Headshot">

                <div>
                    <h4 class="bauthor-name"><?php the_field('author_bioname');?></h4>
                    <p class="bauthor-bio"><?php the_field('author_bio');?></p>
                </div>

                <?php else: ?>

                <img class="bauthor-img" src="<?php the_field('clinician-headshot');?>" alt="<?php the_title();?> Headshot">

                <div>
                    <h4 class="bauthor-name">
                        <?php
the_title();
$terms = wp_get_post_terms($post->ID,'clinician-licensure');
if($terms) echo ', '.join(', ', wp_list_pluck($terms,'name'));
?>
                    </h4>

                    <p class="bauthor-bio">
                        <?php the_field('author_summary');?>
                        <a href="<?php the_permalink();?>" class="bauthor-more">More About Author →</a>
                    </p>
                </div>

                <?php endif; ?>

            </div>

            <?php wp_reset_postdata();
endif;
endwhile;
endif; ?>

        </div>


        <aside class="sidebar">

            <section>
                <p class="clinician-subtitle">Share</p>
                <hr>
                <div class="share-icons">
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/share?url=<?php the_permalink();?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </section>

            <section>
                <p class="clinician-subtitle">Subscribe To Our Newsletter</p>
                <hr>
                <button class="btn" onclick="show('popup')">Subscribe</button>

                <div id="popup" class="popup">
                    <a class="close" onclick="hide('popup')">x</a>
                    <p class="clinician-subtitle">Subscribe To Our Newsletter</p>
                    <hr>
                    <?php echo mailster_form(1); ?>
                </div>
            </section>

            <section>
                <p class="clinician-subtitle">Appointments</p>
                <hr>

                <a class="phone" href="tel:<?php the_field('header_phone_number_link','option');?>">
                    <?php the_field('header_phone_number','option');?>
                </a>

                <a class="btn" href="<?php the_field('view_availability_link','option');?>" target="_blank">
                    <?php the_field('clinician_button_label','option');?>
                </a>
            </section>

        </aside>

    </div>
</div>

<script>
    const $ = id => document.getElementById(id);
    const show = id => $(id).style.display = 'block';
    const hide = id => $(id).style.display = 'none';
</script>