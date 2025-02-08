<?php

use Elementor\Controls_Manager;

class CustomSaastyContainer
{

    
    public function __construct()
    {
        add_action('elementor/element/common/_section_style/after_section_end', [$this, 'register_controls']);
        add_action('elementor/element/column/section_advanced/after_section_end', [$this, 'register_controls']);
        add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'register_controls']);
        add_action('elementor/element/container/section_layout/after_section_end', [$this, 'register_controls']);
        add_action('elementor/frontend/before_render', [$this, 'before_render'], 1);
        add_action('elementor/widgets/widgets_registered', [$this, 'add_custom_image_controls']);
    }

    public function register_controls($element)
    {
       

        // Data Fade From Control
        $element->start_controls_section(
            'data_fade_from_wrapper',
            [
                'label' => __('Fade From', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_ADVANCED,
            ]
        );

        $element->add_control(
            'data_fade_from',
            [
                'label' => __('Fade From', 'ordainit-toolkit'),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __('None', 'ordainit-toolkit'),
                    'wow itfadeLeft' => __('Left', 'ordainit-toolkit'),
                    'wow itfadeRight' => __('Right', 'ordainit-toolkit'),
                    'wow itfadeUp' => __('Up', 'ordainit-toolkit'),
                ],
            ]
        );

        $element->end_controls_section();

        // Data Delay Control
        $element->start_controls_section(
            'data_delay_wrapper',
            [
                'label' => __('Delay & Duration', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_ADVANCED,
            ]
        );

        $element->add_control(
            'od_data_delay',
            [
                'label' => __('Delay', 'ordainit-toolkit'),
                'type' => Controls_Manager::TEXT,
                'default' => 0,
                'description' => __('Enter delay in milliseconds.', 'ordainit-toolkit'),
            ]
        );
        $element->add_control(
            'od_data_duration',
            [
                'label' => __('Duration', 'ordainit-toolkit'),
                'type' => Controls_Manager::TEXT,
                'default' => 0,
                'description' => __('Enter delay in milliseconds.', 'ordainit-toolkit'),
            ]
        );

        $element->end_controls_section();

        // Bootstrap Grid Layout Control
        $element->start_controls_section(
            'saasty_boostrap_grid',
            [
                'label' => __('Boostrap', 'ordainit-toolkit'),
                'tab' => Controls_Manager::TAB_ADVANCED,
            ]
        );

        $element->add_control(
            'saasty_bootstrap_grid_layout',
            [
                'label' => __('Boostrap Layout', 'ordainit-toolkit'),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __('None', 'ordainit-toolkit'),
                    'container' => __('container', 'ordainit-toolkit'),
                ],
            ]
        );

        $element->end_controls_section();
    }

    public function before_render($element)
    {
        $settings = $element->get_settings();

        // Add the data-wow-delay attribute if it has a value
        if (!empty($settings['data_delay'])) {
            $element->add_render_attribute('_wrapper', 'data-wow-delay', $settings['data_delay']);
        }

        // Add the data-wow-duration attribute if it has a value
        if (!empty($settings['od_data_duration'])) {
            $element->add_render_attribute('_wrapper', 'data-wow-duration', $settings['od_data_duration']);
        }

        // Add the data-fade-from class if it has a value
        if (!empty($settings['data_fade_from'])) {
            $element->add_render_attribute('_wrapper', 'class', $settings['data_fade_from']);
        }
        // Add the image class if it has a value
        if (!empty($settings['od_default_image_class'])) {
            $element->add_render_attribute('_wrapper', 'class', $settings['od_default_image_class']);
        }
        // Add the image class if it has a value
        if (!empty($settings['od_default_animation_class'])) {
            $element->add_render_attribute('_wrapper', 'class', $settings['od_default_animation_class']);
        }

      

        // Add the img-anim-top class if the switcher is set to "yes"
        if (isset($settings['data_fade_animation']) && $settings['data_fade_animation'] === 'yes') {
            $element->add_render_attribute('_wrapper', 'class', 'img-anim-top');
        }

        // Add the Bootstrap grid layout class if it has a value
        if (!empty($settings['saasty_bootstrap_grid_layout'])) {
            $element->add_render_attribute('_wrapper', 'class', $settings['saasty_bootstrap_grid_layout']);
        }
    }


    public function add_custom_image_controls($widgets_manager)
    {
        $base_widget = $widgets_manager->get_widget_types('image');

        if ($base_widget) {
            add_action('elementor/element/image/section_image/after_section_end', function ($element, $args) {
                // Add new custom settings section to the Image widget
                $element->start_controls_section(
                    'image_settings_section',
                    [
                        'label' => __('Settings', OD),
                        'tab' => Controls_Manager::TAB_CONTENT,
                    ]
                );


                $element->add_control(
                    'od_default_image_class',
                    [
                        'label' => __('Hover',
                            'ordainit-toolkit'
                        ),
                        'type' => Controls_Manager::SELECT,
                        'default' => '',
                        'options' => [
                            '' => __('None', 'ordainit-toolkit'),
                            'zoom' => __('Zoom', 'ordainit-toolkit'),
                        ],
                    ]
                );
                $element->add_control(
                    'od_default_animation_class',
                    [
                        'label' => __('Animation',
                            'ordainit-toolkit'
                        ),
                        'type' => Controls_Manager::SELECT,
                        'default' => '',
                        'options' => [
                            '' => __('None', 'ordainit-toolkit'),
                            'animationX' => __('Translate X', 'ordainit-toolkit'),
                            'animationY' => __('Translate Y', 'ordainit-toolkit'),
                            'swing' => __('Swing', 'ordainit-toolkit'),
                        ],
                    ]
                );
                $element->add_control(
                    'image_fdae_animation',
                    [
                        'label' => __('Fade Animation',
                            'ordainit-toolkit'
                        ),
                        'type' => Controls_Manager::SELECT,
                        'default' => '',
                        'options' => [
                            '' => __('none', 'ordainit-toolkit'),
                            'img-anim-top' => __('Top', 'ordainit-toolkit'),
                            'img-anim-left' => __('Left', 'ordainit-toolkit'),
                            'img-anim-right' => __('Right', 'ordainit-toolkit'),
                        ],
                    ]
                );

             



                $element->end_controls_section();
            }, 10, 2);
        }

        add_filter('elementor/widget/render_content', function ($content, $widget) {
            // Check if the current widget is an Image widget
            if ('image' === $widget->get_name()) {
                $settings = $widget->get_settings();

                $od_default_image_class = $settings['od_default_image_class'];
                $od_default_animation_class = $settings['od_default_animation_class'];
                $image_fdae_animation = $settings['image_fdae_animation'];

                // Check if the custom class setting exists and the conditions are met
                if (!empty($od_default_image_class) || !empty($od_default_animation_class) || !empty($image_fdae_animation)) {
                    // Sanitize the custom class
                    $custom_class = esc_attr($od_default_image_class);

                    // Add the custom class to the 'elementor-widget-container' div
                    $content = preg_replace(
                        '/<div class="elementor-widget-container"/',
                        '<div class="elementor-widget-container ' . $custom_class . '"',
                        $content,
                        1 // Replace only the first occurrence
                    );

                    // Example: Add custom markup (wrap the content in a new div)
                    $custom_markup = '<div class="img-zoom ' . esc_attr($image_fdae_animation) .  '">';
                    $content = $custom_markup . $content . '</div>';
                }


            }

            return $content;
        }, 10, 2);
    }



}

new CustomSaastyContainer();
