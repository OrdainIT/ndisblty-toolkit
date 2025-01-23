<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_portfolio_content',
    [
        'label' => __('Portfolio', 'ordainit-toolkit'),
    ]
);

$this->add_control(
    'od_portfolio_content_title',
    [
        'label' => esc_html__('Title', 'textdomain'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__('Intensive Care', 'textdomain'),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_portfolio_content_subtitle',
    [
        'label' => esc_html__('SubTitle', 'textdomain'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__('Helping care', 'textdomain'),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_portfolio_content_image',
    [
        'label' => esc_html__('Thumbnail Image', 'textdomain'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'od_portfolio_content_url',
    [
        'label' => esc_html__('URL', 'textdomain'),
        'type' => \Elementor\Controls_Manager::URL,
        'options' => ['url', 'is_external', 'nofollow'],
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            // 'custom_attributes' => '',
        ],
        'label_block' => true,
    ]
);


$this->end_controls_section();


$this->start_controls_section(
    'od_portfolio_settings',
    [
        'label' => __('Settings', 'ordainit-toolkit'),
    ]
);


$this->add_control(
    'od_portfolio_content_duration',
    [
        'label' => esc_html__('Duration', 'textdomain'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('1.5', 'textdomain'),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_portfolio_content_delay',
    [
        'label' => esc_html__('Delay', 'textdomain'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('0.1', 'textdomain'),
        'label_block' => true,
    ]
);





$this->end_controls_section();

$this->start_controls_section(
    'od_portfolio_style',
    [
        'label' => __('Portfolio', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_portfolio_title',
    [
        'label' => esc_html__('Title', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_portfolio_title_color',
    [
        'label' => esc_html__('Text Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-black' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_portfolio_title_typo',
        'selector' => '{{WRAPPER}} .it-portfolio-title',
    ]
);


$this->add_control(
    'od_portfolio_subtitle',
    [
        'label' => esc_html__('Sub Title', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_portfolio_subtitle_color',
    [
        'label' => esc_html__('Text Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-content span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_portfolio_subtitle_typo',
        'selector' => '{{WRAPPER}} .it-portfolio-content span',
    ]
);



$this->add_control(
    'od_portfolio_icon',
    [
        'label' => esc_html__('Icon', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->add_control(
    'od_portfolio_icon_area_bg_color',
    [
        'label' => esc_html__('BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-content::after' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->start_controls_tabs(
    'od_portfolio_icon_style_tabs'
);

$this->start_controls_tab(
    'od_portfolio_icon_style_normal_tab',
    [
        'label' => esc_html__('Normal', 'textdomain'),
    ]
);

$this->add_control(
    'od_portfolio_icon_style_normal_bg_color',
    [
        'label' => esc_html__('Icon BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-portfolio-content::before' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_portfolio_icon_style_normal_icon_color',
    [
        'label' => esc_html__('Icon Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'od_portfolio_icon_style_hover_tab',
    [
        'label' => esc_html__('Hover', 'textdomain'),
    ]
);

$this->add_control(
    'od_portfolio_icon_style_hover_bg_color',
    [
        'label' => esc_html__('Icon BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_portfolio_icon_style_hover_icon_color',
    [
        'label' => esc_html__('Icon Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();



$this->end_controls_section();
