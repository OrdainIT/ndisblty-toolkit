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
class OD_Process_Box extends Widget_Base
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
        return 'od-process-box';
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
        return __('Process Box', 'ordainit-toolkit');
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

        // Process Box Content
        $this->start_controls_section(
            'od_process_box_content',
            [
                'label' => esc_html__('Process Content', OD),
            ]
        );

        $this->add_control(
            'od_process_box_title',
            [
                'label' => esc_html__('Title', OD),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => '3',
                'default' => esc_html__('OD Process Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'od_process_box_title_url',
            [
                'label' => esc_html__('Title Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-3']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Process Description', OD),
                'placeholder' => esc_html__('Type Description here', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_process_box_steps',
            [
                'label' => esc_html__('Step Name', OD),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Step 01', OD),
                'placeholder' => esc_html__('Type steps here', OD),
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_img',
            [
                'label' => esc_html__('Choose Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_icon',
            [
                'label' => esc_html__('Icon', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => od_kses('Icon', OD),
                'placeholder' => esc_html__('Put svg icon here', OD),
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-2', 'layout-3']
                ]
            ]
        );

        $this->end_controls_section();


        // Style Starts
        // Process Box Style
        $this->start_controls_section(
            'od_process_box_style',
            [
                'label' => __('Process Box Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_process_box_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-item' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-step-3-item' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-feature-4-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_process_box_bg_hover_color',
            [
                'label' => esc_html__('BG Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-4-item:hover' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-3']
                ]
            ]
        );


        $this->add_responsive_control(
            'od_process_box_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-step-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-step-3-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-feature-4-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_process_box_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-step-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-step-3-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-feature-4-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'od_process_box_border_radius',
            [
                'label' => esc_html__('Border Radius', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-step-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-step-3-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .it-feature-4-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'od_process_box_box_shadow',
                'selector' => '
            {{WRAPPER}} .it-step-3-item,
            {{WRAPPER}} .it-feature-4-item
        ',
                'condition' => [
                    'od_design_style' => ['layout-2', 'layout-3']
                ]
            ]
        );


        $this->end_controls_section();


        // Process Box Content Style
        $this->start_controls_section(
            'od_process_box_content_style',
            [
                'label' => __('Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_process_box_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_process_box_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-step-4-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-feature-4-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_process_box_title_hover_color',
            [
                'label' => esc_html__('Title Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-4-item:hover .it-feature-4-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-3']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_title_border_color',
            [
                'label' => esc_html__('Title Border Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .border-line-white-2' => 'background-image:linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                ],
                'condition' => [
                    'od_design_style' => ['layout-3']
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_process_box_title_typography',
                'selector' => '
            {{WRAPPER}} .it-step-title,
            {{WRAPPER}} .it-step-4-title,
            {{WRAPPER}} .it-feature-4-title
        ',
            ]
        );

        $this->add_control(
            'od_process_box_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_process_box_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-step-3-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-feature-4-item p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_process_box_description_hover_color',
            [
                'label' => esc_html__('Description Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-4-item:hover p' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-3']
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_process_box_description_typography',
                'selector' => '
            {{WRAPPER}} .it-step-content p,
            {{WRAPPER}} .it-step-3-content p,
            {{WRAPPER}} .it-feature-4-item p
        ',
            ]
        );

        $this->add_control(
            'od_process_box_step_heading',
            [
                'label' => esc_html__('Step', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_steps_color',
            [
                'label' => esc_html__('Step Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-content span' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_steps_bg_color',
            [
                'label' => esc_html__('Step BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-content span' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Step Typography', OD),
                'name' => 'od_process_box_steps_typography',
                'selector' => '{{WRAPPER}} .it-step-content span',
                'condition' => [
                    'od_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_icon_heading',
            [
                'label' => esc_html__('Icon', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'od_design_style' => ['layout-2', 'layout-3']
                ]
            ]
        );

        $this->add_control(
            'od_process_box_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-icon svg path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .it-feature-4-icon svg path' => 'fill: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-2', 'layout-3']
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
        $od_process_box_title = $settings['od_process_box_title'];
        $od_process_box_description = $settings['od_process_box_description'];
        $od_process_box_steps = $settings['od_process_box_steps'];
        $od_process_box_img = $settings['od_process_box_img'];
        $od_process_box_icon = $settings['od_process_box_icon'];
        $od_process_box_title_url = $settings['od_process_box_title_url'];
?>


        <?php if ($settings['od_design_style']  == 'layout-3'): ?>

            <div class="it-feature-4-item mb-30">
                <span class="it-feature-4-icon mb-35">
                    <?php echo od_kses($od_process_box_icon, OD); ?>
                </span>
                <h4
                    class="it-feature-4-title">
                    <a class="border-line-white-2"
                        href="<?php echo esc_url($od_process_box_title_url['url'], OD); ?>">
                        <?php echo od_kses($od_process_box_title, OD); ?>
                    </a>
                </h4>
                <p><?php echo od_kses($od_process_box_description, OD); ?></p>
            </div>

        <?php elseif ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="it-step-3-item p-relative text-center mb-30">
                <span class="it-step-4-icon">
                    <?php echo od_kses($od_process_box_icon, OD); ?>
                </span>
                <div class="it-step-3-content">
                    <h4 class="it-step-4-title"><?php echo od_kses($od_process_box_title, OD); ?></h4>
                    <p class="mb-0"><?php echo od_kses($od_process_box_description, OD); ?></p>
                </div>
            </div>
        <?php else: ?>

            <div class="it-step-item d-flex justify-content-center align-items-center">
                <div class="it-step-thumb mr-25">
                    <img src="<?php echo esc_url($od_process_box_img['url'], OD); ?>"
                        alt="<?php echo esc_attr__('process-img', OD); ?>" />
                </div>
                <div class="it-step-content">
                    <span><?php echo esc_html($od_process_box_steps, OD); ?></span>
                    <h4 class="it-step-title"><?php echo od_kses($od_process_box_title, OD); ?></h4>
                    <p><?php echo od_kses($od_process_box_description, OD); ?></p>
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

$widgets_manager->register(new OD_Process_Box());
