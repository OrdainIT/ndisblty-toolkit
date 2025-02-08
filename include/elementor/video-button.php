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
class Od_Video_Button extends Widget_Base
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
        return 'video-button';
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
        return __('Video Button', OD);
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
        return [OD];
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
        return [OD];
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
            'od_video_button_content',
            [
                'label' => __('Button URL', OD),
            ]
        );

        $this->add_control(
            'od_video_button_url',
            [
                'label' => esc_html__('URL', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('https://www.youtube.com/watch?v=YoOG5H4603Y', OD),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'od_video_button_style',
            [
                'label' => __('Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_video_button_bg_colr',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-video-icon a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_video_button_icon_colr',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-video-icon a svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_video_button_icon_animation',
            [
                'label' => esc_html__('Icon Animation Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-video-icon a svg path' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_video_button_height',
            [
                'label' => esc_html__('Height', OD),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .it-video-icon a' => 'height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'od_video_button_width',
            [
                'label' => esc_html__('Width', OD),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .it-video-icon a' => 'width: {{SIZE}}{{UNIT}};',
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
        $animation_color = $settings['od_video_button_icon_animation'];
?>
        <div class="it-video-icon video-button" style="--animation-color: <?php echo esc_attr($animation_color); ?>;">
            <a href="https://www.youtube.com/watch?v=YoOG5H4603Y" class="popup-video ripple-whites">
                <span>
                    <svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.2016 14.3381L0.568838 29.0253L0.165683 0.349142L25.2016 14.3381Z" fill="#DC1D1C"></path>
                    </svg>
                </span>
            </a>
        </div>



        <style>
            .ripple-whites {
                animation: ripple-whites 1s linear infinite;
            }

            @keyframes ripple-whites {
                0% {
                    box-shadow: 0 0 0 0 var(--animation-color), 0 0 0 10px var(--animation-color), 0 0 0 20px var(--animation-color);
                }

                100% {
                    box-shadow: 0 0 0 10px var(--animation-color), 0 0 0 20px var(--animation-color), 0 0 0 30px rgba(255, 255, 255, 0);
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

$widgets_manager->register(new Od_Video_Button());
