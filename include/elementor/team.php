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
class Od_team extends Widget_Base
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
        return 'od-team';
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
        return __('Team', 'ordainit-toolkit');
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



        $this->start_controls_section(
            'od_team_section_team_qery',
            [
                'label' => __('Post Query', OD),
            ]
        );



        $this->add_control(
            'od_team_section_team_post_per_page',
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
                'options' => od_get_all_categories_for_team(), // Custom function to get categories
            ]
        );

        $this->add_control(
            'od_team_post_orderby',
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






        $this->end_controls_section();

        $this->start_controls_section(
            'team_section_style',
            [
                'label' => __('Team Style', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'team_section_style_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-innar-style .it-team-item' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ],
            ]
        );
        $this->add_control(
            'team_section_style_hover_color',
            [
                'label' => esc_html__('Hover BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-thumb::after' => 'background: linear-gradient(180deg, rgba(220, 29, 28, 0) 0%, {{VALUE}} 100%)',
                    '{{WRAPPER}} .it-team-item::after' => 'background: linear-gradient(180deg, rgba(220, 29, 28, 0) 0%, {{VALUE}} 100%)',
                ],
            ]
        );

        $this->add_control(
            'team_section_style_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .border-line-black' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                ],
            ]
        );

        $this->add_control(
            'team_section_style_title_hover_color',
            [
                'label' => esc_html__('Title Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-item:hover .it-team-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .border-line-white' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                ],
                'condition' => [
                    'od_design_style' => ['layout-2'],
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'team_section_style_title_typo',
                'selector' => '{{WRAPPER}} .it-team-2-title, {{WRAPPER}} .it-team-title',
            ]
        );

        $this->add_control(
            'team_section_style_designation_color',
            [
                'label' => esc_html__('Designation Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-content span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'team_section_style_designation_hover_color',
            [
                'label' => esc_html__('Designation Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-item:hover .it-team-2-content span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-item:hover .it-team-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'team_section_style_designation_typo',
                'selector' => '{{WRAPPER}} .it-team-2-content span, {{WRAPPER}} .it-team-content span',
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'team_section_icon_style',
            [
                'label' => __('Icon Style', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->start_controls_tabs(
            'team_section_icon_style_tabs'
        );

        $this->start_controls_tab(
            'team_section_icon_style_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );

        $this->add_control(
            'team_section_icon_style_normal_icon_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-social > a' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-innar-style .it-team-social a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'team_section_icon_style_normal_icon__color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-social > a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-innar-style .it-team-social a' => 'color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();

        $this->start_controls_tab(
            'team_section_icon_style_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'team_section_icon_style_hover_icon_bg_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-social > a::after' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-social a::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'team_section_icon_style_hover_icon__color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-2-social > a:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-team-social a:hover' => 'color: {{VALUE}}',
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

        $od_team_section_team_post_per_page = $settings['od_team_section_team_post_per_page'];
        $od_category_select = $settings['od_category_select'];
        $od_team_post_orderby = $settings['od_team_post_orderby'];

        // Post Query

        // Check if category is selected
        if (!empty($od_category_select)) {
            // If categories are selected, add tax_query
            $args = array(
                'post_type'      => 'team', // Fetch team posts
                'posts_per_page' => $od_team_section_team_post_per_page, // Number of posts to display
                'order'          => $od_team_post_orderby, // Order of posts
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'team-cat', // Taxonomy to filter by
                        'field'    => 'term_id',  // Field type ('term_id', 'slug', or 'name')
                        'terms'    => $od_category_select, // Selected category IDs (single or multiple)
                        'operator' => 'IN', // Show posts matching any of the selected categories
                    ),
                ),
            );
        } else {
            // If no category is selected, show all posts
            $args = array(
                'post_type'      => 'team', // Fetch team posts
                'posts_per_page' => $od_team_section_team_post_per_page, // Number of posts to display
                'order'          => $od_team_post_orderby, // Order of posts
            );
        }


        $team_query = new \WP_Query($args);
?>


        <?php if ($settings['od_design_style']  == 'layout-2'): ?>

            <div class="team_widget_2 it-team-innar-style ">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = -1;

                        if ($team_query->have_posts()) :
                            while ($team_query->have_posts()) : $team_query->the_post();

                                $i++;

                                $team_meta = get_post_meta(get_the_ID(), 'ndisblty_team_meta', true);
                                $team_designation = $team_meta['team_designation'];
                                $team_social_facebook_url = $team_meta['team_social_facebook_url'];
                                $team_social_twitter_url = $team_meta['team_social_twitter_url'];
                                $team_social_instagram_url = $team_meta['team_social_instagram_url'];



                            $team_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_team_meta_side', true);


                            $team_thumbnail_image = isset($team_meta_thumbnail['team_thumbnail_image']) ? $team_meta_thumbnail['team_thumbnail_image']['url'] : '';


                        ?>

                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-team-item text-center">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-team-thumb mb-25">

                                                <?php if ($team_thumbnail_image) : ?>
                                                    <img class="w-100" src="<?php echo esc_url($team_thumbnail_image); ?>" alt="<?php the_title(); ?>">
                                                <?php else : ?>
                                                    <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            
                                            </div>
                                        <?php endif; ?>
                                        <div class="it-team-content">
                                            <h4 class="it-team-title"><a class="border-line-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <span><?php echo esc_html($team_designation, OD); ?></span>
                                        </div>
                                        <div class="it-team-social">
                                            <a href="<?php echo esc_url($team_social_facebook_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="<?php echo esc_url($team_social_twitter_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="<?php echo esc_url($team_social_instagram_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>

                </div>
            </div>




        <?php else: ?>

            <div class="team_widget_1">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = -1;

                        if ($team_query->have_posts()) :
                            while ($team_query->have_posts()) : $team_query->the_post();

                                $i++;

                                $team_meta = get_post_meta(get_the_ID(), 'ndisblty_team_meta', true);
                                $team_designation = $team_meta['team_designation'];
                                $team_social_facebook_url = $team_meta['team_social_facebook_url'];
                                $team_social_twitter_url = $team_meta['team_social_twitter_url'];
                                $team_social_instagram_url = $team_meta['team_social_instagram_url'];

                                $team_meta_thumbnail = get_post_meta(get_the_ID(), 'ndisblty_team_meta_side', true);


                                $team_thumbnail_image = isset($team_meta_thumbnail['team_thumbnail_image']) ? $team_meta_thumbnail['team_thumbnail_image']['url'] : '';


                        ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow img-anim-top" data-wow-duration="1s" data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-team-2-item mb-30">
                                        <div class="it-team-2-thumb p-relative mb-20">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php if ($team_thumbnail_image) : ?>
                                                    <img class="w-100" src="<?php echo esc_url($team_thumbnail_image); ?>" alt="<?php the_title(); ?>">
                                                <?php else : ?>
                                                    <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="it-team-2-social">
                                                <a href="<?php echo esc_url($team_social_facebook_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="<?php echo esc_url($team_social_twitter_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="<?php echo esc_url($team_social_instagram_url, 'ordainit-toolkit'); ?>"><i class="fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="it-team-2-content">
                                            <h4 class="it-team-2-title"><a class="border-line-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <span><?php echo esc_html($team_designation, OD); ?></span>
                                        </div>
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

$widgets_manager->register(new Od_team());
