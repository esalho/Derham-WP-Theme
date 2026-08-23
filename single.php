<?php get_header();?>
<main>
<article>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    if ( has_post_thumbnail() ) {
    the_post_thumbnail('large');
}
        the_title( '<h1>', '</h1>' ); ?>
        <div class="article-info">
            <p>
        <?php the_author();?> | 
        <?php the_date();?>
        </p>
        </div>
        <?
        the_content();
    endwhile;
else:
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif;
?></article>
</main>
    <?php get_sidebar();?>
    <?php get_footer();?>