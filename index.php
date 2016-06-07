<?php

get_header();

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish'
);
$articles = new WP_Query($args);

?>

<?php while($articles->have_posts()) : $articles->the_post(); ?>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium') ?></a>
<?php endwhile; ?>

<?php get_footer(); ?>