<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-top__mv">
        <div class="p-top__mv__bg-circle-wrapper">
            <picture class="p-top__mv__bg-circle">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv-bg-circle.png" media="(min-width: 800px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-bg-circle-sp.png" alt="">
            </picture>
        </div>
        <div class="c-circle__page-right-img-wrapper">
            <picture class="c-circle__page-right-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" media="(min-width: 800px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" alt="">
            </picture>
        </div>
        <div class="p-top__mv__container">
            <div class="p-top__mv-inner">
                <div class="p-top__mv__box">
                    <div class="mv-scroll">
                        <div class="mv-scroll__circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-scroll-text.png" alt="scroll text" class="mv-scroll__text">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-scroll-arrow.png" alt="scroll arrow" class="mv-scroll__arrow">
                        </div>
                    </div>
                    <div class="p-top__mv__img-wrapper">
                        <img class="p-top__mv-img" src="<?php echo get_template_directory_uri(); ?>/images/top/mv.png" alt="">
                    </div>
                    <div class="p-top__mv__main-title-wrapper">
                        <h1 class="p-top__mv__main-title-box first-fadein">
                            <span class="p-top__mv__main-title">学びも、</span>
                            <span class="p-top__mv__main-title">関わりも、</span>
                            <span class="p-top__mv__main-title">ここで育つ。</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- news -->
    <section class="p-top__news">
        <div class="c-inner">
            <div class="p-top__news-section-title-category-container">
                <div class="c-section__title-wrapper fadeUp">
                    <span class="c-section__title-en">News</span>
                    <h2 class="c-section__title-ja">新着情報</h2>
                </div>
                <ul class="p-top__news-category-container fadeUp">
                    <!-- すべて（アーカイブページへのリンク） -->
                    <li>
                        <a class="p-news__category-link p-news__category-link-all<?php if (is_post_type_archive('news')) echo ' active'; ?>" href="<?php echo get_post_type_archive_link('news'); ?>">
                            ALL
                        </a>
                    </li>
                    <?php
                    // voice_categoryのターム（カテゴリ）を取得
                    $categories = get_terms('news_category');
                    // カテゴリをループで表示
                    if (!empty($categories) && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            // 現在のタームかどうかをチェック
                            $active_class = '';
                            if (is_tax('news_category', $category->slug)) {
                                $active_class = ' active'; // 現在のタームに「active」クラスを追加
                            }

                            echo '<li><a class="p-news__category-link' . $active_class . '" href="' . get_term_link($category) . '">' . esc_html($category->name) . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="p-top__news-contents-container fadeUp">
                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 4,
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args);
                ?>
                <?php
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <a class="p-top__news-contents-wrapper" href="<?php the_permalink(); ?>">
                        <div class="p-top__news-contents-img-wrapper">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('news-thumb', array('class' => 'p-top__news-contents-img')); ?>
                            <?php else : ?>
                                <?php
                                // 🔹 NoImage選択メタデータを取得
                                $selected_noimage = get_post_meta(get_the_ID(), '_noimage_select', true);
                                if (empty($selected_noimage)) {
                                    $selected_noimage = 'noimage1'; // 初期値は noimage1.png
                                }
                                $noimage_path = get_template_directory_uri() . '/images/noimage/' . $selected_noimage . '.png';
                                ?>
                                <img src="<?php echo esc_url($noimage_path); ?>" alt="<?php the_title_attribute(); ?>" class="p-top__news-contents-img no-image" width="436" height="326" />
                            <?php endif; ?>
                        </div>

                        <div class="p-top__news-contents-box">
                            <div class="p-top__news-contents-category-box">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'news_category');
                                if ($terms && !is_wp_error($terms)) {
                                    echo '<ul class="p-top__news-item-categories">';
                                    foreach ($terms as $term) {
                                        echo '<li><span class="p-top__news-contents-category">' . esc_html($term->name) . '</span></li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <time class="p-top__news-contents-date"><?php the_time('Y.n.j'); ?></time>
                            </div>
                            <h2 class="p-top__news-contents-title"><?php the_title(); ?></h2>
                        </div>
                    </a>
                <?php
                endwhile;
                else :
                    echo '<p class="none-post-text">該当する記事がありません。</p>';
                endif;
                ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="c-btn__wrapper p-top__news-more-btn-wrapper fadeUp">
                <a class="c-btn p-top__news-more-btn" href="<?php echo get_post_type_archive_link('news'); ?>">記事一覧へ<span class="c-btn__circle-bg p-top__news-more-btn-circle-bg"><img class="c-btn__circle-arrow p-top__news-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
            </div>
        </div>
    </section>

    <!-- message -->
    <section class="p-top__message">
        <div class="p-top__message-bg"></div> <!-- 背景画像・テクスチャ -->
        <div class="p-top__message-column-wrapper">
            <div class="p-top__message-images-left-wrapper">
                <picture class="p-top__message-image p-top__message-image-left01 fadeUp">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img01.png" media="(min-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img04.png" alt="">
                </picture>
                <picture class="p-top__message-image p-top__message-image-left02 fadeUp">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img02.png" media="(min-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img03.png" alt="">
                </picture>
            </div>
            <div class="p-top__message-text-wrapper">
                <p class="p-top__message-text p-top__message-text01 fadeUp">ここは、学習習慣や思考力、<br class="c-sp-hidden">コミュニケーション力を育む<br class="c-sp-hidden">“自分を育てる学びの場”。</p>
                <p class="p-top__message-text p-top__message-text02 fadeUp">Co-learning park DEKObokoは、<br class="c-sp-hidden">点数や偏差値ではなく、<br class="c-sp-hidden">「その人らしさ」を大切にする学習塾です。</p>
                <p class="p-top__message-text p-top__message-text03 fadeUp">不登校や学校に行けない時期があっても、<br class="c-sp-hidden">安心して学びを続けられる場所でありたい。</p>
                <p class="p-top__message-text p-top__message-text04 fadeUp">ここで育むのは、未来へつながる力。<br class="c-sp-hidden">さあ、自分らしい歩みをここからはじめよう。</p>
            </div>
            <div class="p-top__message-title-container">
                <div class="p-top__message-title-wrapper fadeUp">
                    <h2 class="p-top__message-title-box">
                        <span class="p-top__message-title p-top__message-title01">明日がちょっと</span>
                        <span class="p-top__message-title p-top__message-title02">楽しみになる</span>
                        <span class="p-top__message-title p-top__message-title03">学習塾。</span>
                    </h2>
                    <span class="p-top__message-title-en">Message</span>
                </div>
                <div class="p-top__message-images-right-wrapper">
                    <picture class="p-top__message-image p-top__message-image-right01 fadeUp">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img03.png" media="(min-width: 1000px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img01.png" alt="">
                    </picture>
                    <picture class="p-top__message-image p-top__message-image-right02 fadeUp">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img04.png" media="(min-width: 1000px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img02.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="p-top__about">
        <!-- DEKObokoイラスト -->
        <div class="p-top__message-dekoboko-main-img-wrapper fadeUp">
            <img class="p-top__message-dekoboko-main-img" src="<?php echo get_template_directory_uri(); ?>/images/top/main-dekoboko-img.png" alt="">
        </div>
        <div class="p-top__about-bg"></div>
        <div class="p-top__about-container">
            <h2 class="p-top__about-title fadeUp">その想い、<br class="c-pc-hidden">デコボコでカタチに。</h2>
            <div class="p-top__about-contents-wrapper">
                <div class="p-top__about-wrapper fadeUp">
                    <img class="p-top__about-number p-top__about-number01" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number01.png" alt="01">
                    <h3 class="p-top__about-item-title">安心して学べる<br>第3の居場所がほしい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img01" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img01.png" alt="">
                    </div>
                </div>
                <div class="p-top__about-wrapper fadeUp">
                    <img class="p-top__about-number p-top__about-number02" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number02.png" alt="02">
                    <h3 class="p-top__about-item-title">がんばらなくても<br>続けられる学びがしたい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img02" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img02.png" alt="">
                    </div>
                </div>
                <div class="p-top__about-wrapper fadeUp">
                    <img class="p-top__about-number p-top__about-number03" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number03.png" alt="03">
                    <h3 class="p-top__about-item-title">仲間と出会い、<br>自分の強みを見つけたい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img03" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img03.png" alt="">
                    </div>
                </div>
                <div class="p-top__about-wrapper fadeUp">
                    <img class="p-top__about-number p-top__about-number04" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number04.png" alt="04">
                    <h3 class="p-top__about-item-title">夢を叶える<br>力をつけたい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img04" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img04.png" alt="">
                    </div>
                </div>
            </div>
            <div class="c-btn__wrapper p-top__about-more-btn-wrapper fadeUp">
                <a class="c-btn p-top__about-more-btn" href="<?php echo esc_url( home_url( '/about' ) ); ?>">デコボコをもっと知る<span class="c-btn__circle-bg p-top__about-more-btn-circle-bg"><img class="c-btn__circle-arrow p-top__about-btn-circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
            </div>
        </div>
    </section>

    <!-- voice -->
    <section class="p-top__voice">
        <h2 class="p-top__voice-title fadeUp">生徒さん・保護者さまの声</h2>
        <div class="p-top__voice-slider-container fadeUp">
            <div class="p-top__voice-slider-arrow-wrapper">
                <div class="swiper-button-prev p-top__voice-prev">
                    <img class="p-top__voice-prev-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-arrow-left.png" alt="前へ">
                </div>
                <div class="swiper-button-next p-top__voice-next">
                    <img class="p-top__voice-next-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-arrow-right.png" alt="次へ">
                </div>
            </div>
            <div class="swiper p-top__voice-slider">
                <ul class="swiper-wrapper p-top__voice-slider-box">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'      => 'voice',
                    'posts_per_page' => 8,   // トップページは10件くらいでOK
                    'paged'          => 1,
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                        
                        // ACF
                        $icon   = get_field('voice_icon');
                        $course = get_field('voice_course');
                        $rate   = get_field('voice_rate'); // 満足度(1〜5)
                ?>
                    <li class="swiper-slide p-top__voice-slider-list">
                        <div class="p-top__voice-slider-item">

                            <!-- ===== 上トップ部分（archive の構造準拠） ===== -->
                            <div class="p-top__voice-slider-item-top-wrapper">

                                <div class="p-top__voice-slider-item-top-title-wrapper">

                                    <!-- ICON -->
                                    <div class="p-top__voice-slider-item-top-icon-wrapper">
                                        <?php if ($icon) : ?>
                                            <img class="p-top__voice-slider-item-top-icon"
                                                src="<?php echo get_template_directory_uri(); ?>/images/voice/<?php echo esc_attr($icon); ?>.png"
                                                alt="">
                                        <?php endif; ?>
                                    </div>

                                    <div class="p-top__voice-slider-item-top-title-box">
                                        <!-- カテゴリ（保護者の声 / 卒業生の声） -->
                                        <?php
                                            $terms = get_the_terms(get_the_ID(), 'voice_category');
                                            if (!empty($terms) && !is_wp_error($terms)) :
                                                // 最初のタームだけ取得
                                                $term = $terms[0];
                                        ?>
                                            <div class="p-top__voice-category-label p-top__voice-category-label--<?php echo esc_attr($term->slug); ?>">
                                                <?php echo esc_html($term->name); ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- タイトル -->
                                        <h3 class="p-top__voice-slider-item-top-title">
                                            <?php the_title(); ?>
                                        </h3>

                                        <!-- コース名 -->
                                        <?php if ($course) : ?>
                                            <span class="p-top__voice-slider-item-top-course-link">
                                                #<?php echo esc_html($course); ?>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <!-- 満足度 -->
                                <div class="p-top__voice-slider-item-top-star-wrapper">
                                    <div class="p-top__voice-slider-item-top-star-title">満足度</div>
                                    <div class="p-top__voice-slider-item-top-star-img-wrapper">

                                    <?php 
                                    $rate = get_field('voice_rate');

                                    if ($rate !== '' && $rate !== null) {

                                        // 数値化して小数点第1位に整形（4 → 4.0 / 4.5 → 4.5）
                                        $rate_formatted = number_format((float)$rate, 1);

                                        // 画像ファイルとして存在する値の一覧
                                        $valid_values = [
                                            '0.0', '0.5',
                                            '1.0', '1.5',
                                            '2.0', '2.5',
                                            '3.0', '3.5',
                                            '4.0', '4.5',
                                            '5.0'
                                        ];

                                        if (in_array($rate_formatted, $valid_values, true)) : ?>
                                            <img class="p-top__voice-slider-item-top-star-img"
                                                src="<?php echo get_template_directory_uri(); ?>/images/voice/satisfaction-<?php echo esc_attr($rate_formatted); ?>.png"
                                                alt="満足度 <?php echo esc_attr($rate_formatted); ?>">
                                        <?php endif; ?>

                                    <?php } ?>
                                    </div>
                                </div>

                            </div><!-- /.p-top__voice-slider-item-top-wrapper -->

                            <!-- ===== 本文（archive のコメントではなく本文のみ） ===== -->
                            <div class="p-top__voice-slider-item-text-wrapper">
                                <div class="p-top__voice-slider-item-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        </div><!-- /.p-top__voice-slider-item -->
                    </li>

                <?php
                    endwhile;
                endif;

                wp_reset_postdata();
                ?>

                </ul>

                <div class="p-top__voice-pagination swiper-pagination"></div>
            </div>
        </div>
        <div class="c-btn__wrapper p-top__voice-more-btn-wrapper fadeUp">
            <a class="c-btn p-top__voice-more-btn" href="<?php echo get_post_type_archive_link('voice'); ?>">利用者の声をもっとみる<span class="c-btn__circle-bg p-top__voice-more-btn-circle-bg"><img class="c-btn__circle-arrow p-top__voice-btn-circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
        </div>
    </section>

    <!-- guide -->
    <section class="p-top__guide">
        <div class="p-top__guide-bg"></div>
        <div class="p-top__guide-container">
            <div class="p-top__guide-wrapper">
                <div class="p-top__guide-img-wrapper fadeUp">
                    <img class="p-top__guide-img" src="<?php echo get_template_directory_uri(); ?>/images/top/guide-img01.png" alt="">
                </div>
                <div class="p-top__guide-btn-container">
                    <div class="c-section__title-wrapper fadeUp">
                        <span class="c-section__title-en">Course Info</span>
                        <h2 class="c-section__title-ja">コース・料金のご案内</h2>
                    </div>
                    <div class="p-top__guide-btn-wrapper fadeUp">
                        <a href="<?php echo esc_url( home_url( '/shougakusei' ) ); ?>" class="p-top__guide-btn">小学生コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/chuukousei' ) ); ?>" class="p-top__guide-btn">中高生コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/daigakusei-shakaijin' ) ); ?>" class="p-top__guide-btn">大学生・社会人コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/kyoiku-hogosha' ) ); ?>" class="p-top__guide-btn">教育関係者・保護者コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="p-top__guide-wrapper p-top__guide-wrapper-reverse">
                <div class="p-top__guide-btn-container p-top__guide-btn-container-reverse">
                    <div class="c-section__title-wrapper fadeUp">
                        <span class="c-section__title-en">Admission Info</span>
                        <h2 class="c-section__title-ja">入塾のご案内</h2>
                    </div>
                    <div class="p-top__guide-btn-wrapper fadeUp">
                        <a href="<?php echo esc_url( home_url( '/flow' ) ); ?>" class="p-top__guide-btn">入塾・入会の流れ<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/reservation/#consulting' ) ); ?>" class="p-top__guide-btn">個別相談・体験授業<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/reservation/#session' ) ); ?>" class="p-top__guide-btn">セミナー<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="p-top__guide-btn">よくあるご質問・お問い合わせ<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                    </div>
                    <div class="p-top__guide-link-wrapper fadeUp">
                        <a href="https://liff.line.me/1661073504-4vwK7MWY/landing?follow=%40552hbhyv&lp=zpIxO6&liff_id=1661073504-4vwK7MWY" target="_blank" class="p-top__guide-link">資料請求<img class="p-top__guide-link-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/link-icon.png" alt=""></a>
                    </div>
                </div>
                <div class="p-top__guide-img-wrapper fadeUp">
                    <img class="p-top__guide-img" src="<?php echo get_template_directory_uri(); ?>/images/top/guide-img02.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>