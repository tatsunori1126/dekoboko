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
                        <picture class="p-top__mv-img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv.png" media="(min-width: 800px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp.png" alt="">
                        </picture>
                    </div>
                    <div class="p-top__mv__main-title-wrapper">
                        <h1 class="p-top__mv__main-title-box">
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
                <div class="c-section__title-wrapper">
                    <span class="c-section__title-en">News</span>
                    <h2 class="c-section__title-ja">新着情報</h2>
                </div>
                <ul class="p-top__news-category-container">
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
            <div class="p-top__news-contents-container">
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
                                <?php the_post_thumbnail('full', array('class' => 'p-top__news-contents-img')); ?>
                            <?php else : ?>
                                <?php
                                // 🔹 NoImage選択メタデータを取得
                                $selected_noimage = get_post_meta(get_the_ID(), '_noimage_select', true);
                                if (empty($selected_noimage)) {
                                    $selected_noimage = 'noimage1'; // 初期値は noimage1.png
                                }
                                $noimage_path = get_template_directory_uri() . '/images/noimage/' . $selected_noimage . '.png';
                                ?>
                                <img src="<?php echo esc_url($noimage_path); ?>" alt="<?php the_title_attribute(); ?>" class="p-top__news-contents-img no-image" />
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
            <div class="c-btn__wrapper p-top__news-more-btn-wrapper">
                <a class="c-btn p-top__news-more-btn" href="<?php echo get_post_type_archive_link('news'); ?>">記事一覧へ<img class="c-btn__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/btn-circle-arrow.png" alt=""></a>
            </div>
        </div>
    </section>

    <!-- message -->
    <section class="p-top__message">
        <div class="p-top__message-bg"></div> <!-- 背景画像・テクスチャ -->
        <div class="p-top__message-column-wrapper">
            <div class="p-top__message-images-left-wrapper">
                <picture class="p-top__message-image p-top__message-image-left01">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img01.png" media="(min-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img04.png" alt="">
                </picture>
                <picture class="p-top__message-image p-top__message-image-left02">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img02.png" media="(min-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img03.png" alt="">
                </picture>
            </div>
            <div class="p-top__message-text-wrapper">
                <p class="p-top__message-text p-top__message-text01">ここは、学習習慣や思考力、<br class="c-sp-hidden">コミュニケーション力を育む<br class="c-sp-hidden">“自分を育てる学びの場”。</p>
                <p class="p-top__message-text p-top__message-text02">Co-learning park DEKObokoは、<br class="c-sp-hidden">点数や偏差値ではなく、<br class="c-sp-hidden">「その人らしさ」を大切にする学習塾です。</p>
                <p class="p-top__message-text p-top__message-text03">不登校や学校に行けない時期があっても、<br class="c-sp-hidden">安心して学びを続けられる場所でありたい。</p>
                <p class="p-top__message-text p-top__message-text04">ここで育むのは、未来へつながる力。<br class="c-sp-hidden">さあ、自分らしい歩みをここからはじめよう。</p>
            </div>
            <div class="p-top__message-title-container">
                <div class="p-top__message-title-wrapper">
                    <h2 class="p-top__message-title-box">
                        <span class="p-top__message-title p-top__message-title01">明日が来るのが、</span>
                        <span class="p-top__message-title p-top__message-title02">ちょっと楽しみになる</span>
                        <span class="p-top__message-title p-top__message-title03">学習塾。</span>
                    </h2>
                    <span class="p-top__message-title-en">Message</span>
                </div>
                <div class="p-top__message-images-right-wrapper">
                    <picture class="p-top__message-image p-top__message-image-right01">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/message-img03.png" media="(min-width: 1000px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/message-img01.png" alt="">
                    </picture>
                    <picture class="p-top__message-image p-top__message-image-right02">
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
        <div class="p-top__message-dekoboko-main-img-wrapper">
            <img class="p-top__message-dekoboko-main-img" src="<?php echo get_template_directory_uri(); ?>/images/top/main-dekoboko-img.png" alt="">
        </div>
        <div class="p-top__about-bg"></div>
        <div class="p-top__about-container">
            <h2 class="p-top__about-title">その想い、<br class="c-pc-hidden">デコボコでカタチに。</h2>
            <div class="p-top__about-contents-wrapper">
                <div class="p-top__about-wrapper">
                    <img class="p-top__about-number p-top__about-number01" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number01.png" alt="01">
                    <h3 class="p-top__about-item-title">安心して学べる<br>第3の居場所がほしい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img01" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img01.png" alt="">
                    </div>
                </div>
                <div class="p-top__about-wrapper">
                    <img class="p-top__about-number p-top__about-number02" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number02.png" alt="02">
                    <h3 class="p-top__about-item-title">がんばらなくても<br>続けられる学びがしたい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img02" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img02.png" alt="">
                    </div>
                </div>
                <div class="p-top__about-wrapper">
                    <img class="p-top__about-number p-top__about-number03" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number03.png" alt="03">
                    <h3 class="p-top__about-item-title">仲間と出会い、<br>自分の強みを見つけたい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img03" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img03.png" alt="">
                    </div>
                </div>
                <div class="p-top__about-wrapper">
                    <img class="p-top__about-number p-top__about-number04" src="<?php echo get_template_directory_uri(); ?>/images/top/about-number04.png" alt="04">
                    <h3 class="p-top__about-item-title">夢を叶える<br>力をつけたい</h3>
                    <div class="p-top__about-item-img-wrapper">
                        <img class="p-top__about-item-img p-top__about-item-img04" src="<?php echo get_template_directory_uri(); ?>/images/top/about-img04.png" alt="">
                    </div>
                </div>
            </div>
            <div class="c-btn__wrapper p-top__about-more-btn-wrapper">
                <a class="c-btn p-top__about-more-btn" href="<?php echo home_url('about'); ?>"><img class="c-btn__circle-arrow p-top__about-btn-circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/btn-circle-arrow.png" alt="">デコボコをもっと知る</a>
            </div>
        </div>
    </section>

    <!-- voice -->
    <section class="p-top__voice">
        <h2 class="p-top__voice-title">生徒さん・保護者さまの声</h2>
        <div class="p-top__voice-slider-container">
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
                    <li class="swiper-slide p-top__voice-slider-list">
                        <div class="p-top__voice-slider-item">
                            <div class="p-top__voice-slider-item-top-wrapper">
                                <div class="p-top__voice-slider-item-top-title-wrapper">
                                    <div class="p-top__voice-slider-item-top-icon-wrapper">
                                        <img class="p-top__voice-slider-item-top-icon" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-img01.png" alt="">
                                    </div>
                                    <div class="p-top__voice-slider-item-top-title-box">
                                        <h3 class="p-top__voice-slider-item-top-title">ワクワクチャレンジママ</h3>
                                        <span class="p-top__voice-slider-item-top-course-link">#DYLコース</span>
                                    </div>
                                </div>
                                <div class="p-top__voice-slider-item-top-star-wrapper">
                                    <div class="p-top__voice-slider-item-top-star-title">満足度</div>
                                    <div class="p-top__voice-slider-item-top-star-img-wrapper">
                                        <img class="p-top__voice-slider-item-top-star-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-star.png" alt="star">
                                    </div>
                                </div>
                            </div>
                            <div class="p-top__voice-slider-item-text-wrapper">
                                <p class="p-top__voice-slider-item-text">「絶対勉強なんてやらない！」と頑なに拒んでいた息子が、DEKObokoに通ううちに「今日はちょっと頑張ってみる」と自分から言うようになりました。先生方は強制せず、本人の気持ちを尊重しながら小さな成功体験を積ませてくれます。その積み重ねが自信につながり、勉強へのハードルが自然と下がっていったようです。親としては、嫌いなことに挑戦しようとする姿を初めて見られたことが何よりの驚きであり、喜びでした。</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide p-top__voice-slider-list">
                        <div class="p-top__voice-slider-item">
                            <div class="p-top__voice-slider-item-top-wrapper">
                                <div class="p-top__voice-slider-item-top-title-wrapper">
                                    <div class="p-top__voice-slider-item-top-icon-wrapper">
                                        <img class="p-top__voice-slider-item-top-icon" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-img02.png" alt="">
                                    </div>
                                    <div class="p-top__voice-slider-item-top-title-box">
                                        <h3 class="p-top__voice-slider-item-top-title">ハンモックのんびりママ</h3>
                                        <span class="p-top__voice-slider-item-top-course-link">#FYLコース</span>
                                    </div>
                                </div>
                                <div class="p-top__voice-slider-item-top-star-wrapper">
                                    <div class="p-top__voice-slider-item-top-star-title">満足度</div>
                                    <div class="p-top__voice-slider-item-top-star-img-wrapper">
                                        <img class="p-top__voice-slider-item-top-star-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-star.png" alt="star">
                                    </div>
                                </div>
                            </div>
                            <div class="p-top__voice-slider-item-text-wrapper">
                                <p class="p-top__voice-slider-item-text">学校に行けず居場所を失っていた娘にとって、DEKObokoは「安心して過ごせるもうひとつの居場所」になりました。ハンモックで休んだり、先生や仲間と無理なく話したり。少しずつ「また人と関わってみたい」という気持ちが芽生え、勉強にもチャレンジするようになりました。家以外に安心できる場所を持てたことで、娘が笑顔を取り戻したことが一番の成長です。親としても、LINEでの丁寧な連絡や相談対応に支えられ、安心して子どもを任せられています。</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide p-top__voice-slider-list">
                        <div class="p-top__voice-slider-item">
                            <div class="p-top__voice-slider-item-top-wrapper">
                                <div class="p-top__voice-slider-item-top-title-wrapper">
                                    <div class="p-top__voice-slider-item-top-icon-wrapper">
                                        <img class="p-top__voice-slider-item-top-icon" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-img03.png" alt="">
                                    </div>
                                    <div class="p-top__voice-slider-item-top-title-box">
                                        <h3 class="p-top__voice-slider-item-top-title">未来プレゼンターOB</h3>
                                        <span class="p-top__voice-slider-item-top-course-link">#DYLコース</span>
                                    </div>
                                </div>
                                <div class="p-top__voice-slider-item-top-star-wrapper">
                                    <div class="p-top__voice-slider-item-top-star-title">満足度</div>
                                    <div class="p-top__voice-slider-item-top-star-img-wrapper">
                                        <img class="p-top__voice-slider-item-top-star-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-star.png" alt="star">
                                    </div>
                                </div>
                            </div>
                            <div class="p-top__voice-slider-item-text-wrapper">
                                <p class="p-top__voice-slider-item-text">私は総合型選抜に向けて志望理由書や面接、小論文の指導を受けました。先生方は知識を教えるだけでなく、「自分の考えをどう表現すれば伝わるか」を一緒に考えてくれました。そのおかげで第一志望に合格できただけでなく、人前で話すことへの自信や、自分の強みを言葉にする力が身につきました。DEKObokoは単なる受験対策塾ではなく、「自分を見つけ、社会に出る準備ができる場」だと思います。</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide p-top__voice-slider-list">
                        <div class="p-top__voice-slider-item">
                            <div class="p-top__voice-slider-item-top-wrapper">
                                <div class="p-top__voice-slider-item-top-title-wrapper">
                                    <div class="p-top__voice-slider-item-top-icon-wrapper">
                                        <img class="p-top__voice-slider-item-top-icon" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-img04.png" alt="">
                                    </div>
                                    <div class="p-top__voice-slider-item-top-title-box">
                                        <h3 class="p-top__voice-slider-item-top-title">スマイル全肯定ママ</h3>
                                        <span class="p-top__voice-slider-item-top-course-link">#DYLコース</span>
                                    </div>
                                </div>
                                <div class="p-top__voice-slider-item-top-star-wrapper">
                                    <div class="p-top__voice-slider-item-top-star-title">満足度</div>
                                    <div class="p-top__voice-slider-item-top-star-img-wrapper">
                                        <img class="p-top__voice-slider-item-top-star-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-star.png" alt="star">
                                    </div>
                                </div>
                            </div>
                            <div class="p-top__voice-slider-item-text-wrapper">
                                <p class="p-top__voice-slider-item-text">勉強が得意ではなかった息子が、DEKObokoで褒められ、全肯定されることで自信を持つようになりました。気づけば、勉強だけでなく人との関わりにも積極的になっていて驚いています。家でも学校でもない「第3の居場所」があることが、本人にとって大きな支えになっているのだと思います。学力以上に、心の成長を感じられるのがDEKObokoの魅力です。</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide p-top__voice-slider-list">
                        <div class="p-top__voice-slider-item">
                            <div class="p-top__voice-slider-item-top-wrapper">
                                <div class="p-top__voice-slider-item-top-title-wrapper">
                                    <div class="p-top__voice-slider-item-top-icon-wrapper">
                                        <img class="p-top__voice-slider-item-top-icon" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-img05.png" alt="">
                                    </div>
                                    <div class="p-top__voice-slider-item-top-title-box">
                                        <h3 class="p-top__voice-slider-item-top-title">マイペースOKパパ</h3>
                                        <span class="p-top__voice-slider-item-top-course-link">#FYLコース</span>
                                    </div>
                                </div>
                                <div class="p-top__voice-slider-item-top-star-wrapper">
                                    <div class="p-top__voice-slider-item-top-star-title">満足度</div>
                                    <div class="p-top__voice-slider-item-top-star-img-wrapper">
                                        <img class="p-top__voice-slider-item-top-star-img" src="<?php echo get_template_directory_uri(); ?>/images/top/voice-slider-star.png" alt="star">
                                    </div>
                                </div>
                            </div>
                            <div class="p-top__voice-slider-item-text-wrapper">
                                <p class="p-top__voice-slider-item-text">DEKObokoは、子どもが自分らしいペースで学べる環境を大切にしてくれます。カフェのような落ち着いた雰囲気の中で勉強をしたり、安心できる空間で人と関わったり。勉強が得意な子にはさらに伸びる機会を、苦手な子には「できた！」を積み重ねる機会を与えてくれます。そして何より、「人と関わる楽しさ」「自分を大切にしていいという感覚」を取り戻せる場所です。保護者としては、学力と人間的成長の両方を安心して任せられる数少ない場だと感じています。</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="p-top__voice-pagination swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- guide -->
    <section class="p-top__guide">
        <div class="p-top__guide-bg"></div>
        <div class="p-top__guide-container">
            <div class="p-top__guide-wrapper">
                <div class="p-top__guide-img-wrapper">
                    <img class="p-top__guide-img" src="<?php echo get_template_directory_uri(); ?>/images/top/guide-img01.png" alt="">
                </div>
                <div class="p-top__guide-btn-container">
                    <div class="c-section__title-wrapper">
                        <span class="c-section__title-en">Course Info</span>
                        <h2 class="c-section__title-ja">コース・料金のご案内</h2>
                    </div>
                    <div class="p-top__guide-btn-wrapper">
                        <a href="<?php echo home_url('shougakusei'); ?>" class="p-top__guide-btn">小学生コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo home_url('chuukousei'); ?>" class="p-top__guide-btn">中高生コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo home_url('daigakusei-shakaijin'); ?>" class="p-top__guide-btn">大学生・社会人コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo home_url('kyoiku-hogosha'); ?>" class="p-top__guide-btn">教育関係者・保護者コース<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="p-top__guide-wrapper p-top__guide-wrapper-reverse">
                <div class="p-top__guide-btn-container p-top__guide-btn-container-reverse">
                    <div class="c-section__title-wrapper">
                        <span class="c-section__title-en">Admission Info</span>
                        <h2 class="c-section__title-ja">入塾のご案内</h2>
                    </div>
                    <div class="p-top__guide-btn-wrapper">
                        <a href="<?php echo home_url('flow'); ?>" class="p-top__guide-btn">入塾・受講の流れ<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo home_url('faq'); ?>" class="p-top__guide-btn">よくあるご質問<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo home_url('reservation/#session'); ?>" class="p-top__guide-btn">説明会について<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                        <a href="<?php echo home_url('reservation/#consulting'); ?>" class="p-top__guide-btn">個別相談について<img class="p-top__guide-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt=""></a>
                    </div>
                    <div class="p-top__guide-link-wrapper">
                        <a href="https://www.canva.com/design/DAGq9X0qTp0/7FvEGecvfFYR2yavn0GXHQ/edit?utm_content=DAGq9X0qTp0&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank" class="p-top__guide-link">資料請求<img class="p-top__guide-link-icon" src="<?php echo get_template_directory_uri(); ?>/images/common/link-icon.png" alt=""></a>
                    </div>
                </div>
                <div class="p-top__guide-img-wrapper">
                    <img class="p-top__guide-img" src="<?php echo get_template_directory_uri(); ?>/images/top/guide-img02.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>