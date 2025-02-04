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
class OD_Event_Slider extends Widget_Base
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
        return 'od-event-slider';
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
        return __('Event Slider', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/event-slider.php');
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
?>

        <div class="it-event-area">
            <div class="container">
                <div class="it-event-top-wrap mb-70">
                    <div class="row align-items-end">
                        <div class="col-xl-5 col-lg-6">
                            <div class="it-section-title-box">
                                <span class="it-section-subtitle">Featured Event</span>
                                <h4 class="it-section-title">part of our next exciting
                                    event Join now</h4>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="it-event-arrow-box text-lg-end">
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
                        <div class="it-event-wrap p-relative">
                            <div class="swiper-container it-event-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="it-event-item zoom">
                                            <div class="it-event-thumb img-zoom p-relative">
                                                <img class="w-100" src="assets/img/event/event-1-1.jpg" alt="">
                                                <div class="it-event-date">
                                                    <span>15 <br>
                                                        Jan,24</span>
                                                </div>
                                            </div>
                                            <div class="it-event-content">
                                                <div class="it-event-meta pb-10">
                                                    <span>
                                                        <svg width="18" height="20" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.5 11.7188C11.1154 11.7188 12.4297 10.4045 12.4297 8.78906C12.4297 7.17363 11.1154 5.85938 9.5 5.85938C7.88457 5.85938 6.57031 7.17363 6.57031 8.78906C6.57031 10.4045 7.88457 11.7188 9.5 11.7188ZM9.5 7.8125C10.0385 7.8125 10.4766 8.25059 10.4766 8.78906C10.4766 9.32754 10.0385 9.76562 9.5 9.76562C8.96152 9.76562 8.52344 9.32754 8.52344 8.78906C8.52344 8.25059 8.96152 7.8125 9.5 7.8125Z" fill="currentcolor"></path>
                                                            <path d="M18.2891 8.78906C18.2891 3.94277 14.3463 0 9.5 0C4.65371 0 0.710938 3.94277 0.710938 8.78906C0.710938 10.7063 1.31748 12.5284 2.46504 14.0583L7.15537 20.3116C7.7063 21.0459 8.58281 21.4844 9.5 21.4844C10.4172 21.4844 11.2937 21.0459 11.8447 20.3115L16.535 14.0583C17.6825 12.5284 18.2891 10.7063 18.2891 8.78906ZM14.9725 12.8863L10.2823 19.1395C10.0955 19.3885 9.81035 19.5312 9.5 19.5312C9.18965 19.5312 8.90454 19.3885 8.71777 19.1396L4.02749 12.8863C3.13555 11.6972 2.66406 10.2803 2.66406 8.78906C2.66406 5.01973 5.73066 1.95312 9.5 1.95312C13.2693 1.95312 16.3359 5.01973 16.3359 8.78906C16.3359 10.2803 15.8645 11.6972 14.9725 12.8863Z" fill="currentcolor"></path>
                                                            <path d="M14.3828 24.0234C14.3828 23.4841 13.9456 23.0469 13.4062 23.0469H5.59375C5.05439 23.0469 4.61719 23.4841 4.61719 24.0234C4.61719 24.5628 5.05439 25 5.59375 25H13.4062C13.9456 25 14.3828 24.5628 14.3828 24.0234Z" fill="currentcolor"></path>
                                                        </svg>
                                                        <a class="border-line-white" href="https://www.google.com/maps/@23.5412708,91.7791619,13z?entry=ttu" target="_blank">238, Arimantab, Moska - USA.</a>
                                                    </span>
                                                    <span>
                                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.2516 6.14761L16.0231 5.36346C16.3229 5.05875 16.3229 4.56467 16.0231 4.2601C15.7233 3.95538 15.2374 3.95538 14.9376 4.2601L14.1661 5.04425C12.8717 3.94806 11.2988 3.28583 9.62098 3.1308V1.56052H10.3631C10.787 1.56052 11.1307 1.21109 11.1307 0.780182C11.1307 0.349274 10.787 0 10.3631 0H7.34356C6.9196 0 6.57596 0.349274 6.57596 0.780182C6.57596 1.21109 6.9196 1.56052 7.34356 1.56052H8.08563V3.1308C3.88569 3.51898 0.537109 7.1051 0.537109 11.5474C0.537109 16.219 4.2565 20 8.85338 20C13.4495 20 17.1695 16.2196 17.1695 11.5474C17.1695 9.55185 16.4933 7.66205 15.2516 6.14761ZM8.85323 18.4395C5.11433 18.4395 2.07231 15.3477 2.07231 11.5474C2.07231 7.74719 5.11433 4.65546 8.85323 4.65546C12.5923 4.65546 15.6342 7.74719 15.6342 11.5474C15.6342 15.3477 12.5923 18.4395 8.85323 18.4395ZM12.4108 7.93167C12.7106 8.23639 12.7106 8.73047 12.4108 9.03503L9.39609 12.0992C9.09629 12.4039 8.61018 12.4039 8.31052 12.0992C8.01072 11.7944 8.01072 11.3004 8.31052 10.9958L11.3251 7.93167C11.6249 7.62695 12.111 7.62695 12.4108 7.93167Z" fill="#DC1D1C" />
                                                        </svg>
                                                        09:00AM - 12:00AM
                                                    </span>
                                                </div>
                                                <h4 class="it-event-title mb-25"><a class="border-line-black-2" href="about-us-v2.html">Global forum exploring energy
                                                        solutions for mining industry.</a></h4>
                                                <a class="it-btn-sm" href="contact.html">Get A Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="it-event-item zoom">
                                            <div class="it-event-thumb img-zoom p-relative">
                                                <img class="w-100" src="assets/img/event/event-1-2.jpg" alt="">
                                                <div class="it-event-date">
                                                    <span>24 <br>
                                                        May,24</span>
                                                </div>
                                            </div>
                                            <div class="it-event-content">
                                                <div class="it-event-meta pb-10">
                                                    <span>
                                                        <svg width="18" height="20" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.5 11.7188C11.1154 11.7188 12.4297 10.4045 12.4297 8.78906C12.4297 7.17363 11.1154 5.85938 9.5 5.85938C7.88457 5.85938 6.57031 7.17363 6.57031 8.78906C6.57031 10.4045 7.88457 11.7188 9.5 11.7188ZM9.5 7.8125C10.0385 7.8125 10.4766 8.25059 10.4766 8.78906C10.4766 9.32754 10.0385 9.76562 9.5 9.76562C8.96152 9.76562 8.52344 9.32754 8.52344 8.78906C8.52344 8.25059 8.96152 7.8125 9.5 7.8125Z" fill="currentcolor"></path>
                                                            <path d="M18.2891 8.78906C18.2891 3.94277 14.3463 0 9.5 0C4.65371 0 0.710938 3.94277 0.710938 8.78906C0.710938 10.7063 1.31748 12.5284 2.46504 14.0583L7.15537 20.3116C7.7063 21.0459 8.58281 21.4844 9.5 21.4844C10.4172 21.4844 11.2937 21.0459 11.8447 20.3115L16.535 14.0583C17.6825 12.5284 18.2891 10.7063 18.2891 8.78906ZM14.9725 12.8863L10.2823 19.1395C10.0955 19.3885 9.81035 19.5312 9.5 19.5312C9.18965 19.5312 8.90454 19.3885 8.71777 19.1396L4.02749 12.8863C3.13555 11.6972 2.66406 10.2803 2.66406 8.78906C2.66406 5.01973 5.73066 1.95312 9.5 1.95312C13.2693 1.95312 16.3359 5.01973 16.3359 8.78906C16.3359 10.2803 15.8645 11.6972 14.9725 12.8863Z" fill="currentcolor"></path>
                                                            <path d="M14.3828 24.0234C14.3828 23.4841 13.9456 23.0469 13.4062 23.0469H5.59375C5.05439 23.0469 4.61719 23.4841 4.61719 24.0234C4.61719 24.5628 5.05439 25 5.59375 25H13.4062C13.9456 25 14.3828 24.5628 14.3828 24.0234Z" fill="currentcolor"></path>
                                                        </svg>
                                                        <a class="border-line-white" href="https://www.google.com/maps/@23.5412708,91.7791619,13z?entry=ttu" target="_blank">238, Arimantab, Moska - USA.</a>
                                                    </span>
                                                    <span>
                                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.2516 6.14761L16.0231 5.36346C16.3229 5.05875 16.3229 4.56467 16.0231 4.2601C15.7233 3.95538 15.2374 3.95538 14.9376 4.2601L14.1661 5.04425C12.8717 3.94806 11.2988 3.28583 9.62098 3.1308V1.56052H10.3631C10.787 1.56052 11.1307 1.21109 11.1307 0.780182C11.1307 0.349274 10.787 0 10.3631 0H7.34356C6.9196 0 6.57596 0.349274 6.57596 0.780182C6.57596 1.21109 6.9196 1.56052 7.34356 1.56052H8.08563V3.1308C3.88569 3.51898 0.537109 7.1051 0.537109 11.5474C0.537109 16.219 4.2565 20 8.85338 20C13.4495 20 17.1695 16.2196 17.1695 11.5474C17.1695 9.55185 16.4933 7.66205 15.2516 6.14761ZM8.85323 18.4395C5.11433 18.4395 2.07231 15.3477 2.07231 11.5474C2.07231 7.74719 5.11433 4.65546 8.85323 4.65546C12.5923 4.65546 15.6342 7.74719 15.6342 11.5474C15.6342 15.3477 12.5923 18.4395 8.85323 18.4395ZM12.4108 7.93167C12.7106 8.23639 12.7106 8.73047 12.4108 9.03503L9.39609 12.0992C9.09629 12.4039 8.61018 12.4039 8.31052 12.0992C8.01072 11.7944 8.01072 11.3004 8.31052 10.9958L11.3251 7.93167C11.6249 7.62695 12.111 7.62695 12.4108 7.93167Z" fill="#DC1D1C" />
                                                        </svg>
                                                        09:00AM - 12:00AM
                                                    </span>
                                                </div>
                                                <h4 class="it-event-title mb-25"><a class="border-line-black-2" href="about-us-v2.html">Creating Vibrant Connections Through Events That Inspire</a></h4>
                                                <a class="it-btn-sm" href="contact.html">Get A Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="it-event-item zoom">
                                            <div class="it-event-thumb img-zoom p-relative">
                                                <img class="w-100" src="assets/img/event/event-1-3.jpg" alt="">
                                                <div class="it-event-date">
                                                    <span>06 <br>
                                                        August,24</span>
                                                </div>
                                            </div>
                                            <div class="it-event-content">
                                                <div class="it-event-meta pb-10">
                                                    <span>
                                                        <svg width="18" height="20" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.5 11.7188C11.1154 11.7188 12.4297 10.4045 12.4297 8.78906C12.4297 7.17363 11.1154 5.85938 9.5 5.85938C7.88457 5.85938 6.57031 7.17363 6.57031 8.78906C6.57031 10.4045 7.88457 11.7188 9.5 11.7188ZM9.5 7.8125C10.0385 7.8125 10.4766 8.25059 10.4766 8.78906C10.4766 9.32754 10.0385 9.76562 9.5 9.76562C8.96152 9.76562 8.52344 9.32754 8.52344 8.78906C8.52344 8.25059 8.96152 7.8125 9.5 7.8125Z" fill="currentcolor"></path>
                                                            <path d="M18.2891 8.78906C18.2891 3.94277 14.3463 0 9.5 0C4.65371 0 0.710938 3.94277 0.710938 8.78906C0.710938 10.7063 1.31748 12.5284 2.46504 14.0583L7.15537 20.3116C7.7063 21.0459 8.58281 21.4844 9.5 21.4844C10.4172 21.4844 11.2937 21.0459 11.8447 20.3115L16.535 14.0583C17.6825 12.5284 18.2891 10.7063 18.2891 8.78906ZM14.9725 12.8863L10.2823 19.1395C10.0955 19.3885 9.81035 19.5312 9.5 19.5312C9.18965 19.5312 8.90454 19.3885 8.71777 19.1396L4.02749 12.8863C3.13555 11.6972 2.66406 10.2803 2.66406 8.78906C2.66406 5.01973 5.73066 1.95312 9.5 1.95312C13.2693 1.95312 16.3359 5.01973 16.3359 8.78906C16.3359 10.2803 15.8645 11.6972 14.9725 12.8863Z" fill="currentcolor"></path>
                                                            <path d="M14.3828 24.0234C14.3828 23.4841 13.9456 23.0469 13.4062 23.0469H5.59375C5.05439 23.0469 4.61719 23.4841 4.61719 24.0234C4.61719 24.5628 5.05439 25 5.59375 25H13.4062C13.9456 25 14.3828 24.5628 14.3828 24.0234Z" fill="currentcolor"></path>
                                                        </svg>
                                                        <a class="border-line-white" href="https://www.google.com/maps/@23.5412708,91.7791619,13z?entry=ttu" target="_blank">238, Arimantab, Moska - USA.</a>
                                                    </span>
                                                    <span>
                                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.2516 6.14761L16.0231 5.36346C16.3229 5.05875 16.3229 4.56467 16.0231 4.2601C15.7233 3.95538 15.2374 3.95538 14.9376 4.2601L14.1661 5.04425C12.8717 3.94806 11.2988 3.28583 9.62098 3.1308V1.56052H10.3631C10.787 1.56052 11.1307 1.21109 11.1307 0.780182C11.1307 0.349274 10.787 0 10.3631 0H7.34356C6.9196 0 6.57596 0.349274 6.57596 0.780182C6.57596 1.21109 6.9196 1.56052 7.34356 1.56052H8.08563V3.1308C3.88569 3.51898 0.537109 7.1051 0.537109 11.5474C0.537109 16.219 4.2565 20 8.85338 20C13.4495 20 17.1695 16.2196 17.1695 11.5474C17.1695 9.55185 16.4933 7.66205 15.2516 6.14761ZM8.85323 18.4395C5.11433 18.4395 2.07231 15.3477 2.07231 11.5474C2.07231 7.74719 5.11433 4.65546 8.85323 4.65546C12.5923 4.65546 15.6342 7.74719 15.6342 11.5474C15.6342 15.3477 12.5923 18.4395 8.85323 18.4395ZM12.4108 7.93167C12.7106 8.23639 12.7106 8.73047 12.4108 9.03503L9.39609 12.0992C9.09629 12.4039 8.61018 12.4039 8.31052 12.0992C8.01072 11.7944 8.01072 11.3004 8.31052 10.9958L11.3251 7.93167C11.6249 7.62695 12.111 7.62695 12.4108 7.93167Z" fill="#DC1D1C" />
                                                        </svg>
                                                        09:00AM - 12:00AM
                                                    </span>
                                                </div>
                                                <h4 class="it-event-title mb-25"><a class="border-line-black-2" href="about-us-v2.html">Bringing People Together for a Purposeful Celebration</a></h4>
                                                <a class="it-btn-sm" href="contact.html">Get A Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            jQuery(document).ready(function($) {

                const eventswiper = new Swiper('.it-event-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    slidesPerView: 3,
                    spaceBetween: 35,
                    autoplay: true,
                    breakpoints: {
                        '1400': {
                            slidesPerView: 3,
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

$widgets_manager->register(new OD_Event_Slider());
