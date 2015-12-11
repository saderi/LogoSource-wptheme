<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

<div class="input-group">
  <input type="search" class="input-group-field search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointstheme' ) ?>" />
  <div class="input-group-button">
    <input type="submit" class="button" value="<?php echo esc_attr_x( 'Go', 'jointstheme' ) ?>">
  </div>
</div>


</form>