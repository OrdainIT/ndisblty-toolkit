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
class Od_service extends Widget_Base
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
        return 'od-service';
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
        return __('Services', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/service.php');
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

        $od_service_section_service_btn = $settings['od_service_section_service_btn'];



        $od_service_section_service_post_per_page = $settings['od_service_section_service_post_per_page'];
        $od_category_select = $settings['od_category_select'];
        $od_service_post_orderby = $settings['od_service_post_orderby'];



        // Post Query

        // Check if category is selected
        if (!empty($od_category_select)) {
            // If categories are selected, add tax_query
            $args = array(
                'post_type'      => 'service', // Fetch service posts
                'posts_per_page' => $od_service_section_service_post_per_page, // Number of posts to display
                'order'          => $od_service_post_orderby, // Order of posts
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'service-cat', // Taxonomy to filter by
                        'field'    => 'term_id',  // Field type ('term_id', 'slug', or 'name')
                        'terms'    => $od_category_select, // Selected category IDs (single or multiple)
                        'operator' => 'IN', // Show posts matching any of the selected categories
                    ),
                ),
            );
        } else {
            // If no category is selected, show all posts
            $args = array(
                'post_type'      => 'service', // Fetch service posts
                'posts_per_page' => $od_service_section_service_post_per_page, // Number of posts to display
                'order'          => $od_service_post_orderby, // Order of posts
            );
        }


        $service_query = new \WP_Query($args);
?>

        <?php if ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="service_widget_2">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = -1;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';

                        ?>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-service-2-item zoom mb-30">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-service-2-thumb img-zoom">
                                                <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="it-service-content p-relative mb-50">
                                            <?php if (!empty($service_thumbnail_image)): ?>
                                                <span class="it-service-2-icon">
                                                    <img src="<?php echo esc_url($service_thumbnail_image, OD); ?>" alt="<?php the_title(); ?>">
                                                </span>
                                            <?php endif; ?>
                                            <h4 class="it-service-title"><a class="border-line-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>
                                            <a class="it-btn-sm" href="<?php the_permalink(); ?>"><?php echo esc_html($od_service_section_service_btn, 'ordainit-toolkit'); ?></a>
                                        </div>
                                    </div>
                                </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>

        <?php elseif ($settings['od_design_style']  == 'layout-3'): ?>
            <div class="service_wdiget_3">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = 0;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';

                        ?>
                                <div class="col-12">
                                    <div class="it-service-3-item-wrap it-reveal-item">
                                        <a href="<?php the_permalink();?>">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="it-service-3-left">
                                                        <h4 class="it-service-3-title"><span>0<?php echo esc_html($i, OD); ?>/</span><?php the_title(); ?></h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="it-service-3-right d-flex justify-content-between align-items-center">
                                                        <div class="it-service-3-text">
                                                            <p><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>
                                                        </div>
                                                        <span class="it-service-3-arrow">
                                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M41.6812 14.2001L5.88138 50L0 44.1186L35.7957 8.31878H4.24674V0H50V45.7533H41.6812V14.2001Z"
                                                                    fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="it-reveal-bg" style="background-image: url(<?php echo esc_url($service_thumbnail_image, OD); ?>);"></div>
                                    </div>
                                </div>


                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>
        <?php elseif ($settings['od_design_style']  == 'layout-4'): ?>

        <?php else: ?>


            <div class="service_widget_1">
                <div class="container">

                    <div class="row">
                        <?php
                        $i = -1;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';

                        ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-service-item mb-30">
                                        <div class="it-service-content mb-50">
                                            <h4 class="it-service-title"><a class="border-line-white-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                                            <a class="it-btn-sm" href="<?php the_permalink(); ?>"><?php echo esc_html($od_service_section_service_btn, 'ordainit-toolkit'); ?></a>
                                        </div>
                                        <?php if (!empty($service_thumbnail_image)): ?>
                                            <div class="it-service-thumb" data-mask-src="<?php echo ORDAINIT_TOOLKIT_ADDONS_URL . '/assets/img/shap/service-bg.png'; ?>">
                                                <img src="<?php echo esc_url($service_thumbnail_image, OD); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
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

$widgets_manager->register(new Od_service());
