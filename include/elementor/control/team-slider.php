<?php

use Elementor\Controls_Manager;

$this->start_controls_section(
    'od_team_slider_section_bg',
    [
        'label' => __('Section BG', OD),
    ]
);

$this->add_control(
    'od_team_slider_section_bg_img',
    [
        'label' => esc_html__('BG Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'od_team_slider_section_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .theme-bg' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'od_team_slider_section_title_content',
    [
        'label' => __('Title & Content', OD),
    ]
);


$this->add_control(
    'od_team_slider_section_title',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => od_kses('our dedicated <br>  team membber', OD),
        'label_block' => true,
    ]
);
$this->add_control(
    'od_team_slider_section_subtitle',
    [
        'label' => esc_html__('Sub Title', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => od_kses('Our Best Team', OD),
        'label_block' => true,
    ]
);
$this->add_control(
    'od_team_slider_section_description',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => od_kses('We specialize in disability support services, <br>  providing personalized care that .', OD),
        'label_block' => true,
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
        'default' => esc_html__('4', OD),
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
    'od_team_slider_settings',
    [
        'label' => __('Settings', OD),
    ]
);


$this->add_control(
    'od_team_slider_autoplay',
    [
        'label' => esc_html__('Autoplay ON/Off', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('On', OD),
        'label_off' => esc_html__('OFF', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_team_slider_delay',
    [
        'label' => esc_html__('Delay (ms)', OD),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__('300', OD),
    ]
);



$this->end_controls_section();




$this->start_controls_section(
    'od_team_slider_title_content_style',
    [
        'label' => __('Title & Content', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_team_slider_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_team_slider_title_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-title-3' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_team_slider_title_typo',
        'selector' => '{{WRAPPER}} .it-section-title-3',
    ]
);

$this->add_control(
    'od_team_slider_subtitle_heading',
    [
        'label' => esc_html__('Sub Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_team_slider_subtitle_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-section-subtitle' => 'color: {{VALUE}}',
            '{{WRAPPER}} .it-section-subtitle::before' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .it-section-subtitle::after' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_team_slider_subtitle_typo',
        'selector' => '{{WRAPPER}} .it-section-subtitle',
    ]
);

$this->add_control(
    'od_team_slider_description_heading',
    [
        'label' => esc_html__('Description', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_team_slider_description_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-text p' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_team_slider_description_typo',
        'selector' => '{{WRAPPER}} .it-team-text p',
    ]
);

$this->end_controls_section();



$this->start_controls_section(
    'od_team_slider_team_style',
    [
        'label' => __('Team', 'ordainit-toolkit'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_team_slider_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-item' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_team_slider_bg_hover_color',
    [
        'label' => esc_html__('BG Hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-item::after' => 'background: linear-gradient(180deg, rgba(220, 29, 28, 0) 0%, {{VALUE}} 100%)',
        ],
    ]
);


$this->add_control(
    'od_team_slider_team_title_heading',
    [
        'label' => esc_html__('Name', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->start_controls_tabs(
    'od_team_slider_team_title_tabs'
);

$this->start_controls_tab(
    'od_team_slider_team_title_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);


$this->add_control(
    'od_team_slider_team_title_normal_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-title' => 'color: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();



$this->start_controls_tab(
    'od_team_slider_team_title_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'od_team_slider_team_title_hover_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-item:hover .it-team-title' => 'color: {{VALUE}}',
            '{{WRAPPER}} .border-line-white' => 'background-image: linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_team_slider_team_title_typo',
        'selector' => '{{WRAPPER}} .it-team-title',
    ]
);


$this->add_control(
    'od_team_slider_team_designation_heading',
    [
        'label' => esc_html__('Designation', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->start_controls_tabs(
    'od_team_slider_team_designation_tabs'
);

$this->start_controls_tab(
    'od_team_slider_team_designation_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);


$this->add_control(
    'od_team_slider_team_designation_normal_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-content span' => 'color: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();



$this->start_controls_tab(
    'od_team_slider_team_designaiton_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'od_team_slider_team_designation_hover_color',
    [
        'label' => esc_html__('Text Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-item:hover .it-team-content span' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();


$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'od_team_slider_team_designation_typo',
        'selector' => '{{WRAPPER}} .it-team-content span',
    ]
);


$this->add_control(
    'od_team_slider_team_social_heading',
    [
        'label' => esc_html__('Social', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);


$this->add_control(
    'od_team_slider_team_social_area_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-social' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->start_controls_tabs(
    'od_team_slider_team_social_tabs'
);

$this->start_controls_tab(
    'od_team_slider_team_social_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);


$this->add_control(
    'od_team_slider_team_social_normal_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-social a' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_team_slider_team_social_normal_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-social a' => 'color: {{VALUE}}',
        ],
    ]
);



$this->end_controls_tab();



$this->start_controls_tab(
    'od_team_slider_team_social_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);


$this->add_control(
    'od_team_slider_team_social_hover_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-social a::after' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_team_slider_team_social_hover_icon_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-team-social a:hover' => 'color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();













$this->end_controls_section();
