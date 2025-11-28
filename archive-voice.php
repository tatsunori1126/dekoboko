<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-voice">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/voice/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">利用者の声</h1>
                <span class="c-section__page-title-en p-voice__page-title-en">Voice</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/voice/page-main-img.png" alt="">
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
        <div class="p-voice__container">
            <div class="p-voice__inner">
                <ul class="p-voice__category-container fadeUp">
                    <!-- すべて（アーカイブページへのリンク） -->
                    <li>
                        <a class="p-voice__category-link p-voice__category-link-all<?php if (is_post_type_archive('voice')) echo ' active'; ?>" href="<?php echo get_post_type_archive_link('voice'); ?>">
                            ALL
                        </a>
                    </li>
                    <?php
                    // voice_categoryのターム（カテゴリ）を取得
                    $categories = get_terms([
                        'taxonomy'   => 'voice_category',
                        'hide_empty' => false, // ← 投稿がなくても表示！
                    ]);
                    // カテゴリをループで表示
                    if (!empty($categories) && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            // 現在のタームかどうかをチェック
                            $active_class = '';
                            if (is_tax('voice_category', $category->slug)) {
                                $active_class = ' active'; // 現在のタームに「active」クラスを追加
                            }
    
                            echo '<li><a class="p-voice__category-link' . $active_class . '" href="' . get_term_link($category) . '">' . esc_html($category->name) . '</a></li>';
                        }
                    }
                    ?>
                </ul>
                <div class="p-voice__contents-container">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'      => 'voice',
                    'posts_per_page' => 8,
                    'paged'          => $paged,
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <div class="p-voice__contents-wrapper fadeUp">
                        <div class="p-voice__contents-top-wrapper">
                            <div class="p-voice__contents-top-box">
                                <!-- アイコン -->
                                <?php $icon = get_field('voice_icon'); ?>
                                <?php if ($icon) : ?>
                                    <img class="p-voice__icon" src="<?php echo get_template_directory_uri(); ?>/images/voice/<?php echo esc_attr($icon); ?>.png" alt="">
                                <?php endif; ?>

                                <div class="p-voice__contents-top-title-wrapper">
                                    <!-- カテゴリ（保護者の声 / 卒業生の声） -->
                                    <?php
                                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                                        if (!empty($terms) && !is_wp_error($terms)) :
                                            // 最初のタームだけ取得
                                            $term = $terms[0];
                                    ?>
                                        <div class="p-voice__category-label p-voice__category-label--<?php echo esc_attr($term->slug); ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- タイトル -->
                                    <div class="p-voice__contents-box">
                                        <h2 class="p-voice__contents-title"><?php the_title(); ?></h2>
                                    </div>

                                    <!-- コース名 -->
                                    <?php $course = get_field('voice_course'); ?>
                                    <?php if ($course) : ?>
                                        <div class="p-voice__course">#<?php echo esc_html($course); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                            <!-- 満足度 -->
                            <?php $rate = get_field('voice_rate'); ?>
                            <?php if ($rate !== null) : ?>
                                <?php $rate_formatted = number_format((float)$rate, 1); ?>

                                <div class="p-voice__rate-wrapper">
                                    <div class="p-voice__rate-label">満足度</div>
                                    <img class="p-voice__rate-img" 
                                        src="<?php echo get_template_directory_uri(); ?>/images/voice/satisfaction-<?php echo esc_attr($rate_formatted); ?>.png" 
                                        alt="満足度 <?php echo esc_attr($rate_formatted); ?>">
                                </div>

                            <?php endif; ?>
                        </div>


                        <!-- コメントエリア -->
                        <div class="p-voice__comment">
                            <?php if (has_term('parents', 'voice_category')) : ?>
                                <?php
                                    $reason  = get_field('parents_reason');
                                    $good    = get_field('parents_good_point');
                                    $improve = get_field('parents_improve_point');
                                ?>

                                <?php if ($reason) : ?>
                                    <div class="p-voice__comment-title-wrapper">
                                        <h3 class="p-voice__comment-title">評価の理由は？</h3>
                                        <p class="p-voice__comment-text">
                                            <?php echo nl2br(esc_html($reason)); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($good) : ?>
                                    <div class="p-voice__comment-title-wrapper">
                                        <h3 class="p-voice__comment-title">DEKObokoに通わせて良かった点</h3>
                                        <p class="p-voice__comment-text">
                                            <?php echo nl2br(esc_html($good)); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($improve) : ?>
                                    <div class="p-voice__comment-title-wrapper">
                                        <h3 class="p-voice__comment-title">改善してほしい点</h3>
                                        <p class="p-voice__comment-text">
                                            <?php echo nl2br(esc_html($improve)); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                            <?php endif; ?>

                            <?php if (has_term('students', 'voice_category')) : ?>
                                <?php
                                    $reason = get_field('students_reason');
                                    $what   = get_field('students_what_did');
                                    $good   = get_field('students_good_point');
                                ?>

                                <?php if ($reason) : ?>
                                    <div class="p-voice__comment-title-wrapper">
                                        <h3 class="p-voice__comment-title">評価の理由は？</h3>
                                        <p class="p-voice__comment-text">
                                            <?php echo nl2br(esc_html($reason)); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($what) : ?>
                                    <div class="p-voice__comment-title-wrapper">
                                        <h3 class="p-voice__comment-title">DEKObokoでどんなことをしましたか？</h3>
                                        <p class="p-voice__comment-text">
                                            <?php echo nl2br(esc_html($what)); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($good) : ?>
                                    <div class="p-voice__comment-title-wrapper">
                                        <h3 class="p-voice__comment-title">DEKObokoに通って良かった点</h3>
                                        <p class="p-voice__comment-text">
                                            <?php echo nl2br(esc_html($good)); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div><!-- /.p-voice__comment -->
                    </div><!-- /.p-voice__contents-wrapper -->
                <?php
                    endwhile;
                else :
                    echo '<p class="none-post-text fadeUp">該当する記事がありません。</p>';
                endif;
                wp_reset_postdata();
                ?>
                </div><!-- /.p-voice__contents-container -->
                <div class="c-arrow p-voice__arrow fadeUp">
                    <div class="c-pagination">
                        <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
                        <?php wp_link_pages(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>