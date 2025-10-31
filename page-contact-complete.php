<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-contact">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/contact/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">お問い合わせ<br>完了</h1>
                <span class="c-section__page-title-en">Contact complete</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/contact/page-main-img.png" alt="">
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
            <div class="p-contact__container">
                <h2 class="p-contact__complete-title">お問い合わせ<br class="c-pc-hidden">（送信完了）</h2>
                <div class="p-contact__complete-box">
                    <?php
                    // セッションから送信ステータスを取得
                    $status = isset($_SESSION['cf7_status']) ? $_SESSION['cf7_status'] : '';
            
                    if ( $status === 'success' ) : ?>
                        <p class="p-contact__complete-top-text">送信が完了しました。<br>お問い合わせいただきありがとうございます。</p>
                    <?php elseif ( $status === 'fail' ) : ?>
                        <p class="p-contact__complete-top-text">送信に失敗しました。<br>再度お試しください。</p>
                    <?php else : ?>
                        <p class="p-contact__complete-top-text">不明なエラーが発生しました。</p>
                    <?php endif;
            
                    // ステータスをリセット
                    unset($_SESSION['cf7_status']);
                    ?>
                    <a class="p-contact__complete-toppage" href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPに戻る</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>