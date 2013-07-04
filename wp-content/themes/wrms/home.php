<?php
/*
Template Name: Homepage      
*/
get_header();
?>

    <section class="exhibition-pullout">

        <h1>Exhibition</h1>

    </section>

    <section class="primary">

        <?php if (have_posts()): the_post(); ?>

            <?php
            the_content();
            ?>

        <?php endif; ?>

    </section>

<?php
get_footer();
?>
