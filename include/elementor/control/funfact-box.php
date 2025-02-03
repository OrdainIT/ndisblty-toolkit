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

// Funfact Number
$this->start_controls_section(
    'od_funfact_box_content',
    [
        'label' => __('Fun Fact Content', OD),
    ]
);

$this->add_control(
    'od_funfact_box_alignment',
    [
        'label' => __('Box Alignment', OD),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => __('Left', OD),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => __('Center', OD),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => __('Right', OD),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => 'center',
        'toggle' => true,
        'condition' => [
            'od_design_style' => ['layout-2']
        ]
    ]
);

$this->add_control(
    'hr_3',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_funfact_box_icon',
    [
        'label' => esc_html__('SVG Icon', OD),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => od_kses('Icon', OD),
        'placeholder' => esc_html__('Put your svg icon here', OD),
        'label_block' => true,
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);


$this->add_control(
    'od_funfact_box_number',
    [
        'label' => esc_html__('Number', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => esc_html__('50', OD),
        'placeholder' => esc_html__('Type counter Number here', OD),
    ]
);

$this->add_control(
    'od_funfact_box_suffix',
    [
        'label' => esc_html__('Suffix', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('+', OD),
        'placeholder' => esc_html__('Type Suffix here', OD),
    ]
);

$this->add_control(
    'od_funfact_box_description',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__('Description', OD),
        'placeholder' => esc_html__('Type description here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();


// Funfact Style
$this->start_controls_section(
    'od_funfact_box_style',
    [
        'label' => __('Funfact Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'od_funfact_box_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-funfact-2-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_funfact_box_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-funfact-2-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


// Funfact Content Style
$this->start_controls_section(
    'od_funfact_box_content_style',
    [
        'label' => __('Funfact Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_funfact_box_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-icon svg path' => 'fill: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'od_funfact_box_icon_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-icon' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);


$this->add_responsive_control(
    'od_funfact_box_icon_margin',
    [
        'label' => esc_html__('Icon Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_responsive_control(
    'od_funfact_box_icon_padding',
    [
        'label' => esc_html__('Icon Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_funfact_box_number_color',
    [
        'label' => esc_html__('Number Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-funfact-2-item h4' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Number Typography', OD),
        'name' => 'od_funfact_box_number_typography',
        'selector' => '
            {{WRAPPER}} .it-about-funfact-title,
            {{WRAPPER}} .it-funfact-2-item h4
        ',
    ]
);

$this->add_responsive_control(
    'od_funfact_box_number_margin',
    [
        'label' => esc_html__('Number Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-funfact-2-item h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_funfact_box_number_padding',
    [
        'label' => esc_html__('Number Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-funfact-2-item h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'hr_2',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_funfact_box_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-content span' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-funfact-2-item span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_funfact_box_description_typography',
        'selector' => '
            {{WRAPPER}} .it-about-funfact-content span,
            {{WRAPPER}} .it-funfact-2-item span
        ',
    ]
);

$this->add_responsive_control(
    'od_funfact_box_description_margin',
    [
        'label' => esc_html__('Description Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-funfact-2-item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_funfact_box_description_padding',
    [
        'label' => esc_html__('Description Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-about-funfact-content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-funfact-2-item span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();
