<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_title_box_content',
    [
        'label' => __('Title Box Content', OD),
    ]
);

$this->add_control(
    'od_title_box_alignment',
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
    ]
);

$this->add_control(
    'hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_title_box_title_show',
    [
        'label' => esc_html__('Title Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);


$this->add_control(
    'od_title_box_title_tag',
    [
        'label' => esc_html__('Title HTML Tag', 'tvcore'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'h1' => [
                'title' => esc_html__('H1', 'tvcore'),
                'icon' => 'eicon-editor-h1'
            ],
            'h2' => [
                'title' => esc_html__('H2', 'tvcore'),
                'icon' => 'eicon-editor-h2'
            ],
            'h3' => [
                'title' => esc_html__('H3', 'tvcore'),
                'icon' => 'eicon-editor-h3'
            ],
            'h4' => [
                'title' => esc_html__('H4', 'tvcore'),
                'icon' => 'eicon-editor-h4'
            ],
            'h5' => [
                'title' => esc_html__('H5', 'tvcore'),
                'icon' => 'eicon-editor-h5'
            ],
            'h6' => [
                'title' => esc_html__('H6', 'tvcore'),
                'icon' => 'eicon-editor-h6'
            ]
        ],
        'default' => 'h3',
        'toggle' => false,
        'condition' => [
            'od_title_box_title_show' => 'yes',
        ]
    ]
);

$this->add_control(
    'od_title_box_title',
    [
        'label' => __('Heading Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('OD Heading', OD),
        'placeholder' => esc_html__('Type title here', OD),
        'label_block' => true,
        'condition' => [
            'od_title_box_title_show' => 'yes',
        ]
    ]
);

$this->add_control(
    'od_title_box_title_link',
    [
        'label' => __('Heading Link', OD),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('https://your-link.com', OD),
        'default' => [
            'url' => '',
            'is_external' => false,
            'nofollow' => false,
        ],
        'condition' => [
            'od_title_box_title_show' => 'yes',
        ]
    ]
);

$this->add_control(
    'hr_2',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_title_box_subtitle_show',
    [
        'label' => esc_html__('Subtitle Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_title_box_subtitle',
    [
        'label' => __('Heading Subtitle', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('OD Heading Subtitle', OD),
        'placeholder' => esc_html__('Type subtitle here', OD),
        'label_block' => true,
        'condition' => [
            'od_title_box_subtitle_show' => 'yes',
        ]
    ]
);

$this->end_controls_section();


// Style Starts
$this->start_controls_section(
    'od_title_box_title_style',
    [
        'label' => __('Title Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_title_box_title_show' => 'yes',
        ]
    ]
);

$this->add_control(
    'od_title_box_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_title_box_title_span_color',
    [
        'label' => esc_html__('Title Span Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-title span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_title_box_title_typography',
        'selector' => '{{WRAPPER}} .it-section-title',
    ]
);

$this->add_responsive_control(
    'od_title_box_title_margin',
    [
        'label' => esc_html__('Title Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_title_box_title_padding',
    [
        'label' => esc_html__('Title Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();


// Subtitle Style Starts
$this->start_controls_section(
    'od_title_box_subtitle_style',
    [
        'label' => __('Subtitle Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_title_box_subtitle_show' => 'yes',
        ]
    ]
);

$this->add_control(
    'od_title_box_subtitle_color',
    [
        'label' => esc_html__('Subtitle Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-subtitle' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_title_box_subtitle_icon_color',
    [
        'label' => esc_html__('Subtitle Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-subtitle::before' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-section-subtitle::after' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Subtitle Typography', OD),
        'name' => 'od_title_box_subtitle_typography',
        'selector' => '{{WRAPPER}} .it-section-subtitle',
    ]
);

$this->add_responsive_control(
    'od_title_box_subtitle_margin',
    [
        'label' => esc_html__('Subtitle Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-section-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_title_box_subtitle_padding',
    [
        'label' => esc_html__('Subtitle Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-section-subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);


$this->end_controls_section();
