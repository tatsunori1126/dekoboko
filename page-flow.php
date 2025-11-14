<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-flow">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/flow/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">ご利用の流れ</h1>
                <span class="c-section__page-title-en p-flow__page-title-en">Flow</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/flow/page-main-img.png" alt="">
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
        <div class="p-flow__container">
            <div class="c-inner">
                <div class="p-flow__container-box">
                    <section class="p-flow__section">
                        <div class="c-section__page-title-wrapper p-flow__title-wrapper fadeUp">
                            <h2 class="c-section__page-title">入塾・入会までの流れ</h2>
                            <span class="c-section__page-title-en p-flow__page-title-en">Enrollment</span>
                        </div>
                        <div class="p-flow__box">
                            <div class="p-flow__wrapper fadeUp">
                                <div class="p-flow__icon">
                                    <span class="p-flow__num">STEP<span class="p-flow__num-font">01</span></span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/flow/enrollment-icon01.png" alt="STEP01">
                                </div>
                                <div class="p-flow__content">
                                    <h3 class="p-flow__title">お問い合わせ</h3>
                                    <div class="p-flow__text-wrapper">
                                        <p class="p-flow__text">まずはお気軽にお問い合わせください。<br><a href="https://lin.ee/ivHAxks" target="_blank">公式LINE</a> または <a href="<?php echo esc_url( home_url( '/contact-input' ) ); ?>">専用フォーム</a> からご連絡いただけます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-flow__wrapper fadeUp">
                                <div class="p-flow__icon">
                                    <span class="p-flow__num">STEP 02</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/flow/enrollment-icon02.png" alt="STEP02">
                                </div>
                                <div class="p-flow__content">
                                    <h3 class="p-flow__title">説明会・個別相談</h3>
                                    <div class="p-flow__text-wrapper">
                                        <p class="p-flow__text">DEKObokoでは、入塾前に教室の雰囲気や学び方を知っていただく場として、説明会や個別相談を実施しています。保護者の方のご不安やお子さまの特性についても、丁寧にお伺いいたします。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-flow__wrapper fadeUp">
                                <div class="p-flow__icon p-flow__icon--last">
                                    <span class="p-flow__num">STEP 03</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/flow/enrollment-icon03.png" alt="STEP03">
                                </div>
                                <div class="p-flow__content">
                                    <h3 class="p-flow__title">ご入塾手続き・ご入会手続き</h3>
                                    <div class="p-flow__text-wrapper">
                                        <p class="p-flow__text">DEKObokoで学びたい！と思っていただけましたら、ご入塾・ご入会のお手続きを進めます。必要書類のご案内や費用・スケジュールの確認を行い、初回授業の日程やご受講の日時を決定いたします。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="p-flow__section">
                        <div class="c-section__page-title-wrapper p-flow__title-wrapper fadeUp">
                            <h2 class="c-section__page-title">受講までの流れ</h2>
                            <span class="c-section__page-title-en p-flow__page-title-en">Course Participation</span>
                        </div>
                        <div class="p-flow__box">
                            <div class="p-flow__wrapper fadeUp">
                                <div class="p-flow__icon">
                                    <span class="p-flow__num">STEP<span class="p-flow__num-font">01</span></span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/flow/participation-icon01.png" alt="STEP01">
                                </div>
                                <div class="p-flow__content">
                                    <h3 class="p-flow__title">オリエンテーション</h3>
                                    <div class="p-flow__text-wrapper">
                                        <p class="p-flow__text">まずはオリエンテーションを行い、お子さまの学習スタイルや得意・不得意・目標などを確認します。一人ひとりに合った学び方を一緒にデザインしていきます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-flow__wrapper fadeUp">
                                <div class="p-flow__icon">
                                    <span class="p-flow__num">STEP 02</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/flow/participation-icon02.png" alt="STEP02">
                                </div>
                                <div class="p-flow__content">
                                    <h3 class="p-flow__title">学習計画の作成</h3>
                                    <div class="p-flow__text-wrapper">
                                        <p class="p-flow__text">講師と相談しながら、無理なく続けられる学習計画を立てます。計画では、塾での学習だけでなく、ご家庭での過ごし方や生活リズムも含め、お子さまに合った計画をつくります。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-flow__wrapper fadeUp">
                                <div class="p-flow__icon p-flow__icon--last">
                                    <span class="p-flow__num">STEP 03</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/flow/participation-icon03.png" alt="STEP03">
                                </div>
                                <div class="p-flow__content">
                                    <h3 class="p-flow__title">授業スタート</h3>
                                    <div class="p-flow__text-wrapper">
                                        <p class="p-flow__text">いよいよ学びのスタートです。安心できるDEKObokoの環境で、ワクワクする学びをはじめましょう！</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>