<?php

use Elementor\Controls_Manager;

/*****************************************************
**** Header Section Design Option Area Start Here ****
*****************************************************/
$this->start_controls_section(
    'header_section_design',
    [
        'label' => esc_html__('Design Style', 'rb-section-header'),
    ]
);

// header_section_design_choose
$this->add_control(
    'header_section_design_choose',
    [
        'label' => esc_html__('Design Style Choose', 'rb-section-header'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'style-1' => [
                'title' => esc_html__('Style 1', 'rb-section-header'),
            ],
        ],
        'default' => 'style-1',
    ]
);

$this->end_controls_section();
/*****************************************************
***** Header Section Design Option Area End Here *****
*****************************************************/

/***************************************************
***** Header Section Sub Title Area Start Here *****
***************************************************/
$this->start_controls_section(
    'header_section_sub_title',
    [
        'label' => esc_html__('Sub Title', 'rb-section-header'),
    ]
);

// header_section_sub_title_text
$this->add_control(
    'header_section_sub_title_text',
    [
        'label' => esc_html__('Sub Title', 'rb-section-header'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Sub Title', 'rb-section-header'),
        'placeholder' => esc_html__('Type Sub Title Text', 'rb-section-header'),
        'label_block' => true,
    ]
);

// header_section_sub_title_tag
$this->add_control(
    'header_section_sub_title_tag',
    [
        'label' => esc_html__('Sub Title Tag', 'rb-section-header'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'h1' => [
                'title' => esc_html__('H1', 'rb-section-header'),
            ],
            'h2' => [
                'title' => esc_html__('H2', 'rb-section-header'),
            ],
            'h3' => [
                'title' => esc_html__('H3', 'rb-section-header'),
            ],
            'h4' => [
                'title' => esc_html__('H4', 'rb-section-header'),
            ],
            'h5' => [
                'title' => esc_html__('H5', 'rb-section-header'),
            ],
            'h6' => [
                'title' => esc_html__('H6', 'rb-section-header'),
            ],
            'div' => [
                'title' => esc_html__('div', 'rb-section-header'),
            ],
            'p' => [
                'title' => esc_html__('p', 'rb-section-header'),
            ],
        ],
        'default' => 'div',
    ]
);

$this->end_controls_section();
/*************************************************
***** Header Section Sub Title Area End Here *****
*************************************************/

/***********************************************
***** Header Section Title Area Start Here *****
***********************************************/
$this->start_controls_section(
    'header_section_title',
    [
        'label' => esc_html__('Title', 'rb-section-header'),
    ]
);

// header_section_title_text_1
$this->add_control(
    'header_section_title_text_1',
    [
        'label' => esc_html__('Title Text 1', 'rb-section-header'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Title Text 1', 'rb-section-header'),
        'placeholder' => esc_html__('Type Title Text 1', 'rb-section-header'),
        'label_block' => true,
    ]
);

// header_section_title_text_1_span_tag
$this->add_control(
    'header_section_title_text_1_span_tag',
    [
        'label' => esc_html__( 'Add Title Text 1 Span Tag', 'rb-section-header' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'rb-section-header' ),
        'label_off' => esc_html__( 'Hide', 'rb-section-header' ),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

// header_section_title_text_2
$this->add_control(
    'header_section_title_text_2',
    [
        'label' => esc_html__('Title Text 2', 'rb-section-header'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Title Text 2', 'rb-section-header'),
        'placeholder' => esc_html__('Type Title Text 2', 'rb-section-header'),
        'label_block' => true,
    ]
);

// header_section_title_text_2_span_tag
$this->add_control(
    'header_section_title_text_2_span_tag',
    [
        'label' => esc_html__( 'Add Title Text 2 Span Tag', 'rb-section-header' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'rb-section-header' ),
        'label_off' => esc_html__( 'Hide', 'rb-section-header' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

// header_section_title_tag
$this->add_control(
    'header_section_title_tag',
    [
        'label' => esc_html__('Title Tag', 'rb-section-header'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'h1' => [
                'title' => esc_html__('H1', 'rb-section-header'),
            ],
            'h2' => [
                'title' => esc_html__('H2', 'rb-section-header'),
            ],
            'h3' => [
                'title' => esc_html__('H3', 'rb-section-header'),
            ],
            'h4' => [
                'title' => esc_html__('H4', 'rb-section-header'),
            ],
            'h5' => [
                'title' => esc_html__('H5', 'rb-section-header'),
            ],
            'h6' => [
                'title' => esc_html__('H6', 'rb-section-header'),
            ]
        ],
        'default' => 'h2',
    ]
);

$this->end_controls_section();
/*********************************************
***** Header Section Title Area End Here *****
*********************************************/

/*****************************************************
***** Header Section Description Area Start Here *****
*****************************************************/
$this->start_controls_section(
    'header_section_desc',
    [
        'label' => esc_html__('Description', 'rb-section-header'),
    ]
);

// header_section_desc_text
$this->add_control(
    'header_section_desc_text',
    [
        'label' => esc_html__('Description', 'rb-section-header'),
        'type' => Controls_Manager::TEXTAREA,
        'default' => esc_html__('Description', 'rb-section-header'),
        'placeholder' => esc_html__('Type Description Text', 'rb-section-header'),
        'label_block' => true,
    ]
);

$this->end_controls_section();
/***************************************************
***** Header Section Description Area End Here *****
***************************************************/