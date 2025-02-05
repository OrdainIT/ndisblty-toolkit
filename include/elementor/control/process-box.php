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

// Process Box Content
$this->start_controls_section(
    'od_process_box_content',
    [
        'label' => esc_html__('Process Content', OD),
    ]
);

$this->add_control(
    'od_process_box_title',
    [
        'label' => esc_html__('Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => esc_html__('OD Process Title', OD),
        'placeholder' => esc_html__('Type title here', OD),
        'label_block' => true,
    ]
);


$this->add_control(
    'od_process_box_title_url',
    [
        'label' => esc_html__('Title Url', OD),
        'type' => Controls_Manager::URL,
        'placeholder' => esc_html__('https://your-link.com', OD),
        'show_external' => true,
        'default' => [
            'url' => '#',
        ],
        'label_block' => true,
        'condition' => [
            'od_design_style' => ['layout-3']
        ]
    ]
);

$this->add_control(
    'od_process_box_description',
    [
        'label' => esc_html__('Description', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('OD Process Description', OD),
        'placeholder' => esc_html__('Type Description here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_process_box_steps',
    [
        'label' => esc_html__('Step Name', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Step 01', OD),
        'placeholder' => esc_html__('Type steps here', OD),
        'label_block' => true,
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'od_process_box_img',
    [
        'label' => esc_html__('Choose Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'od_process_box_icon',
    [
        'label' => esc_html__('Icon', OD),
        'type' => Controls_Manager::TEXTAREA,
        'default' => od_kses('Icon', OD),
        'placeholder' => esc_html__('Put svg icon here', OD),
        'label_block' => true,
        'condition' => [
            'od_design_style' => ['layout-2', 'layout-3']
        ]
    ]
);

$this->end_controls_section();




// Style Starts
// Process Box Style
$this->start_controls_section(
    'od_process_box_style',
    [
        'label' => __('Process Box Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_process_box_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-item' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-step-3-item' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-feature-4-item' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_process_box_bg_hover_color',
    [
        'label' => esc_html__('BG Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-feature-4-item:hover' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-3']
        ]
    ]
);


$this->add_responsive_control(
    'od_process_box_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-step-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-step-3-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-feature-4-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_process_box_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-step-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-step-3-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-feature-4-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_control(
    'od_process_box_border_radius',
    [
        'label' => esc_html__('Border Radius', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-step-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-step-3-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            '{{WRAPPER}} .it-feature-4-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_process_box_box_shadow',
        'selector' => '
            {{WRAPPER}} .it-step-3-item,
            {{WRAPPER}} .it-feature-4-item
        ',
        'condition' => [
            'od_design_style' => ['layout-2', 'layout-3']
        ]
    ]
);


$this->end_controls_section();


// Process Box Content Style
$this->start_controls_section(
    'od_process_box_content_style',
    [
        'label' => __('Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_process_box_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_process_box_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-step-4-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-feature-4-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_process_box_title_hover_color',
    [
        'label' => esc_html__('Title Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-feature-4-item:hover .it-feature-4-title' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-3']
        ]
    ]
);

$this->add_control(
    'od_process_box_title_border_color',
    [
        'label' => esc_html__('Title Border Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .border-line-white-2' => 'background-image:linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
        'condition' => [
            'od_design_style' => ['layout-3']
        ]
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_process_box_title_typography',
        'selector' => '
            {{WRAPPER}} .it-step-title,
            {{WRAPPER}} .it-step-4-title,
            {{WRAPPER}} .it-feature-4-title
        ',
    ]
);

$this->add_control(
    'od_process_box_description_heading',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_process_box_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-content p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-step-3-content p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-feature-4-item p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_process_box_description_hover_color',
    [
        'label' => esc_html__('Description Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-feature-4-item:hover p' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-3']
        ]
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Description Typography', OD),
        'name' => 'od_process_box_description_typography',
        'selector' => '
            {{WRAPPER}} .it-step-content p,
            {{WRAPPER}} .it-step-3-content p,
            {{WRAPPER}} .it-feature-4-item p
        ',
    ]
);

$this->add_control(
    'od_process_box_step_heading',
    [
        'label' => esc_html__('Step', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'od_process_box_steps_color',
    [
        'label' => esc_html__('Step Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-content span' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'od_process_box_steps_bg_color',
    [
        'label' => esc_html__('Step BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-content span' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Step Typography', OD),
        'name' => 'od_process_box_steps_typography',
        'selector' => '{{WRAPPER}} .it-step-content span',
        'condition' => [
            'od_design_style' => ['layout-1']
        ]
    ]
);

$this->add_control(
    'od_process_box_icon_heading',
    [
        'label' => esc_html__('Icon', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
            'od_design_style' => ['layout-2', 'layout-3']
        ]
    ]
);

$this->add_control(
    'od_process_box_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-step-4-icon svg path' => 'fill: {{VALUE}}',
            '{{WRAPPER}} .it-feature-4-icon svg path' => 'fill: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-2', 'layout-3']
        ]
    ]
);

$this->end_controls_section();
