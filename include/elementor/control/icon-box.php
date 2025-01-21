<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_layout',
    [
        'label' => esc_html__('Design Layout', OD),
    ]
);

$this->add_control(
    'od_design_style',
    [
        'label' => esc_html__('Select Layout', OD),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'layout-1' => esc_html__('Layout 1', OD),
            'layout-2' => esc_html__('Layout 2', OD),
        ],
        'default' => 'layout-1',
    ]
);

$this->end_controls_section();

// Process Box Content
$this->start_controls_section(
    'od_icon_box_content',
    [
        'label' => esc_html__('Icon Box Content', OD),
    ]
);

$this->add_control(
    'od_icon_box_title',
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
    'od_icon_box_description',
    [
        'label' => esc_html__('Description', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('OD Description', OD),
        'placeholder' => esc_html__('Type Description here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_icon_box_icon',
    [
        'label' => esc_html__('Icon', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => od_kses('Icon', OD),
        'placeholder' => esc_html__('Put svg icon here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();


// Style Starts
// Icon Box Style
$this->start_controls_section(
    'od_icon_box_style',
    [
        'label' => __('Icon Box Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_icon_box_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-info' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->add_responsive_control(
    'od_icon_box_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_icon_box_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'od_icon_box_border_radius',
    [
        'label' => esc_html__('Border Radius', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-info' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-choose-5-style .it-choose-5-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_icon_box_box_shadow',
        'selector' => '
            {{WRAPPER}} .it-about-2-more-info,
            {{WRAPPER}} .it-choose-5-style .it-choose-5-item
        ',

    ]
);

$this->end_controls_section();


// Process Box Content Style
$this->start_controls_section(
    'od_icon_box_content_style',
    [
        'label' => __('Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_icon_box_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-choose-5-item-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_icon_box_title_typography',
        'selector' => '
            {{WRAPPER}} .it-about-2-more-title,
            {{WRAPPER}} .it-choose-5-item-title
        ',
    ]
);

$this->add_control(
    'hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_icon_box_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-info p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-choose-5-style .it-choose-5-item p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_icon_box_description_typography',
        'selector' => '
            {{WRAPPER}} .it-about-2-more-info p,
            {{WRAPPER}} .it-choose-5-style .it-choose-5-item p
        ',
    ]
);

$this->add_control(
    'hr_2',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_icon_box_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-icon svg path' => 'fill: {{VALUE}}',
            '{{WRAPPER}} .it-choose-5-item-icon svg path' => 'fill: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_icon_box_icon_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-icon' => 'background: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);


$this->end_controls_section();
