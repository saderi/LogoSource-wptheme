    <?php get_header(); ?>
            
    <div id="content">
    
        <div id="inner-content" class="row">
    
            <main id="main" class="large-12 medium-12 columns" role="main">
            
                        <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             
                        <!-- To see additional archive styles, visit the /parts directory -->
                            <?php get_template_part( 'parts/loop', 'archive' ); ?>

                    <?php endwhile; ?>  

                        </div>
                        <?php joints_page_navi(); ?>
                        
                    <?php else : ?>
                                                
                        <?php get_template_part( 'parts/content', 'missing' ); ?>
                        
                <?php endif; ?>
                                                                                                
            </main> <!-- end #main -->
            
            <?php //get_sidebar(); ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>