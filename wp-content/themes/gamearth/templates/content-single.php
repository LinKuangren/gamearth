<!-- Page de template pour les single media -->
<?php use Wordpress\Starter\Assets; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?= the_post_thumbnail( 'custom_size_single_media_banner', array("class" => "lazyload img-fluid") ) ?>
      <?= the_category(); ?>
      <p class="news-date"><?= get_the_date(); ?></p>
      <h2 class="news-title"><?php the_title(); ?></h2>
      <div class="news-read-article">
        <p>Lire l'article</p>
        <img src="<?= Assets\asset_path('images/arrow-down.png'); ?>" alt="Fleche vers le bas">    
      </div>
    </header>
    <div class="news-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'gamearth'), 'after' => '</p></nav>']); ?>
    </footer>
  </article>
<?php endwhile; ?>
