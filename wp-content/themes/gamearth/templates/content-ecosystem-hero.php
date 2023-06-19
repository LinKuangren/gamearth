<?php

# Partie "Debut"
$ecosystem_section_start_logo = carbon_get_the_post_meta( 'crb_ecosystem_section_start_logo' );
$ecosystem_section_start_cta_name = carbon_get_the_post_meta( 'crb_ecosystem_section_start_cta_name' );
$ecosystem_section_start_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_start_contents' );
$ecosystem_section_start_paragraph = carbon_get_the_post_meta( 'crb_ecosystem_section_start_paragraph' );
?>

<section class="ecosystem-hero">
    <div class="ecosystem-hero-banner">
        <?php foreach ($ecosystem_section_start_contents as $content) { ?>
            <?= wp_get_attachment_image( $content['icone'], 'custom_size_ecosystem_banner', "", array("class" => "lazyload ecosystem-banner-image") ) ?>
        <?php } ?>
        <div class="logo-ecosystem">
            <?= wp_get_attachment_image( $ecosystem_section_start_logo, 'custom_size_start_logo', "", array("class" => "ecosystem-logo-start") ) ?>
        </div>
        <div class="block-content-start">
            <div class="ecosystem-paragraph">
                <p class="ecosystem-paragraph-text"><?= $ecosystem_section_start_paragraph; ?></p>
                <button class="btn btn-second-gamearth"><?= $ecosystem_section_start_cta_name; ?></button>
            </div>
        </div>
    </div>
</section>