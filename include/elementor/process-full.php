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
class OD_Process_Full extends Widget_Base
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
        return 'od-process-full';
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
        return __('Process Full', 'ordainit-toolkit');
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

        // Process Content
        $this->start_controls_section(
            'od_process_content',
            [
                'label' => esc_html__('Process Content', OD),
            ]
        );


        $this->add_control(
            'od_process_lists',
            [
                'label' => esc_html__('Process List', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_process_list_title',
                        'label' => esc_html__('Title', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Step Title', OD),
                        'placeholder' => esc_html__('Type title here', OD),
                        'rows' => '3',
                        'label_block' => true,
                    ],

                    [
                        'name' => 'od_process_list_description',
                        'label' => esc_html__('Description', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Step Description', OD),
                        'placeholder' => esc_html__('Type description here', OD),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'od_process_list_steps',
                        'label' => esc_html__('Step Name', OD),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Step 01', OD),
                        'placeholder' => esc_html__('Type steps here', OD),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'od_process_list_icon',
                        'label' => esc_html__('Icon', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => od_kses('Icon', OD),
                        'placeholder' => esc_html__('Put svg icon here', OD),
                        'label_block' => true,
                    ],

                ],
                'default' => [
                    [
                        'od_process_list_steps' => esc_html__('Step 01', OD),
                    ],
                    [
                        'od_process_list_steps' => esc_html__('Step 02', OD),
                    ],
                    [
                        'od_process_list_steps' => esc_html__('Step 03', OD),
                    ],
                    [
                        'od_process_list_steps' => esc_html__('Step 04', OD),
                    ],
                ],
                'title_field' => '{{{ od_process_list_steps }}}',
            ]
        );

        $this->end_controls_section();



        // Process Box Content Style
        $this->start_controls_section(
            'od_process_content_style',
            [
                'label' => __('Process Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_process_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_process_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_process_title_typography',
                'selector' => '{{WRAPPER}} .it-step-4-title',
            ]
        );

        $this->add_control(
            'od_process_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_process_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_process_description_typography',
                'selector' => '{{WRAPPER}} .it-step-4-content p',
            ]
        );


        $this->add_control(
            'od_process_icon_heading',
            [
                'label' => esc_html__('Icon', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_process_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-icon svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'od_process_steps_heading',
            [
                'label' => esc_html__('Step', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs(
            'od_process_steps_style_tabs'
        );

        $this->start_controls_tab(
            'od_process_steps_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'od_process_steps_style_normal_tab_color',
            [
                'label' => esc_html__('Step Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-position' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_process_steps_style_normal_tab_bg_color',
            [
                'label' => esc_html__('Step BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-position' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        //Hover
        $this->start_controls_tab(
            'od_process_steps_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'od_process_steps_style_hover_tab_color',
            [
                'label' => esc_html__('Step Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-item:hover .it-step-4-position' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_process_steps_style_hover_tab_bg_color',
            [
                'label' => esc_html__('Step BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-item:hover .it-step-4-position' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Step Typography', OD),
                'name' => 'od_process_steps_typography',
                'selector' => '{{WRAPPER}} .it-step-4-position',
            ]
        );

        $this->add_control(
            'od_process_line_heading',
            [
                'label' => esc_html__('Line', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_process_line_color',
            [
                'label' => esc_html__('Line Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-step-4-item-line svg path' => 'fill: {{VALUE}}',
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
        $od_process_lists = $settings['od_process_lists'];
?>


        <div class="row gx-0">
            <?php foreach ($od_process_lists as $index => $od_process_list): ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <?php if ($index !== count($od_process_lists) - 1): ?>
                        <div class="it-step-4-item mb-30 item-style-<?php echo $index + 1 ?>">

                            <div class="it-step-4-item-line">
                                <svg width="236" height="6" viewBox="0 0 236 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.333333 3C0.333333 4.47276 1.52724 5.66667 3 5.66667C4.47276 5.66667 5.66667 4.47276 5.66667 3C5.66667 1.52724 4.47276 0.333333 3 0.333333C1.52724 0.333333 0.333333 1.52724 0.333333 3ZM230.333 3C230.333 4.47276 231.527 5.66667 233 5.66667C234.473 5.66667 235.667 4.47276 235.667 3C235.667 1.52724 234.473 0.333333 233 0.333333C231.527 0.333333 230.333 1.52724 230.333 3ZM3 3.5H233V2.5H3V3.5Z"
                                        fill="#011D4E" />
                                </svg>
                            </div>

                            <span class="it-step-4-position"><?php echo esc_html($od_process_list['od_process_list_steps'], OD); ?></span>
                            <span class="it-step-4-icon">
                                <?php echo od_kses($od_process_list['od_process_list_icon'], OD); ?>
                            </span>
                            <div class="it-step-4-content">
                                <h4 class="it-step-4-title"><?php echo esc_html($od_process_list['od_process_list_title'], OD); ?></h4>
                                <p><?php echo od_kses($od_process_list['od_process_list_description'], OD); ?></p>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="it-step-4-item item-style-4 d-flex justify-content-xl-end mb-30">
                            <div>
                                <span class="it-step-4-position"><?php echo esc_html($od_process_list['od_process_list_steps'], OD); ?></span>
                                <span class="it-step-4-icon">
                                    <?php echo od_kses($od_process_list['od_process_list_icon'], OD); ?>
                                </span>
                                <div class="it-step-4-content">
                                    <h4 class="it-step-4-title"><?php echo esc_html($od_process_list['od_process_list_title'], OD); ?></h4>
                                    <p><?php echo od_kses($od_process_list['od_process_list_description'], OD); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

        </div>


        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Process_Full());
