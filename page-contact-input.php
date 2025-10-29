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
                <h1 class="c-section__page-title">お問い合わせ<br>フォーム</h1>
                <span class="c-section__page-title-en">Contact form</span>
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
                <div class="p-contact__top-title-wrapper">
                    <h2 class="p-contact__top-title">見学・面談のご希望、教育相談・カウンセリングなどの<br class="c-sub-block">お問い合わせを受け付けております。</h2>
                    <p class="p-contact__top-text">下記フォームよりお問い合わせを承ります。各項目にご入力後、「確認画面へ」ボタンを押してください。</p>
                </div>
                <div class="p-contact__form">
                    <?php echo do_shortcode('[contact-form-7 id="e2b6d7c" title="お問い合わせフォーム"]'); ?>
                </div>
                <!-- モーダル（確認画面） -->
                <div id="confirmation-modal" class="modal">
                    <div class="modal-content">
                        <h2 class="p-contact__confirm-title">お問い合わせ<br class="c-pc-hidden">（確認画面）</h2>
                        <p class="p-contact__confirm-text">入力内容をご確認いただき「送信する」ボタンを押してください。</p>
                        <div class="p-contact__confirm-contents-container">
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■ご用件</h3><span class="p-contact__confirm-item" id="confirm-radio-kinds"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■お名前</h3><span class="p-contact__confirm-item" id="confirm-your-name"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■会社名</h3><span class="p-contact__confirm-item" id="confirm-your-furigana"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■メールアドレス</h3><span class="p-contact__confirm-item" id="confirm-your-email"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■電話番号</h3><div class="p-contact__confirm-item-tel-wrapper"><span class="p-contact__confirm-item" id="confirm-tel-number01"></span>-<span class="p-contact__confirm-item" id="confirm-tel-number02"></span>-<span class="p-contact__confirm-item" id="confirm-tel-number03"></span></div></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■住所</h3><div class="p-contact__confirm-item-wrapper"><div class="p-contact__confirm-post-code-wrapper">〒<span class="p-contact__confirm-item" id="confirm-post-code01"></span>-<span class="p-contact__confirm-item" id="confirm-post-code02"></span></div><div class="p-contact__confirm-address-wrapper"><span class="p-contact__confirm-item" id="confirm-your-address"></span></div></div></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■学校名</h3><span class="p-contact__confirm-item" id="confirm-your-school"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■学年</h3><span class="p-contact__confirm-item" id="confirm-your-grade"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■対応可能な日時</h3><span class="p-contact__confirm-item" id="confirm-date-time"></span></div>
                            <div class="p-contact__confirm-contents-wrapper"><h3 class="p-contact__confirm-contents-title">■お問い合わせ内容</h3><span class="p-contact__confirm-item" id="confirm-contents"></span></div>
                        </div>
                        <div class="p-contact__confirm-button-wrapper">
                            <button type="button" class="confirm-button p-contact__confirm-prev-button" id="back-button"><i class="fa-solid fa-chevron-left"></i>入力画面に戻る</button>
                            <button type="submit" class="confirm-button p-contact__confirm-thanks-button" id="submit-button">送信する<i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-contact__bottom-text-wrapper">
                    <div class="p-contact__bottom-tel-text">TEL：
                        <a class="p-contact__bottom-tel" href="tel:070-2012-9527">070-2012-9527</a>
                    </div>
                    <p class="p-contact__bottom-text">※やむを得ない事情を除きお問い合わせは、原則「メール」か「LINE」にてご連絡くださいますようお願いいたします。</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>