<?php 

$postID = get_post_meta( $post->ID );

$titleColor         = ( isset( $postID['skill_title_color'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_title_color'][0] ) ) : '';
$barBgColor         = ( isset( $postID['skill_bar_bg_color'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_bar_bg_color'][0] ) ) : '';
$percentageBgColor  = ( isset( $postID['skill_bar_percentage_bg_color'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_bar_percentage_bg_color'][0] ) ) : '';
$valueBgColor  = ( isset( $postID['skill_value_bg_color'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_value_bg_color'][0] ) ) : '';

$titleFont  = ( isset( $postID['skill_title_font_size'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_title_font_size'][0] ) ) : '';
$percentageFont  = ( isset( $postID['skill_value_font_size'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_value_font_size'][0] ) ) : '';

$titleFontFamily  = ( isset( $postID['skill_title_font_family'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_title_font_family'][0] ) ) : '';
$percentageFfamily  = ( isset( $postID['pValue_font_family'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['pValue_font_family'][0] ) ) : '';

$height  = ( isset( $postID['skill_bar_height'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_bar_height'][0] ) ) : '';
$borderRadius  = ( isset( $postID['skill_bar_b_radius'][0] ) ) ? sanitize_text_field( wp_unslash( $postID['skill_bar_b_radius'][0] ) ) : '';

?>
<style>

    .skill-block h4{
        color: <?php echo esc_attr( $titleColor ); ?>;
        font-size:<?php echo esc_attr( $titleFont ); ?>;
        text-transform:<?php echo esc_attr( $titleFontFamily ); ?>;
    }
    .skill-item{
        background:<?php echo esc_attr( $barBgColor ); ?>;
        height: <?php echo esc_attr( $height ); ?>;
        border-radius:<?php echo esc_attr( $borderRadius ); ?>;
    }
    .skill-percentage{
        background:<?php echo esc_attr( $percentageBgColor ); ?>;
    }
    .skill-percentage span{
        background:<?php echo esc_attr( $valueBgColor ); ?>;
        font-size:<?php echo esc_attr( $percentageFont ); ?>;
        text-transform:<?php echo esc_attr( $titleFontFamily ); ?>;
    }

</style>
