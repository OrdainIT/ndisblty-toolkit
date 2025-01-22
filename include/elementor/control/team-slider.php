<?php

use Elementor\Controls_Manager;


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
