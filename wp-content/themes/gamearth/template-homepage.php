<?php
/**
 * Template Name: Homepage Template
 */

 # Partie "Action"
 $home_section_action_title = carbon_get_the_post_meta( 'crb_homepage_section_action_title' );
 $home_section_action_subtitle = carbon_get_the_post_meta( 'crb_homepage_section_action_subtitle' );
 $home_section_action_cta_name = carbon_get_the_post_meta( 'crb_homepage_section_action_cta_name' );
 $home_section_action_contents = carbon_get_the_post_meta( 'crb_homepage_section_action_contents' );
 $linked_page = carbon_get_post_meta( get_the_ID(), 'crb_homepage_section_action_linked_page' );
// Contains : content['image'], content['paragraph']

 # Partie "Impact"
 $home_section_impact_title = carbon_get_the_post_meta( 'crb_homepage_section_impact_title' );
 $home_section_impact_cta_name = carbon_get_the_post_meta( 'crb_homepage_section_impact_cta_name' );
 $home_section_impact_contents = carbon_get_the_post_meta( 'crb_homepage_section_impact_contents' );
 // Contains : content['image'], content['title'], content['description']

 # Banner
 $home_section_banner = carbon_get_the_post_meta( 'crb_home_section_banner' );

 # Partie "Notre Fonds"
 $home_section_fund_logo = carbon_get_the_post_meta( 'crb_homepage_section_fund_logo' );
 $home_section_fund_title = carbon_get_the_post_meta( 'crb_homepage_section_fund_title' );
 $home_section_fund_subtitle = carbon_get_the_post_meta( 'crb_homepage_section_fund_subtitle' );
 $home_section_fund_cta_name = carbon_get_the_post_meta( 'crb_homepage_section_fund_cta_name' );
 $home_section_fund_contents = carbon_get_the_post_meta( 'crb_homepage_section_fund_contents' );
 // Contains : content['icone'], content['description']
 $home_section_fund_paragraph = carbon_get_the_post_meta( 'crb_homepage_section_fund_paragraph' );
 $linked_page_fund = carbon_get_post_meta( get_the_ID(), 'crb_homepage_section_fund_linked_page' );

 # Partie "Notre Média"
 $home_section_media_title = carbon_get_the_post_meta( 'crb_homepage_section_media_title' );
 $home_section_media_subtitle = carbon_get_the_post_meta( 'crb_homepage_section_media_subtitle' );
 $home_section_media_cta_name = carbon_get_the_post_meta( 'crb_homepage_section_media_cta_name' );
 $linked_page_media = carbon_get_post_meta( get_the_ID(), 'crb_homepage_section_media_linked_page' );

 # Notre écosystème
 $home_section_ecosystem_title = carbon_get_the_post_meta( 'crb_homepage_section_ecosystem_title' );
 $home_section_ecosystem_subtitle = carbon_get_the_post_meta( 'crb_homepage_section_ecosystem_subtitle' );
 $home_section_ecosystem_cta_name = carbon_get_the_post_meta( 'crb_homepage_section_ecosystem_cta_name' );
 $linked_page_ecosystem = carbon_get_post_meta( get_the_ID(), 'crb_homepage_section_ecosystem_linked_page' );
 $home_section_ecosystem_contents = carbon_get_the_post_meta( 'crb_homepage_section_ecosystem_contents' );
 // Contains : content['title']
 // crb_homepage_section_ecosystem_columns
    // Contains : column['title']
 $home_section_ecosystem_partners = carbon_get_the_post_meta( 'crb_homepage_section_ecosystem_partners' );
 // Contains : partner['partner_logo']
?>

<section id="home-action">
    <div class="block-section-header">
        <div class="grid-line grid-line-sup"></div>
        <p class="block-section-header-title"><?= $home_section_action_title; ?></p>
        <h3 class="block-section-header-subtitle"><?= $home_section_action_subtitle; ?></h3>
        <a href="<?= get_permalink( $linked_page ) ?>" class="btn btn-second-gamearth"> <?= $home_section_action_cta_name; ?> </a>
        <div class="grid-line grid-line-inf"></div>
    </div>
    <div class="block-section-content">
        <div class="before-action-content-child"></div>
        <?php foreach ($home_section_action_contents as $key => $content) { ?>
            <div class="content-child action-content-child action-content-item-<?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_home_section_action_image', "", array("class" => "lazyload img-fluid") ) ?>
                <?php /* wp_get_attachment_image( $content['image'], 'custom_size_home_section_action_image', "", array("class" => "lazyload img-fluid") ) */ ?>
                <p class="content-child-paragraphe action-content-child-paragraphe"><?= $content['paragraph'] ?></p>
            </div>
        <?php } ?>
        <div class="after-action-content-child"></div>
    </div>
</section>

<section id="home-impact">
    <div class="block-section-header">
        <div class="grid-line grid-line-sup"></div>
        <p class="block-section-header-title"><?= $home_section_impact_title; ?></p>
        <button type="button" class="btn btn-gamearth"> <?= $home_section_impact_cta_name; ?> </button>
        <div class="grid-line grid-line-inf"></div>
    </div>
    <div class="block-section-content">
        <div class="before-impact-content-child"></div>
        <?php foreach ($home_section_impact_contents as $key => $content) { ?>
            <div class="content-child impact-content-child impact-content-item-<?= $key ?>">
                <?= wp_get_attachment_image( $content['image'], 'custom_size_home_section_impact_image', "", array("class" => "lazyload img-fluid content-child-image impact-content-child-image") ) ?>
                <h3 class="content-child-title impact-content-child-title"><?= $content['title'] ?></h3>
                <div class="impact-content-child-underline"></div>
                <p class="content-child-paragraphe impact-content-child-paragraphe"><?= $content['description'] ?></p>
            </div>
        <?php } ?>
        <div class="after-impact-content-child"></div>
    </div>
</section>

<section id="home-fund">
    <div class="block-section-banner">
        <?= wp_get_attachment_image( $home_section_banner, 'custom_size_home_section_banner', "", array("class" => "lazyload img-fluid") ) ?>
    </div>
    <div class="block-section-header">
        <div class="grid-line-fund-sup"></div>
        <?= wp_get_attachment_image( $home_section_fund_logo, 'custom_size_fund_logo', "", array("class" => "lazyload img-fluid block-section-fund-logo") ) ?>
        <!--<img class="block-section-fund-logo" src="https://via.placeholder.com/250" alt="">-->
        <p class="block-section-header-title"><?= $home_section_fund_title; ?></p>
        <h3 class="block-section-header-subtitle"><?= $home_section_fund_subtitle; ?></h3>
        <a href="<?= get_permalink( $linked_page_fund ) ?>" class="btn btn-gamearth"> <?= $home_section_fund_cta_name; ?> </a>
        <div class="grid-line-fund-inf"></div>
    </div>

    <div class="block-section-content">
        <div class="before-fund-content-child"></div>
        <?php foreach ($home_section_fund_contents as $key => $content) { ?>
            <div class="content-child fund-content-child fund-content-item-<?= $key; ?>">
                <?= wp_get_attachment_image( $content['icone'], 'custom_size_home_section_fund_image', "", array("class" => "lazyload img-fluid content-child-image fund-content-child-image") ) ?>
                <div class="fund-content-child-text">
                    <div class="fund-content-child-aside-line"></div>
                    <p class="content-child-paragraphe fund-content-child-paragraphe"><?= $content['description']; ?></p>
                </div>
            </div>
        <?php } ?>
        <div class="after-fund-content-child"></div>
        <div class="before-fund-paragraph"></div>
        <div class="fund-paragraph"><p class="fund-paragraph-text"><?= $home_section_fund_paragraph; ?></p></div>
        <div class="after-fund-paragraph"></div>
    </div>

</section>

<section id="home-media">
    <div class="block-section-header">
        <div class="grid-line grid-line-sup"></div>
        <p class="block-section-header-title"><?= $home_section_media_title; ?></p>
        <h3 class="block-section-header-subtitle"><?= $home_section_media_subtitle; ?></h3>
        <a href="<?= get_permalink( $linked_page_media ) ?>" class="btn btn-second-gamearth"> <?= $home_section_media_cta_name; ?> </a>
        <div class="grid-line grid-line-inf"></div>
    </div>
    <div class="block-section-content">
        <div class="before-media-content-child"></div>
        <?php $recentPosts = new WP_Query(); $recentPosts->query('showposts=3'); ?>
        <?php $counter = 0; while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <div class="news-<?= $counter; ?> news-child">
                <?= the_post_thumbnail( 'custom_size_home_section_media_thumbnail', array("class" => "lazyload img-fluid") ) ?>
                <?php /* wp_get_attachment_image( get_post_thumbnail_id(), 'custom_size_home_section_media_thumbnail', "", array("class" => "lazyload img-fluid") ) */ ?>
                <h4 class="news-date"><?= get_the_date(); ?></h4>
                <h2 class="news-title"><?php the_title(); ?></h2>
                <p class="news-resume"><?= wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <a href="<?php the_permalink() ?>" rel="bookmark">Lire l'article</a>
                <?php $counter++; ?>
            </div>
        <?php  endwhile; wp_reset_postdata(); ?>
        <div class="after-action-content-child"></div>
    </div>
</section>

<section id="home-ecosystem">

    <div class="block-section-header"> 
        <div class="grid-line grid-line-sup"></div>
        <p class="block-section-header-title"><?= $home_section_ecosystem_title; ?></p>
        <a href="<?= get_permalink( $linked_page_ecosystem ) ?>" class="btn btn-second-gamearth"> <?= $home_section_ecosystem_cta_name; ?> </a>
        <div class="grid-line grid-line-inf"></div>
    </div>

    <div class="block-section-content">
        <div class="before-ecosystem-content-child"></div>
        <?php foreach ($home_section_ecosystem_contents as $key => $content) { ?>
            <?php /* wp_get_attachment_image( $content['image'], 'custom_size_home_section_action_image', "", array("class" => "lazyload img-fluid") ) */ ?>
            <div class="content-child ecosystem-content-child ecosystem-content-item-<?= $key; ?>">
                <h4 class="block-section-ecosystem-title"><?= $content['title'] ?></h4>
                <?php $lines = $content['crb_homepage_section_ecosystem_columns'] ?>
                <?php foreach ($lines as $line) { ?>
                    <p class="block-section-ecosystem-line"><?= $line['title'] ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="after-ecosystem-content-child"></div>

        <div class="before-ecosystem-partners"></div>
        <div class="ecosystem-partners">
            <?php foreach ($home_section_ecosystem_partners as $partner) { ?>
                <?= wp_get_attachment_image( $partner['partner_logo'], 'custom_size_home_section_ecosystem_image', "", array("class" => "lazyload img-fluid") ) ?>
                <!--img class="" src="https://via.placeholder.com/75"-->
            <?php } ?>
        </div>
        
        <div class="after-ecosystem-partners"></div>
    </div>

</section>
