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

// Hero List Content
$this->start_controls_section(
    'od_hero_slider_section_content_list',
    [
        'label' => __('Hero Content', OD),
    ]
);

$this->add_control(
    'od_hero_slider_lists',
    [
        'label' => esc_html__('Hero List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_hero_slider_list_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Hero Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'rows' => '3',
                'label_block' => true,
            ],
            [
                'name' => 'od_hero_slider_list_subtitle',
                'label' => esc_html__('Subtitle', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Hero Subtitle', OD),
                'placeholder' => esc_html__('Type subtitle here', OD),
                'description' => esc_html__('It will work only for layout-1', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_hero_slider_list_description',
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Hero Description', OD),
                'placeholder' => esc_html__('Type description here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_hero_slider_list_btn_url',
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
                'name' => 'od_hero_slider_list_btn_text',
                'label' => esc_html__('Button Text', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Hero Button', OD),
                'placeholder' => esc_html__('Type button text here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_hero_slider_list_bg_img',
                'label' => esc_html__('Choose Background Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],

            ],
        ],
        'default' => [
            [
                'od_hero_slider_list_title' => esc_html__('Od Hero Title 1', OD),
            ],
            [
                'od_hero_slider_list_title' => esc_html__('Od Hero Title 2', OD),
            ],
            [
                'od_hero_slider_list_title' => esc_html__('Od Hero Title 3', OD),
            ],
        ],
        'title_field' => 'Slider Content',
    ]
);

$this->end_controls_section();

// Hero Shape Content
$this->start_controls_section(
    'od_hero_slider_shape_section',
    [
        'label' => __('Shape Image', OD),
    ]
);

$this->add_control(
    'od_hero_slider_shape_image_1',
    [
        'label' => esc_html__('Choose Shape Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'od_hero_slider_shape_image_2',
    [
        'label' => esc_html__('Choose Shape Image 2', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'od_design_style' => ['layout-2']
        ],
    ]
);

$this->end_controls_section();


// Slider Settings
$this->start_controls_section(
    'od_hero_slider_settings_section',
    [
        'label' => __('Slider Settings', OD),
    ]
);

$this->add_control(
    'od_hero_slider_title_icon_switcher',
    [
        'label' => esc_html__('Title Icon Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_hero_slider_btn_switcher',
    [
        'label' => esc_html__('Button Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_hero_slider_pagination_switcher',
    [
        'label' => esc_html__('Pagination Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_hero_slider_autoplay',
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
    'od_hero_slider_autoplay_delay',
    [
        'label' => esc_html__('Autoplay Delay (ms)', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'min' => 1000,
        'step' => 100,
        'default' => 4500,
    ]
);

$this->end_controls_section();


// Slider Style
$this->start_controls_section(
    'od_hero_slider_style',
    [
        'label' => __('Slider Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_hero_slider_bg_color',
    [
        'label' => esc_html__('Slider BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-overlay::after' => 'background-color: {{VALUE}}',
        ],

    ]
);

$this->end_controls_section();

// Slider Content Style
$this->start_controls_section(
    'od_hero_slider_content_style',
    [
        'label' => __('Slider Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

// Title Style
$this->add_control(
    'od_hero_slider_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_hero_slider_title_icon_color',
    [
        'label' => esc_html__('Title Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-title .it-slider-title-shape svg path' => 'fill: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1'],
            'od_hero_slider_title_icon_switcher' => 'yes'
        ]
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_hero_slider_title_typography',
        'selector' => '{{WRAPPER}} .it-slider-title',
    ]
);

$this->add_control(
    'hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
        'condition' => [
            'od_design_style' => ['layout-1'],
        ]
    ]
);


// SubTitle Style
$this->add_control(
    'od_hero_slider_subtitle_color',
    [
        'label' => esc_html__('Subtitle Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-subtitle' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1'],
        ]
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Subtitle Typography', OD),
        'name' => 'od_hero_slider_subtitle_typography',
        'selector' => '{{WRAPPER}} .it-slider-subtitle',
        'condition' => [
            'od_design_style' => ['layout-1'],
        ]
    ]
);

$this->add_control(
    'hr_2',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

// Description Style
$this->add_control(
    'od_hero_slider_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-content p' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_hero_slider_description_typography',
        'selector' => '{{WRAPPER}} .it-slider-content p',
    ]
);

$this->end_controls_section();


// Button Style
$this->start_controls_section(
    'od_hero_slider_btn_style',
    [
        'label' => __('Button Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_hero_slider_btn_switcher' => 'yes',
        ],
    ]
);

$this->start_controls_tabs(
    'od_hero_slider_btn_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_hero_slider_btn_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_hero_slider_btn_style_normal_color',
    [
        'label' => esc_html__('Button Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-red' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_hero_slider_btn_style_normal_bgcolor',
    [
        'label' => esc_html__('Button BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-red' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

// Hover

$this->start_controls_tab(
    'od_hero_slider_btn_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_hero_slider_btn_style_hover_color',
    [
        'label' => esc_html__('Button hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-red:hover' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_hero_slider_btn_style_hover_bgcolor',
    [
        'label' => esc_html__('Button Hover BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-red:hover' => 'background-color: {{VALUE}}',

        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();

$this->add_control(
    'hr_3',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

// Button Typography
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Button Typography', OD),
        'name' => 'od_hero_slider_btn_typography',
        'selector' => '{{WRAPPER}} .it-btn-red',
    ]
);

$this->add_responsive_control(
    'od_hero_slider_btn_margin',
    [
        'label' => esc_html__('Button Margin', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-btn-red' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_hero_slider_btn_padding',
    [
        'label' => esc_html__('Button Padding', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-btn-red' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Border::get_type(),
    [
        'name' => 'od_hero_slider_btn_border',
        'selector' => '{{WRAPPER}} .it-btn-red',
    ]
);

$this->add_control(
    'od_hero_slider_btn_border_radius',
    [
        'label' => esc_html__('Border Radius', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-btn-red' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_hero_slider_btn_box_shadow',
        'selector' => '{{WRAPPER}} .it-btn-red',
    ]
);

$this->end_controls_section();


// Pagination Style
$this->start_controls_section(
    'od_hero_slider_pagination_style',
    [
        'label' => __('Slider Pagination Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->start_controls_tabs(
    'od_hero_slider_pagination_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_hero_slider_pagination_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_hero_slider_pagination_style_normal_color',
    [
        'label' => esc_html__('Pagination Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .swiper-pagination-bullet' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_hero_slider_pagination_style_normal_bgcolor',
    [
        'label' => esc_html__('Pagination BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

// Active

$this->start_controls_tab(
    'od_hero_slider_pagination_style_active_tab',
    [
        'label' => esc_html__('Active', OD),
    ]
);

$this->add_control(
    'od_hero_slider_pagination_style_active_color',
    [
        'label' => esc_html__('Pagination Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .swiper-pagination-bullet-active' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_hero_slider_pagination_style_active_bgcolor',
    [
        'label' => esc_html__('Pagination BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',

        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();

$this->end_controls_section();

// Shape Style
$this->start_controls_section(
    'od_hero_slider_shape_style',
    [
        'label' => __('Slider Shape Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-1'],
        ]
    ]
);

$this->add_control(
    'od_hero_slider_shape_color_1',
    [
        'label' => esc_html__('Shape Color 1', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-circle::before' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_hero_slider_shape_color_2',
    [
        'label' => esc_html__('Shape Color 2', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-slider-circle::after' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_section();
