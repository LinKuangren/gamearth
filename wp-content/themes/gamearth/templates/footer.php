<!--
<footer class="content-info">
  <div class="container">
    <?php /*dynamic_sidebar('sidebar-footer');*/ ?>
  </div>
</footer>
-->

<?php

  $footer_logo = carbon_get_theme_option( 'crb_footer_logo' );

  $adress_fund_title = carbon_get_theme_option( 'crb_adress_fund_title' );
  $adresses_fund = carbon_get_theme_option( 'crb_adresses_fund' );
    // Contains: $line['crb_adress_line'], $line['crb_adress_cp_city']
  
  $adress_sas_title = carbon_get_theme_option( 'crb_adress_sas_title' );
  $adresses_sas = carbon_get_theme_option( 'crb_adresses_sas' );
    // Contains: $line['crb_adress_first_line'], $line['crb_adress_second_line'], $line['crb_adress_third_line']

  $legal_term_title = carbon_get_theme_option( 'crb_legal_term_title' );
  $legal_terms = carbon_get_theme_option( 'crb_legal_terms' );
    // Contains: $line['crb_legal_term_name'], $line['crb_legal_term_link']

  $information_text = carbon_get_theme_option( 'crb_information_text' );

  $social_links_title = carbon_get_theme_option( 'crb_social_links_title' );

  $facebook_page = carbon_get_theme_option( 'crb_facebook_page' );
  $facebook_image = carbon_get_theme_option( 'crb_facebook_image' );
  
  $linkedin_page = carbon_get_theme_option( 'crb_linkedin_page' );
  $linkedin_image = carbon_get_theme_option( 'crb_linkedin_image' );

  $instagram_page = carbon_get_theme_option( 'crb_instagram_page' );
  $instagram_image = carbon_get_theme_option( 'crb_instagram_image' );

  $footer_contactlink = carbon_get_theme_option( 'crb_footer_contactlink' );

?>


<footer>

  <div class="block-footer-header">
    <?= wp_get_attachment_image( $footer_logo, 'custom_size_footer_logo', "", array("class" => "lazyload img-fluid block-footer-header-logo") ) ?>
    <!--<img class="block-footer-header-logo" src="https://via.placeholder.com/200" alt="">-->
  </div>

  <div class="block-footer-content">

    <div class="content-adresses">
      <h5><?= $adress_fund_title; ?></h5>
      <?php foreach ($adresses_fund as $line) { ?>
        <p class="content-adress-line"><?= $line['crb_adress_line']; ?></p>
        <p class="content-adress-line"><?= $line['crb_adress_cp_city']; ?></p>
      <?php } ?>
      <div class="space-between-adresses"></div>
      <h5><?= $adress_sas_title; ?></h5>
      <?php foreach ($adresses_sas as $line) { ?>
        <p class="content-adress-line"><?= $line['crb_adress_first_line']; ?></p>
        <p class="content-adress-line"><?= $line['crb_adress_second_line']; ?></p>
        <p class="content-adress-line"><?= $line['crb_adress_third_line']; ?></p>
      <?php } ?>
    </div>

    <div class="content-legal-terms">
      <h5><?= $legal_term_title; ?></h5>
      <?php foreach ($legal_terms as $line) { ?>
        <a class="content-legal-term-line" href="<?= $line['crb_legal_term_link']; ?>">
          <?= $line['crb_legal_term_name']; ?>
        </a>
        <br />
      <?php } ?>
    </div>

    <div class="content-information">
      <h5>Menu</h5>
      <nav class="footer-nav">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
        ?>
        <a class="contact-footer-link" href="<?= get_permalink( $footer_contactlink ) ?>">Contact</a>
      </nav>
      <!--<p class="content-information-text"><?= $information_text; ?></p>-->
    </div>

    <div class="content-social-links">
      <h5><?= $social_links_title; ?></h5>
      <ul>
        <li class="social-link-item">
          <a class="social-link" href="<?php echo $instagram_page ?>" target="_blank">
            <?= wp_get_attachment_image( $instagram_image, 'custom_size_footer_social_logo', "", array("class" => "lazyload img-fluid") ) ?>
          </a>
        </li>
        <li class="social-link-item">
          <a class="social-link" href="<?php echo $facebook_page ?>" target="_blank">
            <?= wp_get_attachment_image( $facebook_image, 'custom_size_footer_social_logo', "", array("class" => "lazyload img-fluid") ) ?>
          </a>
        </li>
        <li class="social-link-item">
          <a class="social-link" href="<?php echo $linkedin_page ?>" target="_blank">
            <?= wp_get_attachment_image( $linkedin_image, 'custom_size_footer_social_logo', "", array("class" => "lazyload img-fluid") ) ?>
          </a>
        </li>
      </ul>
    </div>
    <div class="after-content"></div>
  </div>
</footer>
