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
            'layout-4' => esc_html__('Layout 4', OD),
            'layout-5' => esc_html__('Layout 5', OD),
        ],
        'default' => 'layout-1',
    ]
);

$this->end_controls_section();



$this->start_controls_section(
    'od_service_section_service_qery',
    [
        'label' => __('Post Query', OD),
    ]
);



$this->add_control(
    'od_service_section_service_post_per_page',
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
        'options' => od_get_all_categories_for_service(), // Custom function to get categories
    ]
);

$this->add_control(
    'od_service_post_orderby',
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



$this->add_control(
    'od_service_section_service_btn',
    [
        'label' => esc_html__('service Button Text', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('More Details', OD),
        'label_block' => true,
        'condition' => [
            'od_design_style' => ['layout-1', 'layout-2'],
        ],
    ]
);




$this->end_controls_section();










$this->start_controls_section(
    'service_section_bg_style',
    [
        'label' => __('BG Color', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-1', 'layout-2', 'layout-4', 'layout-5'],
        ],
    ]
);

$this->start_controls_tabs(
    'service_section_bg_style_tabs'
);

$this->start_controls_tab(
    'service_section_bg_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'service_section_bg_style_normal_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-item' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-service-2-item' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-service-4-item' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'service_section_bg_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'service_section_bg_style_hover_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-item:hover' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-service-2-item:hover' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-service-4-item:hover' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();


$this->end_controls_tabs();



$this->end_controls_section();

$this->start_controls_section(
    'service_section_title_style',
    [
        'label' => __('Title', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->start_controls_tabs(
    'service_section_title_style_tabs'
);

$this->start_controls_tab(
    'service_section_title_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'service_section_title_style_normal_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-service-3-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-black' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
            '{{WRAPPER}} .it-service-4-title' =>'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'service_section_title_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'service_section_title_style_hover_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-item:hover .it-service-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-reveal-item:hover .it-service-3-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-white-2' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
            '{{WRAPPER}} .border-line-white' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
            '{{WRAPPER}} .it-service-4-item:hover .it-service-4-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();


$this->end_controls_tabs();


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'service_section_title_style_typo',
        'selector' => '{{WRAPPER}} .it-service-item, {{WRAPPER}}  .it-service-3-title, {{WRAPPER}} .it-service-4-title',
    ]
);



$this->end_controls_section();

$this->start_controls_section(
    'service_section_description_style',
    [
        'label' => __('Description', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->start_controls_tabs(
    'service_section_description_style_tabs'
);

$this->start_controls_tab(
    'service_section_description_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'service_section_description_style_normal_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-content p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-service-3-text p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-service-4-item p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'service_section_description_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'service_section_description_style_hover_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-item:hover .it-service-content p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-reveal-item:hover .it-service-3-text p' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-service-4-item:hover p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();


$this->end_controls_tabs();


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'service_section_description_style_typo',
        'selector' => '{{WRAPPER}} .it-service-content p, {{WRAPPER}} .it-service-3-text p, {{WRAPPER}} .it-service-4-item p',
    ]
);



$this->end_controls_section();

$this->start_controls_section(
    'service_section_icon_button_style',
    [
        'label' => __('Button', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-4', 'layout-5'],
        ],
    ]
);

$this->start_controls_tabs(
    'service_section_icon_button_style_tabs'
);

$this->start_controls_tab(
    'service_section_icon_button_style_normal_tabs',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'service_section_icon_button_style_normal_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-4-arrow' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'service_section_icon_button_style_normal_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-4-arrow' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'service_section_icon_button_style_hover_tabs',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'service_section_icon_button_style_hover_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-4-item:hover .it-service-4-arrow' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'service_section_icon_button_style_hover_icon_color',
    [
        'label' => esc_html__('icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-4-item:hover .it-service-4-arrow' => 'color: {{VALUE}}',
        ],
    ]
);


$this->end_controls_tab();

$this->start_controls_tab(
    'service_section_icon_button_style_after_tabs',
    [
        'label' => esc_html__('Box Hover', OD),
    ]
);

$this->add_control(
    'service_section_icon_button_style_hover_after_bg_color',
    [
        'label' => esc_html__('Box Hover BG', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-4-arrow::after' => 'background-color: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();

$this->end_controls_tabs();



$this->end_controls_section();

$this->start_controls_section(
    'service_section_icon3_style',
    [
        'label' => __('Icon', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-3'],
        ],
    ]
);

$this->add_control(
    'service_section_icon3_style_normal_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-3-arrow' => 'color: {{VALUE}}',
        ],
    ]
    );
$this->add_control(
    'service_section_icon3_style_hover_color',
    [
        'label' => esc_html__('Icon Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-reveal-item:hover .it-service-3-arrow' => 'color: {{VALUE}}',
        ],
    ]
    );



$this->end_controls_section();

$this->start_controls_section(
    'service_section_button_style',
    [
        'label' => __('Button', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-1', 'layout-2'],
        ],
    ]
);

$this->start_controls_tabs(
    'service_section_button_style_tabs'
);

$this->start_controls_tab(
    'service_section_button_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'service_section_button_style_normal_bg_color',
    [
        'label' => esc_html__('Button BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'service_section_button_style_normal_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->start_controls_tab(
    'service_section_button_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);



$this->add_control(
    'service_section_button_style_hover_bg_color',
    [
        'label' => esc_html__('Button BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm:hover' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'service_section_button_style_hover_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm:hover' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();


$this->end_controls_tabs();


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'service_section_button_style_typo',
        'selector' => '{{WRAPPER}} .it-btn-sm',
    ]
);



$this->end_controls_section();


$this->start_controls_section(
    'service_section_small_image_box_style',
    [
        'label' => __('Small Image Box', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);


$this->add_control(
    'service_section_small_image_box_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-2-icon' => 'background-color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'service_section_small_image_box_border_color',
    [
        'label' => esc_html__('Border Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-service-2-icon' => 'border-color: {{VALUE}}',
        ],
    ]
);




$this->end_controls_section();
