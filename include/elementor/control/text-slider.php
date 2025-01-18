<?php

use Elementor\Controls_Manager;

// Content
$this->start_controls_section(
    'od_text_slider_content',
    [
        'label' => esc_html__('Text Slider Content', OD),
    ]
);

$this->add_control(
    'od_text_slider_lists',
    [
        'label' => esc_html__('Text Slider Items', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_text_slider_list_text',
                'label' => esc_html__('Slider Text', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Meal Preparation', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_text_slider_list_image',
                'label' => esc_html__('Slider Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
        ],
        'default' => [
            [
                'od_text_slider_list_text' => esc_html__('Personal Care Services', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Medication Management', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Meal Preparation', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Personal Care Services', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Medication Management', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Meal Preparation', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Meal Preparation', OD),
            ],
            [
                'od_text_slider_list_text' => esc_html__('Personal Care Services', OD),
            ],
        ],
        'title_field' => '{{{ od_text_slider_list_text }}}',
    ]
);


$this->end_controls_section();


// Slider Settings
$this->start_controls_section(
    'od_text_slider_settings',
    [
        'label' => esc_html__('Text Slider Settings', OD),
    ]
);

$this->add_control(
    'od_text_slider_speed',
    [
        'label' => esc_html__('Speed', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => 15, // Default value as a number, not a string
        'placeholder' => esc_html__('Enter speed in seconds', OD),
        'description' => esc_html__('Set the speed of the slider in seconds', OD),
    ]
);

$this->end_controls_section();



// Style
$this->start_controls_section(
    'od_text_slider_style',
    [
        'label' => esc_html__('Text Slider Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->add_control(
    'od_text_slider_bg_color',
    [
        'label' => esc_html__('BG Color', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .red-bg' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_responsive_control(
    'od_text_slider_margin',
    [
        'label' => esc_html__('Margin', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-text-slider-area.it-text-slider-ptb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_text_slider_padding',
    [
        'label' => esc_html__('Padding', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-text-slider-area.it-text-slider-ptb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


//Content Style
$this->start_controls_section(
    'od_text_slider_content_style',
    [
        'label' => __('Slider Content Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_text_slider_text_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-text-slider-item span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Text Typography', OD),
        'name' => 'od_text_slider_text_typography',
        'selector' => '{{WRAPPER}} .it-text-slider-item span',
    ]
);

$this->end_controls_section();
