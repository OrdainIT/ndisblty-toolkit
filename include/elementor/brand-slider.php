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
class OD_Brand_Slider extends Widget_Base
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
        return 'od-brand-slider';
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
        return __('Brand Slider', 'ordainit-toolkit');
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
            'od_brand_slider_content',
            [
                'label' => esc_html__('Brand Slider Content', OD),
            ]
        );

        $this->add_control(
            'od_brand_slider_lists',
            [
                'label' => esc_html__('Brand Slider Items', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_brand_slider_list_image',
                        'label' => esc_html__('Slider Image', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'default' => [
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],
                    [
                        'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
                    ],

                ],
                'title_field' => 'Brand Item',
            ]
        );


        $this->end_controls_section();


        // Slider Settings
        $this->start_controls_section(
            'od_brand_slider_settings',
            [
                'label' => esc_html__('Brand Slider Settings', OD),
            ]
        );

        $this->add_control(
            'od_brand_slider_speed',
            [
                'label' => esc_html__('Speed', OD),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 15,
                'placeholder' => esc_html__('Enter speed in seconds', OD),
                'description' => esc_html__('Set the speed of the slider in seconds', OD),
            ]
        );

        $this->end_controls_section();



        // Style
        $this->start_controls_section(
            'od_brand_slider_style',
            [
                'label' => esc_html__('Brand Slider Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'od_brand_slider_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-brand-item-wrap' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_brand_slider_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-brand-item-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_brand_slider_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-brand-item-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $od_brand_slider_lists = $settings['od_brand_slider_lists'];
        $speed = isset($settings['od_brand_slider_speed']) ? $settings['od_brand_slider_speed'] : '15';
?>


        <div class="it-brand-item-wrap" style="--speed: <?php echo esc_attr($speed); ?>s;">
            <div class="it-brand-slider slider-transtion d-flex align-items-center">
                <?php foreach ($od_brand_slider_lists as $od_brand_slider_list): ?>
                    <div class="it-brand-item text-center">
                        <img
                            src="<?php echo esc_url($od_brand_slider_list['od_brand_slider_list_image']['url'], OD); ?>"
                            alt="<?php echo esc_attr__('brand-img', OD); ?>">
                    </div>
                <?php endforeach; ?>
                <?php foreach ($od_brand_slider_lists as $od_brand_slider_list):
                ?>
                    <div class="it-brand-item text-center">
                        <img
                            src="<?php echo esc_url($od_brand_slider_list['od_brand_slider_list_image']['url'], OD); ?>"
                            alt="<?php echo esc_attr__('brand-img', OD); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <style>
            .it-brand-item-wrap {
                overflow: hidden;
                white-space: nowrap;
                position: relative;
            }

            .it-brand-slider {
                display: flex;
                animation: marquee var(--speed, 15s) linear infinite;
                width: max-content;

            }

            .it-brand-item {
                display: flex;
                align-items: center;
                margin: 0 50px;
            }

            .it-brand-item img {
                height: 100%;
                object-fit: contain;

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

$widgets_manager->register(new OD_Brand_Slider());
