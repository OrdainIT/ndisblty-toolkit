<?php

use Elementor\Controls_Manager;

// Feature BG Image
$this->start_controls_section(
    'od_feature_box_bg_img_section',
    [
        'label' => esc_html__('Feature BG Image', OD),
    ]
);

$this->add_control(
    'od_feature_box_bg_img',
    [
        'label' => esc_html__('Choose BG Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();

// Feature List Content
$this->start_controls_section(
    'od_feature_box_section_content_list',
    [
        'label' => __('Feature Content', OD),
    ]
);

$this->add_control(
    'od_feature_box_lists',
    [
        'label' => esc_html__('Feature List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_feature_box_list_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Hero Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'rows' => '3',
                'label_block' => true,
            ],
            [
                'name' => 'od_feature_box_list_description',
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Hero Description', OD),
                'placeholder' => esc_html__('Type description here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_feature_box_list_img',
                'label' => esc_html__('Choose Feature Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
            [
                'name' => 'od_feature_box_list_shape_img',
                'label' => esc_html__('Choose Shape Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
        ],
        'default' => [
            [
                'od_feature_box_list_title' => esc_html__('Od Feature Title 1', OD),
            ],
            [
                'od_feature_box_list_title' => esc_html__('Od Feature Title 2', OD),
            ],
            [
                'od_feature_box_list_title' => esc_html__('Od Feature Title 3', OD),
            ],
        ],
        'title_field' => 'Feature Content',
    ]
);

$this->end_controls_section();


// Feature Box Style
$this->start_controls_section(
    'od_feature_box_style',
    [
        'label' => __('Feature Box Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_feature_box_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-feature-wrap' => 'background-color: {{VALUE}}',

        ],
    ]
);

$this->add_responsive_control(
    'od_feature_box_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-feature-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_feature_box_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-feature-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'od_feature_box_border',
        'selector' => '{{WRAPPER}} .it-feature-wrap',
    ]
);

$this->end_controls_section();


// Feature Box Content Style
$this->start_controls_section(
    'od_feature_box_content_style',
    [
        'label' => __('Feature Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->add_control(
    'od_feature_box_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_feature_box_title_color',
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
        'name' => 'od_feature_box_title_typography',
        'selector' => '{{WRAPPER}} .it-feature-title',
    ]
);

$this->add_control(
    'od_feature_box_description_heading',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_feature_box_description_color',
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
        'name' => 'od_feature_box_description_typography',
        'selector' => '{{WRAPPER}} .it-feature-content p',
    ]
);

$this->end_controls_section();
