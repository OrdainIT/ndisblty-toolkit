<?php

use Elementor\Controls_Manager;

// Content
$this->start_controls_section(
    'od_brand_slider_content',
    [
        'label' => esc_html__('Brand Slider Content', OD),
    ]
);

$this->add_control(
    'od_brand_slider_lists',
    [
        'label' => esc_html__('Brand Slider Items', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_brand_slider_list_image',
                'label' => esc_html__('Slider Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
        ],
        'default' => [
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],
            [
                'od_brand_slider_list_image' => esc_url('od_brand_slider_list_image', OD),
            ],

        ],
        'title_field' => 'Brand Item',
    ]
);


$this->end_controls_section();


// Slider Settings
$this->start_controls_section(
    'od_brand_slider_settings',
    [
        'label' => esc_html__('Brand Slider Settings', OD),
    ]
);

$this->add_control(
    'od_brand_slider_speed',
    [
        'label' => esc_html__('Speed', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => 15,
        'placeholder' => esc_html__('Enter speed in seconds', OD),
        'description' => esc_html__('Set the speed of the slider in seconds', OD),
    ]
);

$this->end_controls_section();



// Style
$this->start_controls_section(
    'od_brand_slider_style',
    [
        'label' => esc_html__('Brand Slider Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->add_control(
    'od_brand_slider_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-brand-item-wrap' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_responsive_control(
    'od_brand_slider_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-brand-item-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_brand_slider_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-brand-item-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();
