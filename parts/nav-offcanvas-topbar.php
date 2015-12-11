<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
		<div class="top-bar-left float-left">
			<ul class="menu">
				<li class="menu-text logo"><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>

		<div class="top-bar-left">
			<?php joints_top_nav(); ?>	
		</div>

		<div class="top-bar-right">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

			  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointstheme' ) ?>" />

			</form>
		</div>

</div>