<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<div class="row">
		<div class="large-12 medium-12 columns">
			<header class="article-header">	
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				<?php get_template_part( 'parts/content', 'byline' ); ?>
		    </header> <!-- end article header -->
	    </div>
		<div class="large-8 medium-7 columns">
			<section class="entry-content" itemprop="articleBody">
				<?php the_post_thumbnail('full'); ?>
				<?php the_content(); ?>
			</section> <!-- end article section -->
									
			<?php comments_template(); ?>	

			<?php $img_id = get_post_thumbnail_id($post->ID); ?>
			<?php $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
			<?php $alt_text = get_post(get_post_thumbnail_id())->post_title; ?>
		</div>
		<div class="large-4 medium-5 columns download-header">

			<h2>DownLoad</h2>
			<ul class="download-list panel">
				<li><a href="/download/<?php foreach(get_the_category() as $category) {echo $category->slug;} ?>/AI/<?php echo $alt_text; ?>.ai"  class="ai " title="File ">File Ai   <span class="hide-for-medium-only">(Adobe Illustrator)</span></a></li>
				<li><a href="/download/<?php foreach(get_the_category() as $category) {echo $category->slug;} ?>/CDR/<?php echo $alt_text; ?>.cdr" class="cdr" title="File ">File CDR <span class="hide-for-medium-only">(Corel Draw)</span></a></li>
				<li><a href="/download/<?php foreach(get_the_category() as $category) {echo $category->slug;} ?>/SVG/<?php echo $alt_text; ?>.svg" class="svg" title="File ">File SVG <span class="hide-for-medium-only">(Scalable Vector Graphics)</span></a></li>
				<li><a href="/download/<?php foreach(get_the_category() as $category) {echo $category->slug;} ?>/PNG/<?php echo $alt_text; ?>.png" class="png" title="File ">File PNG <span class="hide-for-medium-only">(Portable Network Graphics)</span></a></li>
				<li><a href="/download/<?php foreach(get_the_category() as $category) {echo $category->slug;} ?>/JPG/<?php echo $alt_text; ?>.jpg" class="jpg" title="File ">File JPG <span class="hide-for-medium-only"></span></a></li>
			</ul>
			<br>
			Tags: <?php the_tags('' . __(' ', 'jointstheme') . '', ' ', ''); ?>		
		</div>
	</div>
																			
</article> <!-- end article -->