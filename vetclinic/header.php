<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desciption" content="<?php bloginfo('description'); ?>">
    <!--TYPSNITT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--IKON-->
    <script src="https://kit.fontawesome.com/94e39a2e70.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>

    <body>
        <!--Header-->
    <header class="header">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
        </div>
         <!--Nav-->
        <nav class="navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu'
        ));
        ?>
    </nav>
    <div class="phone-number">
        <i class="fa-solid fa-phone"></i>
        0142 - 661 980
    </div>

    <script>
        function toggleMenu() {
            var menu = document.querySelector('.navigation ul');
            menu.classList.toggle('menu-open');
        }
    </script>
</header>
</body>
