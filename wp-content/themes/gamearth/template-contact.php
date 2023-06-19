<?php
/**
 * Template Name: Contact Template
 */
?>

<?php
$contact_banner = carbon_get_the_post_meta( 'crb_contact_banner' );
$contact_title = carbon_get_the_post_meta( 'crb_contact_title' );
$contact_subtitle = carbon_get_the_post_meta( 'crb_contact_subtitle' );
$contact_form = carbon_get_the_post_meta( 'crb_contact_form_shortcode' );

$contact_end_sentence = carbon_get_the_post_meta( 'crb_contact_end_sentence' );
$contact_cta_name = carbon_get_the_post_meta( 'crb_contact_cta_name' );
$contact_cta_link = carbon_get_the_post_meta( 'crb_contact_cta_link' );
?>

<div class="container">
    <section class="contact">
        <?= wp_get_attachment_image( $contact_banner, 'custom_size_contact_banner', "", array("class" => "lazyload img-fluid") ) ?>
        <article class="contact-header">
            <h2><?= $contact_title; ?></h2>
            <h3><?= $contact_subtitle; ?></h3>
        </article>

        <article class="contact-content">
            <?= do_shortcode( $contact_form ); ?>
        </article>

        <article class="contact-footer">
            <p><?= $contact_end_sentence; ?></p>
            <a href="<?= $contact_cta_link ?>" class="btn btn-gamearth"> <?= $contact_cta_name; ?> </a>
        </article>
    </section>
</div>
