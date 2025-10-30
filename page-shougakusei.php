<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-course">
        <div class="c-circle__page-top-img-wrapper">
            <picture class="c-circle__page-top-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle.png" media="(min-width: 800px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle-sp.png" alt="">
            </picture>
        </div>
        <div class="c-circle__page-right-img-wrapper">
            <img class="c-circle__page-right-img" src="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" alt="">
        </div>
        <div class="c-circle__page-top-main-img-wrapper">
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/course/shougakusei/page-main-img.png" alt="">
        </div>
        <div class="p-course__bottom-main-img-wrapper">
            <img class="p-course__bottom-main-img" src="<?php echo get_template_directory_uri(); ?>/images/course/bubble.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">小学生向け<br>コース</h1>
                <span class="c-section__page-title-en p-flow__page-title-en">Course</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/course/shougakusei/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <?php if(!is_front_page()): ?>
                <div class="c-breadcrumbs">
                    <div class="c-breadcrumbs__inner" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="p-course__container">
            <div class="p-course__column-wrapper">
                <div class="p-course__column-img-wrapper">
                    <img class="p-course__column-img" src="<?php echo get_template_directory_uri(); ?>/images/course/shougakusei/sub-img.png" alt="">
                </div>
                <div class="p-course__column-main-wrapper">
                    <h2 class="p-course__column-main-title-wrapper">
                        <span class="p-course__column-main-title">「やってみたい！」が、</span>
                        <span class="p-course__column-main-title">未来を切りひらく</span>
                        <span class="p-course__column-main-title">大切な第一歩。</span>
                    </h2>
                    <div class="p-course__column-main-icon-wrapper">
                        <h3 class="p-course__column-main-icon-title">安心できる居場所で<br>ワクワクを広げながら、<br>「学びたい！」を育むコース</h3>
                        <div class="p-course__column-main-icon-img-wrapper">
                            <img class="p-course__column-main-icon-img" src="<?php echo get_template_directory_uri(); ?>/images/course/shougakusei/icon.png" alt="">
                        </div>
                    </div>
                    <p class="p-course__column-main-text">小学生の毎日は、新しい発見や感情の出会いであふれています。挑戦してうまくいった喜びもあれば、失敗して悔しい思いをする日もあります。DEKObokoでは、その一つひとつを大切に受け止め、学びと成長につなげていきます。<br>主にFYLコースで受け入れております。FYLコースでは宿題や自習のサポートだけでなく、遊びや仲間との関わりも大切にしながら「学ぶって楽しい」と思える体験を重ねます。<br>「できた！」の達成感も、「今日はちょっと休みたい」の気持ちも、その子にとって大切な時間。DEKObokoは、子どもの個性に寄り添いながら、安心できる学びの毎日を支えます。</p>
                    <p class="p-course__column-sub-text">※DYLコースでは原則小学生の受け入れは行っておりませんが、ご希望の方はぜひご相談ください。</p>
                    <div class="p-course__btn-container">
                        <div class="p-course__btn-wrapper">
                            <a class="p-course__btn" href="<?php echo home_url('shougakusei/#shougakusei_course'); ?>" data-scroll-link>コース一覧をみる<img class="p-course__btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="コース一覧をみる"></a>
                        </div>
                        <div class="p-course__btn-wrapper">
                            <a class="p-course__btn" href="<?php echo home_url('shougakusei/#shougakusei_price'); ?>" data-scroll-link>料金一覧をみる<img class="p-course__btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="料金一覧をみる"></a>
                        </div>
                    </div>
                </div>
            </div>
            <section id="shougakusei_course" class="p-course__list">
                <div class="c-inner">
                    <div class="c-section__page-title-wrapper p-course__title-wrapper">
                        <h2 class="c-section__page-title">コース一覧</h2>
                        <span class="c-section__page-title-en p-course__page-title-en">Course</span>
                    </div>
                    <?php
                    $args = array(
                    'post_type' => 'course',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'course_category',
                        'field'    => 'slug',
                        'terms'    => 'shougakusei',
                        ),
                    ),
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order'   => 'ASC',
                    );
                    $query = new WP_Query($args);
                    ?>

                    <?php if ($query->have_posts()) : ?>
                    <div class="p-course__list-container">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <article class="p-course__list-item">
                            <div class="p-course__list-open-wrapper">
                                <div class="p-course__list-open-inner">
                                    <div class="p-course__list-title-wrapper">
                                        <h2 class="p-course__list-title"><?php the_title(); ?></h2>
                                        <?php if (get_field('simple_explanation')) : ?>
                                            <p class="p-course__list-simple"><?php the_field('simple_explanation'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-course__toggle-btn">
                                        <span class="p-course__toggle-text">詳しくみる</span>
                                        <span class="p-course__toggle-icon">＋</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-course__detail-container">
                                <!-- 見出し -->
                                <?php if (get_field('heading')) : ?>
                                    <h3 class="p-course__list-heading"><?php the_field('heading'); ?></h3>
                                <?php endif; ?>

                                <div class="p-course__list-column-wrapper">
                                    <!-- アイキャッチ -->
                                    <div class="p-course__list-thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', array('class' => 'p-course__list-thumb-img')); ?>
                                    <?php else : ?>
                                        <?php
                                        // 🔹 NoImage選択メタデータを取得（例：noimage1, noimage2...）
                                        $selected_noimage = get_post_meta(get_the_ID(), '_noimage_select', true);
                                        if (empty($selected_noimage)) {
                                        $selected_noimage = 'noimage1'; // デフォルト
                                        }
                                        $noimage_path = get_template_directory_uri() . '/images/noimage/' . $selected_noimage . '.png';
                                        ?>
                                        <img src="<?php echo esc_url($noimage_path); ?>" alt="<?php the_title_attribute(); ?>" class="p-course__list-thumb-img no-image" />
                                    <?php endif; ?>
                                    </div>

                                    <!-- コース説明 -->
                                    <?php if (get_field('course_description')) : ?>
                                    <div class="p-course__list-desc">
                                        <?php the_field('course_description'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>

                                <!-- コース詳細（01〜10） -->
                                <?php
                                $has_detail = false;

                                // まず10個のフィールドのうち、1つでも入力があるか確認
                                for ($i = 1; $i <= 10; $i++) {
                                $group_name = 'course_detail_' . sprintf('%02d', $i);
                                $group = get_field($group_name);
                                $title = $group['course_detail_title_' . sprintf('%02d', $i)] ?? '';
                                $text  = $group['course_detail_text_' . sprintf('%02d', $i)] ?? '';
                                if ($title || $text) {
                                    $has_detail = true;
                                    break;
                                }
                                }
                                ?>

                                <?php if ($has_detail): ?>
                                <table class="p-course__list-detail-table">
                                    <tbody>
                                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                                        <?php
                                        $group_name = 'course_detail_' . sprintf('%02d', $i);
                                        $group = get_field($group_name);
                                        $title = $group['course_detail_title_' . sprintf('%02d', $i)] ?? '';
                                        $text  = $group['course_detail_text_' . sprintf('%02d', $i)] ?? '';
                                        ?>
                                        <?php if ($title || $text) : ?>
                                        <tr>
                                            <?php if ($title) : ?>
                                            <th><?php echo esc_html($title); ?></th>
                                            <?php endif; ?>
                                            <?php if ($text) : ?>
                                            <td><?php echo $text; // WYSIWYGはHTML許可 ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    </tbody>
                                </table>
                                <?php endif; ?>

                                <!-- こんな人におすすめ -->
                                <?php
                                $recommend = get_field('recommend');
                                if ($recommend) :
                                $has_recommend = false;
                                foreach ($recommend as $r) {
                                    if (!empty($r)) {
                                    $has_recommend = true;
                                    break;
                                    }
                                }
                                ?>
                                <?php if ($has_recommend) : ?>
                                    <div class="p-course__list-recommend">
                                        <h4 class="p-course__list-recommend-title">
                                            <picture class="p-course__list-recommend-bubble">
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/course/recommend-bubble.png" media="(min-width: 800px)">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/course/recommend-bubble-sp.png" alt="こんな人におすすめ">
                                            </picture>
                                        </h4>
                                        <ul class="p-course__list-recommend-list">
                                            <?php for ($r = 1; $r <= 6; $r++) : ?>
                                            <?php
                                            $rec_field = 'recommend_0' . $r;
                                            if (!empty($recommend[$rec_field])) :
                                            ?>
                                                <li class="p-course__list-recommend-item"><?php echo esc_html($recommend[$rec_field]); ?></li>
                                            <?php endif; ?>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <div class="p-course__bottom-btn-container">
                                    <div class="p-course__bottom-btn-wrapper">
                                        <a class="p-course__bottom-btn" href="<?php echo home_url('shougakusei/#shougakusei_price'); ?>" data-scroll-link>料金をみる<img class="p-course__bottom-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="料金をみる"></a>
                                    </div>
                                    <div class="p-course__bottom-btn-wrapper">
                                        <a class="p-course__bottom-btn" href="<?php echo home_url('reservation/#consulting'); ?>" data-scroll-link>個別相談はこちら<img class="p-course__bottom-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="個別相談はこちら"></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p class="p-course__no-item">現在、小学生向けのコースは準備中です。</p>
                    <?php endif; ?>
                </div>
            </section>

            <section id="shougakusei_price" class="p-course__price">
                <div class="c-inner">
                    <div class="c-section__page-title-wrapper p-course__title-wrapper">
                        <h2 class="c-section__page-title">料金一覧</h2>
                        <span class="c-section__page-title-en p-course__page-title-en">Price</span>
                    </div>
                    <div class="p-course__price-container">
                        <div class="p-course__price-wrapper">
                            <div class="p-course__price-table-wrapper">
                                <!-- 固定列 -->
                                <table class="p-course__price-table p-course__price-table--fixed">
                                    <thead>
                                        <tr><th>FYLコース</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>居場所コース</td></tr>
                                        <tr><td>居場所学習コース</td></tr>
                                        <tr><td>受験対策コース<br class="c-sub-hidden"><span class="min-font">（80分まで：1対1）</span></td></tr>
                                    </tbody>
                                </table>

                                <!-- スクロール部分 -->
                                <div class="p-course__price-table-scroll scroll-hint">
                                    <table class="p-course__price-table">
                                        <thead>
                                            <tr>
                                                <th>小学生<br>月4回</th>
                                                <th>小学生<br>月8回</th>
                                                <th>週3回（月12回）</th>
                                                <th>1コマ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>9,720円</td>
                                                <td>19,440円</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>12,600円</td>
                                                <td>22,680円</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>要相談</td>
                                                <td>要相談</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <ul class="p-course__price-note">
                                <li class="p-course__price-note-text">※お子さんに勉強する意思がある場合のみ「居場所学習コース」「受験対策コース」は申し込み可能です。</li>
                                <li class="p-course__price-note-text">※居場所学習コースの勉強時間は「10:00〜12:00」or「13:00〜15:00」の間です。</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>