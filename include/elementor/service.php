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
class Od_service extends Widget_Base
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
        return 'od-service';
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
        return __('Services', 'ordainit-toolkit');
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
                    'layout-4' => esc_html__('Layout 4', OD),
                    'layout-5' => esc_html__('Layout 5', OD),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();



        $this->start_controls_section(
            'od_service_section_service_qery',
            [
                'label' => __('Post Query', OD),
            ]
        );



        $this->add_control(
            'od_service_section_service_post_per_page',
            [
                'label' => esc_html__('Post Per Page', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('3', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_category_select',
            [
                'label' => esc_html__('Select Post Category', OD),
                'type' => Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => true,
                'options' => od_get_all_categories_for_service(), // Custom function to get categories
            ]
        );

        $this->add_control(
            'od_service_post_orderby',
            [
                'label' => esc_html__('Order', OD),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'DESC' => esc_html__('DESC', OD),
                    'ASC' => esc_html__('ASC', OD),
                ],
            ]
        );



        $this->add_control(
            'od_service_section_service_btn',
            [
                'label' => esc_html__('service Button Text', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('More Details', OD),
                'label_block' => true,
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2'],
                ],
            ]
        );




        $this->end_controls_section();










        $this->start_controls_section(
            'service_section_bg_style',
            [
                'label' => __('BG Color', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2', 'layout-4', 'layout-5'],
                ],
            ]
        );

        $this->start_controls_tabs(
            'service_section_bg_style_tabs'
        );

        $this->start_controls_tab(
            'service_section_bg_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'service_section_bg_style_normal_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-item' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-2-item' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-4-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'service_section_bg_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'service_section_bg_style_hover_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-item:hover' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-2-item:hover' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-4-item:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();


        $this->end_controls_tabs();



        $this->end_controls_section();

        $this->start_controls_section(
            'service_section_title_style',
            [
                'label' => __('Title', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'service_section_title_style_tabs'
        );

        $this->start_controls_tab(
            'service_section_title_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'service_section_title_style_normal_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-3-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .border-line-black' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                    '{{WRAPPER}} .it-service-4-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'service_section_title_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'service_section_title_style_hover_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-item:hover .it-service-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-reveal-item:hover .it-service-3-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .border-line-white-2' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                    '{{WRAPPER}} .border-line-white' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                    '{{WRAPPER}} .it-service-4-item:hover .it-service-4-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();


        $this->end_controls_tabs();


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'service_section_title_style_typo',
                'selector' => '{{WRAPPER}} .it-service-item, {{WRAPPER}}  .it-service-3-title, {{WRAPPER}} .it-service-4-title',
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'service_section_description_style',
            [
                'label' => __('Description', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'service_section_description_style_tabs'
        );

        $this->start_controls_tab(
            'service_section_description_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'service_section_description_style_normal_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-3-text p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-4-item p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'service_section_description_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'service_section_description_style_hover_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-item:hover .it-service-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-reveal-item:hover .it-service-3-text p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-service-4-item:hover p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();


        $this->end_controls_tabs();


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'service_section_description_style_typo',
                'selector' => '{{WRAPPER}} .it-service-content p, {{WRAPPER}} .it-service-3-text p, {{WRAPPER}} .it-service-4-item p',
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'service_section_icon_button_style',
            [
                'label' => __('Button', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-4', 'layout-5'],
                ],
            ]
        );

        $this->start_controls_tabs(
            'service_section_icon_button_style_tabs'
        );

        $this->start_controls_tab(
            'service_section_icon_button_style_normal_tabs',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'service_section_icon_button_style_normal_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-4-arrow' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'service_section_icon_button_style_normal_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-4-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'service_section_icon_button_style_hover_tabs',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );

        $this->add_control(
            'service_section_icon_button_style_hover_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-4-item:hover .it-service-4-arrow' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_section_icon_button_style_hover_icon_color',
            [
                'label' => esc_html__('icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-4-item:hover .it-service-4-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab(
            'service_section_icon_button_style_after_tabs',
            [
                'label' => esc_html__('Box Hover', OD),
            ]
        );

        $this->add_control(
            'service_section_icon_button_style_hover_after_bg_color',
            [
                'label' => esc_html__('Box Hover BG', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-4-arrow::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();

        $this->end_controls_tabs();



        $this->end_controls_section();

        $this->start_controls_section(
            'service_section_icon3_style',
            [
                'label' => __('Icon', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-3'],
                ],
            ]
        );

        $this->add_control(
            'service_section_icon3_style_normal_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-3-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_section_icon3_style_hover_color',
            [
                'label' => esc_html__('Icon Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-reveal-item:hover .it-service-3-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'service_section_button_style',
            [
                'label' => __('Button', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-1', 'layout-2'],
                ],
            ]
        );

        $this->start_controls_tabs(
            'service_section_button_style_tabs'
        );

        $this->start_controls_tab(
            'service_section_button_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'service_section_button_style_normal_bg_color',
            [
                'label' => esc_html__('Button BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-sm' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'service_section_button_style_normal_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-sm' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'service_section_button_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );



        $this->add_control(
            'service_section_button_style_hover_bg_color',
            [
                'label' => esc_html__('Button BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-sm:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'service_section_button_style_hover_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-btn-sm:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();


        $this->end_controls_tabs();


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'service_section_button_style_typo',
                'selector' => '{{WRAPPER}} .it-btn-sm',
            ]
        );



        $this->end_controls_section();


        $this->start_controls_section(
            'service_section_small_image_box_style',
            [
                'label' => __('Small Image Box', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ],
            ]
        );


        $this->add_control(
            'service_section_small_image_box_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-2-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_section_small_image_box_border_color',
            [
                'label' => esc_html__('Border Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-service-2-icon' => 'border-color: {{VALUE}}',
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

        $od_service_section_service_btn = $settings['od_service_section_service_btn'];



        $od_service_section_service_post_per_page = $settings['od_service_section_service_post_per_page'];
        $od_category_select = $settings['od_category_select'];
        $od_service_post_orderby = $settings['od_service_post_orderby'];



        // Post Query

        // Check if category is selected
        if (!empty($od_category_select)) {
            // If categories are selected, add tax_query
            $args = array(
                'post_type'      => 'service', // Fetch service posts
                'posts_per_page' => $od_service_section_service_post_per_page, // Number of posts to display
                'order'          => $od_service_post_orderby, // Order of posts
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'service-cat', // Taxonomy to filter by
                        'field'    => 'term_id',  // Field type ('term_id', 'slug', or 'name')
                        'terms'    => $od_category_select, // Selected category IDs (single or multiple)
                        'operator' => 'IN', // Show posts matching any of the selected categories
                    ),
                ),
            );
        } else {
            // If no category is selected, show all posts
            $args = array(
                'post_type'      => 'service', // Fetch service posts
                'posts_per_page' => $od_service_section_service_post_per_page, // Number of posts to display
                'order'          => $od_service_post_orderby, // Order of posts
            );
        }


        $service_query = new \WP_Query($args);
?>

        <?php if ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="service_widget_2">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = -1;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';
                                $service_thumbnail_images = isset($service_meta_thumbnail['service_thumbnail_images']) ? $service_meta_thumbnail['service_thumbnail_images']['url'] : '';

                        ?>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-service-2-item zoom mb-30">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-service-2-thumb img-zoom">
                                                <?php if(!empty($service_thumbnail_images)):?>
                                                <img class="w-100" src="<?php echo esc_url($service_thumbnail_images, OD);?>" alt="<?php the_title(); ?>">
                                                <?php else:?>
                                                <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                <?php endif;?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="it-service-content p-relative mb-50">
                                            <?php if (!empty($service_thumbnail_image)): ?>
                                                <span class="it-service-2-icon">
                                                    <img src="<?php echo esc_url($service_thumbnail_image, OD); ?>" alt="<?php the_title(); ?>">
                                                </span>
                                            <?php endif; ?>
                                            <h4 class="it-service-title"><a class="border-line-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>
                                            <a class="it-btn-sm" href="<?php the_permalink(); ?>"><?php echo esc_html($od_service_section_service_btn, 'ordainit-toolkit'); ?></a>
                                        </div>
                                    </div>
                                </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>

        <?php elseif ($settings['od_design_style']  == 'layout-3'): ?>
            <div class="service_wdiget_3">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = 0;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';

                        ?>
                                <div class="col-12">
                                    <div class="it-service-3-item-wrap it-reveal-item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="it-service-3-left">
                                                        <h4 class="it-service-3-title"><span>0<?php echo esc_html($i, OD); ?>/</span><?php the_title(); ?></h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="it-service-3-right d-flex justify-content-between align-items-center">
                                                        <div class="it-service-3-text">
                                                            <p><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>
                                                        </div>
                                                        <span class="it-service-3-arrow">
                                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M41.6812 14.2001L5.88138 50L0 44.1186L35.7957 8.31878H4.24674V0H50V45.7533H41.6812V14.2001Z"
                                                                    fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="it-reveal-bg" style="background-image: url(<?php echo esc_url($service_thumbnail_image, OD); ?>);"></div>
                                    </div>
                                </div>


                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>
        <?php elseif ($settings['od_design_style']  == 'layout-4'): ?>

            <div class="service_widget_3">
                <div class="container">
                    <div class="row gx-35 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-3 row-cols-md-2  row-cols-1">
                        <?php
                        $i = -1;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;


                        ?>
                                <div class="col mb-30 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-service-4-item zoom text-center" style="background-image: url(<?php echo ORDAINIT_TOOLKIT_ADDONS_URL . '/assets/img/shap/service-4-1.png'; ?>);">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-service-4-thumb img-zoom">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <h4 class="it-service-4-title"><a class="border-line-white"
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="mb-35"><?php echo wp_trim_words(get_the_excerpt(), 9, '...'); ?></p>
                                        <a class="it-service-4-arrow" href="<?php the_permalink(); ?>">
                                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.4258 10.9899L23.0101 10.9899L23.0101 19.5741" stroke="currentcolor"
                                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10.9902 23.0106L22.8908 11.11" stroke="currentcolor" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>



        <?php elseif ($settings['od_design_style']  == 'layout-5'): ?>

            <div class="service_widget_5 it-service-5-style">
                <div class="container">
                    <div class="row gx-35 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-3 row-cols-md-2  row-cols-1">
                        <?php
                        $i = -1;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';

                        ?>
                                <div class="col mb-30 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-service-4-item text-center">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-service-4-thumb">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <h4 class="it-service-4-title"><a class="border-line-white"
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="mb-20"><?php echo wp_trim_words(get_the_excerpt(), 8, '...'); ?></p>
                                        <a class="it-service-4-arrow" href="<?php the_permalink(); ?>">
                                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.4258 10.9899L23.0101 10.9899L23.0101 19.5741" stroke="currentcolor"
                                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10.9902 23.0106L22.8908 11.11" stroke="currentcolor" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>


                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>


        <?php else: ?>


            <div class="service_widget_1">
                <div class="container">

                    <div class="row">
                        <?php
                        $i = -1;

                        if ($service_query->have_posts()) :
                            while ($service_query->have_posts()) : $service_query->the_post();

                                $i++;

                                $service_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_service_meta_side', true);


                                $service_thumbnail_image = isset($service_meta_thumbnail['service_thumbnail_image']) ? $service_meta_thumbnail['service_thumbnail_image']['url'] : '';

                        ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-service-item mb-30">
                                        <div class="it-service-content mb-50">
                                            <h4 class="it-service-title"><a class="border-line-white-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                                            <a class="it-btn-sm" href="<?php the_permalink(); ?>"><?php echo esc_html($od_service_section_service_btn, 'ordainit-toolkit'); ?></a>
                                        </div>
                                        <?php if (!empty($service_thumbnail_image)): ?>
                                            <div class="it-service-thumb" data-mask-src="<?php echo ORDAINIT_TOOLKIT_ADDONS_URL . '/assets/img/shap/service-bg.png'; ?>">
                                                <img src="<?php echo esc_url($service_thumbnail_image, OD); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>


                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>

                    </div>
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

$widgets_manager->register(new Od_service());
