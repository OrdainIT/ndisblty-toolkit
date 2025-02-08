<?php

namespace ordainit_toolkit\Widgets;

use Elementor\Controls_Manager;
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

        $this->start_controls_section(
            'od_portfolio_slider_content',
            [
                'label' => __('Slider Content', 'ordainit-toolkit'),
            ]
        );


        $this->add_control(
            'od_portfolio_slider_repeater',
            [
                'label' => esc_html__('Slider List', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'portoflio_slider_title',
                        'label' => esc_html__('Title', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Golden Care Moments', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'portoflio_slider_subtitle',
                        'label' => esc_html__('Sub Title', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Helping Care', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'portoflio_slider_image',
                        'label' => esc_html__('Thumbnail Image', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],

                    [
                        'name' => 'portoflio_slider_url',
                        'label' => esc_html__('URL', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('#', OD),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
                    ],
                    [
                        'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
                    ],
                    [
                        'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
                    ],
                    [
                        'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
                    ],
                ],
                'title_field' => '{{{ portoflio_slider_title }}}',
            ]
        );



        $this->end_controls_section();


        $this->start_controls_section(
            'od_portfolioslider_settings',
            [
                'label' => __('Settings', 'ordainit-toolkit'),
            ]
        );



        $this->add_control(
            'od_portfolio_slider_autoplay',
            [
                'label' => esc_html__('Autoplay ON/Off', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('On', OD),
                'label_off' => esc_html__('OFF', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_portfolio_slider_delay',
            [
                'label' => esc_html__('Delay (ms)', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('300', OD),
            ]
        );





        $this->end_controls_section();



        $this->start_controls_section(
            'od_portfolio_slider_style',
            [
                'label' => __('Style', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_portfolio_slider_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_portfolio_slider_title_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .border-line-black' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_portfolio_slider_title_typo',
                'selector' => '{{WRAPPER}} .it-portfolio-title',
            ]
        );
        $this->add_control(
            'od_portfolio_slider_sbheading',
            [
                'label' => esc_html__('Sub Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_portfolio_slider_subtitle_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_portfolio_slider_subtitle_typo',
                'selector' => '{{WRAPPER}} .it-portfolio-content span',
            ]
        );

        $this->add_control(
            'od_portfolio_slider_icon_heading',
            [
                'label' => esc_html__('Icon', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_portfolio_slider_iconarea_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-content::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_portfolio_slider_iconarea_hover_color',
            [
                'label' => esc_html__('Icon BG Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-content::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->start_controls_tabs(
            'od_portfolio_slider_icon_tabs'
        );

        $this->start_controls_tab(
            'od_portfolio_slider_icon_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );


        $this->add_control(
            'od_portfolio_slider_icon_normal_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_portfolio_slider_icon_normal_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();

        $this->start_controls_tab(
            'od_portfolio_slider_icon_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'od_portfolio_slider_icon_hover_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_portfolio_slider_icon_hover_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
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
