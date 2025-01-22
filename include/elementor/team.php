<?php

namespace ordainit_toolkit\Widgets;

use Elementor\Widget_Base;

if (! defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * Tp Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Od_team extends Widget_Base
{

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'od-team';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return __('Team', 'ordainit-toolkit');
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'od-icon';
    }

    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['ordainit-toolkit'];
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends()
    {
        return ['ordainit-toolkit'];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls()
    {
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/team.php');
    }

    /**
     * Render the widget ouodut on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $od_team_section_team_post_per_page = $settings['od_team_section_team_post_per_page'];
        $od_category_select = $settings['od_category_select'];
        $od_team_post_orderby = $settings['od_team_post_orderby'];

        // Post Query

        // Check if category is selected
        if (!empty($od_category_select)) {
            // If categories are selected, add tax_query
            $args = array(
                'post_type'      => 'team', // Fetch team posts
                'posts_per_page' => $od_team_section_team_post_per_page, // Number of posts to display
                'order'          => $od_team_post_orderby, // Order of posts
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'team-cat', // Taxonomy to filter by
                        'field'    => 'term_id',  // Field type ('term_id', 'slug', or 'name')
                        'terms'    => $od_category_select, // Selected category IDs (single or multiple)
                        'operator' => 'IN', // Show posts matching any of the selected categories
                    ),
                ),
            );
        } else {
            // If no category is selected, show all posts
            $args = array(
                'post_type'      => 'team', // Fetch team posts
                'posts_per_page' => $od_team_section_team_post_per_page, // Number of posts to display
                'order'          => $od_team_post_orderby, // Order of posts
            );
        }


        $team_query = new \WP_Query($args);
?>


        <?php if ($settings['od_design_style']  == 'layout-2'): ?>

            <div class="team_widget_2 it-team-innar-style ">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = -1;

                        if ($team_query->have_posts()) :
                            while ($team_query->have_posts()) : $team_query->the_post();

                                $i++;

                                $team_meta = get_post_meta(get_the_ID(), 'ndisblty_team_meta', true);
                                $team_designation = $team_meta['team_designation'];
                                $team_social_facebook_url = $team_meta['team_social_facebook_url'];
                                $team_social_twitter_url = $team_meta['team_social_twitter_url'];
                                $team_social_instagram_url = $team_meta['team_social_instagram_url'];


                        ?>

                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-team-item text-center">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-team-thumb mb-25">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="it-team-content">
                                            <h4 class="it-team-title"><a class="border-line-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <span><?php echo esc_html($team_designation, OD); ?></span>
                                        </div>
                                        <div class="it-team-social">
                                            <a href="<?php echo esc_url($team_social_facebook_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="<?php echo esc_url($team_social_twitter_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="<?php echo esc_url($team_social_instagram_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>

                </div>
            </div>




        <?php else: ?>

            <div class="team_widget_1">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = -1;

                        if ($team_query->have_posts()) :
                            while ($team_query->have_posts()) : $team_query->the_post();

                                $i++;

                                $team_meta = get_post_meta(get_the_ID(), 'ndisblty_team_meta', true);
                                $team_designation = $team_meta['team_designation'];
                                $team_social_facebook_url = $team_meta['team_social_facebook_url'];
                                $team_social_twitter_url = $team_meta['team_social_twitter_url'];
                                $team_social_instagram_url = $team_meta['team_social_instagram_url'];


                        ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow img-anim-top" data-wow-duration="1s" data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-team-2-item mb-30">
                                        <div class="it-team-2-thumb p-relative mb-20">
                                            <?php if (has_post_thumbnail()): ?>
                                                <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                            <div class="it-team-2-social">
                                                <a href="<?php echo esc_url($team_social_facebook_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="<?php echo esc_url($team_social_twitter_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="<?php echo esc_url($team_social_instagram_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="it-team-2-content">
                                            <h4 class="it-team-2-title"><a class="border-line-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <span><?php echo esc_html($team_designation, OD); ?></span>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>



        <?php endif; ?>





        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_team());
