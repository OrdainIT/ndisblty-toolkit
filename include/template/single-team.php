<?php get_header();

// Assuming $Team meta is the meta data retrieved for the post
$team_meta = get_post_meta(get_the_ID(), 'ndisblty_team_meta', true);
$team_skill_switcher = $team_meta['team_skill_switcher'];
$team_skill_section_title = $team_meta['team_skill_section_title'];
$team_skill_section_description = $team_meta['team_skill_section_description'];
$team_skill_list = $team_meta['team_skill_list'];
$team_social_switcher = $team_meta['team_social_switcher'];
$team_social_facebook_url = $team_meta['team_social_facebook_url'];
$team_social_twitter_url = $team_meta['team_social_twitter_url'];
$team_social_instagram_url = $team_meta['team_social_instagram_url'];
$team_social_linkedin_url = $team_meta['team_social_linkedin_url'];

$team_contact_switcher = $team_meta['team_contact_switcher'];
$team_contact_phone = $team_meta['team_contact_phone'];
$team_contact_email = $team_meta['team_contact_email'];
$team_contact_exprience = $team_meta['team_contact_exprience'];

$team_button_switcher = $team_meta['team_button_switcher'];
$team_button_text = $team_meta['team_button_text'];
$team_button_url = $team_meta['team_button_url'];
$team_designation = $team_meta['team_designation'];

$team_carousel_switcher = $team_meta['team_carousel_switcher'];
$team_carousel_title = $team_meta['team_carousel_title'];




?>

<div class="it-team-details-area pt-120 pb-100">
    <div class="container">
        <div class="it-team-details-wrap pt-120 pb-120">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="it-team-details-thumb">
                            <img class="wow img-anim-top" data-wow-duration="1s" data-wow-delay="0.1s" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="it-team-details-top-right">
                        <div class="it-team-details-author-name mb-25">
                            <h5><?php the_title(); ?></h5>
                            <?php if (!empty($team_designation)): ?>
                                <span><?php echo esc_html($team_designation, 'ordainit-toolkit'); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($team_contact_switcher)): ?>
                            <div class="it-team-details-top-list mb-30">
                                <ul>
                                    <li><span><?php echo esc_html__('Experience:', OD); ?></span><i><?php echo esc_html($team_contact_exprience, OD); ?></i></li>
                                    <li><span><?php echo esc_html__('Email:', OD); ?></span><a href="mailto:<?php echo esc_attr($team_contact_email, OD); ?>"><?php echo esc_html($team_contact_email, OD); ?></a></li>
                                    <li><span><?php echo esc_html__('Phone:', OD); ?></span><a href="tel:<?php echo esc_attr($team_contact_phone, OD); ?>"><?php echo esc_html($team_contact_phone, OD); ?></a></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($team_social_switcher)): ?>
                            <div class="it-team-details-social mb-40">
                                <span><?php echo esc_html__('Social Media', OD); ?></span>
                                <a href="<?php echo esc_url($team_social_facebook_url); ?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo esc_url($team_social_twitter_url); ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo esc_url($team_social_instagram_url); ?>"><i class="fa-brands fa-instagram"></i></a>
                                <a href="<?php echo esc_url($team_social_linkedin_url); ?>"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($team_button_switcher)): ?>
                            <a class="it-btn-red hover-2" href="<?php echo esc_url($team_button_url); ?>"><?php echo esc_html($team_button_text); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-125">
            <div class="row">
                <div class="col-lg-6">
                    <div class="it-team-details-left">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="it-team-details-right">
                        <h5 class="it-team-details-title-sm mb-20"><?php echo esc_html($team_skill_section_title, OD); ?></h5>
                        <p class="mb-30"><?php echo od_kses($team_skill_section_description, OD); ?></p>
                        <?php if (!empty($team_skill_switcher)): ?>
                            <div class="it-progress-bar-wrap inner-style">
                                <?php if (!empty($team_skill_list) && is_array($team_skill_list)): ?>
                                <?php foreach ($team_skill_list as $single_skill): ?>
                                    
                                        <div class="it-progress-bar-item mb-10">
                                            <label><?php echo esc_html($single_skill['service_skill_name']); ?></label>
                                            <div class="it-progress-bar">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLeft animated" data-wow-delay=".1s" data-wow-duration="2s" role="progressbar" data-width="<?php echo esc_attr($single_skill['service_skill_value']); ?>%" aria-valuenow="<?php echo esc_attr($single_skill['service_skill_value']); ?>" aria-valuemin="0" aria-valuemax="100">
                                                        <span><?php echo esc_html($single_skill['service_skill_value']); ?>%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                 
                                <?php endforeach; ?>
                                <?php endif;?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($team_carousel_switcher)): ?>
    <!-- team-area-start -->
    <div class="it-team-area it-team-innar-style pb-120">
        <div class="container">
            <div class="it-team-title-wrap p-relative mb-65">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="it-section-title-box">
                            <h4 class="it-section-title"><?php echo esc_html($team_carousel_title, 'ordainit-toolkit'); ?></h4>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="it-event-arrow-box team-style text-lg-end">
                            <button class="slider-prev mr-25">
                                <span>
                                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.469669 5.46967C0.176777 5.76256 0.176777 6.23743 0.469669 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46446 6.59619 0.989591 6.3033 0.696697C6.01041 0.403804 5.53553 0.403804 5.24264 0.696697L0.469669 5.46967ZM26 5.25L1 5.25L1 6.75L26 6.75L26 5.25Z"
                                            fill="currentcolor" />
                                    </svg>
                                </span>
                            </button>
                            <button class="slider-next active">
                                <span>
                                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.5303 5.46967C25.8232 5.76256 25.8232 6.23743 25.5303 6.53033L20.7574 11.3033C20.4645 11.5962 19.9896 11.5962 19.6967 11.3033C19.4038 11.0104 19.4038 10.5355 19.6967 10.2426L23.9393 6L19.6967 1.75736C19.4038 1.46446 19.4038 0.989591 19.6967 0.696697C19.9896 0.403804 20.4645 0.403804 20.7574 0.696697L25.5303 5.46967ZM-6.55672e-08 5.25L25 5.25L25 6.75L6.55672e-08 6.75L-6.55672e-08 5.25Z"
                                            fill="currentcolor" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="it-team-wrap-box">
                        <div class="swiper-container it-team-active-2">
                            <div class="swiper-wrapper">
                                <?php
                                // WP_Query arguments
                                $args = array(
                                    'post_type'      => 'team', // Replace 'team' with your custom post type slug
                                    'posts_per_page' => 4, // Change to the number of posts you want to show, or -1 for all
                                    'order'          => 'rand', // Optional: Sort in ascending order
                                );

                                // The Query
                                $team_query = new WP_Query($args);

                                // The Loop
                                if ($team_query->have_posts()) : ?>

                                    <?php while ($team_query->have_posts()) : $team_query->the_post();
                                        $team_meta = get_post_meta(get_the_ID(), 'ndisblty_team_meta', true);
                                        $team_designation = $team_meta['team_designation'];
                                        $team_social_twitter_url = $team_meta['team_social_twitter_url'];
                                        $team_social_facebook_url = $team_meta['team_social_facebook_url'];
                                        $team_social_instagram_url = $team_meta['team_social_instagram_url'];
                                        $team_social_linkedin_url = $team_meta['team_social_linkedin_url'];

                                    ?>
                                        <div class="swiper-slide">
                                            <div class="it-team-item text-center">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="it-team-thumb mb-25">
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="it-team-content">
                                                    <h4 class="it-team-title"><a class="border-line-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h4>
                                                    <span><?php echo esc_html($team_designation, OD); ?></span>
                                                </div>
                                                <div class="it-team-social">

                                                    <a href="<?php echo esc_url($team_social_facebook_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="<?php echo esc_url($team_social_instagram_url, 'ordainit-toolkit'); ?>""><i class=" fa-brands fa-instagram"></i></a>
                                                    <a href="<?php echo esc_url($team_social_linkedin_url, 'ordainit-toolkit'); ?>""><i class=" fa-brands fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                <?php
                                else :
                                    echo '<p>No team members found.</p>';
                                endif;

                                // Restore original Post Data
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-area-end -->
<?php endif; ?>


<?php get_footer();
