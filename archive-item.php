<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kawashima
 */

get_header();
?>

<main id="primary" class="site-main col-md-8">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <h1>川島shop</h1>
        </header><!-- .page-header -->
        <ul>


            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();

                /*
             * Include the Post-Type-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
             */
            ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php


            endwhile;
            ?>
        </ul>
    <?php

        the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
