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
class OD_Text_Slider extends Widget_Base
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
        return 'od-text-slider';
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
        return __('Text Slider', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/text-slider.php');
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
        $od_text_slider_lists = $settings['od_text_slider_lists'];
        $speed = isset($settings['od_text_slider_speed']) ? $settings['od_text_slider_speed'] : '15';

?>



        <div class="it-text-slider-area it-text-slider-ptb red-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 it-fade-anim">
                        <div class="it-text-slider-wrapper" style="--speed: <?php echo esc_attr($speed); ?>s;">
                            <div class="it-text-slider">
                                <?php foreach ($od_text_slider_lists as $od_text_slider_list): ?>
                                    <div class="it-text-slider-item">
                                        <span><?php echo esc_html($od_text_slider_list['od_text_slider_list_text'], OD); ?></span>
                                        <img
                                            src="<?php echo esc_url($od_text_slider_list['od_text_slider_list_image']['url'], OD); ?>"
                                            alt="<?php echo esc_html__('hero-img', OD); ?>" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
            .it-text-slider-wrapper {
                overflow: hidden;
                white-space: nowrap;
            }

            .it-text-slider {
                display: inline-flex;
                animation: marquee var(--speed, 15s) linear infinite;
            }

            .it-text-slider-item {
                display: flex;
                align-items: center;
            }

            .it-text-slider-item span {
                margin-left: 45px;
            }

            .it-text-slider-item img {
                margin-left: 45px;
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

$widgets_manager->register(new OD_Text_Slider());
