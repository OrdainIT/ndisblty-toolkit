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
class Od_About extends Widget_Base
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
        return 'od-about';
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
        return __('About', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/about.php');
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

        $od_about_section_title = $settings['od_about_section_title'];
        $od_about_section_description = $settings['od_about_section_description'];
        $od_about_section_info_lists = $settings['od_about_section_info_lists'];
        $od_about_section_thumbnail_image1 = $settings['od_about_section_thumbnail_image1'];
        $od_about_section_thumbnail_image2 = $settings['od_about_section_thumbnail_image2'];
        $od_about_section_thumbnail_shape = $settings['od_about_section_thumbnail_shape'];

?>


        <!-- about-area-start -->
        <div class="it-about-2-area pt-120 pb-120">
            <div class="container container-1750">
                <div class="row align-items-end">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 order-1 order-xl-1">
                        <div class="it-about-2-left p-relative">
                            <div class="it-about-2-left-shape text-center">
                                <img src="<?php echo esc_url($od_about_section_thumbnail_shape['url'], OD);?>" alt="">
                            </div>
                            <div class="it-about-2-left-thumb wow img-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                <img class="w-100" src="<?php echo esc_url($od_about_section_thumbnail_image1['url'], OD);?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 order-0 order-xl-1 wow itfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="it-about-2-middle">
                            <div class="it-about-2-content">
                                <h3 class="it-section-title-grotesk mb-20">
                                    <?php echo od_kses($od_about_section_title, OD); ?>
                                </h3>
                                <p>
                                    <?php echo od_kses($od_about_section_description, OD); ?>
                                </p>
                            </div>
                            <div class="row">
                                <?php foreach ($od_about_section_info_lists as $item) :
                                    $info_img = $item['about_info_img'];
                                     ?>
                                <div class="col-xl-6 col-lg-5 col-md-6 col-sm-6">
                                    <div class="it-about-2-more-info">
                                        <?php if(!empty($info_img['url'])): ?>
                                        <span class="it-about-2-more-icon">
                                            <img src="<?php echo esc_url($info_img['url'], OD);?>" alt="">
                                           
                                        </span>
                                        <?php endif; ?>
                                        <h4 class="it-about-2-more-title"><?php echo od_kses($item['about_info_title']);?></h4>
                                        <p><?php echo od_kses($item['about_info_content']);?></p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-lg-6 col-md-6 order-1 order-xl-1">
                        <div class="it-about-2-right-thumb wow img-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <img src="<?php echo esc_url($od_about_section_thumbnail_image2['url'], OD);?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area-end -->





        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_About());
