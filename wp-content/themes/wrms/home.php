<?php
/*
Template Name: Homepage      
*/

get_header();
?>

    <section class="primary">

        <?php if (have_posts()): the_post(); ?>

            <?php the_post_thumbnail(); ?>

            <h1><?php the_title(); ?></h1>

            <?php
            the_content();
            ?>

        <?php endif; ?>

    </section>

<?php
get_footer();
?>
