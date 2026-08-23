<!DOCTYPE html>
<html>

<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php add_action('wp_enqueue_scripts', 'themeStyles');?>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <?php if (is_front_page() || is_home()) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <h1><?php bloginfo('name'); ?></h1>
            </a>
    <h2><?php bloginfo('description'); ?></h2>
    <?php else: ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="page-title"><?php bloginfo('name'); ?></div>
        </a>
    <div class="page-description"><?php bloginfo('description'); ?></div>
    <?php endif;?>
    </header>
    <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
