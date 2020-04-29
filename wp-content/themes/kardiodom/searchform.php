<form class="search__box" name="search" method="get" role="search" action="<?php echo home_url( '/' ) ?>" >
    <span class="search__icon"><i class="fa fa-search"></i></span>
    <input type="text"  class = "search__input" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск..." />
</form>