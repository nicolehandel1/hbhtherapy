<style>
    
.srvpg-filter-warp {
    width: auto;
}
    
.select {
    width: 33.33333%;
}
    
.button-filter-wrap {
    width: 33.33333%;
    border: 1px solid #085962;
    box-shadow: -2px 2px 2px -2px #085962;
    -webkit-box-shadow: -2px 2px 2px -2px #085962;
    -moz-box-shadow: -2px 2px 2px -2px #085962;
}

.service-filters:hover, .button-filter:hover, .service-filters:focus, .button-filter:focus {
    background-color: #085962;
    color: #fff;
}

.button-filter {
    width: 100%;
    height: 100%;
    padding: 10px 20px;
    color: #4D4D4D;
    font-weight: 700;
    text-align: left;
    border: 0px;
    border-radius: 0px;
    background-color: #fff;
    cursor: pointer;
}
    .service-item {
        display: flex;
        flex-wrap: wrap;
        background-color: #fff;
        padding: 25px;
        margin: 25px;
    }
    
    .srv-item-img {
        width: 40%;
    }
    
    .srvpg-img {
        width: 100%;
    }
    
    .srv-item-info {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        width: 60%;
        padding: 10px 75px;
    }
    
    a.srv-title {
        font-weight: 800;
        font-size: 40px;
    line-height: 50px;
        color: #008587;
        text-decoration: none;
    }

</style>
<?php 

$services = new WP_Query( array(
      'post_type' => 'service',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'name',
        'order' => 'ASC',
    ));

$individual = new WP_Query( array(
    'post_type' => 'service',
    'tax_query' => array(
        array (
            'taxonomy' => 'service-type',
            'field' => 'slug',
            'terms' => 'individual',
        )
    ),
) );

$relationship = new WP_Query( array(
    'post_type' => 'service',
    'tax_query' => array(
        array (
            'taxonomy' => 'service-type',
            'field' => 'slug',
            'terms' => 'relationships',
        )
    ),
) );

$psychiatry = new WP_Query( array(
    'post_type' => 'service',
    'tax_query' => array(
        array (
            'taxonomy' => 'service-type',
            'field' => 'slug',
            'terms' => 'psychiatry',
        )
    ),
) );

?>

<div class="section-content">
    <div class="filter-wrap srvpg-filter-warp">

        <div class="select"><select value-group="individual" class="option-set service-filters dropdown-filters" data-width="100%">
            <option value="*" data-filter-value="">Individual</option>
            <option value=".individual" data-filter-value="">View All</option>

            <?php while ( $individual->have_posts() ) : $individual->the_post(); ?>

            <option value=".<?php echo basename(get_permalink()); ?>"><?php the_field( 'service_menu_name' ); ?></option>

            <?php endwhile; wp_reset_postdata(); ?>

        </select></div>

        <div class="select"><select value-group="relationship" class="option-set service-filters dropdown-filters" data-width="100%">
            <option value="*" data-filter-value="">Relationships</option>
            <option value=".relationships" data-filter-value="">View All</option>

            <?php while ( $relationship->have_posts() ) : $relationship->the_post(); ?>

            <option value=".<?php echo basename(get_permalink()); ?>"><?php the_field( 'service_menu_name' ); ?></option>

            <?php endwhile; wp_reset_postdata(); ?>

            </select></div>

        <?php while ( $psychiatry->have_posts() ) : $psychiatry->the_post(); ?>
        <div class="psychiatry-reset button-filter-wrap">
            <button class="button-filter is-checked" data-filter=".<?php echo basename(get_permalink()); ?>"><?php the_field( 'service_menu_name' ); ?></button>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>

    </div>
</div>

<div class="section-content">
    <div class="grid">

        <?php while($services->have_posts()) : $services->the_post(); ?>

        <div class="service-item 
                <?php echo basename(get_permalink()); ?> 
                <?php $terms = wp_get_post_terms(get_the_id(), 'service-type');  foreach ($terms as $term) { echo $term->slug.' ';} ?>
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

// bind filter on select change
$filtersSelect.on( 'change', function() {
  // get filter value from option value
  $grid.isotope({ filter: this.value });
    $('.option-set').val('*');
});
    
$('.psychiatry-reset').on('click', 'button', function () {
    $('.grid').isotope({
        filter: '.psychiatry',
    });
    //reset the dropdowns
    $('.option-set').val('*');
});
</script>