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
class OD_Process_Box extends Widget_Base
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
        return 'od-process-box';
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
        return __('Process Box', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/process-box.php');
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
        $od_process_box_title = $settings['od_process_box_title'];
        $od_process_box_description = $settings['od_process_box_description'];
        $od_process_box_steps = $settings['od_process_box_steps'];
        $od_process_box_img = $settings['od_process_box_img'];
        $od_process_box_icon = $settings['od_process_box_icon'];
?>


        <?php if ($settings['od_design_style']  == 'layout-2'): ?>
            <div class="it-step-3-item p-relative text-center mb-30">
                <span class="it-step-4-icon">
                    <?php echo od_kses($od_process_box_icon, OD); ?>
                </span>
                <div class="it-step-3-content">
                    <h4 class="it-step-4-title"><?php echo od_kses($od_process_box_title, OD); ?></h4>
                    <p class="mb-0"><?php echo od_kses($od_process_box_description, OD); ?></p>
                </div>
            </div>

        <?php else: ?>

            <div class="it-step-item d-flex justify-content-center align-items-center">
                <div class="it-step-thumb mr-25">
                    <img src="<?php echo esc_url($od_process_box_img['url'], OD); ?>"
                        alt="<?php echo esc_html__('process-img', OD); ?>" />
                </div>
                <div class="it-step-content">
                    <span><?php echo esc_html($od_process_box_steps, OD); ?></span>
                    <h4 class="it-step-title"><?php echo od_kses($od_process_box_title, OD); ?></h4>
                    <p><?php echo od_kses($od_process_box_description, OD); ?></p>
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

$widgets_manager->register(new OD_Process_Box());
