<?php

use Elementor\Controls_Manager;

// Button Content Section
$this->start_controls_section(
    'od_btn_content',
    [
        'label' => __('Button Content', OD),
    ]
);

$this->add_control(
    'od_btn_text',
    [
        'label' => esc_html__('Button Text', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('OD Button', OD),
        'title' => esc_html__('Enter button text', OD),
        'label_block' => true,
    ]
);
$this->add_control(
    'od_btn_link_type',
    [
        'label' => esc_html__('Button Link Type', OD),
        'type' => Controls_Manager::SELECT,
        'options' => [
            '1' => 'Custom Link',
            '2' => 'Internal Page',
        ],
        'default' => '1',
        'label_block' => true,
    ]
);

$this->add_control(
    'od_btn_link',
    [
        'label' => esc_html__('Button link', OD),
        'type' => Controls_Manager::URL,
        'dynamic' => [
            'active' => true,
        ],
        'placeholder' => esc_html__('htods://your-link.com', OD),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
        'condition' => [
            'od_btn_link_type' => '1',
        ],
        'label_block' => true,
    ]
);
$this->add_control(
    'od_btn_page_link',
    [
        'label' => esc_html__('Select Button Page', OD),
        'type' => Controls_Manager::SELECT2,
        'label_block' => true,
        'options' => od_get_all_pages(),
        'condition' => [
            'od_btn_link_type' => '2',
        ]
    ]
);


$this->end_controls_section();

// Button Animation Section
$this->start_controls_section(
    'od_btn_animation',
    [
        'label' => __('Button Animation', OD),
    ]
);

$this->add_control(
    'od_btn_animation_fade_from',
    [
        'label' => __('Fade From', OD),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'top' => __('Top', OD),
            'bottom' => __('Bottom', OD),
            'left' => __('Left', OD),
            'right' => __('Right', OD),
        ],
        'default' => 'top',
        'label_block' => true,
    ]
);

$this->add_control(
    'od_btn_animation_ease',
    [
        'label' => __('Ease', OD),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            '' => __('None', OD),
            'bounce' => __('Bounce', OD),

        ],
        'default' => 'bounce',
        'label_block' => true,
    ]
);

$this->add_control(
    'od_btn_animation_delay',
    [
        'label' => esc_html__('Animation Delay', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('0.3', OD),
        'title' => esc_html__('enter delay in s', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();

// Style Section Starts
$this->start_controls_section(
    'od_btn_style',
    [
        'label' => __('Button Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_responsive_control(
    'od_btn_margin',
    [
        'label' => esc_html__('Button Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'default' => [
            'top' => '20',
            'right' => '30',
            'bottom' => '20',
            'left' => '30',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .it-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_btn_padding',
    [
        'label' => esc_html__('Button Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'default' => [
            'top' => '20',
            'right' => '30',
            'bottom' => '20',
            'left' => '30',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .it-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// box shadow

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_btn_box_shadow',
        'selector' => '{{WRAPPER}} .it-btn',
    ]
);


// Border
$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'border',
        'selector' => '{{WRAPPER}} .it-btn',
    ]
);

$this->add_control(
    'od_btn_border_radius',
    [
        'label' => esc_html__('Border Radius', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'default' => [
            'top' => '30',
            'right' => '30',
            'bottom' => '30',
            'left' => '30',
            'unit' => 'px',
        ],
        'selectors' => [
            '{{WRAPPER}} .it-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->start_controls_tabs(
    'od_btn_style_tabs'
);

$this->start_controls_tab(
    'od_btn_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_btn_style_normal_color',
    [
        'label' => esc_html__('Button Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn' => 'color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'od_btn_style_normal_bg_color',
    [
        'label' => esc_html__('Button BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn' => 'background-color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'od_btn_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_btn_style_hover_color',
    [
        'label' => esc_html__('Button Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn:hover' => 'color: {{VALUE}};',
        ],
    ]
);
$this->add_control(
    'od_btn_style_hover_bg_color',
    [
        'label' => esc_html__('Button Hover BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn::after' => 'background-color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();

// Button Typography
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Button Typography', OD),
        'name' => 'od_button_typography',
        'selector' => '{{WRAPPER}} .it-btn',
    ]
);

$this->end_controls_section();
