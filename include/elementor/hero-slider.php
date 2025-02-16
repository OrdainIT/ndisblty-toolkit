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
class OD_Hero_Slider extends Widget_Base
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
        return 'od-hero-slider';
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
        return __('Hero Slider', 'ordainit-toolkit');
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
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

        // Hero List Content
        $this->start_controls_section(
            'od_hero_slider_section_content_list',
            [
                'label' => __('Hero Content', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_lists',
            [
                'label' => esc_html__('Hero List', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_hero_slider_list_title',
                        'label' => esc_html__('Title', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Hero Title', OD),
                        'placeholder' => esc_html__('Type title here', OD),
                        'rows' => '3',
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_hero_slider_list_subtitle',
                        'label' => esc_html__('Subtitle', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('OD Hero Subtitle', OD),
                        'placeholder' => esc_html__('Type subtitle here', OD),
                        'description' => esc_html__('It will work only for layout-1', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_hero_slider_list_description',
                        'label' => esc_html__('Description', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Hero Description', OD),
                        'placeholder' => esc_html__('Type description here', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_hero_slider_list_btn_url',
                        'label' => esc_html__('Button Url', OD),
                        'type' => Controls_Manager::URL,
                        'placeholder' => esc_html__('https://your-link.com', OD),
                        'show_external' => true,
                        'default' => [
                            'url' => '#',
                        ],
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_hero_slider_list_btn_text',
                        'label' => esc_html__('Button Text', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('OD Hero Button', OD),
                        'placeholder' => esc_html__('Type button text here', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_hero_slider_list_bg_img',
                        'label' => esc_html__('Choose Background Image', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],

                    ],
                ],
                'default' => [
                    [
                        'od_hero_slider_list_title' => esc_html__('Od Hero Title 1', OD),
                    ],
                    [
                        'od_hero_slider_list_title' => esc_html__('Od Hero Title 2', OD),
                    ],
                    [
                        'od_hero_slider_list_title' => esc_html__('Od Hero Title 3', OD),
                    ],
                ],
                'title_field' => 'Slider Content',
            ]
        );

        $this->end_controls_section();

        // Hero Shape Content
        $this->start_controls_section(
            'od_hero_slider_shape_section',
            [
                'label' => __('Shape Image', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_shape_image_1',
            [
                'label' => esc_html__('Choose Shape Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'od_hero_slider_shape_image_2',
            [
                'label' => esc_html__('Choose Shape Image 2', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'od_design_style' => ['layout-2']
                ],
            ]
        );

        $this->end_controls_section();


        // Slider Settings
        $this->start_controls_section(
            'od_hero_slider_settings_section',
            [
                'label' => __('Slider Settings', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_title_icon_switcher',
            [
                'label' => esc_html__('Title Icon Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_hero_slider_btn_switcher',
            [
                'label' => esc_html__('Button Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_hero_slider_pagination_switcher',
            [
                'label' => esc_html__('Pagination Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_hero_slider_autoplay',
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
            'od_hero_slider_autoplay_delay',
            [
                'label' => esc_html__('Autoplay Delay (ms)', OD),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1000,
                'step' => 100,
                'default' => 4500,
            ]
        );

        $this->end_controls_section();


        // Slider Style
        $this->start_controls_section(
            'od_hero_slider_style',
            [
                'label' => __('Slider Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_hero_slider_bg_color',
            [
                'label' => esc_html__('Slider BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-overlay::after' => 'background-color: {{VALUE}}',
                ],

            ]
        );

        $this->end_controls_section();

        // Slider Content Style
        $this->start_controls_section(
            'od_hero_slider_content_style',
            [
                'label' => __('Slider Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_hero_slider_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        // Title Style
        $this->add_control(
            'od_hero_slider_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_slider_title_icon_color',
            [
                'label' => esc_html__('Title Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-title .it-slider-title-shape svg path' => 'fill: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1'],
                    'od_hero_slider_title_icon_switcher' => 'yes'
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_hero_slider_title_typography',
                'selector' => '{{WRAPPER}} .it-slider-title',
            ]
        );

        $this->add_control(
            'od_hero_slider_subtitle_heading',
            [
                'label' => esc_html__('Subtitle', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'od_design_style' => ['layout-1'],
                ]
            ]
        );


        // SubTitle Style
        $this->add_control(
            'od_hero_slider_subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-subtitle' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1'],
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Subtitle Typography', OD),
                'name' => 'od_hero_slider_subtitle_typography',
                'selector' => '{{WRAPPER}} .it-slider-subtitle',
                'condition' => [
                    'od_design_style' => ['layout-1'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_slider_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        // Description Style
        $this->add_control(
            'od_hero_slider_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_hero_slider_description_typography',
                'selector' => '{{WRAPPER}} .it-slider-content p',
            ]
        );

        $this->end_controls_section();


        // Button Style
        $this->start_controls_section(
            'od_hero_slider_btn_style',
            [
                'label' => __('Button Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_hero_slider_btn_switcher' => 'yes',
                ],
            ]
        );

        $this->start_controls_tabs(
            'od_hero_slider_btn_style_tabs'
        );

        // Normal
        $this->start_controls_tab(
            'od_hero_slider_btn_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_btn_style_normal_color',
            [
                'label' => esc_html__('Button Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_hero_slider_btn_style_normal_bgcolor',
            [
                'label' => esc_html__('Button BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        // Hover

        $this->start_controls_tab(
            'od_hero_slider_btn_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_btn_style_hover_color',
            [
                'label' => esc_html__('Button hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red:hover' => 'color: {{VALUE}}',

                ],
            ]
        );
        $this->add_control(
            'od_hero_slider_btn_style_hover_bgcolor',
            [
                'label' => esc_html__('Button Hover BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red:hover' => 'background-color: {{VALUE}}',

                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'hr_3',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        // Button Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Typography', OD),
                'name' => 'od_hero_slider_btn_typography',
                'selector' => '{{WRAPPER}} .it-btn-red',
            ]
        );

        $this->add_responsive_control(
            'od_hero_slider_btn_margin',
            [
                'label' => esc_html__('Button Margin', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_hero_slider_btn_padding',
            [
                'label' => esc_html__('Button Padding', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'od_hero_slider_btn_border',
                'selector' => '{{WRAPPER}} .it-btn-red',
            ]
        );

        $this->add_control(
            'od_hero_slider_btn_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'od_hero_slider_btn_box_shadow',
                'selector' => '{{WRAPPER}} .it-btn-red',
            ]
        );

        $this->end_controls_section();


        // Pagination Style
        $this->start_controls_section(
            'od_hero_slider_pagination_style',
            [
                'label' => __('Slider Pagination Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'od_hero_slider_pagination_style_tabs'
        );

        // Normal
        $this->start_controls_tab(
            'od_hero_slider_pagination_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_pagination_style_normal_color',
            [
                'label' => esc_html__('Pagination Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination-bullet' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_hero_slider_pagination_style_normal_bgcolor',
            [
                'label' => esc_html__('Pagination BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        // Active

        $this->start_controls_tab(
            'od_hero_slider_pagination_style_active_tab',
            [
                'label' => esc_html__('Active', OD),
            ]
        );

        $this->add_control(
            'od_hero_slider_pagination_style_active_color',
            [
                'label' => esc_html__('Pagination Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination-bullet-active' => 'color: {{VALUE}}',

                ],
            ]
        );
        $this->add_control(
            'od_hero_slider_pagination_style_active_bgcolor',
            [
                'label' => esc_html__('Pagination BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',

                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        // Shape Style
        $this->start_controls_section(
            'od_hero_slider_shape_style',
            [
                'label' => __('Slider Shape Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-1'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_slider_shape_color_1',
            [
                'label' => esc_html__('Shape Color 1', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-circle::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_slider_shape_color_2',
            [
                'label' => esc_html__('Shape Color 2', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-slider-circle::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

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
        $od_hero_slider_lists = $settings['od_hero_slider_lists'];
        $od_hero_slider_shape_image_1 = $settings['od_hero_slider_shape_image_1'];
        $od_hero_slider_shape_image_2 = $settings['od_hero_slider_shape_image_2'];
        $od_hero_slider_pagination_switcher = $settings['od_hero_slider_pagination_switcher'];
        $od_hero_slider_title_icon_switcher = $settings['od_hero_slider_title_icon_switcher'];
        $od_hero_slider_btn_switcher = $settings['od_hero_slider_btn_switcher'];
        $od_hero_slider_autoplay = $settings['od_hero_slider_autoplay'];
        $od_hero_slider_autoplay_delay = $settings['od_hero_slider_autoplay_delay'];
?>


        <?php if ($settings['od_design_style']  == 'layout-2'): ?>

            <div class="it-slider-area it-slider-style-2">
                <div class="it-slider-wrap">
                    <div class="swiper-container it-slider-active p-relative">
                        <div class="swiper-wrapper">
                            <?php foreach ($od_hero_slider_lists as $od_hero_slider_list) : ?>
                                <div class="swiper-slide">
                                    <div class="it-slider-overlay z-index-1 fix p-relative">
                                        <img
                                            class="it-slider-shape-2"
                                            src="<?php echo esc_url($od_hero_slider_shape_image_1['url'], OD); ?>"
                                            alt="<?php echo esc_attr__('shape-img', OD); ?>" />
                                        <img
                                            class="it-slider-shape-3"
                                            src="<?php echo esc_url($od_hero_slider_shape_image_2['url'], OD); ?>"
                                            alt="<?php echo esc_attr__('shape-img', OD); ?>" />
                                        <div class="it-slider-bg"
                                            style="background-image: url('<?php echo esc_url($od_hero_slider_list['od_hero_slider_list_bg_img']['url'], OD); ?>');">
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-7 col-lg-9">
                                                    <div class="it-slider-content z-index-1">
                                                        <h1 class="it-slider-title p-relative mb-15"><?php echo od_kses($od_hero_slider_list['od_hero_slider_list_title'], OD); ?>
                                                        </h1>
                                                        <?php if (!empty($od_hero_slider_list['od_hero_slider_list_description'])): ?>
                                                            <div class="it-slider-text pb-20">
                                                                <p><?php echo od_kses($od_hero_slider_list['od_hero_slider_list_description'], OD); ?>.</p>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($od_hero_slider_btn_switcher)): ?>
                                                            <div class="it-slider-btn">
                                                                <a
                                                                    class="it-btn-red" href="<?php echo esc_url($od_hero_slider_list['od_hero_slider_list_btn_url']['url'], OD); ?>">
                                                                    <?php echo esc_html($od_hero_slider_list['od_hero_slider_list_btn_text'], OD); ?>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="it-swiper-pagination"></div>
                    </div>
                </div>
            </div>

        <?php else: ?>

            <div class="it-slider-area">
                <div class="it-slider-wrap">
                    <div class="swiper-container it-slider-active p-relative">
                        <div class="swiper-wrapper">

                            <?php foreach ($od_hero_slider_lists as $od_hero_slider_list) : ?>
                                <div class="swiper-slide">
                                    <div class="it-slider-overlay z-index-1 fix p-relative">
                                        <img
                                            class="it-slider-shape-1"
                                            src="<?php echo esc_url($od_hero_slider_shape_image_1['url'], OD); ?>"
                                            alt="<?php echo esc_attr__('shape-img', OD); ?>" />
                                        <div class="it-slider-circle"></div>
                                        <div
                                            class="it-slider-bg"
                                            style="background-image: url('<?php echo esc_url($od_hero_slider_list['od_hero_slider_list_bg_img']['url'], OD); ?>');"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-8">
                                                    <div class="it-slider-content z-index-1">
                                                        <?php if (!empty($od_hero_slider_list['od_hero_slider_list_subtitle'])): ?>
                                                            <span class="it-slider-subtitle"><?php echo esc_html($od_hero_slider_list['od_hero_slider_list_subtitle'], OD); ?></span>
                                                        <?php endif; ?>
                                                        <h1 class="it-slider-title p-relative">
                                                            <?php echo od_kses($od_hero_slider_list['od_hero_slider_list_title'], OD); ?>
                                                            <?php if (!empty($od_hero_slider_title_icon_switcher)): ?>
                                                                <span class="it-slider-title-shape">
                                                                    <svg
                                                                        width="406"
                                                                        height="37"
                                                                        viewBox="0 0 406 37"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M242.978 16.8994C188.947 17.5565 134.889 20.1635 81.0929 24.8234C55.5165 27.0392 25.8148 26.7623 1.00892 34.3169C-0.227097 34.6971 0.00829775 35.8376 0.0350513 35.9516C0.0885583 36.1852 0.313345 36.9618 1.29787 36.9998C1.40489 37.0052 2.15929 36.8966 2.44822 36.8586C9.77333 35.881 17.0717 34.7405 24.4022 33.8173C49.711 30.6184 75.0947 28.2015 100.516 26.0834C134.257 23.2701 168.288 21.7711 202.12 20.598C220.639 19.9571 239.602 20.8098 258.18 19.4846C265.002 19.4466 271.824 19.4412 278.646 19.463C307.165 19.5662 335.652 20.6632 364.124 22.1676C373.279 22.651 380.261 23.1724 389.224 23.5254C392.627 23.6612 398.026 23.7535 401.782 23.8133C402.333 23.8241 403.74 23.8349 404.323 23.8403C404.382 23.8512 404.441 23.8512 404.505 23.8512C404.73 23.8512 404.837 23.8349 404.858 23.8349C406.132 23.6448 406.014 22.4228 405.982 22.2382C405.977 22.2002 405.784 21.1682 404.687 21.1302C404.425 21.1193 402.547 21.1086 401.825 21.0977C398.09 21.038 392.712 20.9456 389.325 20.8153C380.379 20.4623 373.402 19.9409 364.263 19.4575C335.749 17.9531 307.219 16.8506 278.657 16.7474C275.168 16.7366 271.674 16.7311 268.185 16.7366C268.068 16.427 267.806 16.0794 267.228 15.9273C266.687 15.7861 262.819 15.6612 261.326 15.5363C250.277 14.613 250.603 14.6565 238.446 13.9015C220.035 12.7556 217.231 12.4948 198.081 12.0114C163.296 11.1316 128.495 11.2023 93.7045 11.2892C76.5287 11.338 58.1383 12.5166 40.7004 10.317C46.447 9.63267 52.2151 9.13302 57.9725 8.56276C77.6309 6.61843 97.3055 5.41267 117.044 4.56543C164.393 2.5342 211.816 1.72504 259.148 4.49489C249.073 4.59265 239.003 4.82068 228.927 4.96732C187.914 5.5756 146.505 5.11944 105.578 8.27489C104.845 8.33464 104.294 8.98633 104.347 9.73039C104.401 10.4799 105.048 11.0393 105.781 10.985C146.655 7.82954 188.005 8.29114 228.965 7.68286C244.182 7.46019 259.394 7.05832 274.612 7.17781C279.834 7.22125 285.056 7.41681 290.279 7.48198C291.311 7.49827 293.971 7.70465 294.35 7.61776C295.191 7.42767 295.372 6.79762 295.426 6.48805C295.453 6.30339 295.538 5.2389 294.254 4.85873C285.49 2.26267 269.315 2.38215 260.796 1.87163C212.881 -1.00684 164.869 -0.203059 116.932 1.84989C97.145 2.70257 77.4223 3.91377 57.7103 5.86353C50.8239 6.54241 43.9215 7.12896 37.0619 8.03052C35.9543 8.17716 33.4663 8.38901 32.2624 8.61168C31.7594 8.70401 31.3955 8.83427 31.235 8.9266C30.609 9.28505 30.4966 9.80644 30.4966 10.1595C30.4913 10.431 30.6037 11.3869 31.9146 11.6476C51.8887 15.6177 73.6233 14.059 93.7098 14.0047C128.479 13.9178 163.253 13.8471 198.016 14.7269C217.118 15.2103 219.911 15.4657 238.286 16.6117C240.1 16.7203 241.635 16.8179 242.978 16.8994Z"
                                                                            fill="#DC1D1C" />
                                                                    </svg>
                                                                </span>
                                                            <?php endif; ?>
                                                        </h1>
                                                        <?php if (!empty($od_hero_slider_list['od_hero_slider_list_description'])): ?>
                                                            <div class="it-slider-text pb-25">
                                                                <p>
                                                                    <?php echo od_kses($od_hero_slider_list['od_hero_slider_list_description'], OD); ?>
                                                                </p>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($od_hero_slider_btn_switcher)): ?>
                                                            <div class="it-slider-btn">
                                                                <a class="it-btn-red"
                                                                    href="<?php echo esc_url($od_hero_slider_list['od_hero_slider_list_btn_url']['url'], OD); ?>">
                                                                    <?php echo esc_html($od_hero_slider_list['od_hero_slider_list_btn_text'], OD); ?>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <?php if (!empty($od_hero_slider_pagination_switcher)): ?>
                            <div class="it-swiper-pagination"></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>


        <script>
            jQuery(document).ready(function($) {

                const sliderAutoplay = <?php echo $od_hero_slider_autoplay === 'yes' ?  'true' : 'false'; ?>;
                const autoplayDelay = <?php echo $od_hero_slider_autoplay_delay; ?>;

                const sliderswiper = new Swiper('.it-slider-active', {
                    slidesPerView: 1,
                    loop: true,
                    autoplay: true,
                    effect: 'fade',
                    autoplay: sliderAutoplay ? {
                        delay: autoplayDelay
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
                        el: ".it-swiper-pagination",
                        clickable: true,
                        renderBullet: function(index, className) {
                            return '<span class="' + className + '">' + (index + 1) + "</span>";
                        },
                    },

                });

            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Hero_Slider());
