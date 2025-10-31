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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/course/kyoiku-hogosha/page-main-img.png" alt="">
        </div>
        <div class="p-course__bottom-main-img-wrapper">
            <img class="p-course__bottom-main-img" src="<?php echo get_template_directory_uri(); ?>/images/course/bubble.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">教育関係者<br>・保護者向け<br class="c-sp-hidden">コース</h1>
                <span class="c-section__page-title-en p-flow__page-title-en">Course</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/course/kyoiku-hogosha/page-main-img.png" alt="">
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
                <div class="p-course__column-img-wrapper fadeUp">
                    <img class="p-course__column-img" src="<?php echo get_template_directory_uri(); ?>/images/course/kyoiku-hogosha/sub-img.png" alt="">
                </div>
                <div class="p-course__column-main-wrapper">
                    <h2 class="p-course__column-main-title-wrapper">
                        <span class="p-course__column-main-title fadeUp">子どもを支える大人が、</span>
                        <span class="p-course__column-main-title fadeUp">安心して学び、語り合い、</span>
                        <span class="p-course__column-main-title fadeUp">新しい一歩を踏み出せる場を。</span>
                    </h2>
                    <div class="p-course__column-main-icon-wrapper">
                        <h3 class="p-course__column-main-icon-title fadeUp">教育や子育てについて語り合い、<br>つながり、学べるコース。</h3>
                        <div class="p-course__column-main-icon-img-wrapper fadeUp">
                            <img class="p-course__column-main-icon-img" src="<?php echo get_template_directory_uri(); ?>/images/course/kyoiku-hogosha/icon.png" alt="">
                        </div>
                    </div>
                    <p class="p-course__column-main-text fadeUp">子どもの成長を支える大人にとっても、「安心して語り合い、学べる場」は必要です。DEKObokoでは、教育関係者や保護者が集まり、子育てや教育に関する悩みや経験を共有し合う時間を用意しています。<br>さらに、心理学や発達科学の知見をベースにした講座を受講できるのも大きな特徴です。「子どもとの関わり方」「自己肯定感の育て方」「発達の個性への理解」といったテーマを専門的に学ぶことで、日々の子育てや教育に役立てることができます。「他の家庭ではどうしているんだろう？」「この対応でよかったのかな？」そんな日常の問いに応えながら、大人自身も学び、成長できるのがDEKObokoの保護者コースです。<br>子どもにとっても保護者にとっても安心できる学びのコミュニティ。ここでの経験が、家庭や学校での子育てをより前向きにしていきます。</p>
                    <div class="p-course__btn-container fadeUp">
                        <div class="p-course__btn-wrapper">
                            <a class="p-course__btn" href="<?php echo esc_url( home_url( '/kyoiku-hogosha/#kyoiku_course' ) ); ?>" data-scroll-link>コース一覧をみる<img class="p-course__btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="コース一覧をみる"></a>
                        </div>
                        <div class="p-course__btn-wrapper">
                            <a class="p-course__btn" href="<?php echo esc_url( home_url( '/kyoiku-hogosha/#kyoiku_price' ) ); ?>" data-scroll-link>料金一覧をみる<img class="p-course__btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="料金一覧をみる"></a>
                        </div>
                    </div>
                </div>
            </div>
            <section id="kyoiku_course" class="p-course__list">
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
                        'terms'    => 'kyoiku-hogosha',
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
                                        <a class="p-course__bottom-btn" href="<?php echo esc_url( home_url( '/kyoiku-hogosha/#kyoiku_price' ) ); ?>" data-scroll-link>料金をみる<img class="p-course__bottom-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="料金をみる"></a>
                                    </div>
                                    <div class="p-course__bottom-btn-wrapper">
                                        <a class="p-course__bottom-btn" href="<?php echo esc_url( home_url( '/reservation/#consulting' ) ); ?>" data-scroll-link>個別相談はこちら<img class="p-course__bottom-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="個別相談はこちら"></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p class="p-course__no-item">現在、教育関係者・保護者向けのコースは準備中です。</p>
                    <?php endif; ?>
                </div>
            </section>
            <section id="kyoiku_price" class="p-course__price">
                <div class="c-inner">
                    <div class="c-section__page-title-wrapper p-course__title-wrapper">
                        <h2 class="c-section__page-title">料金一覧</h2>
                        <span class="c-section__page-title-en p-course__page-title-en">Price</span>
                    </div>
                    <div class="p-course__price-container">
                        <p class="p-course__price-none">現在、教育関係者・保護者向けの料金案内は準備中です。</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>