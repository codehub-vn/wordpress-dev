<?php
$theme_options = get_option('ju_opts');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="" href="">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand rippler" href="/"><?php bloginfo('name'); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'nav navbar-nav'
            ]);
            ?>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!empty($theme_options['twitter'])): ?>
                    <li><a href="https://twitter.com/<?= $theme_options['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?>
                <?php if (!empty($theme_options['facebook'])): ?>
                    <li><a href="https://facebook.com/<?= $theme_options['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                <?php endif; ?>
                <?php if (!empty($theme_options['youtube'])): ?>
                    <li><a href="https://youtube.com/<?= $theme_options['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>