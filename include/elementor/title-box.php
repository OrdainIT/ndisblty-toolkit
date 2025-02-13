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
class OD_Title_Box extends Widget_Base
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
        return 'od-title-box';
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
        return __('Title Box', 'ordainit-toolkit');
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
            'od_title_box_content',
            [
                'label' => __('Title Box Content', OD),
            ]
        );

        $this->add_control(
            'od_title_box_alignment',
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
            ]
        );

        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'od_title_box_title_show',
            [
                'label' => esc_html__('Title Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->add_control(
            'od_title_box_title_tag',
            [
                'label' => esc_html__('Title HTML Tag', 'tvcore'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'h1' => [
                        'title' => esc_html__('H1', 'tvcore'),
                        'icon' => 'eicon-editor-h1'
                    ],
                    'h2' => [
                        'title' => esc_html__('H2', 'tvcore'),
                        'icon' => 'eicon-editor-h2'
                    ],
                    'h3' => [
                        'title' => esc_html__('H3', 'tvcore'),
                        'icon' => 'eicon-editor-h3'
                    ],
                    'h4' => [
                        'title' => esc_html__('H4', 'tvcore'),
                        'icon' => 'eicon-editor-h4'
                    ],
                    'h5' => [
                        'title' => esc_html__('H5', 'tvcore'),
                        'icon' => 'eicon-editor-h5'
                    ],
                    'h6' => [
                        'title' => esc_html__('H6', 'tvcore'),
                        'icon' => 'eicon-editor-h6'
                    ]
                ],
                'default' => 'h4',
                'toggle' => false,
                'condition' => [
                    'od_title_box_title_show' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'od_title_box_title',
            [
                'label' => __('Heading Title', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Heading', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'label_block' => true,
                'condition' => [
                    'od_title_box_title_show' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'od_title_box_title_link',
            [
                'label' => __('Heading Link', OD),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', OD),
                'default' => [
                    'url' => '',
                    'is_external' => false,
                    'nofollow' => false,
                ],
                'condition' => [
                    'od_title_box_title_show' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'hr_2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'od_title_box_subtitle_show',
            [
                'label' => esc_html__('Subtitle Switcher', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', OD),
                'label_off' => esc_html__('Hide', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_title_box_subtitle',
            [
                'label' => __('Heading Subtitle', OD),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('OD Heading Subtitle', OD),
                'placeholder' => esc_html__('Type subtitle here', OD),
                'label_block' => true,
                'condition' => [
                    'od_title_box_subtitle_show' => 'yes',
                ]
            ]
        );

        $this->end_controls_section();


        // Style Starts
        $this->start_controls_section(
            'od_title_box_title_style',
            [
                'label' => __('Title Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_title_box_title_show' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'od_title_box_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-section-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_title_box_title_span_color',
            [
                'label' => esc_html__('Title Span Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-section-title span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_title_box_title_typography',
                'selector' => '{{WRAPPER}} .it-section-title',
            ]
        );

        $this->add_responsive_control(
            'od_title_box_title_margin',
            [
                'label' => esc_html__('Title Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_title_box_title_padding',
            [
                'label' => esc_html__('Title Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


        // Subtitle Style Starts
        $this->start_controls_section(
            'od_title_box_subtitle_style',
            [
                'label' => __('Subtitle Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_title_box_subtitle_show' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'od_title_box_subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-section-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_title_box_subtitle_icon_color',
            [
                'label' => esc_html__('Subtitle Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-section-subtitle::before' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-section-subtitle::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Subtitle Typography', OD),
                'name' => 'od_title_box_subtitle_typography',
                'selector' => '{{WRAPPER}} .it-section-subtitle',
            ]
        );

        $this->add_responsive_control(
            'od_title_box_subtitle_margin',
            [
                'label' => esc_html__('Subtitle Margin', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-section-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'od_title_box_subtitle_padding',
            [
                'label' => esc_html__('Subtitle Padding', OD),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .it-section-subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $od_title_box_title_show = $settings['od_title_box_title_show'];
        $od_title_box_title = $settings['od_title_box_title'];
        $od_title_box_title_alignment = $settings['od_title_box_alignment'];
        $od_title_box_subtitle_show = $settings['od_title_box_subtitle_show'];
        $od_title_box_subtitle = $settings['od_title_box_subtitle'];

        $this->add_render_attribute('section_title_box_args', 'class', 'it-section-title-box');
        $this->add_render_attribute('section_title_box_args', 'style', 'text-align: ' . $od_title_box_title_alignment . ';');

        $this->add_render_attribute('heading_title_args', 'class', 'it-section-title');

        $link_attributes = "";
        $link_settings = $settings['od_title_box_title_link'];

        if (!empty($link_settings['url'])) {
            $this->add_render_attribute('heading_link_args', 'href', esc_url($link_settings['url']));
            if (!empty($link_settings['is_external'])) {
                $this->add_render_attribute('heading_link_args', 'target', '_blank');
            }
            if (!empty($link_settings['nofollow'])) {
                $this->add_render_attribute('heading_link_args', 'rel', 'nofollow');
            }
            $link_attributes = $this->get_render_attribute_string('heading_link_args');
        }
?>


        <div <?php echo $this->get_render_attribute_string('section_title_box_args'); ?>>

            <?php if (!empty($od_title_box_subtitle_show)): ?>
                <span class="it-section-subtitle">
                    <?php echo esc_html($od_title_box_subtitle, 'ordainit-toolkit'); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($od_title_box_title_show)): ?>
                <?php
                $heading_tag = esc_attr($settings['od_title_box_title_tag']);
                $heading_attributes = $this->get_render_attribute_string('heading_title_args');
                $heading_content = od_kses($od_title_box_title, 'ordainit-toolkit');

                if ($link_attributes) {
                    $heading_content = '<a ' . $link_attributes . '>' . $heading_content . '</a>';
                }

                echo "<{$heading_tag} {$heading_attributes}>{$heading_content}</{$heading_tag}>";
                ?>
            <?php endif; ?>

        </div>


        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Title_Box());
