<div class="media-slider">
  <?php $recentPosts = new WP_Query(); $recentPosts->query('showposts=4'); ?>
  <?php $counter = 0; while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="news-<?= $counter; ?> news-child">
      <div class="cartouche">
        <h2 class="news-title"><?php the_title(); ?></h2>
        <p class="news-resume"><?= get_the_excerpt(); ?></p>
        <?php $counter++; ?>
      </div>
      <?= the_post_thumbnail( 'custom_size_medias_carrousel_image', array("class" => "lazyload img-fluid") ) ?>
      <?php /* wp_get_attachment_image( get_post_thumbnail_id(), 'custom_size_home_section_media_thumbnail', "", array("class" => "lazyload img-fluid") ) */ ?>
    </div>
  <?php  endwhile; wp_reset_postdata(); ?>
</div>

<div class="search-block-content">
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'gamearth'); ?>
    </div>
  <?php endif; ?>

  <?php get_search_form(); ?>

  <div class="medias-categories-list">
    <?php
      $args = array (
        'hide_empty' => 0,
        'orderby' => 'name',
        'order' => 'ASC'
      );
      $terms = get_terms('category', $args);
      $term_list .= '<a class="category-tag all-category" href="http://localhost/dev_env_gamearth/medias/">Tous les articles</a>';

      foreach ( $terms as $category ) {
        if (get_category($category->term_id)) {
          if( $category->slug == 'uncategorized-en' or $category->slug == 'non-classe' ){
            continue;
          } else {
            $term_list .= '<a class="category-tag" href="' . esc_url( get_term_link( $category ) ) .
            '">' . $category->name . '</a>';
          }
          
        }
      }
      echo $term_list;
    ?>
  </div>
</div>


<div class="medias-articles">
  <?php $counter = 0; while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <?= the_post_thumbnail( 'custom_size_single_media_banner', array("class" => "lazyload img-fluid") ) ?>
      <?= the_category(); ?>
      <p class="news-date"><?= get_the_date(); ?></p>
      <h2 class="news-title"><?php the_title(); ?></h2>
      <p class="news-resume"><?= wp_trim_words(get_the_excerpt(), 50, null); ?></p>
      <a class="news-link" href="<?php the_permalink() ?>" rel="bookmark">Lire l'article</a>
      <?php $counter++; ?>
    </article>
  <?php  endwhile; wp_reset_postdata(); ?>
</div>
