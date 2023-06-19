<?php
  $header_logo = carbon_get_theme_option( 'crb_header_logo' );
  $header_baseline = carbon_get_theme_option( 'crb_header_baseline' );
  $header_cta_contact_text = carbon_get_theme_option( 'crb_header_cta_contact_text' );
  $header_ecoindex_image = carbon_get_theme_option( 'crb_header_ecoindex' );
  $header_homelink = carbon_get_theme_option( 'crb_header_homelink' );
  $header_cta_link = carbon_get_theme_option( 'crb_header_linked_page' );
?>

<header class="banner">
  <a href="<?= get_permalink( $header_homelink ) ?>">
    <div class="left">
      <?= wp_get_attachment_image( $header_logo, 'custom_size_header_logo', "", array("class" => "lazyload img-fluid header-logo") ) ?>
      <p class="header-baseline">
        <?= $header_baseline; ?>
      </p>
    </div>
  </a>

  <nav class="nav-primary center">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </nav>

  <div class="right">
    <a href="<?= get_permalink( $header_cta_link ) ?>" class="btn btn-gamearth"> <?= $header_cta_contact_text; ?> </a>
    <?= wp_get_attachment_image( $header_ecoindex_image ) ?>
  </div>
</header>
