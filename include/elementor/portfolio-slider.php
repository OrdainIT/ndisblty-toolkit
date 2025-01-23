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
class Od_Portfolio_Slider extends Widget_Base
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
        return 'portfolio-slider';
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
        return __('Portfolio Slider', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/portfolio-slider.php');
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
        $od_portfolio_slider_repeater = $settings['od_portfolio_slider_repeater'];

        $od_portfolio_slider_autoplay = $settings['od_portfolio_slider_autoplay'];
        $od_portfolio_slider_delay = $settings['od_portfolio_slider_delay'];
?>

        <div class="portfolio_slider_widget">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-portfolio-wrap">
                            <div class="swiper-container it-portfolio-active">
                                <div class="swiper-wrapper">
                                    <?php foreach ($od_portfolio_slider_repeater as $single_porfolio_item): ?>
                                        <div class="swiper-slide">
                                            <div class="it-portfolio-item zoom">
                                                <div class="it-portfolio-thumb img-zoom">
                                                    <img class="w-100" src="<?php echo esc_url($single_porfolio_item['portoflio_slider_image']['url']); ?>" alt="">
                                                </div>
                                                <div class="it-portfolio-content d-flex justify-content-between">
                                                    <div>
                                                        <h4 class="it-portfolio-title"><a class="border-line-black" href="portfolio-details.html"><?php echo esc_html($single_porfolio_item['portoflio_slider_title']); ?></a></h4>
                                                        <span><?php echo esc_html($single_porfolio_item['portoflio_slider_subtitle']); ?></span>
                                                    </div>
                                                    <div class="it-portfolio-arrow">
                                                        <a href="<?php echo esc_url($single_porfolio_item['portoflio_slider_url']); ?>">
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
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <script>
            jQuery(document).ready(function($) {

                const autoplay_slider = <?php echo $od_portfolio_slider_autoplay ? 'true' : 'false'; ?>;
                const autoplay_delay = <?php echo esc_attr($od_portfolio_slider_delay); ?>;

                ////////////////////////////////////////////////////
                //  Swiper Js
                const portfolioswiper = new Swiper('.it-portfolio-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    slidesPerView: 4,
                    spaceBetween: 35,
                    autoplay: autoplay_slider ? {
                        delay: parseInt(autoplay_delay),
                    } : false,
                    breakpoints: {
                        '1400': {
                            slidesPerView: 4,
                        },
                        '1200': {
                            slidesPerView: 3,
                        },
                        '992': {
                            slidesPerView: 2,
                        },
                        '768': {
                            slidesPerView: 2,
                        },
                        '576': {
                            slidesPerView: 1,
                        },
                        '0': {
                            slidesPerView: 1,
                        },
                    },
                    navigation: {
                        prevEl: '.slider-prev',
                        nextEl: '.slider-next',
                    },

                });


            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_Portfolio_Slider());
