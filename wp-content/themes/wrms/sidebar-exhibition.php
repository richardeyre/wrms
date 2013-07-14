<?php

$old_post = $post;

$exhibition = new WP_Query(array(
    'post_type'      => 'exhibition',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'posts_per_page' => 1
));

if ($exhibition->have_posts()): $exhibition->the_post();
?>

<section class="exhibition-pullout" itemscope itemtype="http://data-vocabulary.org/Event">
    <a href="<?php the_permalink() ?>" itemprop="url">

        <h1 itemprop="summary">Exhibition <?php the_title(); ?></h1>

        <span itemprop="location" itemscope itemtype="http://data-vocabulary.org/Organization">
            <span itemprop="name">Thornes Park Athletics Stadium</span>, 
            <span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                <span itemprop="street-address">Horbury Road</span>, 
                <span itemprop="locality">Wakefield</span>, 
                <span itemprop="postal-code">WF2 8TY</span>
            </span>
            <span itemprop="geo" itemscope itemtype="http://data-vocabulary.org/Geo">
                <meta itemprop="latitude" content="53.676438" />
                <meta itemprop="longitude" content="-1.514311" />
            </span>
        </span>

        <ul>
            <li>
                <time itemprop="startDate" datetime="2013-11-29T17:30-00:00"><span>Friday Nov 29th,</span> 5:30PM</time>&mdash;
                <time itemprop="endDate" datetime="2013-11-29T21:00-00:00">9:00PM</time>
            </li>
            <li>
                <time itemprop="startDate" datetime="2013-11-30T10:00-00:00"><span>Saturday Nov 30th,</span> 10:00AM</time>&mdash;
                <time itemprop="endDate" datetime="2013-11-29T18:00-00:00">6:00PM</time>
            </li>
            <li>
                <time itemprop="startDate" datetime="2013-12-01T10:00-00:00"><span>Sunday Dec 1st,</span> 10:00AM</time>&mdash;
                <time itemprop="endDate" datetime="2013-12-01T17:00-00:00">5:00PM</time>
            </li>
        </ul>

    </a>

</section>

<?php 
endif; 
$post = $old_post;
?>