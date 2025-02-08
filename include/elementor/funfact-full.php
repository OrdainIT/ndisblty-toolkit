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
class OD_FunFact_Full extends Widget_Base
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
        return 'od-funfact-full';
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
        return __('FunFact Full', OD);
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
            'od_funfact_section',
            [
                'label' => esc_html__('Fun Facts', OD),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'od_funfact_lists',
            [
                'label' => esc_html__('FunFact List', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_funfact_number',
                        'label' => esc_html__('Number', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('0', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_funfact_suffix',
                        'label' => esc_html__('Suffix', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('+', OD),
                    ],
                    [
                        'name' => 'od_funfact_description',
                        'label' => esc_html__('Description', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Description', OD),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'od_funfact_number' => esc_html__('98', OD),
                        'od_funfact_suffix' => esc_html__('%', OD),
                        'od_funfact_description' => esc_html__('Device Comfort', OD),
                    ],
                    [
                        'od_funfact_number' => esc_html__('15', OD),
                        'od_funfact_suffix' => esc_html__('k+', OD),
                        'od_funfact_description' => esc_html__('Success Stories', OD),
                    ],
                    [
                        'od_funfact_number' => esc_html__('99', OD),
                        'od_funfact_suffix' => esc_html__('%', OD),
                        'od_funfact_description' => esc_html__('Fit Success', OD),
                    ],
                ],
                'title_field' => '{{{ od_funfact_description }}}',
            ]
        );

        $this->end_controls_section();


        // Funfact Style
        $this->start_controls_section(
            'od_funfact_style',
            [
                'label' => __('Funfact Style', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_funfact_bg_color',
            [
                'label' => esc_html__('Fun Fact BG', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-funfact-2-ptb.red-bg' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_funfact_margin',
            [
                'label' => esc_html__('Fun Fact Margin', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .it-funfact-2-ptb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_funfact_padding',
            [
                'label' => esc_html__('Fun Fact Padding', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .it-funfact-2-ptb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();

        // Funfact Content Style
        $this->start_controls_section(
            'od_funfact_content_style',
            [
                'label' => __('Funfact Content Style', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_funfact_number_color',
            [
                'label' => esc_html__('Number Color', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-funfact-2-item h4' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Number Typography', 'ordainit-toolkit'),
                'name' => 'od_funfact_number_typography',
                'selector' => '{{WRAPPER}} .it-funfact-2-item h4',
            ]
        );

        $this->add_control(
            'od_funfact_description_color',
            [
                'label' => esc_html__('Description Color', 'ordainit-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-funfact-2-item span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', 'ordainit-toolkit'),
                'name' => 'od_funfact_description_typography',
                'selector' => '{{WRAPPER}} .it-funfact-2-item span',
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
        $od_funfact_lists = $settings['od_funfact_lists'];
?>


        <div class="it-funfact-2-area it-funfact-2-ptb red-bg">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($od_funfact_lists as $index => $od_funfact_list): ?>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="it-funfact-2-item">
                                <h4>
                                    <i class="purecounter"
                                        data-purecounter-duration="1"
                                        data-purecounter-end="<?php echo esc_attr($od_funfact_list['od_funfact_number'], 'ordainit-toolkit') ?>">
                                        0</i><?php echo esc_html($od_funfact_list['od_funfact_suffix'], 'ordainit-toolkit') ?>

                                </h4>
                                <span><?php echo od_kses($od_funfact_list['od_funfact_description'], 'ordainit-toolkit') ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>


        <script>
            jQuery(document).ready(function($) {

                // Counter Js
                if ($(".purecounter").length) {
                    new PureCounter({
                        filesizing: true,
                        selector: ".filesizecount",
                        pulse: 2,
                    });
                    new PureCounter();
                }

            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_FunFact_Full());
