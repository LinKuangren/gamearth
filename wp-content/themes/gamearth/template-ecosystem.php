<?php
/**
 * Template Name: Ecosysteme Template
 */

 # Partie "Confiance"
 $ecosystem_section_confiance_title = carbon_get_the_post_meta( 'crb_ecosystem_section_confiance_title' );
 $ecosystem_section_confiance_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_confiance_contents' );
 // Contains : content['image'], content['paragraph'], content['title']

 # Notre Equipe
 $ecosystem_section_equipe_title = carbon_get_the_post_meta( 'crb_ecosystem_section_equipe_title' );
 $ecosystem_section_equipe_image = carbon_get_the_post_meta( 'crb_ecosystem_section_equipe_image' );
 $ecosystem_section_equipe_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_equipe_contents' );
 // Contains : content['image'], content['description'], content['title']

 # Partie "Experts"
 $ecosystem_section_expert_title = carbon_get_the_post_meta( 'crb_ecosystem_section_expert_title' );
 $ecosystem_section_expert_paragraph = carbon_get_the_post_meta( 'crb_ecosystem_section_expert_paragraph' );
 $ecosystem_section_expert_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_expert_contents' );
 // Contains : content['image'], content['description'], content['title']

 # Partie "Partenaires"
 $ecosystem_section_partenaire_title = carbon_get_the_post_meta( 'crb_ecosystem_section_partenaire_title' );
 $ecosystem_section_partenaire_contents = carbon_get_the_post_meta( 'crb_ecosystem_section_partenaire_contents' );
 // Contains : content['image']
?>

<?php get_template_part('templates/content', 'ecosystem-hero'); ?>

<section id="ecosystem-confiance">
    <div class="section-confiance">
        <div class="section-header-confiance">
            <p class="section-confiance-title"><?= $ecosystem_section_confiance_title; ?></p>
        </div>
        <div class="section-confiance-contenu">

        <?php foreach ($ecosystem_section_confiance_contents as $key => $content) { ?>
            <div class="section-confiance-contenu-next <?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_impact_image', "", array("class" => "lazyload img-fluid content-child-image impact-content-child-image") ) ?>
                <h3><?= $content['title'] ?></h3>
                <div class=""></div>
                <p><?= $content['description'] ?></p>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<?php get_template_part( 'templates/content', 'ecosystem-engage'); ?>

<section id="ecosystem-equipe">
    <div class="section-equipe-header">
        <p class="section-equipe-title"><?= $ecosystem_section_equipe_title; ?></p>
        <div class="grid-line-ecosystem-equipe"></div>
        <div class="section-equipe-image">
        <?= wp_get_attachment_image( $ecosystem_section_equipe_image, 'custom_size_equipe_image', "", array("class" => "ecosystem-equipe-image") ) ?>
        </div>
    </div>
    <div class="section-equipe-contenu">
        <?php foreach ($ecosystem_section_equipe_contents as $key => $content) { ?>
            <div class="section-equipe-photo -<?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_impact_image', "", array("class" => "") ) ?>
                <h3><?= $content['title'] ?></h3>
                <p><?= $content['description'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>

<section id="ecosystem-expert">
    <div class="section-expert-header">
        <div class="grid-line-ecosystem-expert"></div>
        <h3 class="section-expert-title"><?= $ecosystem_section_expert_title; ?></h3>
        <div class="section-expert-paragraph">
            <p><?= $ecosystem_section_expert_paragraph; ?></p>
        </div>
        <div class="grid-line-ecosystem"></div>
    </div>
    <div class="section-expert-contenu">
        <div class="section-expert-extcontenu">
            <div class="section-expert-intcontenu">
                <?php foreach ($ecosystem_section_expert_contents as $key => $content) { ?>
                    <div class="section-expert-logo <?= $key ?>">
                        <?= wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_impact_image', "", array("class" => "lazyload img-fluid content-child-image impact-content-child-image") ) ?>
                        <h3><?= $content['title'] ?></h3>
                        <?php if ($key == 4) { ?>
                            <div class="content-others">
                                <p>MATCH FOR GREEN</p>
                                <div class="separator-expert-group-4"></div>
                                <p>LANDESTINI</p>
                                <div class="separator-expert-group-4"></div>
                                <p>PLANETE URGENCE</p>
                                <div class="separator-expert-group-4"></div>
                                <p>PLANTEURS D'AVENIR COMMUNITREES</p>
                                <div class="separator-expert-group-4"></div>
                                <p>LE CROISSANT FERTILE</p>
                                <div class="separator-expert-group-4"></div>
                                <p>WE OCEAN</p>
                            </div>
                        <?php } else { ?>
                            <p><?= $content['description'] ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="section-expert-contenu-blue"></div>
    </div>
</section>

<section id="ecosystem-partenaire">
    <div class="section-partenaire-header">
        <div class="grid-line-ecosystem"></div>
        <p class="section-partenaire-title"><?= $ecosystem_section_partenaire_title; ?></p>
    </div>
    <div class="section-partenaire-contenu">
        <div class="grid-line-partenaire-logo"></div>
        <div class="section-partenaire-image">
            <?php foreach ($ecosystem_section_partenaire_contents as $key => $content) { ?>
                <div class="content-image-partenaire <?= $key ?>">
                    <?= wp_get_attachment_image( $content['image'], 'custom_size_ecosystem_section_impact_image', "", array("class" => "lazyload img-fluid content-child-image impact-content-child-image") ) ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
