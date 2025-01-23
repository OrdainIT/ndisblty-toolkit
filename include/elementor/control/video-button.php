<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_video_button_content',
    [
        'label' => __('Button URL', 'ordainit-toolkit'),
    ]
);

$this->add_control(
    'od_video_button_url',
    [
        'label' => esc_html__('URL', 'textdomain'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('https://www.youtube.com/watch?v=YoOG5H4603Y', 'textdomain'),
       'label_block' => true,
    ]
);


$this->end_controls_section();

$this->start_controls_section(
    'od_video_button_style',
    [
        'label' => __('Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_video_button_bg_colr',
    [
        'label' => esc_html__('BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-video-icon a' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_video_button_icon_colr',
    [
        'label' => esc_html__('Icon Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-video-icon a svg path' => 'fill: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_video_button_icon_animation',
    [
        'label' => esc_html__('Icon Animation Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-video-icon a svg path' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_responsive_control(
    'od_video_button_height',
    [
        'label' => esc_html__('Height', 'textdomain'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['px'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 500,
                'step' => 1,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .it-video-icon a' => 'height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
        ],
    ]
);
$this->add_responsive_control(
    'od_video_button_width',
    [
        'label' => esc_html__('Width', 'textdomain'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['px'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 500,
                'step' => 1,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .it-video-icon a' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
);


$this->end_controls_section();
