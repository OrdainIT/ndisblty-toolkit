<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_about_section_title_content',
    [
        'label' => __('Title & Content', 'ordainit-toolkit'),
    ]
);


$this->add_control(
    'od_about_section_title',
    [
        'label' => __('Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => od_kses('About Us', OD),
    ]
);

// description

$this->add_control(
    'od_about_section_description',
    [
        'label' => __('Description', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => od_kses('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', OD),
    ]
);






$this->end_controls_section();



$this->start_controls_section(
    'od_about_section_info_content',
    [
        'label' => __('Info', 'ordainit-toolkit'),
    ]
);

$this->add_control(
    'od_about_section_info_lists',
    [
        'label' => esc_html__('Info List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'about_info_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', OD),
                'label_block' => true,
            ],
            [
                'name' => 'about_info_content',
                'label' => esc_html__('Content', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('List Content', OD),
                'label_block' => true,
            ],
            // img

            [
                'name' => 'about_info_img',
                'label' => esc_html__('Choose Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
        ],
        'default' => [
            [
                'about_info_title' => esc_html__('Title #1', OD),
            ],
            [
                'about_info_title' => esc_html__('Title #2', OD),
            ],
        ],
        'title_field' => '{{{ about_info_title }}}',
    ]
);




$this->end_controls_section();


$this->start_controls_section(
    'od_about_section_thumbnail',
    [
        'label' => __('Thumbnail', 'ordainit-toolkit'),
    ]
);

$this->add_control(
    'od_about_section_thumbnail_image1',
    [
        'label' => __('Choose Image', 'ordainit-toolkit'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'od_about_section_thumbnail_image2',
    [
        'label' => __('Choose Image', 'ordainit-toolkit'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

// shape

$this->add_control(
    'od_about_section_thumbnail_shape',
    [
        'label' => __('Shape', 'ordainit-toolkit'),
        'label' => __('Choose Image', 'ordainit-toolkit'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);







$this->end_controls_section();




$this->start_controls_section(
    'od_about_title_content_style',
    [
        'label' => __('Title & Content', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

// title heading control

$this->add_control(
    'od_about_title_heading',
    [
        'label' => __('Title', 'ordainit-toolkit'),
        'type' => Controls_Manager::HEADING,
    ]
);

// title color control

$this->add_control(
    'od_about_title_color',
    [
        'label' => __('Color', 'ordainit-toolkit'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-title-grotesk' => 'color: {{VALUE}}',
        ],
    ]
);

// title typography control

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_about_title_typography',
        'label' => __('Typography', 'ordainit-toolkit'),
        'selector' => '{{WRAPPER}} .it-section-title-grotesk',
    ]
);

// description heading control

$this->add_control(
    'od_about_description_heading',
    [
        'label' => __('Description', 'ordainit-toolkit'),
        'type' => Controls_Manager::HEADING,
    ]
);

// description color control

$this->add_control(
    'od_about_description_color',
    [
        'label' => __('Color', 'ordainit-toolkit'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-content p' => 'color: {{VALUE}}',
        ],
    ]
);

// description typography control

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_about_description_typography',
        'label' => __('Typography', 'ordainit-toolkit'),
        'selector' => '{{WRAPPER}} .it-about-2-content p',
    ]
);


$this->end_controls_section();


$this->start_controls_section(
    'od_about_info_content_style',
    [
        'label' => __('Info', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

// Icon bg color control

$this->add_control(
    'od_about_info_bg_color',
    [
        'label' => __('Icon BG Color', 'ordainit-toolkit'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-icon' => 'background-color: {{VALUE}}',
        ],
    ]
);

// title heading control

$this->add_control(
    'od_about_info_title_heading',
    [
        'label' => __('Title', 'ordainit-toolkit'),
        'type' => Controls_Manager::HEADING,
    ]
);

// title color control

$this->add_control(
    'od_about_info_title_color',
    [
        'label' => __('Color', 'ordainit-toolkit'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-title' => 'color: {{VALUE}}',
        ],
    ]
);

// title typography control

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_about_info_title_typography',
        'label' => __('Typography', 'ordainit-toolkit'),
        'selector' => '{{WRAPPER}} .it-about-2-more-title',
    ]
);

// description heading control

$this->add_control(
    'od_about_info_content_heading',
    [
        'label' => __('Content', 'ordainit-toolkit'),
        'type' => Controls_Manager::HEADING,
    ]
);

// description color control

$this->add_control(
    'od_about_info_content_color',
    [
        'label' => __('Color', 'ordainit-toolkit'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-about-2-more-info p' => 'color: {{VALUE}}',
        ],
    ]
);

// description typography control

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_about_info_content_typography',
        'label' => __('Typography', 'ordainit-toolkit'),
        'selector' => '{{WRAPPER}} .it-about-2-more-info p',
    ]
);

$this->end_controls_section();