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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/feature-box.php');
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
