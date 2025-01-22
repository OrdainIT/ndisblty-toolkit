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
            'layout-3' => esc_html__('Layout 3', OD),
        ],
        'default' => 'layout-1',
    ]
);

$this->end_controls_section();


// Testimonial List Content
$this->start_controls_section(
    'od_testimonial_slider_section_content_list',
    [
        'label' => __('Testimonial Content', OD),
    ]
);

$this->add_control(
    'od_testimonial_slider_lists',
    [
        'label' => esc_html__('Testimonial List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_testimonial_slider_list_author',
                'label' => esc_html__('Author', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Testimonial Author', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_testimonial_slider_list_avatar',
                'label' => esc_html__('Choose Avatar', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],

            ],
            [
                'name' => 'od_testimonial_slider_list_designation',
                'label' => esc_html__('Designation', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Testimonial Designation', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_testimonial_slider_list_description',
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Testimonial Description', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_testimonial_slider_list_rating',
                'label' => esc_html__('Select Star', OD),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '5',
                'options' => [
                    '1' => esc_html__('1 Star', OD),
                    '2' => esc_html__('2 Stars', OD),
                    '3' => esc_html__('3 Stars', OD),
                    '4' => esc_html__('4 Stars', OD),
                    '5' => esc_html__('5 Stars', OD),
                ],

            ],

        ],
        'default' => [
            [
                'od_testimonial_slider_list_author' => esc_html__('Francis Roman', OD),
            ],
            [
                'od_testimonial_slider_list_author' => esc_html__('Isco Alarcon', OD),
            ],
            [
                'od_testimonial_slider_list_author' => esc_html__('Sergio Ramos', OD),
            ],

        ],
        'title_field' => '{{{ od_testimonial_slider_list_author }}}',
    ]
);

$this->end_controls_section();

// Testimonial Thumb
$this->start_controls_section(
    'od_testimonial_slider_thumbnail',
    [
        'label' => __('Testimonial Image', OD),
        'condition' => [
            'od_design_style' => ['layout-2']
        ]
    ]
);

$this->add_control(
    'od_testimonial_slider_thumbnail_image',
    [
        'label' => esc_html__('Choose Thumbnail Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();

// Testimonial settings
$this->start_controls_section(
    'od_testimonial_slider_settings',
    [
        'label' => __('Testimonial Settings', OD),
    ]
);

$this->add_control(
    'od_testimonial_slider_autoplay',
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
    'od_testimonial_slider_autoplay_delay',
    [
        'label' => esc_html__('Autoplay Delay (ms)', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'min' => 1000,
        'step' => 100,
        'default' => 3000,
    ]
);

$this->add_control(
    'od_testimonial_slider_star_switcher',
    [
        'label' => esc_html__('Star Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_testimonial_slider_quote_switcher',
    [
        'label' => esc_html__('Quote Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_testimonial_slider_pagination_switcher',
    [
        'label' => esc_html__('Pagination Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->end_controls_section();



// Style Starts
// Testimonial Style
$this->start_controls_section(
    'od_testimonial_slider_style',
    [
        'label' => __('Testimonial Slider Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_testimonial_slider_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-item' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->add_responsive_control(
    'od_testimonial_slider_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_testimonial_slider_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'od_testimonial_slider_border_radius',
    [
        'label' => esc_html__('Border Radius', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_testimonial_slider_box_shadow',
        'selector' => '{{WRAPPER}} .it-testimonial-item',
    ]
);


$this->end_controls_section();


// Testimonial Content Style
$this->start_controls_section(
    'od_testimonial_slider_content_style',
    [
        'label' => __('Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_testimonial_slider_author_heading',
    [
        'label' => esc_html__('Author', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_testimonial_slider_author_color',
    [
        'label' => esc_html__('Author Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-author-info h5' => 'color: {{VALUE}}',
        ],
    ]
);


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Author Typography', OD),
        'name' => 'od_testimonial_slider_author_typography',
        'selector' => '
            {{WRAPPER}} .it-testimonial-author-info h5
        ',
    ]
);

$this->add_control(
    'od_testimonial_slider_designation_heading',
    [
        'label' => esc_html__('Designation', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_testimonial_slider_designation_color',
    [
        'label' => esc_html__('Designation Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-author-info span' => 'color: {{VALUE}}',
        ],
    ]
);


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Designation Typography', OD),
        'name' => 'od_testimonial_slider_designation_typography',
        'selector' => '
            {{WRAPPER}} .it-testimonial-author-info span
        ',
    ]
);

$this->add_control(
    'od_testimonial_slider_description_heading',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_testimonial_slider_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-text p' => 'color: {{VALUE}}',
        ],
    ]
);


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_testimonial_slider_description_typography',
        'selector' => '
            {{WRAPPER}} .it-testimonial-text p
        ',
    ]
);

$this->add_control(
    'od_testimonial_slider_icon_heading',
    [
        'label' => esc_html__('Icon', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_testimonial_slider_star_color',
    [
        'label' => esc_html__('Star Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-ratting svg path' => 'fill: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_testimonial_slider_quote_color',
    [
        'label' => esc_html__('Quote Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-ratting-wrap .quote-icon svg path' => 'fill: {{VALUE}}',
        ],
    ]
);

$this->end_controls_section();


// Testimonial Content Style
$this->start_controls_section(
    'od_testimonial_slider_pagination_style',
    [
        'label' => __('Pagination Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_testimonial_slider_pagination_bullet_color',
    [
        'label' => esc_html__('Bullet Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-dots .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_testimonial_slider_pagination_bullet_active_color',
    [
        'label' => esc_html__('Bullet Active Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-testimonial-dots .swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_section();
