<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo" style="height: 50px;">
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <?php

                $menu_name = 'primary-menu';
                $menu = get_menu_items_by_registered_slug($menu_name);

                // Check if menu items are retrieved
                if ($menu) {
                    echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
                    foreach ($menu as $menu_item) {
                        // Display each menu item
                        echo '<li class="nav-item active">';
                        echo '<a class="nav-link" href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No menu items found.</p>';
                }
                ?>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class=" my-2 my-sm-0 search-btn" type="submit">Search</button>
                </form>


            </div>
        </nav>

        <?php if (is_home() || is_front_page()): ?>

            <!-- Banner section -->
            <div class="banner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="Banner">
                <div class="banner-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <button class="button-banner">Get Started</button>
                </div>
            </div>
        <?php endif; ?>
    </header>