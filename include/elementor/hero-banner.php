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
class OD_Hero_Banner extends Widget_Base
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
        return 'od-hero-banner';
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
        return __('Hero Banner', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/hero-banner.php');
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
        $od_hero_banner_title = $settings['od_hero_banner_title'];
        $od_hero_banner_description = $settings['od_hero_banner_description'];
        $od_hero_banner_btn_switcher = $settings['od_hero_banner_btn_switcher'];
        $od_hero_banner_btn_url = $settings['od_hero_banner_btn_url'];
        $od_hero_banner_btn_text = $settings['od_hero_banner_btn_text'];
        $od_hero_banner_right_number = $settings['od_hero_banner_right_number'];
        $od_hero_banner_right_description = $settings['od_hero_banner_right_description'];
        $od_hero_banner_thumbnail_image = $settings['od_hero_banner_thumbnail_image'];
        $od_hero_banner_thumbnail_image_2 = $settings['od_hero_banner_thumbnail_image_2'];
        $od_hero_banner_thumbnail_image_3 = $settings['od_hero_banner_thumbnail_image_3'];
        $od_hero_banner_shape_image_1 = $settings['od_hero_banner_shape_image_1'];
        $od_hero_banner_shape_image_2 = $settings['od_hero_banner_shape_image_2'];
        $od_hero_banner_bg_img = $settings['od_hero_banner_bg_img'];
        $od_hero_banner_icon = $settings['od_hero_banner_icon'];
        $animation_color = isset($settings['od_hero_banner_icon_animation_color']) ? $settings['od_hero_banner_icon_animation_color'] : 'rgba(220, 28, 28, 0.2)';
?>


        <?php if ($settings['od_design_style']  == 'layout-3'): ?>

            <div class="it-hero-3-area p-relative it-hero-3-bg"
                style="background-image: url('<?php echo esc_url($od_hero_banner_bg_img['url'], OD); ?>');, 
                        --animation-color: <?php echo esc_attr($animation_color); ?>;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="it-hero-3-content">
                                <h4 class="it-hero-3-title wow itfadeUp"
                                    data-wow-duration=".9s"
                                    data-wow-delay=".3s">
                                    <?php echo od_kses($od_hero_banner_title, OD); ?>
                                </h4>
                                <?php if (!empty($od_hero_banner_description)): ?>
                                    <div
                                        class="it-hero-3-text pb-15 wow itfadeUp"
                                        data-wow-duration=".9s"
                                        data-wow-delay=".5s">
                                        <p><?php echo od_kses($od_hero_banner_description, OD); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($od_hero_banner_btn_switcher)): ?>
                                    <div
                                        class="it-hero-3-btn wow itfadeUp"
                                        data-wow-duration=".9s"
                                        data-wow-delay=".7s">
                                        <a
                                            class="it-btn-red hover-2"
                                            href="<?php echo esc_url($od_hero_banner_btn_url['url'], OD); ?>">
                                            <?php echo esc_html($od_hero_banner_btn_text, OD); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="it-hero-3-thumb">
                    <img
                        class="wow img-anim-left"
                        data-wow-duration="1.5s"
                        data-wow-delay="0.1s"
                        src="<?php echo esc_url($od_hero_banner_thumbnail_image['url'], OD); ?>"
                        alt="<?php echo esc_html__('hero-img', OD); ?>" />
                    <span class="it-hero-3-thumb-icon ripple-red">
                        <?php echo od_kses($od_hero_banner_icon, OD);  ?>
                    </span>
                </div>
            </div>

            <style>
                @-webkit-keyframes ripple-red {
                    0% {
                        -webkit-box-shadow: 0 0 0 0 var(--animation-color), 0 0 0 10px var(--animation-color), 0 0 0 20px var(--animation-color);
                        box-shadow: 0 0 0 0 var(--animation-color), 0 0 0 10px var(--animation-color), 0 0 0 20px var(--animation-color)
                    }

                    100% {
                        -webkit-box-shadow: 0 0 0 10px var(--animation-color), 0 0 0 20px var(--animation-color), 0 0 0 30px rgba(220, 28, 28, 0.0);
                        box-shadow: 0 0 0 10px var(--animation-color), 0 0 0 20px var(--animation-color), 0 0 0 30px rgba(220, 28, 28, 0.0)
                    }
                }
            </style>

        <?php elseif ($settings['od_design_style']  == 'layout-2'): ?>

            <div class="it-hero-2-area it-hero-2-ptb theme-bg z-index-1 p-relative">
                <img
                    class="it-hero-2-shape-2"
                    src="<?php echo esc_url($od_hero_banner_shape_image_1['url'], OD); ?>"
                    alt="<?php echo esc_html__('shape-img', OD); ?>">
                <span class="it-hero-2-red-bg"></span>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="it-hero-2-content">
                                <h3 class="it-hero-2-title mb-10 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay=".3s">
                                    <?php echo od_kses($od_hero_banner_title, OD); ?>
                                </h3>
                                <?php if (!empty($od_hero_banner_description)): ?>
                                    <p class="mb-35 wow itfadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".5s">
                                        <?php echo od_kses($od_hero_banner_description, OD); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($od_hero_banner_btn_switcher)): ?>
                                    <div class="wow itfadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".4s">
                                        <a
                                            class="it-btn-red"
                                            href="<?php echo esc_url($od_hero_banner_btn_url['url'], OD); ?>">
                                            <?php echo esc_html($od_hero_banner_btn_text, OD); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="it-hero-2-thumb-wrap p-relative">
                                <img
                                    class="it-hero-2-shape-1"
                                    src="<?php echo esc_url($od_hero_banner_shape_image_2['url'], OD); ?>"
                                    alt="<?php echo esc_html__('shape-img', OD); ?>" />
                                <div class="row gx-25">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="it-hero-2-thumb-left">
                                            <div class="it-hero-2-thumb thumb-style-1">
                                                <img
                                                    class="wow img-anim-top"
                                                    data-wow-duration="1.5s"
                                                    data-wow-delay="0.1s"
                                                    src="<?php echo esc_url($od_hero_banner_thumbnail_image['url'], OD); ?>"
                                                    alt="<?php echo esc_html__('hero-img', OD); ?>">
                                            </div>
                                            <div class="it-hero-2-experience d-none d-sm-inline-flex align-items-center">
                                                <i><?php echo esc_html($od_hero_banner_right_number, OD); ?></i>
                                                <span><?php echo od_kses($od_hero_banner_right_description, OD); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="it-hero-2-thumb-right">
                                            <div class="it-hero-2-thumb thumb-style-2">
                                                <img
                                                    class="wow img-anim-right"
                                                    data-wow-duration="1.5s"
                                                    data-wow-delay="0.1s"
                                                    src="<?php echo esc_url($od_hero_banner_thumbnail_image_2['url'], OD); ?>"
                                                    alt="<?php echo esc_html__('hero-img', OD); ?>">
                                            </div>
                                            <div class="it-hero-2-thumb thumb-style-3">
                                                <img
                                                    class="wow img-anim-left"
                                                    data-wow-duration="1.5s"
                                                    data-wow-delay="0.1s"
                                                    src="<?php echo esc_url($od_hero_banner_thumbnail_image_3['url'], OD); ?>"
                                                    alt="<?php echo esc_html__('hero-img', OD); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php else: ?>

            <div class="it-hero-area it-hero-ptb theme-bg z-index-1 p-relative">
                <span class="it-hero-red-bg"></span>
                <div class="it-hero-shape">
                    <img
                        src="<?php echo esc_url($od_hero_banner_shape_image_1['url'], OD); ?>"
                        alt="<?php echo esc_html__('shape-img', OD); ?>" />
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-7">
                            <div class="it-hero-content">
                                <h3 class="it-hero-title mb-20 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay=".3s">
                                    <?php echo od_kses($od_hero_banner_title, OD); ?>
                                </h3>

                                <?php if (!empty($od_hero_banner_description)): ?>
                                    <p class="wow itfadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".5s">
                                        <?php echo od_kses($od_hero_banner_description, OD); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($od_hero_banner_btn_switcher)): ?>
                                    <div class="wow itfadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".7s">
                                        <a
                                            class="it-btn-red"
                                            href="<?php echo esc_url($od_hero_banner_btn_url['url'], OD); ?>">
                                            <?php echo esc_html($od_hero_banner_btn_text, OD); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="it-hero-thumb">
                                <img
                                    class="wow img-anim-left"
                                    data-wow-duration="1.5s"
                                    data-wow-delay="0.1s"
                                    src="<?php echo esc_url($od_hero_banner_thumbnail_image['url'], OD); ?>"
                                    alt="<?php echo esc_html__('hero-img', OD); ?>">
                            </div>
                        </div>
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

$widgets_manager->register(new OD_Hero_Banner());
