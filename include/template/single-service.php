<?php get_header();

// Get the current post ID
$service_id = get_the_ID();
$service_meta = get_post_meta($service_id);








?>




<div class="it-sv-details-area it-service-details-area postbox-left-style pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="it-sv-sidebar-wrapper it-common-sidebar sidebar-right">
                    <?php dynamic_sidebar('service-sidebar'); ?>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="it-service-details-wrap">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="it-portfolio-details-thumb mb-30">
                            <img class="wow img-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();
