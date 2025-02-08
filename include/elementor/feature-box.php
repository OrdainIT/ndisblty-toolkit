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
class OD_Feature_Box extends Widget_Base
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
        return 'od-feature-box';
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
        return __('Feature Box', 'ordainit-toolkit');
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

        // Feature BG Image
        $this->start_controls_section(
            'od_feature_box_bg_img_section',
            [
                'label' => esc_html__('Feature BG Image', OD),
            ]
        );

        $this->add_control(
            'od_feature_box_bg_img',
            [
                'label' => esc_html__('Choose BG Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        // Feature List Content
        $this->start_controls_section(
            'od_feature_box_section_content_list',
            [
                'label' => __('Feature Content', OD),
            ]
        );

        $this->add_control(
            'od_feature_box_lists',
            [
                'label' => esc_html__('Feature List', OD),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'od_feature_box_list_title',
                        'label' => esc_html__('Title', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Hero Title', OD),
                        'placeholder' => esc_html__('Type title here', OD),
                        'rows' => '3',
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_feature_box_list_description',
                        'label' => esc_html__('Description', OD),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('OD Hero Description', OD),
                        'placeholder' => esc_html__('Type description here', OD),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'od_feature_box_list_img',
                        'label' => esc_html__('Choose Feature Image', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'od_feature_box_list_shape_img',
                        'label' => esc_html__('Choose Shape Image', OD),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'default' => [
                    [
                        'od_feature_box_list_title' => esc_html__('Od Feature Title 1', OD),
                    ],
                    [
                        'od_feature_box_list_title' => esc_html__('Od Feature Title 2', OD),
                    ],
                    [
                        'od_feature_box_list_title' => esc_html__('Od Feature Title 3', OD),
                    ],
                ],
                'title_field' => 'Feature Content',
            ]
        );

        $this->end_controls_section();


        // Feature Box Style
        $this->start_controls_section(
            'od_feature_box_style',
            [
                'label' => __('Feature Box Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_feature_box_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-wrap' => 'background-color: {{VALUE}}',

                ],
            ]
        );

        $this->add_responsive_control(
            'od_feature_box_margin',
            [
                'label' => esc_html__('Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-feature-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_feature_box_padding',
            [
                'label' => esc_html__('Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-feature-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'od_feature_box_border',
                'selector' => '{{WRAPPER}} .it-feature-wrap',
            ]
        );

        $this->end_controls_section();


        // Feature Box Content Style
        $this->start_controls_section(
            'od_feature_box_content_style',
            [
                'label' => __('Feature Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'od_feature_box_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_feature_box_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-title' => 'color: {{VALUE}}',

                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_feature_box_title_typography',
                'selector' => '{{WRAPPER}} .it-feature-title',
            ]
        );

        $this->add_control(
            'od_feature_box_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_feature_box_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-content p' => 'color: {{VALUE}}',

                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_feature_box_description_typography',
                'selector' => '{{WRAPPER}} .it-feature-content p',
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
        $od_feature_box_bg_img = $settings['od_feature_box_bg_img'];
        $od_feature_box_lists = $settings['od_feature_box_lists'];
?>


        <div class="it-feature-area">
            <div class="it-feature-wrap section-bg theme-bg"
                style="background-image: url('<?php echo esc_url($od_feature_box_bg_img['url'], OD); ?>');">
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($od_feature_box_lists as $od_feature_box_list): ?>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="it-feature-item d-flex align-items-center">
                                    <div class="it-feature-icon-box p-relative">
                                        <img src="<?php echo esc_url($od_feature_box_list['od_feature_box_list_shape_img']['url'], OD); ?>"
                                            alt="<?php echo esc_attr__('shape-img', OD); ?>">
                                        <span class="icon">
                                            <img
                                                src="<?php echo esc_url($od_feature_box_list['od_feature_box_list_img']['url'], OD); ?>"
                                                alt="<?php echo esc_attr__('feature-img', OD); ?>">
                                        </span>
                                    </div>
                                    <div class="it-feature-content">
                                        <h4 class="it-feature-title"><?php echo esc_html($od_feature_box_list['od_feature_box_list_title'], OD); ?></h4>
                                        <p><?php echo od_kses($od_feature_box_list['od_feature_box_list_description'], OD); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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

$widgets_manager->register(new OD_Feature_Box());
