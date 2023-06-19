<form class="media-search-form" action="<?= get_page_uri(); ?>" method="get">
    <input class="search-form" type="text" name="s" value="<?php the_search_query(); ?>" />
    <button class="btn btn-gamearth">Rechercher</button>
</form>