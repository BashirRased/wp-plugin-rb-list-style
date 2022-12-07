<!--===== Section Header Strat Here =====-->
<div class="rb-section-header-1">

<!-- Section Header Sub Title -->
<?php if (!empty($settings['header_section_sub_title_text'])) : ?>
    <?php 
        printf(
            '<%1$s %2$s>%3$s</%1$s>',
            tag_escape( $settings['header_section_sub_title_tag'] ),
            $this->get_render_attribute_string( 'header_section_sub_title_attr' ),
            $settings['header_section_sub_title_text']
        );
    ?>
<?php endif; ?>

<!-- Section Header Title -->
<?php if (!empty($settings['header_section_title_text_1']) || !empty($settings['header_section_title_text_2'])) : ?>

    <?php 
        printf(
            '<%1$s %2$s>',
            tag_escape( $settings['header_section_title_tag'] ),
            $this->get_render_attribute_string( 'header_section_title_attr' )
        );
    ?>

    <!-- Section Header Title Text 01 -->
    <?php if ( 'yes' === $settings['header_section_title_text_1_span_tag'] ) : ?>
        <span class="rb-section-title-span">
            <?php echo $settings['header_section_title_text_1']; ?>
        </span>
        
    <?php else :
    echo $settings['header_section_title_text_1']; endif;
    ?>

    <!-- Section Header Title Text 02 -->
    <?php if ( 'yes' === $settings['header_section_title_text_2_span_tag'] ) : ?>
        <span class="rb-section-title-span">
            <?php echo $settings['header_section_title_text_2']; ?>
        </span>
        
    <?php else :
    echo $settings['header_section_title_text_2']; endif;
    ?>

    <?php 
        printf(
            '</%1$s>',
            tag_escape( $settings['header_section_title_tag'] )
        );
    ?>

<?php endif; ?>

<!-- Section Header Description -->
<?php if (!empty($settings['header_section_desc_text'])) : ?>
    <p class="rb-section-desc">
        <?php echo $settings['header_section_desc_text']; ?>
    </p>
<?php endif; ?>

</div>
<!--===== Section Header End Here =====-->