<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       <?php bloginfo( 'name' );?> | <?php wp_title( ); ?>  <?php if (is_front_page( )) {
            echo "| "; bloginfo( 'description' ); } ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.css">
    <?php wp_head() ?>
</head>

<body>
 
    <header>
        <div class="container">

            <?php
            $logo = get_header_image();
            ?>

        

<a class="logo" href="<?php echo site_url() ?>"> <img src="<?php echo $logo; ?>" alt="School Logo"></a>

<nav>
    <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'nav'
                        )
                        )
                        ?>
            </nav>
        </div>
    </header>