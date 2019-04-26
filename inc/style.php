<?php 

$postID = get_post_meta( $post->ID );

$titleColor         = ( isset( $postID['skill_title_color'][0] ) ) ? $postID['skill_title_color'][0] : '';
$barBgColor         = ( isset( $postID['skill_bar_bg_color'][0] ) ) ? $postID['skill_bar_bg_color'][0] : '';
$percentageBgColor  = ( isset( $postID['skill_bar_percentage_bg_color'][0] ) ) ? $postID['skill_bar_percentage_bg_color'][0] : '';
$valueBgColor       = ( isset( $postID['skill_value_bg_color'][0] ) ) ? $postID['skill_value_bg_color'][0] : '';

$titleFont       = ( isset( $postID['skill_title_font_size'][0] ) ) ? $postID['skill_title_font_size'][0] : '';
$percentageFont       = ( isset( $postID['skill_value_font_size'][0] ) ) ? $postID['skill_value_font_size'][0] : '';

$titleFontFamily      = ( isset( $postID['skill_title_font_family'][0] ) ) ? $postID['skill_title_font_family'][0] : '';
$percentageFfamily       = ( isset( $postID['pValue_font_family'][0] ) ) ? $postID['pValue_font_family'][0] : '';

$height      = ( isset( $postID['skill_bar_height'][0] ) ) ? $postID['skill_bar_height'][0] : '';
$borderRadius       = ( isset( $postID['skill_bar_b_radius'][0] ) ) ? $postID['skill_bar_b_radius'][0] : '';

?>
<style>

    .skill-block h4{
        color: <?php echo $titleColor; ?>;
        font-size:<?php echo $titleFont; ?>;
        text-transform:<?php echo $titleFontFamily; ?>;
    }
    .skill-item{
        background:<?php echo $barBgColor; ?>;
        height: <?php echo $height; ?>;
        border-radius:<?php echo $borderRadius; ?>;
    }
    .skill-percentage{
        background:<?php echo $percentageBgColor; ?>;
    }
    .skill-percentage span{
        background:<?php echo $valueBgColor; ?>;
        font-size:<?php echo $percentageFont; ?>;
        text-transform:<?php echo $titleFontFamily; ?>;
    }

</style>
