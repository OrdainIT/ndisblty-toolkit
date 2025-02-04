<?php

use Elementor\Controls_Manager;


// Process Content
$this->start_controls_section(
    'od_process_content',
    [
        'label' => esc_html__('Process Content', OD),
    ]
);


$this->add_control(
    'od_process_lists',
    [
        'label' => esc_html__('Process List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_process_list_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Step Title', OD),
                'placeholder' => esc_html__('Type title here', OD),
                'rows' => '3',
                'label_block' => true,
            ],

            [
                'name' => 'od_process_list_description',
                'label' => esc_html__('Description', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('OD Step Description', OD),
                'placeholder' => esc_html__('Type description here', OD),
                'label_block' => true,
            ],

            [
                'name' => 'od_process_list_steps',
                'label' => esc_html__('Step Name', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Step 01', OD),
                'placeholder' => esc_html__('Type steps here', OD),
                'label_block' => true,
            ],

            [
                'name' => 'od_process_list_icon',
                'label' => esc_html__('Icon', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => od_kses('Icon', OD),
                'placeholder' => esc_html__('Put svg icon here', OD),
                'label_block' => true,
            ],

        ],
        'default' => [
            [
                'od_process_list_steps' => esc_html__('Step 01', OD),
            ],
            [
                'od_process_list_steps' => esc_html__('Step 02', OD),
            ],
            [
                'od_process_list_steps' => esc_html__('Step 03', OD),
            ],
            [
                'od_process_list_steps' => esc_html__('Step 04', OD),
            ],
        ],
        'title_field' => '{{{ od_process_list_steps }}}',
    ]
);

$this->end_controls_section();



// Process Box Content Style
$this->start_controls_section(
    'od_process_content_style',
    [
        'label' => __('Process Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_process_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_process_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_process_title_typography',
        'selector' => '{{WRAPPER}} .it-step-4-title',
    ]
);

$this->add_control(
    'od_process_description_heading',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_process_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-content p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_process_description_typography',
        'selector' => '{{WRAPPER}} .it-step-4-content p',
    ]
);


$this->add_control(
    'od_process_icon_heading',
    [
        'label' => esc_html__('Icon', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_process_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-icon svg path' => 'fill: {{VALUE}}',
        ],
    ]
);


$this->add_control(
    'od_process_steps_heading',
    [
        'label' => esc_html__('Step', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->start_controls_tabs(
    'od_process_steps_style_tabs'
);

$this->start_controls_tab(
    'od_process_steps_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_process_steps_style_normal_tab_color',
    [
        'label' => esc_html__('Step Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-position' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_process_steps_style_normal_tab_bg_color',
    [
        'label' => esc_html__('Step BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-position' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

//Hover
$this->start_controls_tab(
    'od_process_steps_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_process_steps_style_hover_tab_color',
    [
        'label' => esc_html__('Step Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-item:hover .it-step-4-position' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_process_steps_style_hover_tab_bg_color',
    [
        'label' => esc_html__('Step BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-item:hover .it-step-4-position' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Step Typography', OD),
        'name' => 'od_process_steps_typography',
        'selector' => '{{WRAPPER}} .it-step-4-position',
    ]
);

$this->add_control(
    'od_process_line_heading',
    [
        'label' => esc_html__('Line', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_process_line_color',
    [
        'label' => esc_html__('Line Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-item-line svg path' => 'fill: {{VALUE}}',
        ],
    ]
);



$this->end_controls_section();
