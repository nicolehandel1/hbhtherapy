<?php 

$treatments = new WP_Query( array(
      'post_type' => 'treatment',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'name',
        'order' => 'ASC',
    ));

$conditions = new WP_Query( array(
    'post_type' => 'treatment',
    'tax_query' => array(
        array (
            'taxonomy' => 'treatment-type',
            'field' => 'slug',
            'terms' => 'conditions-we-treat',
        )
    ),
) );

$situations = new WP_Query( array(
    'post_type' => 'treatment',
    'tax_query' => array(
        array (
            'taxonomy' => 'treatment-type',
            'field' => 'slug',
            'terms' => 'situations-we-address',
        )
    ),
) );

$modalities = new WP_Query( array(
    'post_type' => 'treatment',
    'tax_query' => array(
        array (
            'taxonomy' => 'treatment-type',
            'field' => 'slug',
            'terms' => 'treatments-we-offer',
        )
    ),
) );

?>

<div class="section-content">
    <div class="filter-wrap srvpg-filter-warp">

        <div class="select"><select value-group="conditions" class="option-set service-filters dropdown-filters" data-width="100%">
            <option value="*" data-filter-value="">Conditions We Treat</option>
            <option value=".conditions-we-treat" data-filter-value="">View All</option>

            <?php while ( $conditions->have_posts() ) : $conditions->the_post(); ?>

            <option value=".<?php echo basename(get_permalink()); ?>"><?php the_field( 'service_menu_name' ); ?></option>

            <?php endwhile; wp_reset_postdata(); ?>

        </select></div>

        <div class="select"><select value-group="situations" class="option-set service-filters dropdown-filters" data-width="100%">
            <option value="*" data-filter-value="">Situations We Address</option>
            <option value=".situations-we-address" data-filter-value="">View All</option>

            <?php while ( $situations->have_posts() ) : $situations->the_post(); ?>

            <option value=".<?php echo basename(get_permalink()); ?>"><?php the_field( 'service_menu_name' ); ?></option>

            <?php endwhile; wp_reset_postdata(); ?>

            </select></div>
        
        <div class="select"><select value-group="modalities" class="option-set service-filters dropdown-filters" data-width="100%">
            <option value="*" data-filter-value="">Treatments We Offer</option>
            <option value=".treatments-we-offer" data-filter-value="">View All</option>

            <?php while ( $modalities->have_posts() ) : $modalities->the_post(); ?>

            <option value=".<?php echo basename(get_permalink()); ?>"><?php the_field( 'service_menu_name' ); ?></option>

            <?php endwhile; wp_reset_postdata(); ?>

            </select></div>

    </div>
</div>

<div class="section-content">
    <div class="grid">

        <?php while($treatments->have_posts()) : $treatments->the_post(); ?>

        <div class="service-item 
                <?php echo basename(get_permalink()); ?> 
                <?php $terms = wp_get_post_terms(get_the_id(), 'treatment-type');  foreach ($terms as $term) { echo $term->slug.' ';} ?>
                " data-category="transition">

            <div class="srv-item-img">
                <img class="srvpg-img" src="<?php the_field( 'blog_header_image' ); ?>" data-rjs="2" alt="" />
            </div>

            <div class="srv-item-info">

                <a class="srv-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                
                <p class=""><?php the_field( 'single_excerpt_summary' ); ?></p>
                
                <a class="btn" href="<?php the_permalink(); ?>">Learn More</a>

            </div>
        </div>

        <?php endwhile; ?>

    </div>

</div>

<script>
var $filtersSelect = $('.service-filters');

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.service-item',
  layoutMode: 'vertical',
  filter: $filtersSelect.val(),
});
    
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});

// bind filter on select change
$filtersSelect.on( 'change', function() {
  // get filter value from option value
  $grid.isotope({ filter: this.value });
    $('.option-set').val('*');
});
    
</script>