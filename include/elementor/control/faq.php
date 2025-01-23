<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_faq_content',
    [
        'label' => __('Faq', 'ordainit-toolkit'),
    ]
);


$this->add_control(
    'od_faq_content_list',
    [
        'label' => esc_html__('Faq List', 'textdomain'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'faq_list_number',
                'label' => esc_html__('Faq Number', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Q1', 'textdomain'),
                'label_block' => true,
            ],
            [
                'name' => 'faq_list_title',
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__(' What types of disabilities do you support?', 'textdomain'),
                'label_block' => true,
            ],
            [
                'name' => 'faq_list_description',
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Description', 'textdomain'),
                'label_block' => true,
            ],
        ],
        'default' => [
            [
                'faq_list_title' => esc_html__('Title #1', 'textdomain'),
            ],
            [
                'faq_list_title' => esc_html__('Title #1', 'textdomain'),
            ],
            [
                'faq_list_title' => esc_html__('Title #1', 'textdomain'),
            ],
            [
                'faq_list_title' => esc_html__('Title #1', 'textdomain'),
            ],
            [
                'faq_list_title' => esc_html__('Title #1', 'textdomain'),
            ],
            [
                'faq_list_title' => esc_html__('Title #1', 'textdomain'),
            ],
        ],
        'title_field' => '{{{ faq_list_title }}}',
    ]
);





$this->end_controls_section();

$this->start_controls_section(
    'od_faq_area_Style',
    [
        'label' => __('Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_faq_area_bg_heading',
    [
        'label' => esc_html__('FAQ BG', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->start_controls_tabs(
    'od_faq_area_bg_tabs'
);

$this->start_controls_tab(
    'od_faq_area_bg_normal_tab',
    [
        'label' => esc_html__('Normal', 'textdomain'),
    ]
);

$this->add_control(
    'od_faq_area_bg_normal_color',
    [
        'label' => esc_html__('BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-items' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'od_faq_area_bg_active_tab',
    [
        'label' => esc_html__('Active', 'textdomain'),
    ]
);

$this->add_control(
    'od_faq_area_bg_active_color',
    [
        'label' => esc_html__('BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-items.active' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->add_control(
    'od_faq_area_title_heading',
    [
        'label' => esc_html__('Title', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->start_controls_tabs(
    'od_faq_area_title_tabs'
);

$this->start_controls_tab(
    'od_faq_area_title_normal_tab',
    [
        'label' => esc_html__('Normal', 'textdomain'),
    ]
);

$this->add_control(
    'od_faq_area_title_normal_color',
    [
        'label' => esc_html__('Text Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-buttons' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'od_faq_area_title_active_tab',
    [
        'label' => esc_html__('Active', 'textdomain'),
    ]
);

$this->add_control(
    'od_faq_area_title_active_color',
    [
        'label' => esc_html__('Text Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-items.active .accordion-buttons' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_faq_area_title_typo',
        'selector' => '{{WRAPPER}} .it-custom-accordion .accordion-buttons',
    ]
);


$this->add_control(
    'od_faq_area_description_heading',
    [
        'label' => esc_html__('Description', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_faq_area_description_active_color',
    [
        'label' => esc_html__('Text Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-body p' => 'color: {{VALUE}}',
        ],
    ]
);



$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_faq_area_description_typo',
        'selector' => '{{WRAPPER}} .it-custom-accordion .accordion-body p',
    ]
);


$this->add_control(
    'od_faq_area_icon_heading',
    [
        'label' => esc_html__('Icon', 'textdomain'),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_faq_area_icon_bg_color',
    [
        'label' => esc_html__('BG Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-buttons::after' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_faq_area_icon_icon_color',
    [
        'label' => esc_html__('Icon Color', 'textdomain'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-custom-accordion .accordion-buttons::after' => 'color: {{VALUE}}',
        ],
    ]
);







$this->end_controls_section();
