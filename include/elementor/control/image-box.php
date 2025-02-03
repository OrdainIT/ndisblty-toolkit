<?php

use Elementor\Controls_Manager;


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
