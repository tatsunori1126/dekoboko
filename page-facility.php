<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-facility">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">施設紹介</h1>
                <span class="c-section__page-title-en p-facility__page-title-en">Facilities</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/facility/page-main-img.png" alt="">
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
        <div class="p-facility__container">
            <section class="p-facility__wrapper">
                <div class="c-section__page-title-wrapper p-facility__title-wrapper">
                    <h2 class="c-section__page-title">教室について</h2>
                    <span class="c-section__page-title-en p-facility__page-title-en">Classroom</span>
                </div>
                <div class="p-facility__column-wrapper">
                    <div class="p-facility__img-wrapper">
                        <img class="p-facility__img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-img.png" alt="教室のイメージ">
                    </div>
                    <div class="p-facility__text-wrapper">
                        <h3 class="p-facility__text-title-wrapper">
                            <span class="p-facility__text-title">安心とつながりの中で、</span>
                            <span class="p-facility__text-title">自分らしく学び合える</span>
                            <span class="p-facility__text-title">DEKObokoの空間</span>
                        </h3>
                        <p class="p-facility__text">DEKObokoの教室は、自分のペースで自然と集中できる自習スペースと、気持ちを切り替えて過ごせる交流スペース、そして中心にある授業スペースが一体となった空間です。<br>普段の授業だけでなく、自習室はコワーキングスペースのようにレンタルのみの利用も可能。勉強や仕事の拠点として、地域の方にも幅広くご活用いただけます。<br>「集中」「リラックス」「学び合い」の環境がそろっているからこそ、勉強だけでなく、人とのつながりや居場所感も自然に育まれていきます。</p>
                    </div>
                </div>
                <div class="p-facility__wave-area">
                    <div class="p-facility__wave-bg"></div>
                    <div class="p-facility__wave-container">
                        <div class="p-facility__box">
                            <h3 class="p-facility__subtitle">エリア紹介</h3>
                            <div class="p-facility__area-container">
                                <div class="p-facility__area-wrapper">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img01.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">授業・講座エリア</h4>
                                    <p class="p-facility__area-text">授業や講座を行うスペース。講師とのやり取りやグループワークにも対応可能です。少人数ならではの一体感と、程よい広さによる安心感が両立した空間です。</p>
                                </div>
                                <div class="p-facility__area-wrapper">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img02.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">グループワークエリア</h4>
                                    <p class="p-facility__area-text">仲間と意見を交わしながら課題に取り組めるスペース。宿題や共同作業を通じて、コミュニケーション力や発想力を育みます。</p>
                                </div>
                                <div class="p-facility__area-wrapper">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img03.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">自習席エリア</h4>
                                    <p class="p-facility__area-text">静かに集中して学習できる環境。コワーキングのように席のレンタルも可能で、自分のペースで学習できます。</p>
                                    <div class="p-facility__area-btn-wrapper">
                                        <a class="p-facility__area-btn" href="https://lin.ee/ivHAxks" target="_blank">予約はこちら<i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="p-facility__area-wrapper">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img04.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">休憩エリア</h4>
                                    <p class="p-facility__area-text">本を読んだり、仲間とゲームや映画鑑賞を楽しんだりしながら気分を切り替えられます。休憩しつつ自然に交流が生まれる“リフレッシュの場”としてご利用いただけます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-facility__box">
                            <h3 class="p-facility__subtitle">設備</h3>
                            <div class="p-facility__equipment-container">
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment01.png" alt="フリーWi-Fi">
                                    </div>
                                    <h4 class="p-facility__equipment-title">フリーWi-Fi</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment02.png" alt="自習室">
                                    </div>
                                    <h4 class="p-facility__equipment-title">自習室</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment03.png" alt="給湯スペース">
                                    </div>
                                    <h4 class="p-facility__equipment-title">給湯スペース</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment04.png" alt="参考書・教材棚">
                                    </div>
                                    <h4 class="p-facility__equipment-title">参考書・教材棚</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment05.png" alt="授業席">
                                    </div>
                                    <h4 class="p-facility__equipment-title">授業席</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment06.png" alt="楽器">
                                    </div>
                                    <h4 class="p-facility__equipment-title">楽器</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment07.png" alt="ダーツ">
                                    </div>
                                    <h4 class="p-facility__equipment-title">ダーツ</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment08.png" alt="ゲーム">
                                    </div>
                                    <h4 class="p-facility__equipment-title">ゲーム</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-facility__wrapper p-facility__wrapper--rental">
                <div class="c-section__page-title-wrapper p-facility__title-wrapper">
                    <h2 class="c-section__page-title">自習室レンタル</h2>
                    <span class="c-section__page-title-en p-facility__page-title-en">Study Space Rental</span>
                </div>
                <div class="p-facility__column-wrapper">
                    <div class="p-facility__img-wrapper">
                        <img class="p-facility__img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-img.png" alt="">
                    </div>
                    <div class="p-facility__text-wrapper">
                        <h3 class="p-facility__text-title-wrapper">
                            <span class="p-facility__text-title">未来につながる、</span>
                            <span class="p-facility__text-title">もうひとつの学習空間</span>
                        </h3>
                        <p class="p-facility__text">DEKObokoの自習室は、学校や職場、家庭や自宅とは違う「もうひとつの学びの場」です。小・中・高校生は授業以外の時間に自習エリアで自主学習を進め、大学生や社会人はレンタルスペースとして幅広い目的にご利用いただけます。<br>安心して集中できる環境と、気持ちを切り替えられる交流の場。ここでの学びや出会いが、あなたの未来を育てていきます。<br>Wi-Fiや電源を完備しているため、パソコンを使った勉強や仕事にも最適。休憩時にはソファや給湯スペースでリフレッシュすることもできます。<br>人の気配を感じながら「集中」と「リラックス」を両立できる──。DEKObokoは、学びを続けるあなたを支える学習空間です。</p>
                        <div class="c-btn__wrapper">
                            <a class="c-btn p-facility__rental-link" href="https://lin.ee/ivHAxks" target="_blank">LINE予約へ進む<img class="c-btn__circle-arrow p-facility__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/btn-circle-arrow.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="p-facility__rental-box">
                    <div class="p-facility__rental-price-container">
                        <h3 class="p-facility__subtitle">料金</h3>
                        <div class="p-facility__rental-price-table-container scroll-hint">
                            <table class="p-facility__rental-price-table">
                                <thead>
                                    <tr>
                                    <th>自習席レンタル</th>
                                    <th class="center">1時間</th>
                                    <th class="center">月</th>
                                    <th class="center">年</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>中高生・浪人生・大学生</td>
                                    <td>200円</td>
                                    <td>6,300円</td>
                                    <td>-</td>
                                    </tr>
                                    <tr>
                                    <td>社会人・保護者</td>
                                    <td>300円</td>
                                    <td>8,100円</td>
                                    <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="p-facility__rental-price-text">※現金決済不可。お振込み、クレジット決済、QR決済、引き落としのみ対応。</p>
                    </div>
                    <div class="p-facility__rental-equipment-container">
                        <h3 class="p-facility__subtitle">設備</h3>
                        <div class="p-facility__rental-equipment-box">
                            <div class="p-facility__rental-equipment-wrapper">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment01.png" alt="フリーWi-Fi">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">フリーWi-Fi</h4>
                            </div>
                            <div class="p-facility__rental-equipment-wrapper">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment02.png" alt="自習席">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">自習席</h4>
                            </div>
                            <div class="p-facility__rental-equipment-wrapper">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment03.png" alt="給湯スペース">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">給湯スペース</h4>
                            </div>
                            <div class="p-facility__rental-equipment-wrapper">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment04.png" alt="参考書・教材棚">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">参考書・教材棚</h4>
                            </div>
                        </div>
                    </div>
                    <div class="p-facility__rental-user-container">
                        <h3 class="p-facility__subtitle">こんな方が利用しています</h3>
                        <ul class="p-facility__user-list">
                            <li class="p-facility__user-item">宿題に集中したい中高生</li>
                            <li class="p-facility__user-item">スキルアップを目指している社会人</li>
                            <li class="p-facility__user-item">浪人生活を有意義に過ごしたい方</li>
                            <li class="p-facility__user-item">在宅ワーク・テレワークの方</li>
                            <li class="p-facility__user-item">課題に集中したい大学生</li>
                            <li class="p-facility__user-item">仕事の作業スペースが必要な方</li>
                        </ul>
                        <div class="c-btn__wrapper">
                            <a class="c-btn p-facility__rental-user-link" href="https://lin.ee/ivHAxks" target="_blank">LINEで自習室予約へ進む<img class="c-btn__circle-arrow p-facility__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/btn-circle-arrow.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>