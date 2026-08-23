<?php get_header();?>
<main>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile;
else:
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif;
?></main>
<?php get_sidebar();?>
    <?php get_footer();?>