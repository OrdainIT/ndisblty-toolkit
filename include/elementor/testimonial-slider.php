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

        $this->start_controls_section(
            'od_layout',
            [
                'label' => esc_html__('Design Layout', OD),
            ]
        );

        $this->add_control(
            'od_design_style',
            [
                'label' => esc_html__('Select Layout', OD),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'layout-1' => esc_html__('Layout 1', OD),
                    'layout-2' => esc_html__('Layout 2', OD),
                    'layout-3' => esc_html__('Layout 3', OD),
                    'layout-4' => esc_html__('Layout 4', OD),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();


        // Testimonial List Content
        $this->start_controls_section(
            'od_testimonial_slider_section_content_list',
            [
                'label' => __('Testimonial Content', OD),
            ]
        );

        $this->add_control(
            'od_testimonial_slider_lists',
            [
                'label' => esc_html__('Testimonial List', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_testimonial_slider_list_author',
                        'label' => esc_html__('Author', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('OD Testimonial Author', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_testimonial_slider_list_avatar',
                        'label' => esc_html__('Choose Avatar', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'description' => esc_html__('It works for layout 1 & 3'),
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],

                    ],
                    [
                        'name' => 'od_testimonial_slider_list_designation',
                        'label' => esc_html__('Designation', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('OD Testimonial Designation', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_testimonial_slider_list_description',
                        'label' => esc_html__('Description', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Testimonial Description', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_testimonial_slider_list_rating',
                        'label' => esc_html__('Select Star', OD),
                        'description' => esc_html__('It works for layout 1 & 2'),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => '5',
                        'options' => [
                            '1' => esc_html__('1 Star', OD),
                            '2' => esc_html__('2 Stars', OD),
                            '3' => esc_html__('3 Stars', OD),
                            '4' => esc_html__('4 Stars', OD),
                            '5' => esc_html__('5 Stars', OD),
                        ],

                    ],

                ],
                'default' => [
                    [
                        'od_testimonial_slider_list_author' => esc_html__('Francis Roman', OD),
                    ],
                    [
                        'od_testimonial_slider_list_author' => esc_html__('Isco Alarcon', OD),
                    ],
                    [
                        'od_testimonial_slider_list_author' => esc_html__('Sergio Ramos', OD),
                    ],

                ],
                'title_field' => '{{{ od_testimonial_slider_list_author }}}',
            ]
        );

        $this->end_controls_section();

        // Testimonial Thumb
        $this->start_controls_section(
            'od_testimonial_slider_thumbnail',
            [
                'label' => __('Testimonial Image', OD),
                'condition' => [
                    'od_design_style' => ['layout-2']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_thumbnail_image',
            [
                'label' => esc_html__('Choose Thumbnail Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        // Testimonial settings
        $this->start_controls_section(
            'od_testimonial_slider_settings',
            [
                'label' => __('Testimonial Settings', OD),
            ]
        );

        $this->add_control(
            'od_testimonial_slider_autoplay',
            [
                'label' => esc_html__('Autoplay Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('On', OD),
                'label_off' => esc_html__('Off', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_autoplay_delay',
            [
                'label' => esc_html__('Autoplay Delay (ms)', OD),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1000,
                'step' => 100,
                'default' => 3000,
            ]
        );

        $this->add_control(
            'od_testimonial_slider_star_switcher',
            [
                'label' => esc_html__('Star Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_quote_switcher',
            [
                'label' => esc_html__('Quote Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2', 'layout-4']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_pagination_switcher',
            [
                'label' => esc_html__('Pagination Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-3']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_navigation_switcher',
            [
                'label' => esc_html__('Navigation Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'od_design_style' => ['layout-4']
                ]
            ]
        );

        $this->end_controls_section();



        // Style Starts
        // Testimonial Style
        $this->start_controls_section(
            'od_testimonial_slider_style',
            [
                'label' => __('Testimonial Slider Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_testimonial_slider_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-item' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-3-wrap' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-4-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->add_responsive_control(
            'od_testimonial_slider_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-testimonial-3-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-testimonial-4-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_testimonial_slider_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-testimonial-3-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-testimonial-4-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'od_testimonial_slider_border_radius',
            [
                'label' => esc_html__('Border Radius', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-testimonial-3-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-testimonial-4-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'od_testimonial_slider_box_shadow',
                'selector' => '
            {{WRAPPER}} .it-testimonial-item,
            {{WRAPPER}} .it-testimonial-3-wrap,
            {{WRAPPER}} .it-testimonial-4-item
        ',
            ]
        );


        $this->end_controls_section();


        // Testimonial Content Style
        $this->start_controls_section(
            'od_testimonial_slider_content_style',
            [
                'label' => __('Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_testimonial_slider_author_heading',
            [
                'label' => esc_html__('Author', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_author_color',
            [
                'label' => esc_html__('Author Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-author-info h5' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-4-author-info h5' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Author Typography', OD),
                'name' => 'od_testimonial_slider_author_typography',
                'selector' => '
            {{WRAPPER}} .it-testimonial-author-info h5,
            {{WRAPPER}} .it-testimonial-4-author-info h5
        ',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_designation_heading',
            [
                'label' => esc_html__('Designation', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_designation_color',
            [
                'label' => esc_html__('Designation Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-author-info span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-4-author-info span' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Designation Typography', OD),
                'name' => 'od_testimonial_slider_designation_typography',
                'selector' => '
            {{WRAPPER}} .it-testimonial-author-info span,
            {{WRAPPER}} .it-testimonial-4-author-info span
        ',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-text p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-4-text p' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_testimonial_slider_description_typography',
                'selector' => '
            {{WRAPPER}} .it-testimonial-text p,
            {{WRAPPER}} .it-testimonial-4-text p
        ',
            ]
        );

        $this->add_control(
            'od_testimonial_slider_icon_heading',
            [
                'label' => esc_html__('Icon', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2', 'layout-4']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_star_color',
            [
                'label' => esc_html__('Star Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-ratting svg path' => 'fill: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_quote_color',
            [
                'label' => esc_html__('Quote Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .quote-icon svg path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}}  .it-testimonial-4-quote span' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2', 'layout-4']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_quote_bg_color',
            [
                'label' => esc_html__('Quote BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .it-testimonial-4-quote span' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-4']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_quote_box_color',
            [
                'label' => esc_html__('Quote Box Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .it-testimonial-4-quote::after' => 'border-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-4']
                ]
            ]
        );

        $this->end_controls_section();


        // Testimonial Pagination Style
        $this->start_controls_section(
            'od_testimonial_slider_pagination_style',
            [
                'label' => __('Pagination Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-3']
                ]
            ]
        );

        $this->add_control(
            'od_testimonial_slider_pagination_bullet_color',
            [
                'label' => esc_html__('Bullet Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-dots .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-3-dots .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_testimonial_slider_pagination_bullet_active_color',
            [
                'label' => esc_html__('Bullet Active Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-dots .swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-3-dots .swiper-pagination-bullet-active' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .it-testimonial-3-dots .swiper-pagination-bullet::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_testimonial_slider_pagination_bullet_active_bg_color',
            [
                'label' => esc_html__('Bullet Active BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-3-dots .swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-3']
                ]
            ]
        );

        $this->end_controls_section();


        // Testimonial Navigation Style
        $this->start_controls_section(
            'od_testimonial_slider_navigation_style',
            [
                'label' => __('Navigation Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-4']
                ]
            ]
        );

        $this->start_controls_tabs(
            'od_testimonial_slider_navigation_style_tabs'
        );

        // Normal
        $this->start_controls_tab(
            'od_testimonial_slider_navigation_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_testimonial_slider_navigation_style_normal_tab_color',
            [
                'label' => esc_html__('Arrow Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-4-arrow-box button' => 'color: {{VALUE}}',

                ],
            ]
        );

        $this->add_control(
            'od_testimonial_slider_navigation_style_normal_tab_bg_color',
            [
                'label' => esc_html__('Arrow BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-4-arrow-box button' => 'background-color: {{VALUE}}',

                ],
            ]
        );

        $this->end_controls_tab();

        // Hover
        $this->start_controls_tab(
            'od_testimonial_slider_navigation_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'od_testimonial_slider_navigation_style_hover_tab_color',
            [
                'label' => esc_html__('Arrow Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-4-arrow-box button:hover' => 'color: {{VALUE}}',

                ],
            ]
        );

        $this->add_control(
            'od_testimonial_slider_navigation_style_hover_tab_bg_color',
            [
                'label' => esc_html__('Arrow Hover BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-testimonial-4-arrow-box button:hover' => 'background-color: {{VALUE}}',

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
                    loopedSlides: 1,
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
