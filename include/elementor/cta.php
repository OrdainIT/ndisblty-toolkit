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
class OD_CTA extends Widget_Base
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
        return 'od-cta';
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
        return __('CTA', 'ordainit-toolkit');
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

        // Cta BG Image
        $this->start_controls_section(
            'od_cta_bg_img_section',
            [
                'label' => esc_html__('CTA BG Image', OD),
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_cta_bg_img',
            [
                'label' => esc_html__('Choose BG Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();


        // Cta Content
        $this->start_controls_section(
            'od_cta_content_section',
            [
                'label' => esc_html__('CTA Content', OD),
            ]
        );

        $this->add_control(
            'od_cta_title',
            [
                'label' => esc_html__('Title', OD),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => '3',
                'default' => esc_html__('OD Cta Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_cta_phone',
            [
                'label' => esc_html__('Phone', OD),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => '2',
                'default' => esc_html__('+369 258 741 000', OD),
                'placeholder' => esc_html__('Type phone no. here', OD),
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_cta_btn_text',
            [
                'label' => esc_html__('Button Text', OD),
                'type' => Controls_Manager::TEXT,
                'rows' => '3',
                'default' => esc_html__('OD Button', OD),
                'placeholder' => esc_html__('Type btn text here', OD),
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-2']
                ]
            ]
        );

        $this->add_control(
            'od_cta_btn_url',
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
                    'od_design_style' => ['layout-2']
                ]
            ]
        );


        $this->add_control(
            'od_cta_img',
            [
                'label' => esc_html__('Choose Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();



        // Style Starts
        // CTA Style
        $this->start_controls_section(
            'od_cta_style',
            [
                'label' => __('CTA Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'od_cta_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-ptb.red-bg' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-cta-5-area.red-bg' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->add_responsive_control(
            'od_cta_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-ptb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-cta-5-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_cta_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-ptb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-cta-5-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();


        // CTA Content Style
        $this->start_controls_section(
            'od_cta_content_style',
            [
                'label' => __('CTA Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_cta_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_cta_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-cta-5-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_cta_title_typography',
                'selector' => '
            {{WRAPPER}} .it-cta-4-title,
            {{WRAPPER}} .it-cta-5-title
        ',
            ]
        );

        $this->add_control(
            'od_cta_phone_heading',
            [
                'label' => esc_html__('Phone', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_cta_phone_color',
            [
                'label' => esc_html__('Phone Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-title a' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_cta_phone_border_color',
            [
                'label' => esc_html__('Phone Border Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .border-line-white' => 'background-image:linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Phone Typography', OD),
                'name' => 'od_cta_phone_typography',
                'selector' => '{{WRAPPER}} .it-cta-4-title a',
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'od_cta_phone_icon_style',
            [
                'label' => __('Phone Icon Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->start_controls_tabs(
            'od_cta_phone_icon_style_tabs',
        );

        // Normal
        $this->start_controls_tab(
            'od_cta_phone_icon_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_cta_phone_icon_style_normal_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_cta_phone_icon_style_normal_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        // Hover

        $this->start_controls_tab(
            'od_cta_phone_icon_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'od_cta_phone_icon_style_hover_color',
            [
                'label' => esc_html__('Icon hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-icon:hover' => 'color: {{VALUE}}',

                ],
            ]
        );
        $this->add_control(
            'od_cta_phone_icon_style_hover_bg_color',
            [
                'label' => esc_html__('Icon Hover BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-cta-4-icon:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();



        $this->start_controls_section(
            'od_cta_btn_style',
            [
                'label' => __('Button Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-2']
                ]
            ]
        );

        $this->add_control(
            'od_cta_btn_heading',
            [
                'label' => esc_html__('Button', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->start_controls_tabs(
            'od_cta_btn_style_tabs'
        );

        // Normal
        $this->start_controls_tab(
            'od_cta_btn_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_cta_btn_style_normal_color',
            [
                'label' => esc_html__('Button Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.it-btn-red.white-btn.hover-2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_cta_btn_style_normal_bgcolor',
            [
                'label' => esc_html__('Button BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.it-btn-red.white-btn.hover-2' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        // Hover

        $this->start_controls_tab(
            'od_cta_btn_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'od_cta_btn_style_hover_color',
            [
                'label' => esc_html__('Button hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.it-btn-red.white-btn.hover-2:hover' => 'color: {{VALUE}}',

                ],
            ]
        );
        $this->add_control(
            'od_cta_btn_style_hover_bgcolor',
            [
                'label' => esc_html__('Button Hover BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.it-btn-red.white-btn.hover-2:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        // Button Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Typography', OD),
                'name' => 'od_cta_btn_typography',
                'selector' => '{{WRAPPER}} .it-btn-red.white-btn',
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
        $od_cta_bg_img = $settings['od_cta_bg_img'];
        $od_cta_img = $settings['od_cta_img'];
        $od_cta_title = $settings['od_cta_title'];
        $od_cta_phone = $settings['od_cta_phone'];
        $od_cta_btn_text = $settings['od_cta_btn_text'];
        $od_cta_btn_url = $settings['od_cta_btn_url'];
?>


        <?php if ($settings['od_design_style']  == 'layout-2'): ?>

            <div class="it-cta-5-area p-relative red-bg">
                <div class="it-cta-5-thumb d-none d-lg-block">
                    <img src="<?php echo esc_url($od_cta_img['url'], OD); ?>"
                        alt="<?php echo esc_attr__('cta-img', OD); ?>">
                </div>
                <div class="container-fluid p-0">
                    <div class="it-cta-5-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-7">
                                <div class="it-cta-5-teft">
                                    <h4 class="it-cta-5-title"><?php echo od_kses($od_cta_title, OD); ?> </h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="it-cta-5-btn text-end">
                                    <a class="it-btn-red white-btn hover-2" href="<?php echo esc_url($od_cta_btn_url['url'], OD); ?>">
                                        <?php echo esc_html($od_cta_btn_text, OD); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php else: ?>

            <div class="it-cta-4-area it-cta-4-ptb p-relative red-bg"
                style="background-image: url('<?php echo esc_url($od_cta_bg_img['url'], OD); ?>');">
                <div class="container">
                    <div class="it-cta-4-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="it-cta-4-teft">
                                    <h4 class="it-cta-4-title"><?php echo od_kses($od_cta_title, OD); ?> <br>
                                        <a class="border-line-white" href="tel:<?php echo esc_attr($od_cta_phone, OD); ?>"><?php echo esc_html($od_cta_phone, OD); ?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="it-cta-4-thumb">
                    <img
                        src="<?php echo esc_url($od_cta_img['url'], OD); ?>"
                        alt="<?php echo esc_attr__('cta-img', OD); ?>">
                    <a href="tel:<?php echo esc_attr($od_cta_phone, OD); ?>" class="it-cta-4-icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.75 4.25C1.75 2.86929 2.86929 1.75 4.25 1.75H8.34905C8.88709 1.75 9.36476 2.09429 9.5349 2.60472L11.4072 8.22151C11.6039 8.81165 11.3367 9.45664 10.7803 9.73483L7.95876 11.1456C9.33656 14.2015 11.7985 16.6634 14.8544 18.0412L16.2652 15.2197C16.5434 14.6633 17.1883 14.3961 17.7785 14.5928L23.3953 16.4651C23.9057 16.6352 24.25 17.1129 24.25 17.6509V21.75C24.25 23.1307 23.1307 24.25 21.75 24.25H20.5C10.1447 24.25 1.75 15.8553 1.75 5.5V4.25Z"
                                stroke="currentcolor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
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

$widgets_manager->register(new OD_CTA());
