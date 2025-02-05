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

// Cta BG Image
$this->start_controls_section(
    'od_cta_bg_img_section',
    [
        'label' => esc_html__('CTA BG Image', OD),
    ]
);

$this->add_control(
    'od_cta_bg_img',
    [
        'label' => esc_html__('Choose BG Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();


// Cta Content
$this->start_controls_section(
    'od_cta_content_section',
    [
        'label' => esc_html__('CTA Content', OD),
    ]
);

$this->add_control(
    'od_cta_title',
    [
        'label' => esc_html__('Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => esc_html__('OD Cta Title', OD),
        'placeholder' => esc_html__('Type title here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_cta_phone',
    [
        'label' => esc_html__('Phone', OD),
        'type' => Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => esc_html__('+369 258 741 000', OD),
        'placeholder' => esc_html__('Type phone no. here', OD),
        'label_block' => true,
    ]
);


$this->add_control(
    'od_cta_img',
    [
        'label' => esc_html__('Choose Image', OD),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();



// Style Starts
// CTA Style
$this->start_controls_section(
    'od_cta_style',
    [
        'label' => __('CTA Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


$this->add_control(
    'od_cta_bg_color',
    [
        'label' => esc_html__('BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-ptb.red-bg' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->add_responsive_control(
    'od_cta_margin',
    [
        'label' => esc_html__('Margin', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-ptb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'od_cta_padding',
    [
        'label' => esc_html__('Padding', OD),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em', 'rem'],
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-ptb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);


$this->end_controls_section();


// CTA Content Style
$this->start_controls_section(
    'od_cta_content_style',
    [
        'label' => __('CTA Content Style', OD),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_control(
    'od_cta_title_heading',
    [
        'label' => esc_html__('Title', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_cta_title_color',
    [
        'label' => esc_html__('Title Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-title' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Title Typography', OD),
        'name' => 'od_cta_title_typography',
        'selector' => '{{WRAPPER}} .it-cta-4-title',
    ]
);

$this->add_control(
    'od_cta_phone_heading',
    [
        'label' => esc_html__('Phone', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_control(
    'od_cta_phone_color',
    [
        'label' => esc_html__('Phone Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-title a' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'od_cta_phone_border_color',
    [
        'label' => esc_html__('Phone Border Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .border-line-white' => 'background-image:linear-gradient({{VALUE}}, {{VALUE}}), linear-gradient({{VALUE}}, {{VALUE}})',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__('Phone Typography', OD),
        'name' => 'od_cta_phone_typography',
        'selector' => '{{WRAPPER}} .it-cta-4-title a',
    ]
);

$this->add_control(
    'od_cta_icon_heading',
    [
        'label' => esc_html__('Phone Icon', OD),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->start_controls_tabs(
    'od_cta_phone_icon_style_tabs'
);

// Normal
$this->start_controls_tab(
    'od_cta_phone_icon_style_normal_tab',
    [
        'label' => esc_html__('Normal', OD),
    ]
);

$this->add_control(
    'od_cta_phone_icon_style_normal_color',
    [
        'label' => esc_html__('Icon Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-icon' => 'color: {{VALUE}}',
        ],
    ]
);
$this->add_control(
    'od_cta_phone_icon_style_normal_bg_color',
    [
        'label' => esc_html__('Icon BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-icon' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();

// Hover

$this->start_controls_tab(
    'od_cta_phone_icon_style_hover_tab',
    [
        'label' => esc_html__('Hover', OD),
    ]
);

$this->add_control(
    'od_cta_phone_icon_style_hover_color',
    [
        'label' => esc_html__('Icon hover Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-icon:hover' => 'color: {{VALUE}}',

        ],
    ]
);
$this->add_control(
    'od_cta_phone_icon_style_hover_bg_color',
    [
        'label' => esc_html__('Icon Hover BG Color', OD),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .it-cta-4-icon:hover' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->end_controls_tab();
$this->end_controls_tabs();

$this->end_controls_section();
