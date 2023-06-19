<?php
 # Partie "Engages"
 $ecosystem_section_engage_title = carbon_get_the_post_meta( 'crb_ecosystem_section_engage_title' );
 $ecosystem_section_engage_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_engage_contents' );

 # Partie "Soutient"
 $ecosystem_section_soutien_title = carbon_get_the_post_meta( 'crb_ecosystem_section_soutien_title' );
 $ecosystem_section_soutien_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_soutien_contents' );
?>

<section id="ecosystem-engage">
    <div class="section-engage-all">
        <div class="section-engage-header">
            <p class="section-engager-title"><?= $ecosystem_section_engage_title; ?></p>
        </div>
        <div class="section-engage-contenu">
            <?php foreach ($ecosystem_section_engage_contents as $key => $content) { ?>
                <div class="section-engage-align <?= $key ?>">
                    <?= wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_engage_image', "", array("class" => "lazyload img-fluid") ) ?>
                    <?php /* wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_engage_image', "", array("class" => "lazyload img-fluid") ) */ ?>
                    <p class="content-child-paragraphe engage-content-child-paragraphe"><?= $content['description'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <section id="ecosystem-soutien">
        <div class="section-soutien-header">
            <p class="section-soutien-title"><?= $ecosystem_section_soutien_title; ?></p>
        </div>
        <div class="section-soutien-contenu">
            <?php foreach ($ecosystem_section_soutien_contents as $key => $content) { ?>
                <div class="section-soutien-photo <?= $key ?>">
                    <?= wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_impact_image', "", array("class" => "lazyload img-fluid content-child-image impact-content-child-image") ) ?>
                    <h3><?= $content['title'] ?></h3>
                    <p><?= $content['description'] ?></p>
                </div>
            <?php } ?>
        </div>
    </section>
</section>