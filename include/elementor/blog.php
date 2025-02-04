<?php

namespace ordainit_toolkit\Widgets;

use Elementor\Widget_Base;

if (! defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * Tp Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Od_Blog_Post extends Widget_Base
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
        return 'od-blog';
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
        return __('OD Blog', 'ordainit-toolkit');
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



    // Button func
    private function set_button_attributes($link_type, $page_link, $custom_link, $attribute_name, $class)
    {
        if ('2' == $link_type) {
            $this->add_render_attribute($attribute_name, 'href', get_permalink($page_link));
            $this->add_render_attribute($attribute_name, 'target', '_self');
            $this->add_render_attribute($attribute_name, 'rel', 'nofollow');
            $this->add_render_attribute($attribute_name, 'class', $class);
        } else {
            if (! empty($custom_link['url'])) {
                $this->add_link_attributes($attribute_name, $custom_link);
                $this->add_render_attribute($attribute_name, 'class', $class);
            }
        }
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/blog.php');
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


        $od_blog_section_blog_btn = $settings['od_blog_section_blog_btn'];



        $od_blog_section_blog_post_per_page = $settings['od_blog_section_blog_post_per_page'];
        $od_category_select = $settings['od_category_select'];

        $od_blog_post_orderby = isset($settings['od_blog_post_orderby']) ? $settings['od_blog_post_orderby'] : 'DESC';


   

        // Post Query

        // Check if category is selected
        if (!empty($od_category_select)) {
            // If categories are selected, add tax_query
            $args = array(
                'post_type'      => 'post', // Fetch blog posts
                'posts_per_page' => $od_blog_section_blog_post_per_page, // Number of posts to display
                'order'          => $od_blog_post_orderby, // Order of posts
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'category', // Taxonomy to filter by
                        'field'    => 'term_id',  // Field type ('term_id', 'slug', or 'name')
                        'terms'    => $od_category_select, // Selected category IDs (single or multiple)
                        'operator' => 'IN', // Show posts matching any of the selected categories
                    ),
                ),
            );
        } else {
            // If no category is selected, show all posts
            $args = array(
                'post_type'      => 'post', // Fetch blog posts
                'posts_per_page' => $od_blog_section_blog_post_per_page, // Number of posts to display
                'order'          => $od_blog_post_orderby, // Order of posts
            );
        }


        $blog_query = new \WP_Query($args);


?>

        <?php if ($settings['od_design_style']  == 'layout-2'):

        

     


        ?>


            <div class="blog_widget_2">
                <div class="container">

                    <div class="row gx-35">
                        <?php
                        $i = -1;

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();

                                $i++;

                        ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-blog-2-item zoom white-bg mb-30">
                                        <?php if(has_post_thumbnail()):?>
                                        <div class="it-blog-2-thumb img-zoom">
                                            <a href="<?php the_permalink(); ?>">
                                                <img class="w-100" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                            </a>
                                        </div>
                                        <?php endif;?>
                                        <div class="it-blog-2-content p-relative">
                                            <div class="it-blog-2-date">
                                                <span>
                                                    <?php echo get_the_date('d'); ?> <br>
                                                    <?php echo strtoupper(get_the_date('M')); ?>
                                                </span>


                                            </div>
                                            <h4 class="it-blog-title mb-15"><a class="border-line-black-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="mb-25"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>
                                            <a class="it-btn-sm" href="<?php the_permalink(); ?>"><?php echo esc_html($od_blog_section_blog_btn, 'ordainit-toolkit'); ?></a>
                                        </div>
                                    </div>
                                </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>

                    </div>
                </div>
            </div>

        <?php else:

            


        ?>


            <div class="blog_widget">
                <div class="container">
                    <div class="row gx-35">

                        <?php


                        $i = -1;
                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();
                                $i++;
                        ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                                    data-wow-delay="<?php echo esc_attr(.3 + $i * .2); ?>s">
                                    <div class="it-blog-item zoom white-bg mb-30">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="it-blog-thumb mb-35 img-zoom">
                                                <a href="blog-details-right-sidebar.html">
                                                    <img class="w-100" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="it-blog-content">
                                            <div class="it-blog-meta mb-30">
                                                <span>
                                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.5 2H11V0.375C11 0.1875 10.8125 0 10.625 0H10.375C10.1562 0 10 0.1875 10 0.375V2H4V0.375C4 0.1875 3.8125 0 3.625 0H3.375C3.15625 0 3 0.1875 3 0.375V2H1.5C0.65625 2 0 2.6875 0 3.5V14.5C0 15.3438 0.65625 16 1.5 16H12.5C13.3125 16 14 15.3438 14 14.5V3.5C14 2.6875 13.3125 2 12.5 2ZM1.5 3H12.5C12.75 3 13 3.25 13 3.5V5H1V3.5C1 3.25 1.21875 3 1.5 3ZM12.5 15H1.5C1.21875 15 1 14.7812 1 14.5V6H13V14.5C13 14.7812 12.75 15 12.5 15ZM4.625 10C4.8125 10 5 9.84375 5 9.625V8.375C5 8.1875 4.8125 8 4.625 8H3.375C3.15625 8 3 8.1875 3 8.375V9.625C3 9.84375 3.15625 10 3.375 10H4.625ZM7.625 10C7.8125 10 8 9.84375 8 9.625V8.375C8 8.1875 7.8125 8 7.625 8H6.375C6.15625 8 6 8.1875 6 8.375V9.625C6 9.84375 6.15625 10 6.375 10H7.625ZM10.625 10C10.8125 10 11 9.84375 11 9.625V8.375C11 8.1875 10.8125 8 10.625 8H9.375C9.15625 8 9 8.1875 9 8.375V9.625C9 9.84375 9.15625 10 9.375 10H10.625ZM7.625 13C7.8125 13 8 12.8438 8 12.625V11.375C8 11.1875 7.8125 11 7.625 11H6.375C6.15625 11 6 11.1875 6 11.375V12.625C6 12.8438 6.15625 13 6.375 13H7.625ZM4.625 13C4.8125 13 5 12.8438 5 12.625V11.375C5 11.1875 4.8125 11 4.625 11H3.375C3.15625 11 3 11.1875 3 11.375V12.625C3 12.8438 3.15625 13 3.375 13H4.625ZM10.625 13C10.8125 13 11 12.8438 11 12.625V11.375C11 11.1875 10.8125 11 10.625 11H9.375C9.15625 11 9 11.1875 9 11.375V12.625C9 12.8438 9.15625 13 9.375 13H10.625Z"
                                                            fill="#DC1D1C" />
                                                    </svg>

                                                    <?php echo get_the_date(); ?>
                                                </span>
                                                <span>
                                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.7812 12.8125C18.7812 12.7812 18.0938 12.0312 17.625 11.0938C18.4688 10.25 19 9.1875 19 8C19 5.5 16.5938 3.4375 13.4688 3.09375C12.5 1.28125 10.1875 0 7.5 0C3.90625 0 1 2.25 1 5C1 6.15625 1.5 7.21875 2.375 8.09375C1.875 9.03125 1.1875 9.78125 1.1875 9.8125C1 10 0.9375 10.3125 1.03125 10.5938C1.15625 10.8438 1.40625 11.0312 1.71875 11.0312C3.375 11.0312 4.71875 10.375 5.625 9.8125C5.90625 9.875 6.1875 9.90625 6.5 9.96875C7.46875 11.75 9.78125 13.0312 12.5 13.0312C13.125 13.0312 13.75 12.9375 14.3438 12.8125C15.25 13.375 16.5938 14.0312 18.2812 14.0312C18.5625 14.0312 18.8125 13.8438 18.9375 13.5938C19.0312 13.3125 19 13 18.7812 12.8125ZM5.84375 8.8125L5.4375 8.71875L5.0625 8.96875C4.4375 9.375 3.5 9.84375 2.34375 9.96875C2.59375 9.625 2.96875 9.125 3.25 8.53125L3.59375 7.875L3.0625 7.375C2.5625 6.875 2 6.09375 2 5C2 2.8125 4.46875 1 7.5 1C10.5312 1 13 2.8125 13 5C13 7.21875 10.5312 9 7.5 9C6.9375 9 6.375 8.9375 5.84375 8.8125ZM14.9062 11.9688L14.5312 11.7188L14.125 11.8438C13.5938 11.9688 13.0312 12.0312 12.5 12.0312C10.4375 12.0312 8.6875 11.2188 7.71875 10C11.1875 9.90625 14 7.71875 14 5C14 4.71875 13.9375 4.4375 13.875 4.15625C16.25 4.59375 18 6.15625 18 8C18 9.09375 17.4062 9.875 16.9062 10.375L16.4062 10.875L16.7188 11.5312C17 12.125 17.375 12.625 17.625 12.9688C16.4688 12.8438 15.5312 12.375 14.9062 11.9688Z"
                                                            fill="#DC1D1C" />
                                                    </svg>
                                                    <?php
                                                    $comment_count = get_comments_number();
                                                    if ($comment_count == 0) {
                                                        echo __('No Comment', 'ndisblty');
                                                    } elseif ($comment_count == 1) {
                                                        echo sprintf(__('Comment (%d)', 'ndisblty'), $comment_count);
                                                    } else {
                                                        echo sprintf(__('Comments (%d)', 'ndisblty'), $comment_count);
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <h4 class="it-blog-title mb-35"><a class="border-line-black-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <a class="it-btn-sm theme-bg" href="<?php the_permalink(); ?>"><?php echo esc_html($od_blog_section_blog_btn, 'ordainit-toolkit'); ?></a>
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

$widgets_manager->register(new Od_Blog_Post());
