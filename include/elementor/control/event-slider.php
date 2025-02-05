<?php

use Elementor\Controls_Manager;

// Event List Content
$this->start_controls_section(
    'od_event_slider_heading_section',
    [
        'label' => __('Event Heading', OD),
    ]
);

$this->add_control(
    'od_event_slider_heading_title',
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
    'od_event_slider_heading_subtitle',
    [
        'label' => esc_html__('Subtitle', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('OD Subtitle', OD),
        'placeholder' => esc_html__('Type subtitle here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();


// Event List Content
$this->start_controls_section(
    'od_event_slider_section_content_list',
    [
        'label' => __('Event Content', OD),
    ]
);

$this->add_control(
    'od_event_slider_lists',
    [
        'label' => esc_html__('Event List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_event_slider_list_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD event title', OD),
                'placeholder' => esc_html__('Type Title here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_title_url',
                'label' => esc_html__('Title Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_img',
                'label' => esc_html__('Choose Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
            [
                'name' => 'od_event_slider_list_event_date',
                'label' => esc_html__('Event Date', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => od_kses('15 <br />  Jan', OD),
                'placeholder' => esc_html__('Type event date here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_address',
                'label' => esc_html__('Address', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('238, Arimantab, Moska - USA.', OD),
                'placeholder' => esc_html__('Type address here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_address_url',
                'label' => esc_html__('Address Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_event_time',
                'label' => esc_html__('Event Time', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('09:00AM - 12:00AM', OD),
                'placeholder' => esc_html__('Type event time here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_btn_url',
                'label' => esc_html__('Button Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_btn_text',
                'label' => esc_html__('Button Text', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Button', OD),
                'placeholder' => esc_html__('Type button text here', OD),
                'label_block' => true,
            ],
        ],
        'default' => [
            [
                'od_event_slider_list_title' => esc_html__('Global forum exploring energy solutions for mining industry.', OD),
            ],
            [
                'od_event_slider_list_title' => esc_html__('Creating Vibrant Connections Through Events That Inspire.', OD),
            ],
            [
                'od_event_slider_list_title' => esc_html__('Bringing People Together for a Purposeful Celebration.', OD),
            ],

        ],
        'title_field' => '{{{ od_event_slider_list_title }}}',
    ]
);

$this->end_controls_section();

// Event Slider Settings
$this->start_controls_section(
    'od_event_slider_settings',
    [
        'label' => __('Slider Settings', OD),
    ]
);

$this->add_control(
    'od_event_slider_autoplay',
    [
        'label' => esc_html__('Autoplay Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('On', OD),
        'label_off' => esc_html__('Off', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_event_slider_autoplay_delay',
    [
        'label' => esc_html__('Autoplay Delay (ms)', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'min' => 1000,
        'step' => 100,
        'default' => 3000,
    ]
);

$this->add_control(
    'od_event_slider_navigation_switcher',
    [
        'label' => esc_html__('Navigation Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);


$this->end_controls_section();


// Event Style
$this->start_controls_section(
    'od_event_slider_heading_style',
    [
        'label' => __('Event Heading Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_event_slider_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_slider_heading_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_event_slider_heading_title_typography',
        'selector' => '{{WRAPPER}} .it-section-title',
    ]
);

$this->add_responsive_control(
    'od_event_slider_heading_title_margin',
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
    'od_event_slider_heading_title_padding',
    [
        'label' => esc_html__('Title Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'od_event_slider_subtitle_heading',
    [
        'label' => esc_html__('Subtitle', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->add_control(
    'od_event_slider_heading_subtitle_color',
    [
        'label' => esc_html__('Subtitle Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-subtitle' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_event_slider_heading_subtitle_icon_color',
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
        'name' => 'od_event_slider_heading_subtitle_typography',
        'selector' => '{{WRAPPER}} .it-section-subtitle',
    ]
);

$this->add_responsive_control(
    'od_event_slider_heading_subtitle_margin',
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
    'od_event_slider_heading_subtitle_padding',
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


// Event Style
$this->start_controls_section(
    'od_event_slider_box_style',
    [
        'label' => __('Event Box Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_event_slider_box_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-item' => 'background: {{VALUE}}',
        ],
    ]
);


$this->add_responsive_control(
    'od_event_slider_box_margin',
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
    'od_event_slider_box_padding',
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
    'od_event_slider_box_border_radius',
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
        'name' => 'od_event_slider_box_box_shadow',
        'selector' => '{{WRAPPER}} .it-event-item',
    ]
);


$this->end_controls_section();




// Event Content Style
$this->start_controls_section(
    'od_event_slider_item_content_style',
    [
        'label' => __('Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_event_slider_item_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_slider_item_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_event_slider_item_title_border_color',
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
        'name' => 'od_event_slider_item_title_typography',
        'selector' => '{{WRAPPER}} .it-event-title',
    ]
);

$this->add_control(
    'od_event_slider_item_event_date_heading',
    [
        'label' => esc_html__('Event Date', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_slider_item_event_date_color',
    [
        'label' => esc_html__('Date Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-date span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_event_slider_item_event_date_bg_color',
    [
        'label' => esc_html__('Date BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-date' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'od_event_slider_item_event_date_border',
        'selector' => '{{WRAPPER}} .it-event-date',
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Date Typography', OD),
        'name' => 'od_event_slider_event_date_typography',
        'selector' => '{{WRAPPER}} .it-event-date span',
    ]
);

$this->add_control(
    'od_event_slider_item_meta_heading',
    [
        'label' => esc_html__('Meta Content', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_event_slider_item_meta_icon_color',
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
    'od_event_slider_item_meta_location_color',
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
        'name' => 'od_event_slider_item_meta_location_typography',
        'selector' => '{{WRAPPER}} .it-event-meta a',
    ]
);

$this->add_control(
    'od_event_slider_item_meta_time_color',
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
        'name' => 'od_event_slider_item_meta_time_typography',
        'selector' => '{{WRAPPER}} .it-event-meta .event-time',
    ]
);


$this->add_control(
    'od_event_slider_item_btn_heading',
    [
        'label' => esc_html__('Button', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->start_controls_tabs(
    'od_event_slider_item_btn_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_event_slider_item_btn_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_event_slider_item_btn_style_normal_color',
    [
        'label' => esc_html__('Button Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_event_slider_item_btn_style_normal_bgcolor',
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
    'od_event_slider_item_btn_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_event_slider_item_btn_style_hover_color',
    [
        'label' => esc_html__('Button hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm:hover' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_event_slider_item_btn_style_hover_bgcolor',
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
        'name' => 'od_event_slider_item_btn_typography',
        'selector' => '{{WRAPPER}} .it-btn-sm',
    ]
);

$this->end_controls_section();



// Event Content Style
$this->start_controls_section(
    'od_event_slider_navigation_style',
    [
        'label' => __('Navigation Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->start_controls_tabs(
    'od_event_slider_navigation_btn_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_event_slider_navigation_btn_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_event_slider_navigation_btn_style_normal_color',
    [
        'label' => esc_html__('Button Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-arrow-box button' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_event_slider_navigation_btn_style_normal_bgcolor',
    [
        'label' => esc_html__('Button BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-arrow-box button' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

// Hover

$this->start_controls_tab(
    'od_event_slider_navigation_btn_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_event_slider_navigation_btn_style_hover_color',
    [
        'label' => esc_html__('Button hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-arrow-box button:hover' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_event_slider_navigation_btn_style_hover_bgcolor',
    [
        'label' => esc_html__('Button Hover BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-event-arrow-box button:hover' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();

$this->end_controls_section();
