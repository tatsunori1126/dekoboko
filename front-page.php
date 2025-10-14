<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-top__mv">
        <div class="p-top__mv__bg-circle-wrapper">
            <img class="p-top__mv__bg-circle" src="<?php echo get_template_directory_uri(); ?>/images/top/mv-bg-circle.png" alt="">
        </div>
        <div class="c-section__bg-circle-wrapper">
            <img class="c-section__bg-circle" src="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" alt="">
        </div>
        <div class="p-top__mv__container">
            <div class="c-inner">
                <div class="p-top__mv__box">
                    <div class="mv-scroll">
                        <div class="mv-scroll__circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-scroll-text.png" alt="scroll text" class="mv-scroll__text">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-scroll-arrow.png" alt="scroll arrow" class="mv-scroll__arrow">
                        </div>
                    </div>
                    <div class="p-top__mv__img-wrapper">
                        <img class="p-top__mv__img" src="<?php echo get_template_directory_uri(); ?>/images/top/mv.png" alt="">
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
</main>
<?php get_footer(); ?>