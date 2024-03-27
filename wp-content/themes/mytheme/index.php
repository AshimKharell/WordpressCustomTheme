<?php get_header(); ?>

<div class="container-main">
    <div class="container-left">
        <?php get_sidebar(); ?>
    </div>
    <div class="container-right">   
        <div class="col-md-8">
            <h1>Posts:</h1>
            <div class="row">
                <?php while (have_posts()): the_post(); ?>
                    <div class="col-md-4">
                        <article class="post">
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="date">
                                    <?php echo get_the_date(); ?>
                                </p>
                                <div class="post-meta">
                                    <span class="post-date">
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>"><input type="button" value="ReadMore"></a>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<div class="container-main">
<div class="container-left">
    <h1>Taxonomy:</h1>
        <?php
        // Corrected 'taxonomy' and ensure 'hide_empty' is set to false to get all terms
        $terms = get_terms(['taxonomy' => 'feature-types', 'hide_empty' => false]);
        if (!empty($terms) && !is_wp_error($terms)) {
            echo '<ul>';
            foreach ($terms as $term) {
                echo '<li>' . esc_html($term->name) . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
        <div class="container-right">
        <div class="col-md-8">
            <h1>Services:</h1>
            <div class="row-2">
                <?php 
                    $wpnew = array(
                        'post_type' => 'Features',
                        'post_status' => 'publish'
                    );
                    $serviceQuery = new WP_Query($wpnew);
                    while ($serviceQuery->have_posts()) : $serviceQuery->the_post();
                ?>
                    <div class="col-md-4">
                        <article class="post">
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="date">
                                    <?php echo get_the_date(); ?>
                                </p>
                                <div class="post-meta">
                                    <span class="post-date">
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>"><input type="button" value="ReadMore"></a>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="pagination">
                <?php echo wp_pagenavi(); ?>
            </div>
        </div>
        </div>
    </div>


<?php get_footer(); ?>
