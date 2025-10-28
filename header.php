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
                    <li class="p-header__nav-list has-submenu">
                        <a class="p-header__nav-link" href="<?php echo home_url('about'); ?>">デコボコとは</a>
                        <ul class="p-header__submenu">
                            <li><a href="<?php echo home_url(''); ?>">コンセプト</a></li>
                            <li><a href="<?php echo home_url(''); ?>">教育方針</a></li>
                            <li><a href="<?php echo home_url(''); ?>">会社概要</a></li>
                            <li><a href="<?php echo home_url(''); ?>">アクセス案内</a></li>
                        </ul>
                    </li>
                    <li class="p-header__nav-list has-submenu">
                        <div class="p-header__nav-link">コース</div>
                        <ul class="p-header__submenu">
                            <li><a href="<?php echo home_url('course/shougakusei'); ?>">小学生コース</a></li>
                            <li><a href="<?php echo home_url('course/chuukousei'); ?>">中高生コース</a></li>
                            <li><a href="<?php echo home_url('course/daigakusei'); ?>">大学生・社会人コース</a></li>
                            <li><a href="<?php echo home_url('course/kyoiku-hogosha'); ?>">教育関係者・保護者コース</a></li>
                        </ul>
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
                    <li class="p-header__nav-list has-submenu">
                        <a class="p-header__nav-link" href="<?php echo home_url('reservation'); ?>">入塾案内</a>
                        <ul class="p-header__submenu">
                            <li><a href="<?php echo home_url(''); ?>">入塾・受講の流れ</a></li>
                            <li><a href="<?php echo home_url(''); ?>">よくあるご質問</a></li>
                            <li><a href="<?php echo home_url(''); ?>">ご説明について</a></li>
                            <li><a href="<?php echo home_url(''); ?>">個別相談について</a></li>
                        </ul>
                    </li>
                    <li class="p-header__nav-list">
                        <a class="p-header__nav-link" href="<?php echo get_post_type_archive_link('news'); ?>">NEWS</a>
                    </li>
                </ul>
            </nav>
            <div class="p-header__hamburger-container">
                <div id="js-hamburger" class="p-header__hamburger">
                    <span class="p-header__hamburger-bar bar-top"></span>
                    <span class="p-header__hamburger-bar bar-center"></span>
                    <span class="p-header__hamburger-bar bar-bottom"></span>
                    <span class="p-header__hamburger-text">MENU</span>
                </div>
                <div class="p-header__hamburger-nav-wrapper">
                    <div class="p-header__hamburger-nav-wrapper-inner">
                        <div class="p-header__hamburger-logo">
                            <img class="p-header__hamburger-logo-img" src="<?php echo get_template_directory_uri(); ?>/images/common/logo-ver1.png" alt="Co-Learning park DEKOboko">
                        </div>
                        <div class="p-header__hamburger-nav-container">
                            <!-- ▼ デコボコについて -->
                            <div class="p-header__hamburger-nav-list-wrapper">
                                <div class="p-header__hamburger-nav-title">デコボコについて</div>
                                <div class="p-header__hamburger-nav-block">
                                    <ul class="p-header__hamburger-nav-list">
                                        <li><a href="#">デコボコとは</a></li>
                                        <li><a href="#">コンセプト</a></li>
                                        <li><a href="#">教育方針</a></li>
                                        <li><a href="#">会社概要</a></li>
                                    </ul>
                                    <ul class="p-header__hamburger-nav-list">
                                        <li><a href="#">アクセス</a></li>
                                        <li><a href="#">合格実績</a></li>
                                        <li><a href="#">講師紹介</a></li>
                                        <li><a href="#">教室紹介</a></li>
                                    </ul>
                                    <ul class="p-header__hamburger-nav-list">
                                        <li><a href="#">NEWS</a></li>
                                        <li><a href="#">お問い合わせ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-header__hamburger-nav-list-column-wrapper">
                                <!-- ▼ コース案内 -->
                                <div class="p-header__hamburger-nav-list-wrapper">
                                    <div class="p-header__hamburger-nav-title">コース案内</div>
                                    <ul class="p-header__hamburger-nav-list">
                                        <li><a href="#">小学生コース</a></li>
                                        <li><a href="#">中高生コース</a></li>
                                        <li><a href="#">大学生・社会人コース</a></li>
                                        <li><a href="#">教育関係者・保護者コース</a></li>
                                    </ul>
                                </div>
                                <!-- ▼ 料金案内 -->
                                <div class="p-header__hamburger-nav-list-wrapper">
                                    <div class="p-header__hamburger-nav-title">料金案内</div>
                                    <ul class="p-header__hamburger-nav-list">
                                        <li><a href="#">小学生</a></li>
                                        <li><a href="#">中高生</a></li>
                                        <li><a href="#">大学生・社会人</a></li>
                                        <li><a href="#">教育関係者・保護者</a></li>
                                    </ul>
                                </div>
                                <!-- ▼ 入塾のご案内 -->
                                <div class="p-header__hamburger-nav-list-wrapper">
                                    <div class="p-header__hamburger-nav-title">入塾のご案内</div>
                                    <ul class="p-header__hamburger-nav-list">
                                        <li><a href="#">入塾・受講の流れ</a></li>
                                        <li><a href="#">よくあるご質問</a></li>
                                        <li><a href="#">説明会予約</a></li>
                                        <li><a href="#">個別相談予約</a></li>
                                        <li><a href="#">資料請求</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="p-header__hamburger-btn-container">
                            <div class="p-header__hamburger-btn-wrapper">
                                <div class="p-header__hamburger-btn-title">ご予約はこちら</div>
                                <div class="p-header__hamburger-btn-box">
                                    <div class="p-header__hamburger-btn-block">
                                        <a class="p-header__hamburger-btn p-header__hamburger-btn-green" href="">説明会のご予約<img class="p-header__hamburger-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-white.png" alt="矢印"></a>
                                    </div>
                                    <div class="p-header__hamburger-btn-block">
                                        <a class="p-header__hamburger-btn p-header__hamburger-btn-green" href="">個別面談のご予約<img class="p-header__hamburger-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-white.png" alt="矢印"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-header__hamburger-btn-wrapper">
                                <div class="p-header__hamburger-btn-title">お問い合わせ</div>
                                <div class="p-header__hamburger-btn-box">
                                    <div class="p-header__hamburger-btn-block">
                                        <a class="p-header__hamburger-btn p-header__hamburger-btn-white" href="">メールフォームへ<img class="p-header__hamburger-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right.png" alt="矢印"></a>
                                    </div>
                                    <div class="p-header__hamburger-btn-block">
                                        <a class="p-header__hamburger-btn p-header__hamburger-btn-white" href="">公式LINEへ<img class="p-header__hamburger-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right.png" alt="矢印"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-header__hamburger-sns-container">
                            <div class="p-header__hamburger-sns-wrapper">
                                <i class="fa-solid fa-location-dot"></i>
                                <a class="p-header__hamburger-sns-btn" href="">GoogleMap</a>
                            </div>
                            <div class="p-header__hamburger-sns-wrapper">
                                <i class="fa-brands fa-square-instagram"></i>
                                <a class="p-header__hamburger-sns-btn" href="">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>