<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-news">
        <div class="c-circle__page-top-img-wrapper">
            <picture class="c-circle__page-top-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle.png" media="(min-width: 800px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle-sp.png" alt="">
            </picture>
        </div>
        <div class="c-circle__page-right-img-wrapper">
            <img class="c-circle__page-right-img" src="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">新着情報</h1>
                <span class="c-section__page-title-en">News</span>
            </div>
            <div class="p-news__bread-category-wrapper">
            <?php if(!is_front_page()): ?>
                <div class="c-breadcrumbs">
                    <div class="c-breadcrumbs__inner" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                </div>
            <?php endif; ?>
                <ul class="p-news__category-container">
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
            <div class="p-news__contents-container">
                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 16,
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args);
                ?>
                <?php
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <a class="p-news__contents-wrapper" href="<?php the_permalink(); ?>">
                        <div class="p-news__contents-img-wrapper">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'p-news__contents-img')); ?>
                            <?php else : ?>
                                <?php
                                // 🔹 NoImage選択メタデータを取得
                                $selected_noimage = get_post_meta(get_the_ID(), '_noimage_select', true);
                                if (empty($selected_noimage)) {
                                    $selected_noimage = 'noimage1'; // 初期値は noimage1.png
                                }
                                $noimage_path = get_template_directory_uri() . '/images/noimage/' . $selected_noimage . '.png';
                                ?>
                                <img src="<?php echo esc_url($noimage_path); ?>" alt="<?php the_title_attribute(); ?>" class="p-news__contents-img no-image" />
                            <?php endif; ?>
                        </div>

                        <div class="p-news__contents-box">
                            <div class="p-news__contents-category-box">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'news_category');
                                if ($terms && !is_wp_error($terms)) {
                                    echo '<ul class="p-news__item-categories">';
                                    foreach ($terms as $term) {
                                        echo '<li><span class="p-news__contents-category">' . esc_html($term->name) . '</span></li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <time class="p-news__contents-date"><?php the_time('Y.n.j'); ?></time>
                            </div>
                            <h2 class="p-news__contents-title"><?php the_title(); ?></h2>
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
            <div class="c-arrow">
                <div class="c-pagination">
                    <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
                    <?php wp_link_pages(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>