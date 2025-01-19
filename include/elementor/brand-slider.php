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
class OD_Brand_Slider extends Widget_Base
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
        return 'od-brand-slider';
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
        return __('Brand Slider', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/brand-slider.php');
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
        $od_brand_slider_lists = $settings['od_brand_slider_lists'];
        $speed = isset($settings['od_brand_slider_speed']) ? $settings['od_brand_slider_speed'] : '15';
?>


        <div class="it-brand-item-wrap" style="--speed: <?php echo esc_attr($speed); ?>s;">
            <div class="it-brand-slider slider-transtion d-flex align-items-center">
                <?php foreach ($od_brand_slider_lists as $od_brand_slider_list): ?>
                    <div class="it-brand-item text-center">
                        <img
                            src="<?php echo esc_url($od_brand_slider_list['od_brand_slider_list_image']['url'], OD); ?>"
                            alt="<?php echo esc_html__('brand-img', OD); ?>">
                    </div>
                <?php endforeach; ?>
                <?php foreach ($od_brand_slider_lists as $od_brand_slider_list):
                ?>
                    <div class="it-brand-item text-center">
                        <img
                            src="<?php echo esc_url($od_brand_slider_list['od_brand_slider_list_image']['url'], OD); ?>"
                            alt="<?php echo esc_html__('brand-img', OD); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <style>
            .it-brand-item-wrap {
                overflow: hidden;
                white-space: nowrap;
                position: relative;
            }

            .it-brand-slider {
                display: flex;
                animation: marquee var(--speed, 15s) linear infinite;
                width: max-content;

            }

            .it-brand-item {
                display: flex;
                align-items: center;
                margin: 0 50px;
            }

            .it-brand-item img {
                height: 100%;
                object-fit: contain;

            }

            @keyframes marquee {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }
        </style>

        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Brand_Slider());
