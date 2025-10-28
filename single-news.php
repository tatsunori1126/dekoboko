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
                <div class="c-section__page-title">新着情報</div>
                <span class="c-section__page-title-en">News</span>
            </div>
            <?php if(!is_front_page()): ?>
                <div class="c-breadcrumbs">
                    <div class="c-breadcrumbs__inner" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            // WordPress ループ開始
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- 投稿タイトル -->
                <div class="p-news__single-post-category-box">
                    <?php
                    // カテゴリー名を表示
                    $categories = get_the_terms($post->ID, 'news_category');
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            echo '<span class="p-news__post-category">' . esc_html($category->name) . '</span>';
                        }
                    }
                    ?>
                    <time class="p-news__post-date"><?php the_time('Y.n.j'); ?></time>
                </div>
                <header class="p-news__entry-header">
                    <h1 class="p-news__entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="p-news__contents">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
                endwhile; // ループ終了
            endif;
            ?>
            <?php
            $arrow_left = '<img src="' . esc_url( get_template_directory_uri() ) . '/images/common/arrow-left-white.png" alt="前の記事" class="post-arrow post-arrow-left">';
            $arrow_right = '<img src="' . esc_url( get_template_directory_uri() ) . '/images/common/arrow-right-white.png" alt="次の記事" class="post-arrow post-arrow-right">';
            ?>

            <div class="c-single__pagenavi-box">
                <?php if (get_previous_post()): ?>
                    <div class="post-previous">
                        <?php previous_post_link('%link', $arrow_left . '<div class="post-previous-text">前の記事</div>'); ?>
                    </div>
                <?php endif; ?>

                <div class="c-single__pagenavi-return-box">
                    <a class="c-single__pagenavi-return" href="<?php echo esc_url( get_post_type_archive_link('news') ); ?>">一覧へ戻る</a>
                </div>

                <?php if (get_next_post()): ?>
                    <div class="post-next">
                        <?php next_post_link('%link', '<div class="post-next-text">次の記事</div>' . $arrow_right); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>