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

        // Content
        $this->start_controls_section(
            'od_text_slider_content',
            [
                'label' => esc_html__('Text Slider Content', OD),
            ]
        );

        $this->add_control(
            'od_text_slider_lists',
            [
                'label' => esc_html__('Text Slider Items', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_text_slider_list_text',
                        'label' => esc_html__('Slider Text', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Meal Preparation', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_text_slider_list_image',
                        'label' => esc_html__('Slider Image', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'default' => [
                    [
                        'od_text_slider_list_text' => esc_html__('Personal Care Services', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Medication Management', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Meal Preparation', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Personal Care Services', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Medication Management', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Meal Preparation', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Meal Preparation', OD),
                    ],
                    [
                        'od_text_slider_list_text' => esc_html__('Personal Care Services', OD),
                    ],
                ],
                'title_field' => '{{{ od_text_slider_list_text }}}',
            ]
        );


        $this->end_controls_section();


        // Slider Settings
        $this->start_controls_section(
            'od_text_slider_settings',
            [
                'label' => esc_html__('Text Slider Settings', OD),
            ]
        );

        $this->add_control(
            'od_text_slider_speed',
            [
                'label' => esc_html__('Speed', OD),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 15, // Default value as a number, not a string
                'placeholder' => esc_html__('Enter speed in seconds', OD),
                'description' => esc_html__('Set the speed of the slider in seconds', OD),
            ]
        );

        $this->end_controls_section();



        // Style
        $this->start_controls_section(
            'od_text_slider_style',
            [
                'label' => esc_html__('Text Slider Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'od_text_slider_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .red-bg' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_text_slider_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-text-slider-area.it-text-slider-ptb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_text_slider_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-text-slider-area.it-text-slider-ptb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


        //Content Style
        $this->start_controls_section(
            'od_text_slider_content_style',
            [
                'label' => __('Slider Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_text_slider_text_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-text-slider-item span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Text Typography', OD),
                'name' => 'od_text_slider_text_typography',
                'selector' => '{{WRAPPER}} .it-text-slider-item span',
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
