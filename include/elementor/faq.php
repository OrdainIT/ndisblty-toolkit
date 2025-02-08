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
class Od_Faq extends Widget_Base
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
        return 'od-faq';
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
        return __('FAQ', 'ordainit-toolkit');
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
            'od_faq_content',
            [
                'label' => __('Faq', 'ordainit-toolkit'),
            ]
        );


        $this->add_control(
            'od_faq_content_list',
            [
                'label' => esc_html__('Faq List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'faq_list_number',
                        'label' => esc_html__('Faq Number', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Q1', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'faq_list_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__(' What types of disabilities do you support?', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'faq_list_description',
                        'label' => esc_html__('Description', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Description', 'textdomain'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'faq_list_title' => esc_html__('Title #1', 'textdomain'),
                    ],
                    [
                        'faq_list_title' => esc_html__('Title #1', 'textdomain'),
                    ],
                    [
                        'faq_list_title' => esc_html__('Title #1', 'textdomain'),
                    ],
                    [
                        'faq_list_title' => esc_html__('Title #1', 'textdomain'),
                    ],
                    [
                        'faq_list_title' => esc_html__('Title #1', 'textdomain'),
                    ],
                    [
                        'faq_list_title' => esc_html__('Title #1', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ faq_list_title }}}',
            ]
        );

        $this->end_controls_section();

        // Style Starts

        $this->start_controls_section(
            'od_faq_area_Style',
            [
                'label' => __('Style', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_faq_area_bg_heading',
            [
                'label' => esc_html__('FAQ BG', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs(
            'od_faq_area_bg_tabs'
        );

        $this->start_controls_tab(
            'od_faq_area_bg_normal_tab',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );

        $this->add_control(
            'od_faq_area_bg_normal_color',
            [
                'label' => esc_html__('BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-items' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'od_faq_area_bg_active_tab',
            [
                'label' => esc_html__('Active', 'textdomain'),
            ]
        );

        $this->add_control(
            'od_faq_area_bg_active_color',
            [
                'label' => esc_html__('BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-items.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control(
            'od_faq_area_title_heading',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs(
            'od_faq_area_title_tabs'
        );

        $this->start_controls_tab(
            'od_faq_area_title_normal_tab',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );

        $this->add_control(
            'od_faq_area_title_normal_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-buttons' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'od_faq_area_title_active_tab',
            [
                'label' => esc_html__('Active', 'textdomain'),
            ]
        );

        $this->add_control(
            'od_faq_area_title_active_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-items.active .accordion-buttons' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_faq_area_title_typo',
                'selector' => '{{WRAPPER}} .it-custom-accordion .accordion-buttons',
            ]
        );


        $this->add_control(
            'od_faq_area_description_heading',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_faq_area_description_active_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-body p' => 'color: {{VALUE}}',
                ],
            ]
        );



        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_faq_area_description_typo',
                'selector' => '{{WRAPPER}} .it-custom-accordion .accordion-body p',
            ]
        );


        $this->add_control(
            'od_faq_area_icon_heading',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_faq_area_icon_bg_color',
            [
                'label' => esc_html__('BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-buttons::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'od_faq_area_icon_icon_color',
            [
                'label' => esc_html__('Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-custom-accordion .accordion-buttons::after' => 'color: {{VALUE}}',
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

        $od_faq_content_list = $settings['od_faq_content_list'];
?>

        <div class="it-custom-accordion">
            <div class="accordion" id="accordionExample">

                <?php $i = 0;
                foreach ($od_faq_content_list as $single_faq): $i++; ?>

                    <div class="accordion-items <?php echo  $i === 1 ? 'active' : '' ?>">
                        <h2 class="accordion-header" id="heading<?php echo esc_attr($i, OD); ?>">
                            <button class="accordion-buttons <?php echo $i === 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo esc_attr($i, OD); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($i, OD); ?>">
                                <span><?php echo esc_html($single_faq['faq_list_number'], OD); ?></span> <?php echo esc_html($single_faq['faq_list_title'], OD); ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo esc_attr($i, OD); ?>" class="accordion-collapse collapse <?php echo $i === 1 ? ' show' : '' ?> "
                            aria-labelledby="heading<?php echo esc_attr($i, OD); ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex align-items-center">
                                <p class="mb-0">
                                    <?php echo esc_html($single_faq['faq_list_description'], OD); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_Faq());
