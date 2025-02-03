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
class OD_Icon_Box extends Widget_Base
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
        return 'od-icon-box';
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
        return __('Icon Box', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/icon-box.php');
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
        $od_icon_box_title = $settings['od_icon_box_title'];
        $od_icon_box_description = $settings['od_icon_box_description'];
        $od_icon_box_icon = $settings['od_icon_box_icon'];
?>

        <?php if ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="it-choose-5-style">
                <div class="it-choose-5-item">
                    <span class="it-choose-5-item-icon">
                        <?php echo od_kses($od_icon_box_icon, OD); ?>
                    </span>
                    <h5 class="it-choose-5-item-title"><?php echo esc_html($od_icon_box_title, OD); ?></h5>
                    <p><?php echo od_kses($od_icon_box_description, OD); ?></p>
                </div>
            </div>


        <?php else: ?>

            <div class="it-about-2-more-info">
                <span class="it-about-2-more-icon">
                    <?php echo od_kses($od_icon_box_icon, OD); ?>
                </span>
                <h4 class="it-about-2-more-title"><?php echo esc_html($od_icon_box_title, OD); ?></h4>
                <p><?php echo od_kses($od_icon_box_description, OD); ?></p>
            </div>

        <?php endif; ?>



        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Icon_Box());
