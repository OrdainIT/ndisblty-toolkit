<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_portfolio_slider_content',
    [
        'label' => __('Slider Content', 'ordainit-toolkit'),
    ]
);


$this->add_control(
    'od_portfolio_slider_repeater',
    [
        'label' => esc_html__('Slider List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'portoflio_slider_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Golden Care Moments', OD),
                'label_block' => true,
            ],
            [
                'name' => 'portoflio_slider_subtitle',
                'label' => esc_html__('Sub Title', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Helping Care', OD),
                'label_block' => true,
            ],
            [
                'name' => 'portoflio_slider_image',
                'label' => esc_html__('Thumbnail Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],

            [
                'name' => 'portoflio_slider_url',
                'label' => esc_html__('URL', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', OD),
                'label_block' => true,
            ],
        ],
        'default' => [
            [
                'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
            ],
            [
                'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
            ],
            [
                'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
            ],
            [
                'portoflio_slider_title' => esc_html__('Golden Care Moments', OD),
            ],
        ],
        'title_field' => '{{{ portoflio_slider_title }}}',
    ]
);



$this->end_controls_section();


$this->start_controls_section(
    'od_portfolioslider_settings',
    [
        'label' => __('Settings', 'ordainit-toolkit'),
    ]
);



$this->add_control(
    'od_portfolio_slider_autoplay',
    [
        'label' => esc_html__('Autoplay ON/Off', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('On', OD),
        'label_off' => esc_html__('OFF', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_portfolio_slider_delay',
    [
        'label' => esc_html__('Delay (ms)', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('300', OD),
    ]
);





$this->end_controls_section();



$this->start_controls_section(
    'od_portfolio_slider_style',
    [
        'label' => __('Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_portfolio_slider_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_portfolio_slider_title_color',
    [
        'label' => esc_html__('Text Color', OD),
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
        'name' => 'od_portfolio_slider_title_typo',
        'selector' => '{{WRAPPER}} .it-portfolio-title',
    ]
);
$this->add_control(
    'od_portfolio_slider_sbheading',
    [
        'label' => esc_html__('Sub Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_portfolio_slider_subtitle_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-content span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_portfolio_slider_subtitle_typo',
        'selector' => '{{WRAPPER}} .it-portfolio-content span',
    ]
);

$this->add_control(
    'od_portfolio_slider_icon_heading',
    [
        'label' => esc_html__('Icon', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_portfolio_slider_iconarea_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-content::after' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_portfolio_slider_iconarea_hover_color',
    [
        'label' => esc_html__('Icon BG Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-content::before' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->start_controls_tabs(
    'od_portfolio_slider_icon_tabs'
);

$this->start_controls_tab(
    'od_portfolio_slider_icon_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);


$this->add_control(
    'od_portfolio_slider_icon_normal_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_portfolio_slider_icon_normal_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();

$this->start_controls_tab(
    'od_portfolio_slider_icon_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'od_portfolio_slider_icon_hover_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_portfolio_slider_icon_hover_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-portfolio-item:hover .it-portfolio-arrow a svg path' => 'stroke: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();

$this->end_controls_tabs();


$this->end_controls_section();
