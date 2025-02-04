<?php

use Elementor\Controls_Manager;


// Feature List Content
$this->start_controls_section(
    'od_brand_title_section',
    [
        'label' => __('Brand Title', OD),
    ]
);

$this->add_control(
    'od_brand_title',
    [
        'label' => esc_html__('Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => esc_html__('OD Brand Title', OD),
        'placeholder' => esc_html__('Type title here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();


// Feature Box Content Style
$this->start_controls_section(
    'od_brand_title_style',
    [
        'label' => __('Brand Title Box Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_brand_title_box_border_color',
    [
        'label' => esc_html__('Border Line Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-brand-top-box::after' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_responsive_control(
    'od_brand_title_box_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-brand-top-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_brand_title_box_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-brand-top-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


// Feature Box Content Style
$this->start_controls_section(
    'od_brand_title_content_style',
    [
        'label' => __('Brand Title Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_brand_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-brand-top-box span' => 'color: {{VALUE}}',

        ],
    ]
);

$this->add_control(
    'od_brand_title_bg_color',
    [
        'label' => esc_html__('Title BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-brand-top-box span' => 'background-color: {{VALUE}}',

        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_brand_title_typography',
        'selector' => '{{WRAPPER}} .it-brand-top-box span',
    ]
);

$this->add_responsive_control(
    'od_feature_box_padding',
    [
        'label' => esc_html__('Title Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-brand-top-box span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);


$this->end_controls_section();
