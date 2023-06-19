<?php
/**
 * Template Name: Action
 */

 # Partie "Calculer"
 $action_section_calculer_title = carbon_get_the_post_meta( 'crb_action_section_calculer_title' );
 $action_section_calculer_contents = carbon_get_the_post_meta( 'crb_action_section_calculer_contents' );
 $action_section_calculer_contents_next = carbon_get_the_post_meta( 'crb_action_section_calculer_contents_next' );
 $action_section_calculer_contents_more = carbon_get_the_post_meta( 'crb_action_section_calculer_contents_more' );

 # Banniere
 $action_section_banner = carbon_get_the_post_meta( 'crb_action_section_banner' );

 # Comprendre
 $action_section_comprendre_title = carbon_get_the_post_meta( 'crb_action_section_comprendre_title' );
 $action_section_comprendre_contents = carbon_get_the_post_meta( 'crb_action_section_comprendre_contents' );
 $action_section_comprendre_contents_next = carbon_get_the_post_meta( 'crb_action_section_comprendre_contents_next' );

  # Banniere
  $action_section_banner_next = carbon_get_the_post_meta( 'crb_action_section_banner_next' );

 # Reduire
 $action_section_reduire_title = carbon_get_the_post_meta( 'crb_action_section_reduire_title' );
 $action_section_reduire_image = carbon_get_the_post_meta( 'crb_action_section_reduire_image' );
 $action_section_reduire_cta_name = carbon_get_the_post_meta( 'crb_action_section_reduire_cta_name' );
 $action_section_reduire_contents = carbon_get_the_post_meta( 'crb_action_section_reduire_contents' );

 # Contribuer
 $action_section_contribuer_title = carbon_get_the_post_meta( 'crb_action_section_contribuer_title' );
 $action_section_contribuer_cta_name = carbon_get_the_post_meta( 'crb_action_section_contribuer_cta_name' );
 $action_section_contribuer_image = carbon_get_the_post_meta( 'crb_action_section_contribuer_image' );
 $action_section_contribuer_subtitle = carbon_get_the_post_meta( 'crb_action_section_contribuer_subtitle' );
 $action_section_contribuer_contents = carbon_get_the_post_meta( 'crb_action_section_contribuer_contents' );

 # Banniere
 $action_section_banner_more = carbon_get_the_post_meta( 'crb_action_section_banner_more' );

 # Communiquer
 $action_section_communiquer_title = carbon_get_the_post_meta( 'crb_action_section_communiquer_title' );
 $action_section_communiquer_image = carbon_get_the_post_meta( 'crb_action_section_communiquer_image' );
 $action_section_communiquer_subtitle = carbon_get_the_post_meta( 'crb_action_section_communiquer_subtitle' );
 $action_section_communiquer_contents = carbon_get_the_post_meta( 'crb_action_section_communiquer_contents' );

 # Engager
 $action_section_engager_title = carbon_get_the_post_meta( 'crb_action_section_engager_title' );
 $action_section_engager_subtitle = carbon_get_the_post_meta( 'crb_action_section_engager_subtitle' );
 $action_section_engager_contents = carbon_get_the_post_meta( 'crb_action_section_engager_contents' );
 $action_section_engager_contents_next = carbon_get_the_post_meta( 'crb_action_section_engager_contents_next' );
?>

<section id="action-calculer">
    <div class="section-calculer-header">
        <div class="grid-line-action-calculer"></div>
        <h3 class="section-calculer-title"><?= $action_section_calculer_title; ?></h3>
        <div class="grid-line-action-calculer"></div>
    </div>
    <div class="section-calculer-contenu">
        <?php foreach ($action_section_calculer_contents as $key => $content) { ?>
            <div class="contenu <?= $key ?>">
                <p class="description"><?= $content['description'] ?></p>
                <p class="description-next"><?= $content['description-next'] ?></p>
                <?= wp_get_attachment_image( $content['image'], 'custom_size_action_section_comprendre_image', "", array("class" => "test") ) ?>
                <h3><?= $content['title'] ?></h3>
            </div>
        <?php } ?>
        <?php foreach ($action_section_calculer_contents_next as $key => $content) { ?>
            <div class="contenu-2 <?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_action_section_comprendre_image', "", array("class" => "test") ) ?>
                <h3><?= $content['title'] ?></h3>
                <?= wp_get_attachment_image( $content['image-next'], 'custom_size_action_section_comprendre_image', "", array("class" => "test") ) ?>
                <h3><?= $content['title-next'] ?></h3>
            </div>
        <?php } ?>
        <?php foreach ($action_section_calculer_contents_more as $key => $content) { ?>
            <div class="contenu-3 <?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_action_section_comprendre_image', "", array("class" => "test") ) ?>
                <h3><?= $content['title'] ?></h3>
                <p class="description-more"><?= $content['description-more'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>
<section id="action-calculer-bannier">
    <div class="grid-line-action-calculer-bannier"></div>
    <div class="section-action-banner">
        <?= wp_get_attachment_image( $action_section_banner, 'custom_size_home_section_banner', "", array("class" => "lazyload img-fluid") ) ?>
    </div>
</section>
<section id="action-comprendre">
    <div class="section-comprendre-header">
        <div class="grid-line-action-comprendre"></div>
        <h3 class="section-comprendre-title"><?= $action_section_comprendre_title; ?></h3>
        <div class="grid-line-action-comprendre-2"></div>
    </div>
    <div class="section-comprendre-contenu">
        <?php foreach ($action_section_comprendre_contents as $key => $content) { ?>
            <div class="contenu <?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_action_section_comprendre_image', "", array("class" => "test") ) ?>
                <h3><?= $content['title'] ?></h3>
            </div>
        <?php } ?>
        <?php foreach ($action_section_comprendre_contents_next as $key => $content) { ?>
            <div class="contenu-next <?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_action_section_comprendre_image', "", array("class" => "test") ) ?>
                <p class="bold"><?= $content['description-un'] ?></p>
                <p><?= $content['description-deux'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>
<section id="action-reduire">
    <div class="section-reduire-header">
        <div class="grid-line-action-reduire"></div>
        <h3 class="section-reduire-title"><?= $action_section_reduire_title; ?></h3>
        <button type="button" class="btn btn-gamearth cta"> <?= $action_section_reduire_cta_name; ?> </button>
        <div class="grid-line-action-reduire-2"></div>
    </div>
    <div class="section-reduire-contenu">
        <?php foreach ($action_section_reduire_contents as $key => $content) { ?>
            <div class="contenu <?= $key ?>">
                <h3><?= $content['title'] ?></h3>
                <p><?= $content['description'] ?></p>
                <div class="contenu-image <?= $key ?>">
                    <?= wp_get_attachment_image( $content['icone'], 'custom_size_action_section_reduire_image', "", array("class" => "test") ) ?>
                </div>
            </div>
        <?php } ?>
        <div class="section-reduire-image">
            <?= wp_get_attachment_image( $action_section_reduire_image, 'custom_size_reduire_image', "", array("class" => "") ) ?>
        </div>
    </div>
</section>
<section id="action-contribuer">
    <?= wp_get_attachment_image( $action_section_banner_next, 'custom_size_action_section_banner_next', "", array("class" => "") ) ?>
    <div class="section-contribuer-header">
        <div class="grid-line-action-contribuer"></div>
        <h3 class="section-contribuer-title"><?= $action_section_contribuer_title; ?></h3>
        <button type="button" class="btn btn-gamearth cta"> <?= $action_section_contribuer_cta_name; ?> </button>
        <div class="grid-line-action-contribuer-2"></div>
    </div>
    <div class="section-contribuer-contenu">
        <h3 class="section-contribuer-subtitle"><?= $action_section_contribuer_subtitle; ?></h3>
        <div class="contenu">
            <?php foreach ($action_section_contribuer_contents as $key => $content) { ?>
                <div class="contenu-description <?= $key ?>">
                    <p><?= $content['description'] ?></p>
                    <div class="grid-line-action-contribuer-description"></div>
                </div>
            <?php } ?>
        </div>
        <div class="contenu-image">
            <?= wp_get_attachment_image( $action_section_contribuer_image, 'custom_size_home_section_banner', "", array("class" => "lazyload img-fluid") ) ?>
        </div>
    </div>
</section>
<section id="action-communiquer">
    <div class="section-communiquer-header">
        <div class="grid-line-action-communiquer"></div>
        <h3 class="section-communiquer-title"><?= $action_section_communiquer_title; ?></h3>
        <div class="grid-line-action-communiquer"></div>
    </div>
    <div class="section-communiquer-contenu">
        <div class="communiquer-contenu">
            <?= wp_get_attachment_image( $action_section_communiquer_image, 'custom_size_action_section_communiquer_image', "", array("class" => "") ) ?>
            <h3 class="section-communiquer-subtitle"><?= $action_section_communiquer_subtitle; ?></h3>
        </div>
        <div class="contenu-image-all">
            <?php foreach ($action_section_communiquer_contents as $key => $content) { ?>
                <div class="contenu-image <?= $key ?>">
                    <?= wp_get_attachment_image( $content['icone'], 'custom_size_action_section_communiquer_image', "", array("class" => "test") ) ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section id="action-engager">
    <div class="section-engager-header">
        <div class="grid-line-action-engager"></div>
        <h3 class="section-engager-title"><?= $action_section_engager_title; ?></h3>
        <p class="section-engager-subtitle"><?= $action_section_engager_subtitle; ?></p>
        <div class="grid-line-action-engager"></div>
    </div>
    <div class="section-engager-contenu-all">
        <div class="section-engager-contenu">
            <?php foreach ($action_section_engager_contents as $key => $content) { ?>
                <div class="contenu-image test<?= $key ?>">
                    <?php if ($key === 0) : ?>
                        <?= wp_get_attachment_image( $content['icone'], 'custom_size_action_section_reduire_image', "", array("class" => "test modify-image-1") ) ?>
                        <?php else : ?>
                        <?= wp_get_attachment_image( $content['icone'], 'custom_size_action_section_reduire_image', "", array("class" => "test") ) ?>
                    <?php endif; ?>
                    <div class="contenu-description <?= $key ?>">
                        <p><?= $content['description'] ?></p>
                        <p class="rappel"><?= $content['paragraph'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="section-engager-contenu-next">
            <?php foreach ($action_section_engager_contents_next as $key => $content) { ?>
                <div class="contenu-image <?= $key ?>">
                    <?= wp_get_attachment_image( $content['icone'], 'custom_size_action_section_reduire_image', "", array("class" => "test<?= $key ?>") ) ?>
                    <div class="contenu-description <?= $key ?>">
                        <p><?= $content['description'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="section-engager-banner">
        <?= wp_get_attachment_image( $action_section_banner_more, 'custom_size_action_section_banner_more', "", array("class" => "") ) ?>
    </div>
</section>