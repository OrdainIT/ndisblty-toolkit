<?php

use Elementor\Controls_Manager;

// Event List Content
$this->start_controls_section(
    'od_event_slider_heading_section',
    [
        'label' => __('Event Heading', OD),
    ]
);

$this->add_control(
    'od_event_slider_heading_title',
    [
        'label' => esc_html__('Title', OD),
        'type' => Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => esc_html__('OD Title', OD),
        'placeholder' => esc_html__('Type title here', OD),
        'label_block' => true,
    ]
);

$this->add_control(
    'od_event_slider_heading_subtitle',
    [
        'label' => esc_html__('Subtitle', OD),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('OD Subtitle', OD),
        'placeholder' => esc_html__('Type subtitle here', OD),
        'label_block' => true,
    ]
);

$this->end_controls_section();


// Event List Content
$this->start_controls_section(
    'od_event_slider_section_content_list',
    [
        'label' => __('Event Content', OD),
    ]
);

$this->add_control(
    'od_event_slider_lists',
    [
        'label' => esc_html__('Event List', OD),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => [
            [
                'name' => 'od_event_slider_list_title',
                'label' => esc_html__('Title', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD event title', OD),
                'placeholder' => esc_html__('Type Title here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_title_url',
                'label' => esc_html__('Title Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_img',
                'label' => esc_html__('Choose Image', OD),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
            [
                'name' => 'od_event_slider_list_event_date',
                'label' => esc_html__('Event Date', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => od_kses('15 <br />  Jan', OD),
                'placeholder' => esc_html__('Type event date here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_address',
                'label' => esc_html__('Address', OD),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('238, Arimantab, Moska - USA.', OD),
                'placeholder' => esc_html__('Type address here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_address_url',
                'label' => esc_html__('Address Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_event_time',
                'label' => esc_html__('Event Time', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('09:00AM - 12:00AM', OD),
                'placeholder' => esc_html__('Type event time here', OD),
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_btn_url',
                'label' => esc_html__('Button Url', OD),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', OD),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ],
            [
                'name' => 'od_event_slider_list_btn_text',
                'label' => esc_html__('Button Text', OD),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('OD Button', OD),
                'placeholder' => esc_html__('Type button text here', OD),
                'label_block' => true,
            ],
        ],
        'default' => [
            [
                'od_event_slider_list_title' => esc_html__('Global forum exploring energy solutions for mining industry.', OD),
            ],
            [
                'od_event_slider_list_title' => esc_html__('Creating Vibrant Connections Through Events That Inspire.', OD),
            ],
            [
                'od_event_slider_list_title' => esc_html__('Bringing People Together for a Purposeful Celebration.', OD),
            ],

        ],
        'title_field' => '{{{ od_event_slider_list_title }}}',
    ]
);

$this->end_controls_section();

// Event Slider Settings
$this->start_controls_section(
    'od_event_slider_settings',
    [
        'label' => __('Slider Settings', OD),
    ]
);

$this->add_control(
    'od_event_slider_autoplay',
    [
        'label' => esc_html__('Autoplay Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('On', OD),
        'label_off' => esc_html__('Off', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

$this->add_control(
    'od_event_slider_autoplay_delay',
    [
        'label' => esc_html__('Autoplay Delay (ms)', OD),
        'type' => \Elementor\Controls_Manager::NUMBER,
        'min' => 1000,
        'step' => 100,
        'default' => 3000,
    ]
);

$this->add_control(
    'od_event_slider_navigation_switcher',
    [
        'label' => esc_html__('Navigation Switcher', OD),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', OD),
        'label_off' => esc_html__('Hide', OD),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);


$this->end_controls_section();
