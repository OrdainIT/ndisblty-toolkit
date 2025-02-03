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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/faq.php');
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
