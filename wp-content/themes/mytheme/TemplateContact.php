<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>


<div class="container">
    <div class="header-container" >
            <h1>
                <?php the_title() ?>
            </h1>
            <h2><a href="<?php echo site_url(); ?>"><i>Home/</i></a>
                <?php the_title() ?>
            </h2>
    </div>

    <!-- Map Image -->
    <div class="map-container">
        <img id="map" src="<?php echo get_template_directory_uri(); ?>/images/map.jpg" alt="Map Image">
    </div>

    <!-- Contact Information -->
    <div class="contact-info">
        <h2>Feel free to contact us using the information below:</h2>
        <ul>
            <li><strong>Email:</strong> example@example.com</li>
            <li><strong>Phone:</strong> +1234567890</li>
            <li><strong>Address:</strong> 123 Street, City, Country</li>
        </ul>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <h2>Send us a message</h2>
        <form action="submit_contact_form.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>
