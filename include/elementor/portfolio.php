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
class Od_Portfolio extends Widget_Base
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
        return 'od-portfolio';
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
        return __('Portfolio', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/portfolio.php');
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
        $od_portfolio_content_title = $settings['od_portfolio_content_title'];
        $od_portfolio_content_subtitle = $settings['od_portfolio_content_subtitle'];
        $od_portfolio_content_image = $settings['od_portfolio_content_image'];
        $od_portfolio_content_url = $settings['od_portfolio_content_url'];
        $od_portfolio_content_duration = $settings['od_portfolio_content_duration'];
        $od_portfolio_content_delay = $settings['od_portfolio_content_delay'];
?>


        <div class=" wow img-anim-top" data-wow-duration="<?php echo esc_attr($od_portfolio_content_duration, OD); ?>s" data-wow-delay="<?php echo esc_attr($od_portfolio_content_delay, OD); ?>s">
            <div class="it-portfolio-item zoom">
                <div class="it-portfolio-thumb img-zoom">
                    <img class="w-100" src="<?php echo esc_url($od_portfolio_content_image['url'], OD); ?>" alt="">
                </div>
                <div class="it-portfolio-content d-flex justify-content-between">
                    <div>
                        <h4 class="it-portfolio-title"><a class="border-line-black" href="<?php echo esc_url($od_portfolio_content_url['url'], OD); ?>"><?php echo esc_html($od_portfolio_content_title, OD); ?></a></h4>
                        <span><?php echo esc_html($od_portfolio_content_subtitle, OD); ?></span>
                    </div>
                    <div class="it-portfolio-arrow">
                        <a href="<?php echo esc_url($od_portfolio_content_url['url'], OD); ?>">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.33333 1.14575L13 5.81242M13 5.81242L8.33333 10.4791M13 5.81242L1 5.81242"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>





        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_Portfolio());
