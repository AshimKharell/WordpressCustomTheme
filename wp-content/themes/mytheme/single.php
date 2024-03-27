<?php
get_header();
?>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <div class="post-thumbnail-single">
        <?php the_post_thumbnail(); ?>
    </div>
    
    <p class="date">
        <?php echo get_the_date(); ?>   
        <?php the_author(); ?>
    </p>

    <div class="content">
        <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>
</div>

<?php
get_footer();
?>
