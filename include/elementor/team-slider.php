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
class Od_Team_Slider extends Widget_Base
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
        return 'od-team-slider';
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
        return __('Team Slider', 'ordainit-toolkit');
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
            'od_team_slider_section_bg',
            [
                'label' => __('Section BG', OD),
            ]
        );

        $this->add_control(
            'od_team_slider_section_bg_img',
            [
                'label' => esc_html__('BG Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'od_team_slider_section_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-bg' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'od_team_slider_section_title_content',
            [
                'label' => __('Title & Content', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_section_title',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => od_kses('our dedicated <br>  team membber', OD),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'od_team_slider_section_subtitle',
            [
                'label' => esc_html__('Sub Title', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => od_kses('Our Best Team', OD),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'od_team_slider_section_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => od_kses('We specialize in disability support services, <br>  providing personalized care that .', OD),
                'label_block' => true,
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
                'default' => esc_html__('4', OD),
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
            'od_team_slider_settings',
            [
                'label' => __('Settings', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_autoplay',
            [
                'label' => esc_html__('Autoplay ON/Off', OD),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('On', OD),
                'label_off' => esc_html__('OFF', OD),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'od_team_slider_delay',
            [
                'label' => esc_html__('Delay (ms)', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('300', OD),
            ]
        );



        $this->end_controls_section();




        $this->start_controls_section(
            'od_team_slider_title_content_style',
            [
                'label' => __('Title & Content', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_team_slider_title_heading',
            [
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_team_slider_title_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-section-title-3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_team_slider_title_typo',
                'selector' => '{{WRAPPER}} .it-section-title-3',
            ]
        );

        $this->add_control(
            'od_team_slider_subtitle_heading',
            [
                'label' => esc_html__('Sub Title', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_team_slider_subtitle_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-section-subtitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-section-subtitle::before' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .it-section-subtitle::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_team_slider_subtitle_typo',
                'selector' => '{{WRAPPER}} .it-section-subtitle',
            ]
        );

        $this->add_control(
            'od_team_slider_description_heading',
            [
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'od_team_slider_description_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-text p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_team_slider_description_typo',
                'selector' => '{{WRAPPER}} .it-team-text p',
            ]
        );

        $this->end_controls_section();



        $this->start_controls_section(
            'od_team_slider_team_style',
            [
                'label' => __('Team', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_team_slider_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_team_slider_bg_hover_color',
            [
                'label' => esc_html__('BG Hover Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-item::after' => 'background: linear-gradient(180deg, rgba(220, 29, 28, 0) 0%, {{VALUE}} 100%)',
                ],
            ]
        );


        $this->add_control(
            'od_team_slider_team_title_heading',
            [
                'label' => esc_html__('Name', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->start_controls_tabs(
            'od_team_slider_team_title_tabs'
        );

        $this->start_controls_tab(
            'od_team_slider_team_title_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_team_title_normal_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-title' => 'color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();



        $this->start_controls_tab(
            'od_team_slider_team_title_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_team_title_hover_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-item:hover .it-team-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .border-line-white' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_team_slider_team_title_typo',
                'selector' => '{{WRAPPER}} .it-team-title',
            ]
        );


        $this->add_control(
            'od_team_slider_team_designation_heading',
            [
                'label' => esc_html__('Designation', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->start_controls_tabs(
            'od_team_slider_team_designation_tabs'
        );

        $this->start_controls_tab(
            'od_team_slider_team_designation_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_team_designation_normal_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-content span' => 'color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();



        $this->start_controls_tab(
            'od_team_slider_team_designaiton_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_team_designation_hover_color',
            [
                'label' => esc_html__('Text Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-item:hover .it-team-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'od_team_slider_team_designation_typo',
                'selector' => '{{WRAPPER}} .it-team-content span',
            ]
        );


        $this->add_control(
            'od_team_slider_team_social_heading',
            [
                'label' => esc_html__('Social', OD),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'od_team_slider_team_social_area_bg_color',
            [
                'label' => esc_html__('BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-social' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->start_controls_tabs(
            'od_team_slider_team_social_tabs'
        );

        $this->start_controls_tab(
            'od_team_slider_team_social_normal_tab',
            [
                'label' => esc_html__('Normal', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_team_social_normal_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-social a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_team_slider_team_social_normal_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-social a' => 'color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();



        $this->start_controls_tab(
            'od_team_slider_team_social_hover_tab',
            [
                'label' => esc_html__('Hover', OD),
            ]
        );


        $this->add_control(
            'od_team_slider_team_social_hover_color',
            [
                'label' => esc_html__('Icon BG Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-team-social a::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'od_team_slider_team_social_hover_icon_color',
            [
                'label' => esc_html__('Icon Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
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

        $od_team_slider_section_title = $settings['od_team_slider_section_title'];
        $od_team_slider_section_subtitle = $settings['od_team_slider_section_subtitle'];
        $od_team_slider_section_description = $settings['od_team_slider_section_description'];
        $od_team_slider_section_bg_img = $settings['od_team_slider_section_bg_img'];
        $od_team_slider_autoplay = $settings['od_team_slider_autoplay'];
        $od_team_slider_delay = $settings['od_team_slider_delay'];


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


        <!-- team-area-start -->
        <div class="it-team-area it-team-bg theme-bg pt-120 pb-120" style="background-image: url(<?php echo esc_url($od_team_slider_section_bg_img['url'], OD); ?>);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4 wow itfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="it-team-left">
                            <div class="it-section-title-box mb-20">
                                <span class="it-section-subtitle"><?php echo od_kses($od_team_slider_section_subtitle, OD); ?></span>
                                <h4 class="it-section-title-3"><?php echo od_kses($od_team_slider_section_title, OD); ?></h4>
                            </div>
                            <div class="it-team-text pb-15">
                                <p><?php echo od_kses($od_team_slider_section_description, OD); ?></p>
                            </div>
                            <div class="it-team-arrow-box">
                                <button class="slider-prev mr-25">
                                    <span>
                                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.469669 5.46967C0.176777 5.76256 0.176777 6.23743 0.469669 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46446 6.59619 0.989591 6.3033 0.696697C6.01041 0.403804 5.53553 0.403804 5.24264 0.696697L0.469669 5.46967ZM26 5.25L1 5.25L1 6.75L26 6.75L26 5.25Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </span>
                                </button>
                                <button class="slider-next active">
                                    <span>
                                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25.5303 5.46967C25.8232 5.76256 25.8232 6.23743 25.5303 6.53033L20.7574 11.3033C20.4645 11.5962 19.9896 11.5962 19.6967 11.3033C19.4038 11.0104 19.4038 10.5355 19.6967 10.2426L23.9393 6L19.6967 1.75736C19.4038 1.46446 19.4038 0.989591 19.6967 0.696697C19.9896 0.403804 20.4645 0.403804 20.7574 0.696697L25.5303 5.46967ZM-6.55672e-08 5.25L25 5.25L25 6.75L6.55672e-08 6.75L-6.55672e-08 5.25Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="it-team-wrap">
                            <div class="swiper-container it-team-active">
                                <div class="swiper-wrapper">
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
                                            <div class="swiper-slide">
                                                <div class="it-team-item text-center">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <div class="it-team-thumb mb-25">

                                                            <?php if ($team_thumbnail_image) : ?>
                                                                <img src="<?php echo esc_url($team_thumbnail_image); ?>" alt="<?php the_title(); ?>">
                                                            <?php else : ?>
                                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                            <?php endif; ?>

                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="it-team-content">
                                                        <h4 class="it-team-title"><a class="border-line-white" href="team-details.html"><?php the_title(); ?></a>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area-end -->





        <script>
            jQuery(document).ready(function($) {
                const autoplay_team = <?php echo $od_team_slider_autoplay ? 'true' : 'false'; ?>;
                const autoplay_delay = <?php echo esc_attr($od_team_slider_delay); ?>;




                // Swiper Js
                const teamswiper = new Swiper('.it-team-active', {
                    // Optional parameters
                    speed: 1500,
                    loop: true,
                    loopedSlides: 4,
                    slidesPerView: 4,
                    spaceBetween: 35,
                    autoplay: autoplay_team ? {
                        delay: parseInt(autoplay_delay),
                    } : false,

                    breakpoints: {
                        1400: {
                            slidesPerView: 4,
                        },
                        1200: {
                            slidesPerView: 3,
                        },
                        992: {
                            slidesPerView: 2,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        576: {
                            slidesPerView: 2,
                        },
                        0: {
                            slidesPerView: 1,
                        },
                    },
                    navigation: {
                        prevEl: '.slider-prev',
                        nextEl: '.slider-next',
                    },
                });



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Od_Team_Slider());
