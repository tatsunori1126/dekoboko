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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/course/daigakusei-shakaijin/page-main-img.png" alt="">
        </div>
        <div class="p-course__bottom-main-img-wrapper">
            <img class="p-course__bottom-main-img" src="<?php echo get_template_directory_uri(); ?>/images/course/bubble.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">大学生・社会人<br>向けコース</h1>
                <span class="c-section__page-title-en p-flow__page-title-en">Course</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/course/daigakusei-shakaijin/page-main-img.png" alt="">
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
                    <img class="p-course__column-img" src="<?php echo get_template_directory_uri(); ?>/images/course/daigakusei-shakaijin/sub-img.png" alt="">
                </div>
                <div class="p-course__column-main-wrapper">
                    <h2 class="p-course__column-main-title-wrapper">
                        <span class="p-course__column-main-title fadeUp">集中したい日も、</span>
                        <span class="p-course__column-main-title fadeUp">リラックスしたい日も。</span>
                        <span class="p-course__column-main-title fadeUp">自分のスタイルで学べる居場所を。</span>
                    </h2>
                    <div class="p-course__column-main-icon-wrapper">
                        <h3 class="p-course__column-main-icon-title fadeUp">自習室を開放し、<br>学びを支援するコース。<br>TOEICやビジネス講座も公開予定。</h3>
                        <div class="p-course__column-main-icon-img-wrapper fadeUp">
                            <img class="p-course__column-main-icon-img" src="<?php echo get_template_directory_uri(); ?>/images/course/daigakusei-shakaijin/icon.png" alt="">
                        </div>
                    </div>
                    <p class="p-course__column-main-text fadeUp">大学生や社会人にとって、学び続けることは未来を広げる大切な要素です。<br>DEKObokoでは、資格取得や就職・転職活動、研究やレポート作成など、一人ひとりの目標に合った学び場を提供します。<br>集中して取り組めるスペースと、交流や相談ができるスペースの両方を備えているため、その日の気分や目的に合わせて活用可能。また、他の利用者や講師、塾の中高生の生徒たちとの対話を通して新しい視点やアイデアに触れることで、今までとは違った考えや感情とも出会えるかも。<br>DEKObokoは「学びも仕事も前に進められる場所」として、大学生・社会人の挑戦を応援します！</p>
                    <div class="p-course__btn-container fadeUp">
                        <div class="p-course__btn-wrapper">
                            <a class="p-course__btn" href="<?php echo esc_url( home_url( '/daigakusei-shakaijin/#daigakusei_course' ) ); ?>" data-scroll-link>コース一覧をみる<img class="p-course__btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="コース一覧をみる"></a>
                        </div>
                        <div class="p-course__btn-wrapper">
                            <a class="p-course__btn" href="<?php echo esc_url( home_url( '/daigakusei-shakaijin/#daigakusei_price' ) ); ?>" data-scroll-link>料金一覧をみる<img class="p-course__btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="料金一覧をみる"></a>
                        </div>
                    </div>
                </div>
            </div>
            <section id="daigakusei_course" class="p-course__list">
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
                        'terms'    => 'daigakusei-shakaijin',
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
                                        <a class="p-course__bottom-btn" href="<?php echo esc_url( home_url( '/daigakusei-shakaijin/#daigakusei_price' ) ); ?>" data-scroll-link>料金をみる<img class="p-course__bottom-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="料金をみる"></a>
                                    </div>
                                    <div class="p-course__bottom-btn-wrapper">
                                        <a class="p-course__bottom-btn" href="<?php echo esc_url( home_url( '/reservation/#consulting' ) ); ?>" data-scroll-link>個別相談・体験授業はこちら<img class="p-course__bottom-btn-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-ver1.png" alt="個別相談・体験授業はこちら"></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p class="p-course__no-item">現在、大学生・社会人向けのコースは準備中です。</p>
                    <?php endif; ?>
                </div>
            </section>
            <section id="daigakusei_price" class="p-course__price">
                <div class="c-inner">
                    <div class="c-section__page-title-wrapper p-course__title-wrapper">
                        <h2 class="c-section__page-title">料金一覧</h2>
                        <span class="c-section__page-title-en p-course__page-title-en">Price</span>
                    </div>
                    <div class="p-course__price-container">
                        <p class="p-course__price-none">現在、大学生・社会人向けの料金案内は準備中です。</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>