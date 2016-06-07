<?php
get_header();
the_post();
?>

<?php the_post_thumbnail('medium') ?>

<h1><?php the_title() ?></h1>

<div class="content">
    <?php the_content() ?>
</div>

<?php get_footer(); ?>