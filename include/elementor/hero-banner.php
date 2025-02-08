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
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();


        // Hero BG Image
        $this->start_controls_section(
            'od_hero_banner_bg_img_section',
            [
                'label' => esc_html__('Banner BG Image', OD),
                'condition' => [
                    'od_design_style' => ['layout-3'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_bg_img',
            [
                'label' => esc_html__('Choose BG Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();


        // Hero Content
        $this->start_controls_section(
            'od_hero_banner_content',
            [
                'label' => esc_html__('Hero Content', OD),
            ]
        );

        $this->add_control(
            'od_hero_banner_title',
            [
                'label' => esc_html__('Title', OD),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => '3',
                'default' => esc_html__('OD Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_hero_banner_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Description', OD),
                'placeholder' => esc_html__('Type Description here', OD),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();



        // Button
        $this->start_controls_section(
            'od_hero_banner_section_button',
            [
                'label' => esc_html__('Button', OD),
            ]
        );

        $this->add_control(
            'od_hero_banner_btn_switcher',
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
            'od_hero_banner_btn_url',
            [
                'label' => esc_html__('Button Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
                'condition' => [
                    'od_hero_banner_btn_switcher' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_btn_text',
            [
                'label' => esc_html__('Button Text', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Hero Button', OD),
                'placeholder' => esc_html__('Type button text here', OD),
                'label_block' => true,
                'condition' => [
                    'od_hero_banner_btn_switcher' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();


        // Hero Right Content
        $this->start_controls_section(
            'od_hero_banner_icon_content',
            [
                'label' => esc_html__('Icon', OD),
                'condition' => [
                    'od_design_style' => ['layout-3'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_icon',
            [
                'label' => esc_html__('SVG Icon', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => od_kses('Icon', OD),
                'placeholder' => esc_html__('Type svg icon here here', OD),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        // Hero Right Content
        $this->start_controls_section(
            'od_hero_banner_right_content',
            [
                'label' => esc_html__('Hero Right Content', OD),
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_right_number',
            [
                'label' => esc_html__('Number', OD),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('15', OD),
                'placeholder' => esc_html__('Type number here', OD),
            ]
        );

        $this->add_control(
            'od_hero_banner_right_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Description', OD),
                'placeholder' => esc_html__('Type Description here', OD),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();


        // Thumbnail
        $this->start_controls_section(
            'od_hero_banner_thumbnail_section',
            [
                'label' => esc_html__('Thumbnail', OD),
            ]
        );

        $this->add_control(
            'od_hero_banner_thumbnail_image',
            [
                'label' => esc_html__('Choose Thumbnail Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_thumbnail_image_2',
            [
                'label' => esc_html__('Choose Thumbnail Image 2', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ]
            ]
        );
        $this->add_control(
            'od_hero_banner_thumbnail_image_3',
            [
                'label' => esc_html__('Choose Thumbnail Image 3', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ]
            ]
        );

        $this->end_controls_section();


        // Shape
        $this->start_controls_section(
            'od_hero_banner_shape_section',
            [
                'label' => esc_html__('Shape', OD),
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2'],
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_shape_image_1',
            [
                'label' => esc_html__('Choose Shape Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_shape_image_2',
            [
                'label' => esc_html__('Choose Shape Image 2', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ]
            ]
        );

        $this->end_controls_section();

        // Style Starts
        // Banner Style
        $this->start_controls_section(
            'od_hero_banner_style',
            [
                'label' => __('Banner Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_bg_color',
            [
                'label' => esc_html__('Banner BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-bg' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_bg_color_2',
            [
                'label' => esc_html__('Banner BG Color 2', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-red-bg' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-hero-2-red-bg' => 'background-color: {{VALUE}}',
                ],

            ]
        );

        $this->end_controls_section();


        // Banner Content Style
        $this->start_controls_section(
            'od_hero_banner_content_style',
            [
                'label' => __('Banner Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_hero_banner_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        // Title Style
        $this->add_control(
            'od_hero_banner_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-hero-2-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-hero-3-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_title_span_color',
            [
                'label' => esc_html__('Title Special Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-3-title span' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-3'],
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_hero_banner_title_typography',
                'selector' => '
            {{WRAPPER}} .it-hero-title,
            {{WRAPPER}} .it-hero-2-title,
            {{WRAPPER}} .it-hero-3-title
        ',
            ]
        );

        $this->add_control(
            'od_hero_banner_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        // Description Style
        $this->add_control(
            'od_hero_banner_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-hero-2-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-hero-3-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_hero_banner_description_typography',
                'selector' => '
            {{WRAPPER}} .it-hero-content p,
            {{WRAPPER}} .it-hero-2-content p,
            {{WRAPPER}} .it-hero-3-content p
        ',
            ]
        );

        $this->end_controls_section();

        // Banner Icon Content Style
        $this->start_controls_section(
            'od_hero_banner_icon_style',
            [
                'label' => __('Banner Icon Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-3'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-3-thumb-icon svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_icon_bg_color',
            [
                'label' => esc_html__('Icon Bg Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-3-thumb-icon::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_icon_box_bg_color',
            [
                'label' => esc_html__('Icon Box Bg Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-3-thumb-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_icon_animation_color',
            [
                'label' => __('Animation Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(220, 28, 28, 0.2)',
                'selectors' => [
                    '{{WRAPPER}} .it-hero-3-thumb-icon' => '--animation-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Banner Right Content Style
        $this->start_controls_section(
            'od_hero_banner_right_content_style',
            [
                'label' => __('Banner Right Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ]
            ]
        );

        $this->add_control(
            'od_hero_banner_right_bg_color',
            [
                'label' => esc_html__('Background Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-2-experience' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_hero_banner_right_number_heading',
            [
                'label' => esc_html__('Number', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_hero_banner_right_number_color',
            [
                'label' => esc_html__('Number Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-2-experience i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Number Typography', OD),
                'name' => 'od_hero_banner_right_number_typography',
                'selector' => '{{WRAPPER}} .it-hero-2-experience i',
            ]
        );

        $this->add_control(
            'od_hero_banner_right_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_hero_banner_right_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-hero-2-experience span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_hero_banner_right_description_typography',
                'selector' => '{{WRAPPER}} .it-hero-2-experience span',
            ]
        );

        $this->end_controls_section();


        // Button Style
        $this->start_controls_section(
            'od_hero_banner_btn_style',
            [
                'label' => __('Button Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_hero_banner_btn_switcher' => 'yes',
                ],
            ]
        );

        $this->start_controls_tabs(
            'od_hero_banner_btn_style_tabs'
        );

        // Normal
        $this->start_controls_tab(
            'od_hero_banner_btn_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_hero_banner_btn_style_normal_color',
            [
                'label' => esc_html__('Button Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_hero_banner_btn_style_normal_bgcolor',
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
            'od_hero_banner_btn_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'od_hero_banner_btn_style_hover_color',
            [
                'label' => esc_html__('Button hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red:hover' => 'color: {{VALUE}}',

                ],
            ]
        );
        $this->add_control(
            'od_hero_banner_btn_style_hover_bgcolor',
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
            'hr_2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        // Button Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Typography', OD),
                'name' => 'od_hero_banner_btn_typography',
                'selector' => '{{WRAPPER}} .it-btn-red',
            ]
        );

        $this->add_responsive_control(
            'od_hero_banner_btn_margin',
            [
                'label' => esc_html__('Button Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-btn-red' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_hero_banner_btn_padding',
            [
                'label' => esc_html__('Button Padding', OD),
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
                'name' => 'od_hero_banner_btn_border',
                'selector' => '{{WRAPPER}} .it-btn-red',
            ]
        );

        $this->add_control(
            'od_hero_banner_btn_border_radius',
            [
                'label' => esc_html__('Border Radius', OD),
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
                'name' => 'od_hero_banner_btn_box_shadow',
                'selector' => '{{WRAPPER}} .it-btn-red',
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
                        alt="<?php echo esc_attr__('hero-img', OD); ?>" />
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
                    alt="<?php echo esc_attr__('shape-img', OD); ?>">
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
                                    alt="<?php echo esc_attr__('shape-img', OD); ?>" />
                                <div class="row gx-25">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="it-hero-2-thumb-left">
                                            <div class="it-hero-2-thumb thumb-style-1">
                                                <img
                                                    class="wow img-anim-top"
                                                    data-wow-duration="1.5s"
                                                    data-wow-delay="0.1s"
                                                    src="<?php echo esc_url($od_hero_banner_thumbnail_image['url'], OD); ?>"
                                                    alt="<?php echo esc_attr__('hero-img', OD); ?>">
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
                                                    alt="<?php echo esc_attr__('hero-img', OD); ?>">
                                            </div>
                                            <div class="it-hero-2-thumb thumb-style-3">
                                                <img
                                                    class="wow img-anim-left"
                                                    data-wow-duration="1.5s"
                                                    data-wow-delay="0.1s"
                                                    src="<?php echo esc_url($od_hero_banner_thumbnail_image_3['url'], OD); ?>"
                                                    alt="<?php echo esc_attr__('hero-img', OD); ?>">
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
                        alt="<?php echo esc_attr__('shape-img', OD); ?>" />
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
                                    alt="<?php echo esc_attr__('hero-img', OD); ?>">
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
