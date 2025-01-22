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
class OD_Single_Choose extends Widget_Base
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
        return 'od-single-choose';
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
        return __('Single Choose', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/single-choose.php');
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
        $od_single_choose_title =  $settings['od_single_choose_title'];
        $od_single_choose_description =  $settings['od_single_choose_description'];
        $od_single_choose_icon =  $settings['od_single_choose_icon'];
?>

        <?php if ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="it-choose-5-style">
                <div class="it-choose-5-item">
                    <div class="it-choose-5-item-title-sm d-flex ">
                        <?php echo od_kses($od_single_choose_icon, OD); ?>
                        <span><?php echo esc_html($od_single_choose_title, OD); ?></span>
                    </div>
                    <p><?php echo od_kses($od_single_choose_description, OD); ?></p>
                </div>
            </div>

        <?php else: ?>

            <div class="it-choose-item">
                <span>
                    <?php echo od_kses($od_single_choose_icon, OD); ?>
                </span>
                <div class="it-choose-content">
                    <h5 class="it-choose-item-title"><?php echo esc_html($od_single_choose_title, OD); ?></h5>
                    <p><?php echo od_kses($od_single_choose_description, OD); ?></p>
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

$widgets_manager->register(new OD_Single_Choose());
