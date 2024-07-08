<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <?php if (is_home() || is_front_page()): ?>
                    <section id="about" class="py-5">
                        <div class="container container-about">
                            <div class="row">
                                <div class="col col-lg-6 col-xl-6">
                                    <img class="image-about"
                                        src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="Banner">
                                </div>

                                <div class="col text-left about-container">
                                    <!-- About -->
                                    <?php
                                    $category_id = 2;

                                    $args = array(
                                        'cat' => $category_id,
                                        'posts_per_page' => 10,
                                    );

                                    // The Query
                                    $query = new WP_Query($args);

                                    // The Loop
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            echo '<article class="about-box">';
                                            echo '<p class="title-about">' . get_the_title() . '</p>';
                                            echo '<p class="text-about">' . get_the_content(null, true) . '</p>';
                                            echo '<button class="button-read-about">Read More</button>';
                                            echo ' </article>';
                                        }
                                    } else {
                                        echo '<p>No posts found in this category.</p>';
                                    }

                                    wp_reset_postdata();
                                    ?>
        
                                </div>
                            </div>
                        </div>
                    </section>
                <?php else: ?>

                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endif; ?>

                <!-- Contact Section -->
                <section id="contact" class="py-3">
                    <div class="container container-contact">
                        <div class="row">
                            <div class="content-contact col">
                                <?php include 'form-contact.php'; ?>
                            </div>
                            <div class="col">
                                <article>
                                    <img class="image-contact"
                                        src="<?php echo get_template_directory_uri(); ?>/images/img-contact.jpg"
                                        alt="Banner">
                                </article>

                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <!-- Sidebar Section -->
            <div class="col-md-3 my-5 container-sidebar">
                <?php include 'sidebar.php'; ?>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); // Include the footer template ?>