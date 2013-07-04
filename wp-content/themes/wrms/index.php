<?php
get_header();
?>

    <section class="primary">

        <h1><?php the_title(); ?></h1>
        <?php
        get_the_content();
        var_dump($GLOBALS['post']);
        ?>

    </section>

<?php
get_footer();
?>
