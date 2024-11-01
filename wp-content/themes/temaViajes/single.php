<?php get_header(); ?>
<section id="main">
    <article id="single">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="post">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </article> <!-- Fin de single -->
</section> <!-- Fin de main -->
<?php if (should_display_sidebar()) { get_sidebar(); } ?>
<?php get_footer(); ?>
