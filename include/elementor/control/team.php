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



$this->start_controls_section(
    'od_team_section_team_qery',
    [
        'label' => __('Post Query', OD),
    ]
);



$this->add_control(
    'od_team_section_team_post_per_page',
    [
        'label' => esc_html__('Post Per Page', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('3', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_category_select',
    [
        'label' => esc_html__('Select Post Category', OD),
        'type' => Controls_Manager::SELECT2,
        'label_block' => true,
        'multiple' => true,
        'options' => od_get_all_categories_for_team(), // Custom function to get categories
    ]
);

$this->add_control(
    'od_team_post_orderby',
    [
        'label' => esc_html__('Order', OD),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'DESC',
        'options' => [
            'DESC' => esc_html__('DESC', OD),
            'ASC' => esc_html__('ASC', OD),
        ],
    ]
);






$this->end_controls_section();

$this->start_controls_section(
    'team_section_style',
    [
        'label' => __('Team Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->add_control(
    'team_section_style_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-innar-style .it-team-item' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);
$this->add_control(
    'team_section_style_hover_color',
    [
        'label' => esc_html__('Hover BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-thumb::after' => 'background: linear-gradient(180deg, rgba(220, 29, 28, 0) 0%, {{VALUE}} 100%)',
            '{{WRAPPER}} .it-team-item::after' => 'background: linear-gradient(180deg, rgba(220, 29, 28, 0) 0%, {{VALUE}} 100%)',
        ],
    ]
);

$this->add_control(
    'team_section_style_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-team-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-black' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
    ]
);

$this->add_control(
    'team_section_style_title_hover_color',
    [
        'label' => esc_html__('Title Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-item:hover .it-team-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-white' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'team_section_style_title_typo',
        'selector' => '{{WRAPPER}} .it-team-2-title, {{WRAPPER}} .it-team-title',
    ]
);

$this->add_control(
    'team_section_style_designation_color',
    [
        'label' => esc_html__('Designation Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-content span' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-team-content span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'team_section_style_designation_hover_color',
    [
        'label' => esc_html__('Designation Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-item:hover .it-team-2-content span' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-team-item:hover .it-team-content span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'team_section_style_designation_typo',
        'selector' => '{{WRAPPER}} .it-team-2-content span, {{WRAPPER}} .it-team-content span',
    ]
);


$this->end_controls_section();


$this->start_controls_section(
    'team_section_icon_style',
    [
        'label' => __('Icon Style', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->start_controls_tabs(
    'team_section_icon_style_tabs'
);

$this->start_controls_tab(
    'team_section_icon_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'team_section_icon_style_normal_icon_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-social > a' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-team-innar-style .it-team-social a' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'team_section_icon_style_normal_icon__color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-social > a' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-team-innar-style .it-team-social a' => 'color: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();

$this->start_controls_tab(
    'team_section_icon_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'team_section_icon_style_hover_icon_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-social > a::after' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-team-social a::after' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'team_section_icon_style_hover_icon__color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-2-social > a:hover' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-team-social a:hover' => 'color: {{VALUE}}',
        ],
    ]
);




$this->end_controls_tab();

$this->end_controls_tabs();


$this->end_controls_section();
