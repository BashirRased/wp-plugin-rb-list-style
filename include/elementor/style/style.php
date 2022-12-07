<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;

/***************************************************
***** Header Section Sub Title Area Start Here *****
***************************************************/
$this->start_controls_section(
    'header_section_sub_title_style',
    [
        'label' => esc_html__('Sub Title', 'rb-section-header'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);


// header_section_sub_title_color
$this->add_control(
    'header_section_sub_title_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Sub Title Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],       
        'separator' => 'after',
        'selectors' => ['{{WRAPPER}} .rb-section-sub-title' => 'color: {{VALUE}}']
    ]
);

// header_section_sub_title_font
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'header_section_sub_title_font',
        'selector' => '{{WRAPPER}} .rb-section-sub-title',
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_TEXT,
        ]
    ]
);

// header_section_sub_title_text_stroke
$this->add_control(
    'header_section_sub_title_text_stroke',
    [
        'label' => esc_html__('Text Stroke', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', 'rem'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 10,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 1,
                'step' => .01	
            ],
            'rem' => [
                'min' => 0,
                'max' => 1,
                'step' => .01
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-sub-title' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};
            stroke-width: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_sub_title_text_stroke_color
$this->add_control(
    'header_section_sub_title_text_stroke_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Stroke Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'selectors' => ['{{WRAPPER}} .rb-section-sub-title' => '-webkit-text-stroke-color: {{VALUE}};
        stroke: {{VALUE}};']
    ]
);

// header_section_sub_title_text_shadow
$this->add_group_control(
    Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'header_section_sub_title_text_shadow',
        'label' => esc_html__('Text Shadow', 'rb-section-header'),
        'selector' => '{{WRAPPER}} .rb-section-sub-title',
    ]
);

// header_section_sub_title_margin
$this->add_responsive_control(
    'header_section_sub_title_margin',
    [
        'label' => esc_html__( 'Margin', 'rb-section-header' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'separator' => 'before',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'selectors' => [
            '{{WRAPPER}} .rb-section-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
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
    'header_section_title_style',
    [
        'label' => esc_html__('Title', 'rb-section-header'),
        'tab' => Controls_Manager::TAB_STYLE
    ]
);

// header_section_title_font
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'header_section_title_font',
        'selector' => '{{WRAPPER}} .rb-section-title',
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
        ]
    ]
);

// header_section_title_text_stroke
$this->add_control(
    'header_section_title_text_stroke',
    [
        'label' => esc_html__('Text Stroke', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', 'rem'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 10,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 1,
                'step' => .01	
            ],
            'rem' => [
                'min' => 0,
                'max' => 1,
                'step' => .01
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};
            stroke-width: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_title_text_color
$this->add_control(
    'header_section_title_text_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Title Text Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'separator' => 'before',
        'selectors' => ['{{WRAPPER}} .rb-section-title' => 'color: {{VALUE}}']
    ]
);

// header_section_title_text_span_color
$this->add_control(
    'header_section_title_text_span_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Title Text Span Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_PRIMARY,
        ],
        'separator' => 'after',
        'selectors' => ['{{WRAPPER}} .rb-section-title-span' => 'color: {{VALUE}}']
    ]
);

// header_section_title_text_stroke_color
$this->add_control(
    'header_section_title_text_stroke_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Title Text Stroke Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'selectors' => ['{{WRAPPER}} .rb-section-title' => '-webkit-text-stroke-color: {{VALUE}};
        stroke: {{VALUE}};']
    ]
);

// header_section_title_text_stroke_color
$this->add_control(
    'header_section_title_text_span_stroke_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Title Text Span Stroke Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'separator' => 'after',
        'selectors' => ['{{WRAPPER}} .rb-section-title-span' => '-webkit-text-stroke-color: {{VALUE}};
        stroke: {{VALUE}};']
    ]
);

// header_section_title_text_shadow
$this->add_group_control(
    Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'header_section_title_text_shadow',
        'label' => esc_html__('Title Text Shadow', 'rb-section-header'),
        'selector' => '{{WRAPPER}} .rb-section-title',
    ]
);

// header_section_title_text_shadow
$this->add_group_control(
    Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'header_section_title_text_span_shadow',
        'label' => esc_html__('Title Text Span Shadow', 'rb-section-header'),
        'selector' => '{{WRAPPER}} .rb-section-title-span',
    ]
);

// header_section_title_margin
$this->add_responsive_control(
    'header_section_title_margin',
    [
        'label' => esc_html__( 'Margin', 'rb-section-header' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'separator' => 'before',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();
/*********************************************
***** Header Section Title Area End Here *****
*********************************************/

/****************************************************
***** Header Section Divider - 1 Area Start Here *****
****************************************************/
$this->start_controls_section(
    'header_section_divider_1',
    [
        'label' => esc_html__('Divider 1', 'rb-section-header'),
        'tab' => Controls_Manager::TAB_STYLE
    ]
);

// header_section_divider_1_color
$this->add_control(
    'header_section_divider_1_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Divider 1 Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'separator' => 'after',
        'selectors' => ['{{WRAPPER}} .rb-section-title::before' => 'background-color: {{VALUE}};']
    ]
);

// header_section_divider_1_width
$this->add_responsive_control(
    'header_section_divider_1_width',
    [
        'label' => esc_html__('Divider 1 Width', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 1000,
                'step' => 1						
            ],
            '%' => [
                'min' => 0,
                'max' => 100,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 300,
                'step' => 1	
            ],
            'rem' => [
                'min' => 0,
                'max' => 300,
                'step' => 1
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 100,
        ],
        'separator' => 'before',
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::before' => 'width: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_divider_1_height
$this->add_responsive_control(
    'header_section_divider_1_height',
    [
        'label' => esc_html__('Divider 1 Height', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 1000,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 300,
                'step' => 1	
            ],
            'rem' => [
                'min' => 0,
                'max' => 300,
                'step' => 1
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 2,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::before' => 'height: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_divider_1_bottom
$this->add_responsive_control(
    'header_section_divider_1_bottom',
    [
        'label' => esc_html__('Divider 1 Bottom', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => -1000,
                'max' => 1000,
                'step' => 1						
            ],
            'em' => [
                'min' => -300,
                'max' => 300,
                'step' => 1	
            ],
            'rem' => [
                'min' => -300,
                'max' => 300,
                'step' => 1
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => -15,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::before' => 'bottom: {{SIZE}}{{UNIT}};',
        ]
    ]
);

$this->end_controls_section();
/***************************************************
***** Header Section Divider - 1 Area End Here *****
***************************************************/

/****************************************************
***** Header Section Divider - 2 Area Start Here *****
****************************************************/
$this->start_controls_section(
    'header_section_divider_2',
    [
        'label' => esc_html__('Divider 2', 'rb-section-header'),
        'tab' => Controls_Manager::TAB_STYLE
    ]
);

// header_section_divider_2_color
$this->add_control(
    'header_section_divider_2_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Divider 2 Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_PRIMARY,
        ],
        'separator' => 'after',
        'selectors' => ['{{WRAPPER}} .rb-section-title::after' => 'background-color: {{VALUE}};']
    ]
);

// header_section_divider_2_width
$this->add_responsive_control(
    'header_section_divider_2_width',
    [
        'label' => esc_html__('Divider 2 Width', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 1000,
                'step' => 1						
            ],
            '%' => [
                'min' => 0,
                'max' => 100,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 300,
                'step' => 1	
            ],
            'rem' => [
                'min' => 0,
                'max' => 300,
                'step' => 1
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 20,
        ],
        'separator' => 'before',
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::after' => 'width: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_divider_2_height
$this->add_responsive_control(
    'header_section_divider_2_height',
    [
        'label' => esc_html__('Divider 2 Height', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 1000,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 300,
                'step' => 1	
            ],
            'rem' => [
                'min' => 0,
                'max' => 300,
                'step' => 1
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 20,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::after' => 'height: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_divider_2_bottom
$this->add_responsive_control(
    'header_section_divider_2_bottom',
    [
        'label' => esc_html__('Divider 2 Bottom', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => -1000,
                'max' => 1000,
                'step' => 1						
            ],
            'em' => [
                'min' => -300,
                'max' => 300,
                'step' => 1	
            ],
            'rem' => [
                'min' => -300,
                'max' => 300,
                'step' => 1
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => -24,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::after' => 'bottom: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_divider_2_rotate
$this->add_responsive_control(
    'header_section_divider_2_rotate',
    [
        'label' => esc_html__('Divider 2 Rotate', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'deg' ],
        'range' => [
            'deg' => [
                'min' => -180,
                'max' => 180,
                'step' => 1						
            ]
        ],
        'default' => [
            'unit' => 'deg',
            'size' => 45,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::after' => 'transform: translateX(-50%) rotate({{SIZE}}{{UNIT}});',
        ]
    ]
);

// header_section_divider_2_margin
$this->add_responsive_control(
    'header_section_divider_2_margin',
    [
        'label' => esc_html__( 'Margin', 'rb-section-header' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', 'em', 'rem' ],
        'separator' => 'before',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'selectors' => [
            '{{WRAPPER}} .rb-section-title::after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();
/***************************************************
***** Header Section Divider - 2 Area End Here *****
***************************************************/

/*****************************************************
***** Header Section Description Area Start Here *****
*****************************************************/
$this->start_controls_section(
    'header_section_desc_style',
    [
        'label' => esc_html__('Description', 'rb-section-header'),
        'tab' => Controls_Manager::TAB_STYLE
    ]
);

// header_section_desc_color
$this->add_control(
    'header_section_desc_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Description Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'separator' => 'after',
        'selectors' => ['{{WRAPPER}} .rb-section-desc' => 'color: {{VALUE}}']
    ]
);

// header_section_desc_font
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'header_section_desc_font',
        'selector' => '{{WRAPPER}} .rb-section-desc',
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_TEXT,
        ]
    ]
);

// header_section_desc_text_stroke
$this->add_control(
    'header_section_desc_text_stroke',
    [
        'label' => esc_html__('Text Stroke', 'rb-section-header'),
        'type' => Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', 'rem'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 10,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 1,
                'step' => .01	
            ],
            'rem' => [
                'min' => 0,
                'max' => 1,
                'step' => .01
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-desc' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};
            stroke-width: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// header_section_desc_text_stroke_color
$this->add_control(
    'header_section_desc_text_stroke_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Stroke Color', 'rb-section-header'),
        'global' => [
            'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
        ],
        'selectors' => ['{{WRAPPER}} .rb-section-desc' => '-webkit-text-stroke-color: {{VALUE}};
        stroke: {{VALUE}};']
    ]
);

// header_section_desc_text_shadow
$this->add_group_control(
    Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'header_section_desc_text_shadow',
        'label' => esc_html__('Text Shadow', 'rb-section-header'),
        'selector' => '{{WRAPPER}} .rb-section-desc',
    ]
);

// header_section_desc_margin
$this->add_responsive_control(
    'header_section_desc_margin',
    [
        'label' => esc_html__( 'Margin', 'rb-section-header' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'separator' => 'before',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'default' => [
            'top' => '50',
            'right' => '0',
            'bottom' => '50',
            'left' => '0',
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .rb-section-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();
/***************************************************
***** Header Section Description Area End Here *****
***************************************************/

/**********************************************
***** Header Section Wrap Area Start Here *****
**********************************************/
$this->start_controls_section(
    'header_section_wrap_style',
    [
        'label' => esc_html__('Wrap Area', 'rb-section-header'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

// header_section_wrap_text_align
$this->add_responsive_control(
    'header_section_wrap_text_align',
    [
        'label' => esc_html__('Alignment', 'rb-section-header'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__('Left', 'rb-section-header'),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__('Center', 'rb-section-header'),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__('Right', 'rb-section-header'),
                'icon' => 'eicon-text-align-right',
            ]                    
        ],
        'default' => 'center',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .rb-section-sub-title' => 'text-align: {{VALUE}};',
            '{{WRAPPER}} .rb-section-title' => 'text-align: {{VALUE}};',
            '{{WRAPPER}} .rb-section-desc' => 'text-align: {{VALUE}};',
        ],
        'condition' => [
            'header_section_design_choose' => [ 'style-1' ],
        ],
    ]
);

$this->end_controls_section();
/********************************************
***** Header Section Wrap Area End Here *****
********************************************/