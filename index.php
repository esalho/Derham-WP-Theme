<?php get_header();?>
<div class="content-wrap">
<main>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>

            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>

        <?php endwhile; ?>

        <?php
        if (get_next_posts_link()) {
            next_posts_link();
        }
        ?>
        <?php
        if (get_previous_posts_link()) {
            previous_posts_link();
        }
        ?>

    <?php else: ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
    </main>
    <?php get_sidebar();?>
</div>
    <?php get_footer();?>