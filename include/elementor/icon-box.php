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
class OD_Icon_Box extends Widget_Base
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
        return 'od-icon-box';
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
        return __('Icon Box', 'ordainit-toolkit');
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

        // Process Box Content
        $this->start_controls_section(
            'od_icon_box_content',
            [
                'label' => esc_html__('Icon Box Content', OD),
            ]
        );

        $this->add_control(
            'od_icon_box_title',
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
            'od_icon_box_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Description', OD),
                'placeholder' => esc_html__('Type Description here', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_icon_box_icon',
            [
                'label' => esc_html__('Icon', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => od_kses('Icon', OD),
                'placeholder' => esc_html__('Put svg icon here', OD),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();


        // Style Starts
        // Icon Box Style
        $this->start_controls_section(
            'od_icon_box_style',
            [
                'label' => __('Icon Box Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_icon_box_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-info' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->add_responsive_control(
            'od_icon_box_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_icon_box_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'od_icon_box_border_radius',
            [
                'label' => esc_html__('Border Radius', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'od_icon_box_box_shadow',
                'selector' => '
            {{WRAPPER}} .it-about-2-more-info,
            {{WRAPPER}} .it-choose-5-style .it-choose-5-item
        ',

            ]
        );

        $this->end_controls_section();


        // Process Box Content Style
        $this->start_controls_section(
            'od_icon_box_content_style',
            [
                'label' => __('Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_icon_box_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-choose-5-item-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_icon_box_title_typography',
                'selector' => '
            {{WRAPPER}} .it-about-2-more-title,
            {{WRAPPER}} .it-choose-5-item-title
        ',
            ]
        );

        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'od_icon_box_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-info p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-choose-5-style .it-choose-5-item p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_icon_box_description_typography',
                'selector' => '
            {{WRAPPER}} .it-about-2-more-info p,
            {{WRAPPER}} .it-choose-5-style .it-choose-5-item p
        ',
            ]
        );

        $this->add_control(
            'hr_2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'od_icon_box_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-icon svg path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .it-choose-5-item-icon svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_icon_box_icon_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-about-2-more-icon' => 'background: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
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
        $od_icon_box_title = $settings['od_icon_box_title'];
        $od_icon_box_description = $settings['od_icon_box_description'];
        $od_icon_box_icon = $settings['od_icon_box_icon'];
?>

        <?php if ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="it-choose-5-style">
                <div class="it-choose-5-item">
                    <span class="it-choose-5-item-icon">
                        <?php echo od_kses($od_icon_box_icon, OD); ?>
                    </span>
                    <h5 class="it-choose-5-item-title"><?php echo esc_html($od_icon_box_title, OD); ?></h5>
                    <p><?php echo od_kses($od_icon_box_description, OD); ?></p>
                </div>
            </div>


        <?php else: ?>

            <div class="it-about-2-more-info">
                <span class="it-about-2-more-icon">
                    <?php echo od_kses($od_icon_box_icon, OD); ?>
                </span>
                <h4 class="it-about-2-more-title"><?php echo esc_html($od_icon_box_title, OD); ?></h4>
                <p><?php echo od_kses($od_icon_box_description, OD); ?></p>
            </div>

        <?php endif; ?>



        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Icon_Box());
