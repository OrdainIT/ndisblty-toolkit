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


// Hero BG Image
$this->start_controls_section(
    'od_hero_banner_bg_img_section',
    [
        'label' => esc_html__('Banner BG Image', OD),
        'condition' => [
            'od_design_style' => ['layout-3'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_bg_img',
    [
        'label' => esc_html__('Choose BG Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();


// Hero Content
$this->start_controls_section(
    'od_hero_banner_content',
    [
        'label' => esc_html__('Hero Content', OD),
    ]
);

$this->add_control(
    'od_hero_banner_title',
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
    'od_hero_banner_description',
    [
        'label' => esc_html__('Description', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('OD Description', OD),
        'placeholder' => esc_html__('Type Description here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();



// Button
$this->start_controls_section(
    'od_hero_banner_section_button',
    [
        'label' => esc_html__('Button', OD),
    ]
);

$this->add_control(
    'od_hero_banner_btn_switcher',
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
    'od_hero_banner_btn_url',
    [
        'label' => esc_html__('Button Url', OD),
        'type' => Controls_Manager::URL,
        'placeholder' => esc_html__('https://your-link.com', OD),
        'show_external' => true,
        'default' => [
            'url' => '#',
        ],
        'label_block' => true,
        'condition' => [
            'od_hero_banner_btn_switcher' => 'yes'
        ]
    ]
);

$this->add_control(
    'od_hero_banner_btn_text',
    [
        'label' => esc_html__('Button Text', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('OD Hero Button', OD),
        'placeholder' => esc_html__('Type button text here', OD),
        'label_block' => true,
        'condition' => [
            'od_hero_banner_btn_switcher' => 'yes'
        ]
    ]
);

$this->end_controls_section();


// Hero Right Content
$this->start_controls_section(
    'od_hero_banner_icon_content',
    [
        'label' => esc_html__('Icon', OD),
        'condition' => [
            'od_design_style' => ['layout-3'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_icon',
    [
        'label' => esc_html__('SVG Icon', OD),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => od_kses('Icon', OD),
        'placeholder' => esc_html__('Type svg icon here here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();

// Hero Right Content
$this->start_controls_section(
    'od_hero_banner_right_content',
    [
        'label' => esc_html__('Hero Right Content', OD),
        'condition' => [
            'od_design_style' => ['layout-2'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_right_number',
    [
        'label' => esc_html__('Number', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('15', OD),
        'placeholder' => esc_html__('Type number here', OD),
    ]
);

$this->add_control(
    'od_hero_banner_right_description',
    [
        'label' => esc_html__('Description', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('OD Description', OD),
        'placeholder' => esc_html__('Type Description here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();


// Thumbnail
$this->start_controls_section(
    'od_hero_banner_thumbnail_section',
    [
        'label' => esc_html__('Thumbnail', OD),
    ]
);

$this->add_control(
    'od_hero_banner_thumbnail_image',
    [
        'label' => esc_html__('Choose Thumbnail Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'od_hero_banner_thumbnail_image_2',
    [
        'label' => esc_html__('Choose Thumbnail Image 2', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ]
    ]
);
$this->add_control(
    'od_hero_banner_thumbnail_image_3',
    [
        'label' => esc_html__('Choose Thumbnail Image 3', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ]
    ]
);

$this->end_controls_section();


// Shape
$this->start_controls_section(
    'od_hero_banner_shape_section',
    [
        'label' => esc_html__('Shape', OD),
        'condition' => [
            'od_design_style' => ['layout-1', 'layout-2'],
        ],
    ]
);

$this->add_control(
    'od_hero_banner_shape_image_1',
    [
        'label' => esc_html__('Choose Shape Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'od_design_style' => ['layout-1', 'layout-2'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_shape_image_2',
    [
        'label' => esc_html__('Choose Shape Image 2', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ]
    ]
);

$this->end_controls_section();

// Style Starts
// Banner Style
$this->start_controls_section(
    'od_hero_banner_style',
    [
        'label' => __('Banner Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-1', 'layout-2'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_bg_color',
    [
        'label' => esc_html__('Banner BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .theme-bg' => 'background-color: {{VALUE}}',
        ],

    ]
);

$this->add_control(
    'od_hero_banner_bg_color_2',
    [
        'label' => esc_html__('Banner BG Color 2', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-red-bg' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-hero-2-red-bg' => 'background-color: {{VALUE}}',
        ],

    ]
);

$this->end_controls_section();


// Banner Content Style
$this->start_controls_section(
    'od_hero_banner_content_style',
    [
        'label' => __('Banner Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

// Title Style
$this->add_control(
    'od_hero_banner_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-hero-2-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-hero-3-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_hero_banner_title_span_color',
    [
        'label' => esc_html__('Title Special Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-3-title span' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-3'],
        ]
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_hero_banner_title_typography',
        'selector' => '
            {{WRAPPER}} .it-hero-title,
            {{WRAPPER}} .it-hero-2-title,
            {{WRAPPER}} .it-hero-3-title
        ',
    ]
);

$this->add_control(
    'hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

// Description Style
$this->add_control(
    'od_hero_banner_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-content p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-hero-2-content p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-hero-3-content p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_hero_banner_description_typography',
        'selector' => '
            {{WRAPPER}} .it-hero-content p,
            {{WRAPPER}} .it-hero-2-content p,
            {{WRAPPER}} .it-hero-3-content p
        ',
    ]
);

$this->end_controls_section();

// Banner Icon Content Style
$this->start_controls_section(
    'od_hero_banner_icon_style',
    [
        'label' => __('Banner Icon Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-3'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-3-thumb-icon svg path' => 'fill: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_hero_banner_icon_bg_color',
    [
        'label' => esc_html__('Icon Bg Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-3-thumb-icon::after' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_hero_banner_icon_box_bg_color',
    [
        'label' => esc_html__('Icon Box Bg Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-3-thumb-icon' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_hero_banner_icon_animation_color',
    [
        'label' => __('Animation Color', 'ordainit-toolkit'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'default' => 'rgba(220, 28, 28, 0.2)',
        'selectors' => [
            '{{WRAPPER}} .it-hero-3-thumb-icon' => '--animation-color: {{VALUE}};',
        ],
    ]
);

$this->end_controls_section();

// Banner Right Content Style
$this->start_controls_section(
    'od_hero_banner_right_content_style',
    [
        'label' => __('Banner Right Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-2'],
        ]
    ]
);

$this->add_control(
    'od_hero_banner_right_bg_color',
    [
        'label' => esc_html__('Background Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-2-experience' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'hr_3',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_hero_banner_right_number_color',
    [
        'label' => esc_html__('Number Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-2-experience i' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Number Typography', OD),
        'name' => 'od_hero_banner_right_number_typography',
        'selector' => '{{WRAPPER}} .it-hero-2-experience i',
    ]
);

$this->add_control(
    'hr_4',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'od_hero_banner_right_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-hero-2-experience span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_hero_banner_right_description_typography',
        'selector' => '{{WRAPPER}} .it-hero-2-experience span',
    ]
);

$this->end_controls_section();


// Button Style
$this->start_controls_section(
    'od_hero_banner_btn_style',
    [
        'label' => __('Button Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_hero_banner_btn_switcher' => 'yes',
        ],
    ]
);

$this->start_controls_tabs(
    'od_hero_banner_btn_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_hero_banner_btn_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_hero_banner_btn_style_normal_color',
    [
        'label' => esc_html__('Button Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-red' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_hero_banner_btn_style_normal_bgcolor',
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
    'od_hero_banner_btn_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_hero_banner_btn_style_hover_color',
    [
        'label' => esc_html__('Button hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-red:hover' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_hero_banner_btn_style_hover_bgcolor',
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
    'hr_2',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

// Button Typography
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Button Typography', OD),
        'name' => 'od_hero_banner_btn_typography',
        'selector' => '{{WRAPPER}} .it-btn-red',
    ]
);

$this->add_responsive_control(
    'od_hero_banner_btn_margin',
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
    'od_hero_banner_btn_padding',
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
        'name' => 'od_hero_banner_btn_border',
        'selector' => '{{WRAPPER}} .it-btn-red',
    ]
);

$this->add_control(
    'od_hero_banner_btn_border_radius',
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
        'name' => 'od_hero_banner_btn_box_shadow',
        'selector' => '{{WRAPPER}} .it-btn-red',
    ]
);

$this->end_controls_section();
