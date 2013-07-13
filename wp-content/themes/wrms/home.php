<?php
/*
Template Name: Homepage      
*/

$exhibition = new WP_Query(array(
    'post_type'      => 'exhibition',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'posts_per_page' => 1
));

get_header();
?>

    <?php if ($exhibition->have_posts()): $exhibition->the_post(); ?>
    <section class="exhibition-pullout" itemscope itemtype="http://data-vocabulary.org/Event">

        <h1>Exhibition <?php the_title(); ?></h1>
        <div class="date">

    </section>
    <?php endif; ?>

    <section class="primary">

        <?php if (have_posts()): the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php
            the_content();
            ?>

        <?php endif; ?>

    </section>

<?php
get_footer();
?>
