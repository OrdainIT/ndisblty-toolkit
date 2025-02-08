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
class Od_Portfolio extends Widget_Base
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
        return 'od-portfolio';
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
        return __('Portfolio', 'ordainit-toolkit');
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
            'od_portfolio_content',
            [
                'label' => __('Portfolio', 'ordainit-toolkit'),
            ]
        );

        $this->add_control(
            'od_portfolio_content_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Intensive Care', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_portfolio_content_subtitle',
            [
                'label' => esc_html__('SubTitle', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Helping care', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_portfolio_content_image',
            [
                'label' => esc_html__('Thumbnail Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'od_portfolio_content_url',
            [
                'label' => esc_html__('URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'od_portfolio_settings',
            [
                'label' => __('Settings', 'ordainit-toolkit'),
            ]
        );


        $this->add_control(
            'od_portfolio_content_duration',
            [
                'label' => esc_html__('Duration', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('1.5', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_portfolio_content_delay',
            [
                'label' => esc_html__('Delay', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('0.1', 'textdomain'),
                'label_block' => true,
            ]
        );





        $this->end_controls_section();

        $this->start_controls_section(
            'od_portfolio_style',
            [
                'label' => __('Portfolio', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_portfolio_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_portfolio_title_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
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
                'name' => 'od_portfolio_title_typo',
                'selector' => '{{WRAPPER}} .it-portfolio-title',
            ]
        );


        $this->add_control(
            'od_portfolio_subtitle',
            [
                'label' => esc_html__('Sub Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_portfolio_subtitle_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_portfolio_subtitle_typo',
                'selector' => '{{WRAPPER}} .it-portfolio-content span',
            ]
        );



        $this->add_control(
            'od_portfolio_icon',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'od_portfolio_icon_area_bg_color',
            [
                'label' => esc_html__('BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-content::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->start_controls_tabs(
            'od_portfolio_icon_style_tabs'
        );

        $this->start_controls_tab(
            'od_portfolio_icon_style_normal_tab',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );

        $this->add_control(
            'od_portfolio_icon_style_normal_bg_color',
            [
                'label' => esc_html__('Icon BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-portfolio-content::before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_portfolio_icon_style_normal_icon_color',
            [
                'label' => esc_html__('Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'od_portfolio_icon_style_hover_tab',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );

        $this->add_control(
            'od_portfolio_icon_style_hover_bg_color',
            [
                'label' => esc_html__('Icon BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_portfolio_icon_style_hover_icon_color',
            [
                'label' => esc_html__('Icon Color', 'textdomain'),
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
        $od_portfolio_content_title = $settings['od_portfolio_content_title'];
        $od_portfolio_content_subtitle = $settings['od_portfolio_content_subtitle'];
        $od_portfolio_content_image = $settings['od_portfolio_content_image'];
        $od_portfolio_content_url = $settings['od_portfolio_content_url'];
        $od_portfolio_content_duration = $settings['od_portfolio_content_duration'];
        $od_portfolio_content_delay = $settings['od_portfolio_content_delay'];
?>


        <div class=" wow img-anim-top" data-wow-duration="<?php echo esc_attr($od_portfolio_content_duration, OD); ?>s" data-wow-delay="<?php echo esc_attr($od_portfolio_content_delay, OD); ?>s">
            <div class="it-portfolio-item zoom">
                <div class="it-portfolio-thumb img-zoom">
                    <img class="w-100" src="<?php echo esc_url($od_portfolio_content_image['url'], OD); ?>" alt="">
                </div>
                <div class="it-portfolio-content d-flex justify-content-between">
                    <div>
                        <h4 class="it-portfolio-title"><a class="border-line-black" href="<?php echo esc_url($od_portfolio_content_url['url'], OD); ?>"><?php echo esc_html($od_portfolio_content_title, OD); ?></a></h4>
                        <span><?php echo esc_html($od_portfolio_content_subtitle, OD); ?></span>
                    </div>
                    <div class="it-portfolio-arrow">
                        <a href="<?php echo esc_url($od_portfolio_content_url['url'], OD); ?>">
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





        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_Portfolio());
