<style>
    .blog-filters {
        width:80%; 
        flex-wrap: nowrap;
    }
    .filters {
        width: 100%;
    }
    .button.is-checked {
    background: #085962;
        color: #fff;
}
    p.archive-link {
    color: #008587;
    margin-top: 19px;
    margin-bottom: -11px;
    font-weight: 800;
    font-size: 16px;
}
    .button-filter-wrap {
        margin: 5px;
    }
    @media only screen and (max-width: 1200px) {
    .blog-filters {
        flex-wrap: wrap;
    }
    .blog-filters .select {
    width: 100%;
}    
    }
    @media only screen and (max-width: 800px) {
    .filter-wrap {
    justify-content: flex-start; 
    }
        .about-filter-wrap {
        display: block;
    }
    }
</style>

<?php
$args = array( 
	'post_type'   => 'post',
	'post_status' => 'publish',
    'posts_per_pag' => '-1',
    'orderby' => 'date',
    'order' => 'DESC',
);
$posts = new WP_Query( $args );


$cats = get_categories( array(
    'taxonomy' => 'category',
    'field'    => 'term_id',
));


?>

<div class="section-content hero-wrap">
    <h1 class="pg-title"><?php the_field( 'page_title' ); ?></h1>
</div>

<div class="section-content blogpg-section-content">
    <div class="filters-content">
        <div class="filter-wrap">
            <div class="filters ">
                
                <p class="search">
                    <input type="text" class="quicksearch" placeholder="Search..." />
                    <img src="<?php the_field( 'search_icon', 'option' ); ?>" data-rjs="2" alt="search icon" />
                </p>
                
                <div class="button-group js-radio-button-group about-filter-wrap" data-filter-group="color"  style="margin: 25px;">

                    <?php foreach ($cats as $cat) {
                    echo '<div class="button-filter-wrap"><button class="button button-filter" data-filter=".'.$cat->slug.'">'.$cat->name.'</button></div>'; }?>
                    <div class="button-filter-wrap"><button class="button is-checked button-filter" data-filter="*">All</button></div>

                </div> 

            </div>
        </div>
    </div>
</div>

<div class="section-content">
    <div class="grid">

        <?php if ( $posts->have_posts() ) :  while( $posts->have_posts() ) : $posts->the_post() ;
            $imageID = get_field('blog_header_image');
            $image = wp_get_attachment_image_src( $imageID, 'full' ); 
            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
            $date = get_the_date('F j, Y', $post->ID);
            $categories = get_the_category( $post->ID );
            ?>

        <div class="grid-item blog-grid-item <?php foreach($categories as $cd){ echo $cd->slug;} ?>" data-category="transition">

            <div class="blog-grid-item-wrap">

                <a class="" href="<?php the_permalink(); ?>">

                    <img class="clinician-single-headshot" src="<?php echo $image[0]; ?>" data-rjs="2" alt="<?php echo $alt_text; ?>" />

                    <!-- <p class="archive-link"><?php foreach($categories as $cd){ echo $cd->cat_name;} ?></p> --->
                    <h3><?php the_title() ?></h3>

                    <?php if ( have_rows( 'blog_author' ) ): ?>
                    <?php while ( have_rows( 'blog_author' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'clinician' ) : ?>
                    <?php $blog_authot_clincician = get_sub_field( 'blog_authot_clincician' ); ?>
                    <?php if ( $blog_authot_clincician ) : ?>
                    <?php $post = $blog_authot_clincician; ?>
                    <?php setup_postdata( $post ); ?>

                    <p class="blog-author"><?php the_title( ); ?>,
                        <?php $license = wp_get_post_terms($post->ID, 'clinician-licensure'); if ($license) { $out = array(); foreach ($license as $license) {
                                        $out[] = '' .$license->name .'';
                                    }
                                    echo join( ', ',$out ); } ?></p>

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

                    <p class="blog-date"><?php echo $date; ?></p>

                </a>
            </div>

        </div>

        <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>

<script>
    
// store filter for each group
var buttonFilters = {};
var buttonFilter;
// quick search regex
var qsRegex;

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
    layoutMode: 'fitRows',
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  },
});

$('.filters').on( 'click', '.button', function() {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  buttonFilters[ filterGroup ] = $this.attr('data-filter');
  // combine filters
  buttonFilter = concatValues( buttonFilters );
  // Isotope arrange
  $grid.isotope();
});

// use value of search field to filter
var $quicksearch = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}) );

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
  
// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  threshold = threshold || 100;
  return function debounced() {
    clearTimeout( timeout );
    var args = arguments;
    var _this = this;
    function delayed() {
      fn.apply( _this, args );
    }
    timeout = setTimeout( delayed, threshold );
  };
}
    

</script>