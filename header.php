<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="bg-dark">
    <header>
        <span class="humberger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </span>
        <nav class="menu">
            <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/Logo.png" alt="JetCode logo" class="logo">
            <ul>
                <a href="index.html">
                    <li>صفحه نخست</li>
                </a>
                <a href="blog.html">
                    <li>وبلاگ</li>
                </a>
                <a href="podcasts.html">
                    <li>پادکست</li>
                </a>
                <a href="#">
                    <li>دوره ها</li>
                </a>
            </ul>
        </nav>
        <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/Mobile_Menu_footer.svg" class="menu_footer">
    </header>