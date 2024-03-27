<?php
// Template Name: home
get_header();
?>

    
<main id="content">
    <section id="hero">
        <div class="container">
            <h2>Welcome to School Website</h2>
            <p>Your gateway to educational excellence</p>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique neque vitae diam tempor, vel
                dapibus ex pulvinar.</p>
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" alt="About Us">
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique neque vitae diam tempor, vel
                dapibus ex pulvinar.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: info@example.com</p>
            <p>Phone: 123-456-7890</p>
        </div>
    </section>
</main>

<?php
get_footer();
?>