<?php
// Template Name: Gallery
get_header();
?>

<div class="container">
        <div class="header-container" >
            <h1>
                <?php the_title() ?>
            </h1>
            <h2><a href="<?php echo site_url(); ?>"><i>Home/</i></a>
                <?php the_title() ?>
            </h2>
        </div>
    </div>


    <?php the_excerpt( ); ?>




<?php
get_footer();
?>