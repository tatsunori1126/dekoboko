<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="apple-mobile-web-app-title" content="" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"/>
    <?php wp_head(); ?>
</head>
<body ontouchstart="" <?php body_class(); ?>> <!-- ontouchstart="" スマホ2回タップしないとリンク先に飛ばない問題の対策 -->
    <?php wp_body_open(); ?>
    <div class="fixed-cv-wrapper">
        <a class="fixed-cv-link fixed-cv-link-orange" href=""><img class="fixed-cv-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/fixed-icon1.png" alt="説明会の参加">説明会の参加</a>
        <a class="fixed-cv-link fixed-cv-link-green" href=""><img class="fixed-cv-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/fixed-icon2.png" alt="資料請求する">資料請求する</a>
    </div>
    <header class="l-header p-header">
    <?php if (is_front_page() || is_home()) : ?>
        <div class="p-header__logo-link">
            <img class="p-header__logo" src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="Co-Learning park DEKOboko 明日が来るのが、ちょっと楽しみになる学習塾。">
        </div>
    <?php else : ?>
        <a class="p-header__logo-link p-header__logo-link-page" href="<?php echo esc_url( home_url('/')); ?>">
            <img class="p-header__logo" src="<?php echo get_template_directory_uri(); ?>/images/common/logo-ver2.png" alt="Co-Learning park DEKOboko">
        </a>
    <?php endif; ?>
        <div class="p-header__nav-container">
            <nav class="p-header__nav">
                <ul class="p-header__nav-list-wrapper">
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo home_url('about'); ?>">デコボコとは</a>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo home_url('course'); ?>">コース</a>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo home_url('results'); ?>">実績</a>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo home_url('lecturer'); ?>">講師</a>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo home_url('facility'); ?>">施設</a>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo home_url('reservation'); ?>">入塾案内</a>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo get_post_type_archive_link('news'); ?>">NEWS</a>
                    </li>
                </ul>
            </nav>
            <div class="p-header__hamburger-container">
                <div id="js-hamburger" class="p-header__hamburger">
                    <span class="p-header__hamburger-bar"></span>
                    <span class="p-header__hamburger-bar"></span>
                    <span class="p-header__hamburger-bar"></span>
                    <span class="p-header__hamburger-text">MENU</span>
                </div>
                <div class="p-header__hamburger-nav-wrapper">
                    <div class="p-header__hamburger-bubble">
                        <img class="p-header__hamburger-bubble-img" src="./images/footer/bubble-sp.png" alt="">
                    </div>
                    <div class="p-header__hamburger-logo">
                        <img class="p-header__hamburger-logo-img" src="./images/common/logo.png" alt="株式会社エアセーブ">
                    </div>
                    <nav class="p-header__hamburger-nav">
                        <ul class="p-header__hamburger-nav-list">
                            <li class="p-header__hamburger-nav-item"><a href="#service" data-scroll-link><img class="hamburger-nav-icon" src="./images/footer/nav-icon.png" alt="">サービス</a></li>
                            <li class="p-header__hamburger-nav-item"><a href="#product" data-scroll-link><img class="hamburger-nav-icon" src="./images/footer/nav-icon.png" alt="">製品紹介</a></li>
                            <li class="p-header__hamburger-nav-item"><a href="#company" data-scroll-link><img class="hamburger-nav-icon" src="./images/footer/nav-icon.png" alt="">会社案内</a></li>
                            <li class="p-header__hamburger-nav-item"><a href="#access" data-scroll-link><img class="hamburger-nav-icon" src="./images/footer/nav-icon.png" alt="">アクセス</a></li>
                            <li class="p-header__hamburger-nav-item"><a class="js-mail-link" href="mailto:info@airsave.co.jp"><img class="hamburger-nav-icon" src="./images/footer/nav-icon.png" alt="">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="p-header__hamburger-tel-wrapper">
                        <a class="p-header__hamburger-tel" href="tel:086-230-6470"><i class="fa-solid fa-phone"></i>086-230-6470</a>
                        <div class="p-header__hamburger-reception">受付 / 9:00-17:30</div>
                    </div>
                </div>
            </div>
        </div>
    </header>