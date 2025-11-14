<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-reservation">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/reservation/page-main-img.png" alt="">
        </div>
        <div class="p-reservation__bottom-main-img-wrapper">
            <img class="p-reservation__bottom-main-img" src="<?php echo get_template_directory_uri(); ?>/images/reservation/bottom-bg-circle.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">個別相談・<br>説明会のご予約</h1>
                <span class="c-section__page-title-en">Reservation</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/reservation/page-main-img.png" alt="">
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
            <div class="p-reservation__container">
            <div id="consulting" class="p-reservation__wrapper">
                    <div class="c-section__page-title-wrapper p-reservation__title-wrapper fadeUp">
                        <h2 class="c-section__page-title">個別相談のご予約</h2>
                        <span class="c-section__page-title-en p-reservation__page-title-en">Individual Consultation</span>
                    </div>
                    <div class="p-reservation__column-container">
                        <div class="p-reservation__column-img-wrapper fadeUp">
                            <img class="p-reservation__column-img" src="<?php echo get_template_directory_uri(); ?>/images/reservation/consulting.png" alt="説明会のイメージ">
                        </div>
                        <div class="p-reservation__column-text-wrapper">
                            <h3 class="p-reservation__column-text-title fadeUp">一人ひとりに合わせた学び方を、<br class="c-sp-only">じっくりとご相談いただけます。</h3>
                            <p class="p-reservation__column-text fadeUp">より具体的にご相談されたい方には、個別相談をご用意しています。<br>お子さまの状況やご家庭のご希望をお伺いし、一人ひとりに合わせた学び方をご提案いたします。不登校・発達特性・進学など、どんなテーマでも安心してお話しください。</p>
                            <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                                <a class="c-btn p-reservation__link" href="https://lin.ee/ivHAxks" target="_blank">LINE予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__link-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="p-reservation__merit-wrapper">
                        <h3 class="p-reservation__merit-title fadeUp">参加するメリット</h3>
                        <div class="p-reservation__merit-item-container">
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number01.png" alt="01">
                                </div>
                                <h4 class="p-reservation__merit-item-title">お子さまの状況に合った<br>提案ができる</h4>
                                <p class="p-reservation__merit-text">学習のつまづきや生活リズムなど、ご家庭ごとのお悩みに合わせた具体的な提案が可能です。</p>
                            </div>
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper p-reservation__merit-item-number-wrapper02">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number02.png" alt="02">
                                </div>
                                <h4 class="p-reservation__merit-item-title">保護者のお悩みに<br>じっくり相談できる</h4>
                                <p class="p-reservation__merit-text">「学校に行きづらい」、「宿題をやらない」など、日常の細かなお悩みも安心してご相談いただけます。</p>
                            </div>
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper p-reservation__merit-item-number-wrapper03">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number03.png" alt="03">
                                </div>
                                <h4 class="p-reservation__merit-item-title">入塾後の具体的な<br>イメージが持てる</h4>
                                <p class="p-reservation__merit-text">実際に入塾した場合のスケジュールや、学習サポート体制について、個別にご相談いただけます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                        <a class="c-btn p-reservation__link" href="https://lin.ee/ivHAxks" target="_blank">LINEで説明会の予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                    </div>
                </div>

                <div id="session" class="p-reservation__wrapper">
                    <div class="c-section__page-title-wrapper p-reservation__title-wrapper fadeUp">
                        <h2 class="c-section__page-title">説明会のご予約</h2>
                        <span class="c-section__page-title-en p-reservation__page-title-en">Information Session</span>
                    </div>
                    <div class="p-reservation__column-container">
                        <div class="p-reservation__column-img-wrapper fadeUp">
                            <img class="p-reservation__column-img" src="<?php echo get_template_directory_uri(); ?>/images/reservation/session-img.png" alt="説明会のイメージ">
                        </div>
                        <div class="p-reservation__column-text-wrapper">
                            <h3 class="p-reservation__column-text-title fadeUp">DEKObokoの想いや<br class="c-sp-only">学びのスタイルを、<br class="c-sp-only">まずは説明会で体感ください。</h3>
                            <p class="p-reservation__column-text fadeUp">DEKObokoの雰囲気や学びのスタイルを、まずは知っていただくために説明会を開催しています。教室の環境やカリキュラムについて、実際にご覧いただきながらご説明します。「自分に合っているかな？」という疑問を解消する場として、お気軽にご参加ください。</p>
                            <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                                <a class="c-btn p-reservation__link" href="https://lin.ee/ivHAxks" target="_blank">LINE予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__link-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="p-reservation__merit-wrapper">
                        <h3 class="p-reservation__merit-title fadeUp">参加するメリット</h3>
                        <div class="p-reservation__merit-item-container">
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number01.png" alt="01">
                                </div>
                                <h4 class="p-reservation__merit-item-title">教室の雰囲気を<br>体験できる</h4>
                                <p class="p-reservation__merit-text">実際の学習環境や居心地を見ていただけるので、お子さまが安心して通えるかどうか、確かめられます。</p>
                            </div>
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper p-reservation__merit-item-number-wrapper02">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number02.png" alt="02">
                                </div>
                                <h4 class="p-reservation__merit-item-title">当塾の教育理念や<br>学びの『仕組み化』を<br>理解できる</h4>
                                <p class="p-reservation__merit-text">DEKObokoの教育理念や学びを仕組み化する工夫をわかりやすくお伝えします。</p>
                            </div>
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper p-reservation__merit-item-number-wrapper03">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number03.png" alt="03">
                                </div>
                                <h4 class="p-reservation__merit-item-title">無理のない<br>検討ができる</h4>
                                <p class="p-reservation__merit-text">説明会は情報収集の場です。無理な勧誘がないため、安心して比較・検討いただけます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                        <a class="c-btn p-reservation__link" href="https://lin.ee/ivHAxks" target="_blank">LINEで説明会の予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>