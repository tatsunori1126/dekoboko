<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-results">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/results/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">合格実績</h1>
                <span class="c-section__page-title-en">Results</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/results/page-main-img.png" alt="">
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
            <div class="p-results__container">
                <section class="p-results__wrapper">
                    <h2 class="p-results__title">2025年度の進学実績</h2>
                    <div class="p-results__block">
                        <div class="p-results__box">
                            <h3 class="p-results__subtitle">高校</h3>
                            <ul class="p-results__list">
                                <li class="p-results__item">・クラーク記念国際高等学校<br class="c-tab-hidden">（FYLコース）</li>
                                <li class="p-results__item">・星野高等学校<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・近畿大学工業高等専門学校<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・自由の森学園高等学校<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・サレジオ工業高等専門学校<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・松山女子高等学校<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・豊南高等学校<br class="c-tab-hidden">（DYLコース）</li>
                            </ul>
                        </div>
                        <div class="p-results__box">
                            <h3 class="p-results__subtitle">大学</h3>
                            <ul class="p-results__list">
                                <li class="p-results__item">・日本体育大学<br class="c-tab-hidden">（CYLコース）</li>
                                <li class="p-results__item">・国士館大学<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・上智大学<br class="c-tab-hidden">（TYLコース）</li>
                                <li class="p-results__item">・日本大学<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・中央大学<br class="c-tab-hidden">（TYLコース）</li>
                                <li class="p-results__item">・武蔵野大学<br class="c-tab-hidden">（DYLコース）</li>
                                <li class="p-results__item">・城西大学<br class="c-tab-hidden">（DYLコース）</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="p-results__wrapper">
                    <h2 class="p-results__title">過去の進学実績</h2>
                    <div class="p-results__block">
                        <div class="p-results__box">
                            <h3 class="p-results__subtitle">高校</h3>
                            <div class="p-results__past-container">
                                <div class="p-results__past-wrapper">
                                    <h4 class="p-results__past-year">東京都</h4>
                                    <ul class="p-results__list">
                                        <li class="p-results__item">・井草高校</li>
                                        <li class="p-results__item">・田無高校</li>
                                        <li class="p-results__item">・大泉高校</li>
                                        <li class="p-results__item">・西高校</li>
                                        <li class="p-results__item">・北園高校</li>
                                        <li class="p-results__item">・保谷高校</li>
                                        <li class="p-results__item">・石神井高校</li>
                                        <li class="p-results__item">・武蔵丘高校</li>
                                        <li class="p-results__item">・新宿高校</li>
                                        <li class="p-results__item">・武蔵野北　など</li>
                                    </ul>
                                </div>
                                <div class="p-results__past-wrapper">
                                    <h4 class="p-results__past-year">埼玉県</h4>
                                    <ul class="p-results__list">
                                        <li class="p-results__item">・朝霞高校</li>
                                        <li class="p-results__item">・所沢高校</li>
                                        <li class="p-results__item">・朝霞西高校</li>
                                        <li class="p-results__item">・所沢北高校</li>
                                        <li class="p-results__item">・川越女子高校</li>
                                        <li class="p-results__item">・所沢西高校</li>
                                        <li class="p-results__item">・川越南高校</li>
                                        <li class="p-results__item">・新座柳瀬高校</li>
                                        <li class="p-results__item">・狭山清陵高校</li>
                                        <li class="p-results__item">・和光国際高校　など</li>
                                    </ul>
                                </div>
                                <div class="p-results__past-wrapper">
                                    <h4 class="p-results__past-year">私立</h4>
                                    <ul class="p-results__list">
                                        <li class="p-results__item">・國學院大學久我山高校</li>
                                        <li class="p-results__item">・東亜学園高校</li>
                                        <li class="p-results__item">・錦城高校</li>
                                        <li class="p-results__item">・東洋大学京北高校</li>
                                        <li class="p-results__item">・西武学園文理高校</li>
                                        <li class="p-results__item">・日本大学豊山高校</li>
                                        <li class="p-results__item">・西武台高校</li>
                                        <li class="p-results__item">・保善高校</li>
                                        <li class="p-results__item">・拓殖大学第一高校</li>
                                        <li class="p-results__item">・細田学園　など</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="p-results__box">
                            <h3 class="p-results__subtitle">大学</h3>
                            <div class="p-results__past-container">
                                <div class="p-results__past-wrapper">
                                    <ul class="p-results__list">
                                        <li class="p-results__item">・青山学院大学</li>
                                        <li class="p-results__item">・日本大学</li>
                                        <li class="p-results__item">・亜細亜大学</li>
                                        <li class="p-results__item">・文教大学</li>
                                        <li class="p-results__item">・慶應大学</li>
                                        <li class="p-results__item">・法政大学</li>
                                        <li class="p-results__item">・帝京大学</li>
                                        <li class="p-results__item">・武蔵大学</li>
                                        <li class="p-results__item">・東洋大学</li>
                                        <li class="p-results__item">・立教大学　など</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>