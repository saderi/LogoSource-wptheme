<div class="large-3 medium-3 end columns" data-equalizer-watch>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->
</article> <!-- end article -->
</div>