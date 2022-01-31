<?php 

$image = get_sub_field('hminfo-image');

$services = wp_get_post_terms($post->ID, 'clinician-services');

$modalities = wp_get_post_terms($post->ID, 'clinician-modalities');

$specialties = wp_get_post_terms($post->ID, 'clinician-specialties');

$insurance = wp_get_post_terms($post->ID, 'clinician-insurance');

$location = wp_get_post_terms($post->ID, 'clinician-location');

?>

<div class="section clin-info-section">
    <div class="section-content clin-info-content">

        <div class="sidebar">
            
            <?php if ($services) { $out = array(); ?>
            <p class="clinician-subtitle">Services</p>
            <hr>
            <ul class="sidebar-bullets"><?php foreach ($services as $service) {
                        $out[] = '<li>' .$service->name .'</li>';
                    }
                    echo join( $out ); } ?></ul>

            <?php if ($insurance) { $out = array(); ?>
            <p class="clinician-subtitle">Accepted Insurance Providers</p>
            <hr>
            <ul class="sidebar-bullets"><?php foreach ($insurance as $insurance) {
                        $out[] = '<li>' .$insurance->name .'</li>';
                    }
                    echo join( $out ); } ?></ul>

            <?php if ($location) { $out = array(); ?>
            <p class="clinician-subtitle">For <?php foreach ($location as $location) { $out[] = '' .$location->name .''; } echo join( ' & ',$out ); } ?> Appointments</p>
            <hr>
            <a class="phone" href="tel:<?php the_field( 'number_link' ); ?>"><?php the_field( 'number_label' ); ?></a>

            <a class="btn <?php $terms = wp_get_post_terms(get_the_id(), 'clinician-color');  foreach ($terms as $term) { echo $term->slug.' ';} ?>" href="<?php the_field( 'clinician-book_now_link' ); ?>" target="_blank"><?php the_field( 'clinician_button_label', 'option' ); ?></a>
            
            <a class="archive-link" href="/counselors-appointments/"><?php the_field( 'clinicians_view_all_label', 'option' ); ?>
</a>

        </div>
        
        <div class="single-content">
            <p class="clinician-subtitle">Counseling Style</p>
            <p><?php the_field( 'clinician-counseling_style' ); ?></p>

            <p class="clinician-subtitle">Experience</p>
            <p><?php the_field( 'clinician-experience' ); ?></p>

            
            <?php if ($specialties) { $out = array(); ?>
            <p class="clinician-subtitle">Specialties</p>
            <ul><?php foreach ($specialties as $specialty) {
                        $out[] = '<li>' .$specialty->name .'</li>';
                    }
                    echo join( $out ); } ?></ul>

            
            <?php if ($modalities) { $out = array(); ?>
            <p class="clinician-subtitle">Clinical Modalities + Treatments</p>
            <ul><?php foreach ($modalities as $modality) {
                        $out[] = '<li>' .$modality->name .'</li>';
                    }
                    echo join( $out ); } ?></ul>

            <p><?php the_field( 'clinician-call_to_action' ); ?></p>
        </div>

        

    </div>
</div>