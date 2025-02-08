<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'section_content',
    [
        'label' => __('Content hello', 'ordainit-toolkit'),
    ]
);

$this->add_control(
    'title',
    [
        'label' => __('Title', 'ordainit-toolkit'),
        'type' => Controls_Manager::TEXT,
    ]
);

$this->add_control(
    'show_elements',
    [
        'label' => esc_html__('Show Elements', 'plugin-name'),
        'type' => Controls_Manager::SELECT2,
        'multiple' => true,
        'options' => [
            'title'  => esc_html__('Title', 'plugin-name'),
            'description' => esc_html__('Description', 'plugin-name'),
            'button' => esc_html__('Button', 'plugin-name'),
        ],
        'default' => ['title', 'description'],
    ]
);

// Style Starts

$this->end_controls_section();

$this->start_controls_section(
    'section_style',
    [
        'label' => __('Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'text_transform',
    [
        'label' => __('Text Transform', 'ordainit-toolkit'),
        'type' => Controls_Manager::SELECT,
        'default' => '',
        'options' => [
            '' => __('None', 'ordainit-toolkit'),
            'uppercase' => __('UPPERCASE', 'ordainit-toolkit'),
            'lowercase' => __('lowercase', 'ordainit-toolkit'),
            'capitalize' => __('Capitalize', 'ordainit-toolkit'),
        ],
        'selectors' => [
            '{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
        ],
    ]
);

$this->end_controls_section();
