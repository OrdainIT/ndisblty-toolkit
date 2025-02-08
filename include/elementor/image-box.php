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
class OD_Image_Box extends Widget_Base
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
        return 'od-image-box';
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
        return __('Image Box', 'ordainit-toolkit');
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

        // Content
        $this->start_controls_section(
            'od_image_box_content',
            [
                'label' => esc_html__('Content', OD),
            ]
        );

        $this->add_control(
            'od_image_box_title',
            [
                'label' => esc_html__('Title', OD),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => '3',
                'default' => esc_html__('OD Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_image_box_description',
            [
                'label' => esc_html__('Description', OD),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Description', OD),
                'placeholder' => esc_html__('Type description here', OD),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'od_image_box_thumbnail',
            [
                'label' => esc_html__('Choose Icon Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'od_image_box_shape',
            [
                'label' => esc_html__('Choose Shape Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->end_controls_section();

        // Content Style
        $this->start_controls_section(
            'od_image_box_content_style',
            [
                'label' => __('Content Style', OD),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'od_image_box_title_color',
            [
                'label' => esc_html__('Title Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', OD),
                'name' => 'od_image_box_title_typography',
                'selector' => '{{WRAPPER}} .it-feature-title',
            ]
        );

        $this->add_control(
            'od_image_box_description_color',
            [
                'label' => esc_html__('Description Color', OD),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-feature-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', OD),
                'name' => 'od_image_box_description_typography',
                'selector' => '{{WRAPPER}} .it-feature-content p',
            ]
        );


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
        $od_image_box_title = $settings['od_image_box_title'];
        $od_image_box_description = $settings['od_image_box_description'];
        $od_image_box_thumbnail = $settings['od_image_box_thumbnail'];
        $od_image_box_shape = $settings['od_image_box_shape'];
?>

        <div class="it-feature-item d-flex align-items-center">
            <div class="it-feature-icon-box p-relative">
                <img
                    src="<?php echo esc_url($od_image_box_shape['url'], OD); ?>"
                    alt="<?php echo esc_attr__('shape-img', OD); ?>" />
                <span class="icon">
                    <img
                        src="<?php echo esc_url($od_image_box_thumbnail['url'], OD); ?>"
                        alt="<?php echo esc_attr__('icon-img', OD); ?>" />
                </span>
            </div>
            <div class="it-feature-content">
                <h4 class="it-feature-title"><?php echo esc_html($od_image_box_title, OD); ?></h4>
                <p><?php echo od_kses($od_image_box_description, OD); ?></p>
            </div>
        </div>



        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new OD_Image_Box());
