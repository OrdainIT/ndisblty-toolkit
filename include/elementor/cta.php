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
class OD_CTA extends Widget_Base
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
        return 'od-cta';
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
        return __('CTA', 'ordainit-toolkit');
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
        include_once(ORDAINIT_TOOLKIT_ELEMENTS_PATH . '/control/cta.php');
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
        $od_cta_bg_img = $settings['od_cta_bg_img'];
        $od_cta_img = $settings['od_cta_img'];
        $od_cta_title = $settings['od_cta_title'];
        $od_cta_phone = $settings['od_cta_phone'];
        $od_cta_btn_text = $settings['od_cta_btn_text'];
        $od_cta_btn_url = $settings['od_cta_btn_url'];
?>


        <?php if ($settings['od_design_style']  == 'layout-2'): ?>

            <div class="it-cta-5-area p-relative red-bg">
                <div class="it-cta-5-thumb d-none d-lg-block">
                    <img src="<?php echo esc_url($od_cta_img['url'], OD); ?>"
                        alt="<?php echo esc_attr__('cta-img', OD); ?>">
                </div>
                <div class="container-fluid p-0">
                    <div class="it-cta-5-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-7">
                                <div class="it-cta-5-teft">
                                    <h4 class="it-cta-5-title"><?php echo od_kses($od_cta_title, OD); ?> </h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="it-cta-5-btn text-end">
                                    <a class="it-btn-red white-btn hover-2" href="<?php echo esc_url($od_cta_btn_url['url'], OD); ?>">
                                        <?php echo esc_html($od_cta_btn_text, OD); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php else: ?>

            <div class="it-cta-4-area it-cta-4-ptb p-relative red-bg"
                style="background-image: url('<?php echo esc_url($od_cta_bg_img['url'], OD); ?>');">
                <div class="container">
                    <div class="it-cta-4-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="it-cta-4-teft">
                                    <h4 class="it-cta-4-title"><?php echo od_kses($od_cta_title, OD); ?> <br>
                                        <a class="border-line-white" href="tel:<?php echo esc_attr($od_cta_phone, OD); ?>"><?php echo esc_html($od_cta_phone, OD); ?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="it-cta-4-thumb">
                    <img
                        src="<?php echo esc_url($od_cta_img['url'], OD); ?>"
                        alt="<?php echo esc_attr__('cta-img', OD); ?>">
                    <a href="tel:<?php echo esc_attr($od_cta_phone, OD); ?>" class="it-cta-4-icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.75 4.25C1.75 2.86929 2.86929 1.75 4.25 1.75H8.34905C8.88709 1.75 9.36476 2.09429 9.5349 2.60472L11.4072 8.22151C11.6039 8.81165 11.3367 9.45664 10.7803 9.73483L7.95876 11.1456C9.33656 14.2015 11.7985 16.6634 14.8544 18.0412L16.2652 15.2197C16.5434 14.6633 17.1883 14.3961 17.7785 14.5928L23.3953 16.4651C23.9057 16.6352 24.25 17.1129 24.25 17.6509V21.75C24.25 23.1307 23.1307 24.25 21.75 24.25H20.5C10.1447 24.25 1.75 15.8553 1.75 5.5V4.25Z"
                                stroke="currentcolor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
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

$widgets_manager->register(new OD_CTA());
