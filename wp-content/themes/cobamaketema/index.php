<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <header class="main-header">

            <!-- logo -->
            <div class="custom-logo">
                <a href="<?php echo bloginfo('url') ?>">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                    echo '<img src="' . esc_url($custom_logo_url) . '" alt="">';
                    ?>
                </a>
            </div>

            <!-- search -->
            <div class="search">
                <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <!-- <label> -->
                    <!-- <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span> -->
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search for ..', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
                    <!-- </label> -->
                    <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
                </form>
            </div>

            <nav class="main-menu">
                <?php wp_nav_menu(); ?>
            </nav>

        </header>

        <section class="banner"></section>

        <section class="content-holder">
            <article class="content"></article>
            <aside class="sidebar"></aside>
        </section>

        <footer class="main-footer">
            <aside class="footer-box"></aside>
            <aside class="footer-box"></aside>
            <aside class="footer-box"></aside>
            <aside class="footer-box"></aside>
        </footer>

        <div class="powered"></div>

    </div>
</body>

</html>