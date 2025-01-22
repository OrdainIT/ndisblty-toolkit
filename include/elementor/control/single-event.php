<?php

use Elementor\Controls_Manager;


// Process Box Content
$this->start_controls_section(
    'od_event_content',
    [
        'label' => esc_html__('Event Content', OD),
    ]
);

$this->add_control(
    'od_event_title',
    [
        'label' => esc_html__('Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('OD Title', OD),
        'placeholder' => esc_html__('Type title here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_title_url',
    [
        'label' => esc_html__('Title Url', OD),
        'type' => Controls_Manager::URL,
        'placeholder' => esc_html__('https://your-link.com', OD),
        'show_external' => true,
        'default' => [
            'url' => '#',
        ],
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_published_date',
    [
        'label' => esc_html__('Event Date', OD),
        'type' => Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => od_kses('15 <br /> Jan,24', OD),
        'placeholder' => esc_html__('Type date here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_location',
    [
        'label' => esc_html__('Location', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('238, Arimantab, Moska - USA.', OD),
        'placeholder' => esc_html__('Type location here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_location_url',
    [
        'label' => esc_html__('Location Url', OD),
        'type' => Controls_Manager::URL,
        'placeholder' => esc_html__('https://your-link.com', OD),
        'show_external' => true,
        'default' => [
            'url' => '#',
        ],
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_time',
    [
        'label' => esc_html__('Event Time', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('09:00AM - 12:00AM', OD),
        'placeholder' => esc_html__('Type event time here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_btn_text',
    [
        'label' => esc_html__('Button Text', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Od Button', OD),
        'placeholder' => esc_html__('Type btn text here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_btn_url',
    [
        'label' => esc_html__('Button Url', OD),
        'type' => Controls_Manager::URL,
        'placeholder' => esc_html__('https://your-link.com', OD),
        'show_external' => true,
        'default' => [
            'url' => '#',
        ],
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_thumbnail',
    [
        'label' => esc_html__('Choose Thumbnail Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$this->end_controls_section();


// Style Starts
// Event Style
$this->start_controls_section(
    'od_event_style',
    [
        'label' => __('Event Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_event_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-item' => 'background: {{VALUE}}',
        ],
    ]
);


$this->add_responsive_control(
    'od_event_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-event-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_event_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-event-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'od_event_border_radius',
    [
        'label' => esc_html__('Border Radius', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-event-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_event_box_shadow',
        'selector' => '{{WRAPPER}} .it-event-item',
    ]
);


$this->end_controls_section();



// Event Content Style
$this->start_controls_section(
    'od_event_content_style',
    [
        'label' => __('Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_event_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_event_title_border_color',
    [
        'label' => esc_html__('Title Border Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .border-line-black-2' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_event_title_typography',
        'selector' => '{{WRAPPER}} .it-event-title',
    ]
);

$this->add_control(
    'od_event_published_date_heading',
    [
        'label' => esc_html__('Event Date', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_published_date_color',
    [
        'label' => esc_html__('Date Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-date span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_event_published_date_bg_color',
    [
        'label' => esc_html__('Date Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-date' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'od_event_published_date_border',
        'selector' => '{{WRAPPER}} .it-event-date',
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Date Typography', OD),
        'name' => 'od_event_date_typography',
        'selector' => '{{WRAPPER}} .it-event-date span',
    ]
);

$this->add_control(
    'od_event_meta_heading',
    [
        'label' => esc_html__('Meta Content', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_meta_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-meta span svg' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-event-meta span svg path' => 'fill: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_event_meta_location_color',
    [
        'label' => esc_html__('Location Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-meta a' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Location Typography', OD),
        'name' => 'od_event_meta_location_typography',
        'selector' => '{{WRAPPER}} .it-event-meta a',
    ]
);

$this->add_control(
    'od_event_meta_time_color',
    [
        'label' => esc_html__('Time Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-meta .event-time' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Time Typography', OD),
        'name' => 'od_event_meta_time_typography',
        'selector' => '{{WRAPPER}} .it-event-meta .event-time',
    ]
);


$this->add_control(
    'od_event_btn_heading',
    [
        'label' => esc_html__('Button', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->start_controls_tabs(
    'od_event_btn_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_event_btn_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_event_btn_style_normal_color',
    [
        'label' => esc_html__('Button Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_event_btn_style_normal_bgcolor',
    [
        'label' => esc_html__('Button BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

// Hover

$this->start_controls_tab(
    'od_event_btn_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_event_btn_style_hover_color',
    [
        'label' => esc_html__('Button hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm:hover' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_event_btn_style_hover_bgcolor',
    [
        'label' => esc_html__('Button Hover BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm:hover' => 'background-color: {{VALUE}}',
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
        'name' => 'od_event_btn_typography',
        'selector' => '{{WRAPPER}} .it-btn-sm',
    ]
);

$this->end_controls_section();
