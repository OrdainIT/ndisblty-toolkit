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
class OD_Testimonial_Slider extends Widget_Base
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
        return 'od-testimonial-slider';
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
        return __('Testimonial Slider', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/testimonial-slider.php');
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
        $od_testimonial_slider_lists = $settings['od_testimonial_slider_lists'];
        $od_testimonial_slider_autoplay = $settings['od_testimonial_slider_autoplay'];
        $od_testimonial_slider_autoplay_delay = $settings['od_testimonial_slider_autoplay_delay'];
        $od_testimonial_slider_star_switcher = $settings['od_testimonial_slider_star_switcher'];
        $od_testimonial_slider_quote_switcher = $settings['od_testimonial_slider_quote_switcher'];
        $od_testimonial_slider_pagination_switcher = $settings['od_testimonial_slider_pagination_switcher'];
        $od_testimonial_slider_navigation_switcher = $settings['od_testimonial_slider_navigation_switcher'];
        $od_testimonial_slider_thumbnail_image = $settings['od_testimonial_slider_thumbnail_image'];
?>


        <?php if ($settings['od_design_style']  == 'layout-4'): ?>

            <div class="it-testimonial-4-wrap p-relative">
                <div class="swiper-container it-testimonial-4-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($od_testimonial_slider_lists as $od_testimonial_slider_list): ?>
                            <div class="swiper-slide">
                                <div class="it-testimonial-4-item p-relative">
                                    <?php if (!empty($od_testimonial_slider_quote_switcher)): ?>
                                        <div class="it-testimonial-4-quote">
                                            <span>
                                                <i class="fa-solid fa-quote-right"></i>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="it-testimonial-4-author-wrap d-flex align-items-center pb-25">
                                        <div class="it-testimonial-4-author-thumb mr-15">
                                            <img
                                                src="<?php echo esc_url($od_testimonial_slider_list['od_testimonial_slider_list_avatar']['url'], OD); ?>"
                                                alt="<?php echo esc_attr($od_testimonial_slider_list['od_testimonial_slider_list_author'] ?? ''); ?>" />
                                        </div>
                                        <div class="it-testimonial-4-author-info">
                                            <h5><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_author'], OD); ?></h5>
                                            <span><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_designation'], OD); ?></span>
                                        </div>
                                    </div>
                                    <div class="it-testimonial-4-text">
                                        <p><?php echo od_kses($od_testimonial_slider_list['od_testimonial_slider_list_description'], OD); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php if (!empty($od_testimonial_slider_navigation_switcher)): ?>
                    <div class="it-testimonial-4-arrow-box d-none d-xxl-block">
                        <button class="slider-prev mr-25">
                            <span>
                                <i class="fa-regular fa-angle-left"></i>
                            </span>
                        </button>
                        <button class="slider-next active">
                            <span>
                                <i class="fa-regular fa-angle-right"></i>
                            </span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

        <?php elseif ($settings['od_design_style']  == 'layout-3'): ?>

            <div class="it-testimonial-3-wrap p-relative">
                <div class="swiper-container it-testimonial-3-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($od_testimonial_slider_lists as $od_testimonial_slider_list): ?>
                            <div class="swiper-slide">
                                <div class="it-testimonial-3-item">
                                    <div class="it-testimonial-text pb-20">
                                        <p><?php echo od_kses($od_testimonial_slider_list['od_testimonial_slider_list_description'], OD); ?></p>
                                    </div>
                                    <div class="it-testimonial-author-wrap d-flex align-items-center">
                                        <div class="it-testimonial-author-thumb mr-15">
                                            <img
                                                src="<?php echo esc_url($od_testimonial_slider_list['od_testimonial_slider_list_avatar']['url'], OD); ?>"
                                                alt="<?php echo esc_attr($od_testimonial_slider_list['od_testimonial_slider_list_author'] ?? ''); ?>" />
                                        </div>
                                        <div class="it-testimonial-author-info">
                                            <h5><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_author'], OD); ?></h5>
                                            <span><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_designation'], OD); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php if (!empty($od_testimonial_slider_pagination_switcher)): ?>
                    <div class="it-testimonial-3-dots"></div>
                <?php endif; ?>
            </div>

        <?php elseif ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="testimonial-2">
                <div class="it-testimonial-2-right">

                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="it-testimonial-2-thumb">
                                <img
                                    src="<?php echo esc_url($od_testimonial_slider_thumbnail_image['url'], OD); ?>"
                                    alt="<?php echo esc_attr__('testimonial-img', OD); ?>">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-7">
                            <div class="it-testimonial-2-item-box">
                                <div class="swiper-container it-testimonial-2-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-88f94764c0825231" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1335px, 0px, 0px);">
                                        <?php foreach ($od_testimonial_slider_lists as $od_testimonial_slider_list):
                                            $testimonial_rating_star = $od_testimonial_slider_list['od_testimonial_slider_list_rating'];
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="it-testimonial-2-item">
                                                    <div class="it-testimonial-content">
                                                        <div class="it-testimonial-ratting-wrap mb-30 ">
                                                            <?php if (!empty($od_testimonial_slider_star_switcher)): ?>
                                                                <div class="it-testimonial-ratting">
                                                                    <?php
                                                                    $rating = intval($testimonial_rating_star);
                                                                    for ($i = 1; $i <= $rating; $i++) : ?>
                                                                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.5436 5.34725L9.25909 4.99983L7.26891 0L5.27874 4.99983L0 5.34725L4.04875 8.78506L2.72017 14L7.26891 11.1248L11.8177 14L10.4891 8.78506L14.5436 5.34725Z" fill="#FF9F46"></path>
                                                                        </svg>
                                                                    <?php endfor; ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="it-testimonial-text pb-10">
                                                            <p> <?php echo od_kses($od_testimonial_slider_list['od_testimonial_slider_list_description'], OD); ?></p>
                                                        </div>
                                                        <div class="it-testimonial-author-info d-flex justify-content-between">
                                                            <div>
                                                                <h5><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_author'], OD); ?></h5>
                                                                <span><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_designation'], OD); ?></span>
                                                            </div>
                                                            <?php if (!empty($od_testimonial_slider_quote_switcher)): ?>
                                                                <span class="quote-icon">
                                                                    <svg width="47" height="35" viewBox="0 0 47 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M0 0V35L17.5 17.5V0H0Z" fill="#011D4E"></path>
                                                                        <path d="M29.167 0V35L46.667 17.5V0H29.167Z" fill="#011D4E"></path>
                                                                    </svg>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        <?php else: ?>

            <div class="it-testimonial-wrap">
                <div class="swiper-container it-testimonial-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($od_testimonial_slider_lists as $od_testimonial_slider_list):
                            $testimonial_rating_star = $od_testimonial_slider_list['od_testimonial_slider_list_rating'];
                        ?>
                            <div class="swiper-slide">
                                <div
                                    class="it-testimonial-item d-flex align-items-center">
                                    <div class="it-testimonial-author mr-40">
                                        <img
                                            src="<?php echo esc_url($od_testimonial_slider_list['od_testimonial_slider_list_avatar']['url'], OD); ?>"
                                            alt="<?php echo esc_attr($od_testimonial_slider_list['od_testimonial_slider_list_author'] ?? ''); ?>" />
                                    </div>
                                    <div class="it-testimonial-content">
                                        <div
                                            class="it-testimonial-ratting-wrap mb-30 d-flex justify-content-between">
                                            <?php if (!empty($od_testimonial_slider_quote_switcher)): ?>
                                                <span class="quote-icon">
                                                    <svg
                                                        width="47"
                                                        height="35"
                                                        viewBox="0 0 47 35"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 0V35L17.5 17.5V0H0Z" fill="white" />
                                                        <path
                                                            d="M29.1665 0V35L46.6665 17.5V0H29.1665Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            <?php endif; ?>

                                            <?php if (!empty($od_testimonial_slider_star_switcher)): ?>
                                                <div class="it-testimonial-ratting">
                                                    <?php
                                                    $rating = intval($testimonial_rating_star);
                                                    for ($i = 1; $i <= $rating; $i++) : ?>
                                                        <svg
                                                            width="21"
                                                            height="20"
                                                            viewBox="0 0 21 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20.6317 8.26783L16.0622 12.7222L17.1413 19.0136C17.1882 19.2887 17.0753 19.5667 16.8493 19.731C16.7217 19.8242 16.5698 19.8711 16.418 19.8711C16.3013 19.8711 16.1839 19.8433 16.0768 19.7868L10.4267 16.8164L4.77722 19.786C4.53073 19.9166 4.23069 19.8954 4.00474 19.7303C3.7788 19.566 3.66582 19.2879 3.71277 19.0128L4.7919 12.7215L0.221581 8.26783C0.0220428 8.07269 -0.0505834 7.78072 0.0359811 7.51589C0.122546 7.25106 0.352162 7.05666 0.628728 7.01631L6.94427 6.09931L9.76862 0.375785C10.0158 -0.125262 10.8375 -0.125262 11.0847 0.375785L13.909 6.09931L20.2246 7.01631C20.5012 7.05666 20.7308 7.25033 20.8173 7.51589C20.9039 7.78145 20.8313 8.07196 20.6317 8.26783Z"
                                                                fill="white" />
                                                        </svg>
                                                    <?php endfor; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="it-testimonial-text pb-10">
                                            <p>
                                                <?php echo od_kses($od_testimonial_slider_list['od_testimonial_slider_list_description'], OD); ?>
                                            </p>
                                        </div>
                                        <div class="it-testimonial-author-info">
                                            <h5><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_author'], OD); ?></h5>
                                            <span><?php echo esc_html($od_testimonial_slider_list['od_testimonial_slider_list_designation'], OD); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php if (!empty($od_testimonial_slider_pagination_switcher)): ?>
                    <div class="it-testimonial-dots text-center mt-55"></div>
                <?php endif; ?>
            </div>

        <?php endif; ?>


        <script>
            jQuery(document).ready(function($) {

                const testimonialSliderAutoplay = <?php echo $od_testimonial_slider_autoplay ? 'true' : 'false'; ?>;
                const testimonialSliderAutoplay2 = <?php echo $od_testimonial_slider_autoplay ? 'true' : 'false'; ?>;
                const testimonialSliderAutoplay3 = <?php echo $od_testimonial_slider_autoplay ? 'true' : 'false'; ?>;
                const testimonialSliderAutoplay4 = <?php echo $od_testimonial_slider_autoplay ? 'true' : 'false'; ?>;
                const testimonialAutoplayDelay = <?php echo $od_testimonial_slider_autoplay_delay; ?>;

                const testimonialSwiper = new Swiper('.it-testimonial-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    slidesPerView: 3,
                    spaceBetween: 35,
                    autoplay: testimonialSliderAutoplay ? {
                        delay: testimonialAutoplayDelay
                    } : false,
                    breakpoints: {
                        '1400': {
                            slidesPerView: 3,
                        },
                        '1200': {
                            slidesPerView: 3,
                        },
                        '992': {
                            slidesPerView: 1,
                        },
                        '768': {
                            slidesPerView: 1,
                        },
                        '576': {
                            slidesPerView: 1,
                        },
                        '0': {
                            slidesPerView: 1,
                        },
                    },
                    pagination: {
                        el: ".it-testimonial-dots",
                        clickable: true,
                    },
                });


                const testimonial2swiper = new Swiper('.it-testimonial-2-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 35,
                    autoplay: testimonialSliderAutoplay2 ? {
                        delay: testimonialAutoplayDelay
                    } : false,
                    breakpoints: {
                        '1400': {
                            slidesPerView: 1,
                        },
                        '1200': {
                            slidesPerView: 1,
                        },
                        '992': {
                            slidesPerView: 1,
                        },
                        '768': {
                            slidesPerView: 1,
                        },
                        '576': {
                            slidesPerView: 1,
                        },
                        '0': {
                            slidesPerView: 1,
                        },
                    },

                });

                const testimonial3swiper = new Swiper('.it-testimonial-3-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 35,
                    autoplay: testimonialSliderAutoplay3 ? {
                        delay: testimonialAutoplayDelay
                    } : false,
                    breakpoints: {
                        '1400': {
                            slidesPerView: 1,
                        },
                        '1200': {
                            slidesPerView: 1,
                        },
                        '992': {
                            slidesPerView: 1,
                        },
                        '768': {
                            slidesPerView: 1,
                        },
                        '576': {
                            slidesPerView: 1,
                        },
                        '0': {
                            slidesPerView: 1,
                        },
                    },
                    pagination: {
                        el: ".it-testimonial-3-dots",
                        clickable: true,
                    },

                });


                const testimonial4swiper = new Swiper('.it-testimonial-4-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    slidesPerView: 2,
                    spaceBetween: 35,
                    autoplay: testimonialSliderAutoplay4 ? {
                        delay: testimonialAutoplayDelay
                    } : false,
                    breakpoints: {
                        '1400': {
                            slidesPerView: 2,
                        },
                        '1200': {
                            slidesPerView: 2,
                        },
                        '992': {
                            slidesPerView: 2,
                        },
                        '768': {
                            slidesPerView: 1,
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

$widgets_manager->register(new OD_Testimonial_Slider());
