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
class OD_Funfact_Box extends Widget_Base
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
        return 'od-funfact-box';
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
        return __('Funfact Box', 'ordainit-toolkit');
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

        // Funfact Number
        $this->start_controls_section(
            'od_funfact_box_content',
            [
                'label' => __('Fun Fact Content', OD),
            ]
        );

        $this->add_control(
            'od_funfact_box_alignment',
            [
                'label' => __('Box Alignment', OD),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', OD),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', OD),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', OD),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'condition' => [
                    'od_design_style' => ['layout-2']
                ]
            ]
        );

        $this->add_control(
            'hr_3',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'od_funfact_box_icon',
            [
                'label' => esc_html__('SVG Icon', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => od_kses('Icon', OD),
                'placeholder' => esc_html__('Put your svg icon here', OD),
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );


        $this->add_control(
            'od_funfact_box_number',
            [
                'label' => esc_html__('Number', OD),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('50', OD),
                'placeholder' => esc_html__('Type counter Number here', OD),
            ]
        );

        $this->add_control(
            'od_funfact_box_suffix',
            [
                'label' => esc_html__('Suffix', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+', OD),
                'placeholder' => esc_html__('Type Suffix here', OD),
            ]
        );

        $this->add_control(
            'od_funfact_box_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Description', OD),
                'placeholder' => esc_html__('Type description here', OD),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();


        // Funfact Style
        $this->start_controls_section(
            'od_funfact_box_style',
            [
                'label' => __('Funfact Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-funfact-2-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-funfact-2-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


        // Funfact Content Style
        $this->start_controls_section(
            'od_funfact_box_content_style',
            [
                'label' => __('Funfact Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_funfact_box_icon_heading',
            [
                'label' => esc_html__('Icon', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_funfact_box_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-icon svg path' => 'fill: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_funfact_box_icon_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-icon' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );


        $this->add_responsive_control(
            'od_funfact_box_icon_margin',
            [
                'label' => esc_html__('Icon Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_icon_padding',
            [
                'label' => esc_html__('Icon Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_funfact_box_number_heading',
            [
                'label' => esc_html__('Number', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_funfact_box_number_color',
            [
                'label' => esc_html__('Number Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-funfact-2-item h4' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Number Typography', OD),
                'name' => 'od_funfact_box_number_typography',
                'selector' => '
            {{WRAPPER}} .it-about-funfact-title,
            {{WRAPPER}} .it-funfact-2-item h4
        ',
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_number_margin',
            [
                'label' => esc_html__('Number Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-funfact-2-item h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_number_padding',
            [
                'label' => esc_html__('Number Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-funfact-2-item h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'od_funfact_box_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_funfact_box_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-content span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-funfact-2-item span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_funfact_box_description_typography',
                'selector' => '
            {{WRAPPER}} .it-about-funfact-content span,
            {{WRAPPER}} .it-funfact-2-item span
        ',
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_description_margin',
            [
                'label' => esc_html__('Description Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-funfact-2-item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_funfact_box_description_padding',
            [
                'label' => esc_html__('Description Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-funfact-content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-funfact-2-item span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $od_funfact_box_icon = $settings['od_funfact_box_icon'];
        $od_funfact_box_number = $settings['od_funfact_box_number'];
        $od_funfact_box_suffix = $settings['od_funfact_box_suffix'];
        $od_funfact_box_description = $settings['od_funfact_box_description'];
        $od_funfact_box_alignment = $settings['od_funfact_box_alignment'];
?>

        <?php if ($settings['od_design_style']  == 'layout-2'):
            $this->add_render_attribute('funfact_box_args', 'class', 'it-funfact-2-item');
            $this->add_render_attribute('funfact_box_args', 'style', 'text-align: ' . $od_funfact_box_alignment . ';');
        ?>

            <div <?php echo $this->get_render_attribute_string('funfact_box_args'); ?>>
                <h4>
                    <i
                        class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-end="<?php echo esc_attr($od_funfact_box_number, OD); ?>">
                        0
                    </i>
                    <?php echo esc_html($od_funfact_box_suffix, OD); ?>
                </h4>
                <span><?php echo od_kses($od_funfact_box_description, OD); ?></span>
            </div>

        <?php else: ?>

            <div class="it-about-funfact-item d-flex align-items-center">
                <span class="it-about-funfact-icon">
                    <?php echo od_kses($od_funfact_box_icon, OD); ?>
                </span>
                <div class="it-about-funfact-content">
                    <h5 class="it-about-funfact-title">
                        <i class="purecounter" data-purecounter-duration="1"
                            data-purecounter-end="<?php echo esc_attr($od_funfact_box_number, OD); ?>"></i>
                        <?php echo esc_html($od_funfact_box_suffix, OD); ?>
                    </h5>
                    <span><?php echo od_kses($od_funfact_box_description, OD); ?></span>
                </div>
            </div>

        <?php endif; ?>



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

$widgets_manager->register(new OD_Funfact_Box());
