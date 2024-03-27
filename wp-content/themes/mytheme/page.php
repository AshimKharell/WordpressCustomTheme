<?php
get_header();
?>

<section id="about">
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
        <div class="about-content">
            <?php 
            the_post_thumbnail(array(200,300) );
        ?>

        
        <?php 
            the_content();
        ?>
    </div>
</section>


<?php
get_footer();
?>