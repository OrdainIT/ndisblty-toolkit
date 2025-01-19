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
class OD_Funfact_Box extends Widget_Base
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
        return 'od-funfact-box';
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
        return __('Funfact Box', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/funfact-box.php');
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
        $od_funfact_box_icon = $settings['od_funfact_box_icon'];
        $od_funfact_box_number = $settings['od_funfact_box_number'];
        $od_funfact_box_suffix = $settings['od_funfact_box_suffix'];
        $od_funfact_box_description = $settings['od_funfact_box_description'];
        $od_funfact_box_alignment = $settings['od_funfact_box_alignment'];
?>

        <?php if ($settings['od_design_style']  == 'layout-3'): ?>

        <?php elseif ($settings['od_design_style']  == 'layout-2'):
            $this->add_render_attribute('funfact_box_args', 'class', 'it-funfact-2-item');
            $this->add_render_attribute('funfact_box_args', 'style', 'text-align: ' . $od_funfact_box_alignment . ';');
        ?>

            <div <?php echo $this->get_render_attribute_string('funfact_box_args'); ?>>
                <h4>
                    <i
                        class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-end="<?php echo esc_attr($od_funfact_box_number, OD); ?>">
                        0
                    </i>
                    <?php echo esc_html($od_funfact_box_suffix, OD); ?>
                </h4>
                <span><?php echo od_kses($od_funfact_box_description, OD); ?></span>
            </div>

        <?php else: ?>

            <div class="it-about-funfact-item d-flex align-items-center">
                <span class="it-about-funfact-icon">
                    <?php echo od_kses($od_funfact_box_icon, OD); ?>
                </span>
                <div class="it-about-funfact-content">
                    <h5 class="it-about-funfact-title">
                        <i class="purecounter" data-purecounter-duration="1"
                            data-purecounter-end="<?php echo esc_attr($od_funfact_box_number, OD); ?>"></i>
                        <?php echo esc_html($od_funfact_box_suffix, OD); ?>
                    </h5>
                    <span><?php echo od_kses($od_funfact_box_description, OD); ?></span>
                </div>
            </div>

        <?php endif; ?>



        <script>
            jQuery(document).ready(function($) {

                // Counter Js
                if ($(".purecounter").length) {
                    new PureCounter({
                        filesizing: true,
                        selector: ".filesizecount",
                        pulse: 2,
                    });
                    new PureCounter();
                }

            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Funfact_Box());
