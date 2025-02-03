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
    'od_blog_section_blog_qery',
    [
        'label' => __('Post Query', OD),
    ]
);



$this->add_control(
    'od_blog_section_blog_post_per_page',
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
        'options' => od_get_all_categories(), // Custom function to get categories
    ]
);

$this->add_control(
    'od_blog_post_orderby',
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
    'od_blog_section_blog_btn',
    [
        'label' => esc_html__('Blog Button Text', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('Read More', OD),
        'label_block' => true,
    ]
);




$this->end_controls_section();









$this->start_controls_section(
    'od_blog_section_blog_post_style',
    [
        'label' => __('Blog Post', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_blog_post_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-item' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-blog-2-content' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'od_blog_post_box_shadow',
        'selector' => '{{WRAPPER}} .it-blog-item, {{WRAPPER}} .it-blog-2-content',
    ]
);




$this->add_control(
    'od_blog_post_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_blog_post_title_normal_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-black-2' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
    ]
);



$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_blog_post_title_typo',
        'selector' => '{{WRAPPER}} .it-blog-title',
    ]
);



$this->add_control(
    'od_blog_post_description_color',
    [
        'label' => esc_html__('Description Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-2-content p' => 'color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_blog_post_description_typo',
        'selector' => '{{WRAPPER}} .it-blog-2-content p',
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);

$this->add_control(
    'od_blog_post_btn_heading',
    [
        'label' => esc_html__('Button', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->start_controls_tabs(
    'od_blog_post_btn_tabs'
);

$this->start_controls_tab(
    'od_blog_post_btn__nromal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_blog_post_btn__nromal_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm.theme-bg' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-btn-sm' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_blog_post_btn__nromal_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm.theme-bg' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-btn-sm' => 'color: {{VALUE}}',
        ],
    ]
);


$this->end_controls_tab();

$this->start_controls_tab(
    'od_blog_post_btn__hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_blog_post_btn__hover_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm.theme-bg:hover' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-btn-sm:hover' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_blog_post_btn__hover_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-btn-sm.theme-bg:hover' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-btn-sm:hover' => 'color: {{VALUE}}',
        ],
    ]
);


$this->end_controls_tab();

$this->end_controls_tabs();

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_blog_post_btn__typo',
        'selector' => '{{WRAPPER}} .it-btn-sm.theme-bg, {{WRAPPER}} .it-btn-sm',
    ]
);


$this->add_control(
    'od_blog_post_date_heading',
    [
        'label' => esc_html__('Blog Meta', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->add_control(
    'od_blog_post_meta_bg_color',
    [
        'label' => esc_html__('Meta BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-2-date' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);
$this->add_control(
    'od_blog_post_meta_bg2_color',
    [
        'label' => esc_html__('Meta After Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-2-date::after' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-2'],
        ],
    ]
);

$this->add_control(
    'od_blog_post_date_bg_color',
    [
        'label' => esc_html__('Meta Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-2-date span' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-blog-meta span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_blog_post_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-blog-meta span svg path' => 'fill: {{VALUE}}',
        ],
        'condition' => [
            'od_design_style' => ['layout-1'],
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_blog_post_meta_typo',
        'selector' => '{{WRAPPER}}  .it-blog-2-date span, {{WRAPPER}}  .it-blog-meta span ',
    ]
);





$this->end_controls_section();
