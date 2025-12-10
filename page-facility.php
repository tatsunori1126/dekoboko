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
                <div class="c-section__page-title-wrapper p-facility__title-wrapper fadeUp">
                    <h2 class="c-section__page-title">教室について</h2>
                    <span class="c-section__page-title-en p-facility__page-title-en">Classroom</span>
                </div>
                <div class="p-facility__column-wrapper">
                    <div class="p-facility__img-wrapper fadeUp">
                        <img class="p-facility__img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-img.png" alt="教室のイメージ">
                    </div>
                    <div class="p-facility__text-wrapper">
                        <h3 class="p-facility__text-title-wrapper">
                            <span class="p-facility__text-title fadeUp">安心とつながりの中で、</span>
                            <span class="p-facility__text-title fadeUp">自分らしく学び合える</span>
                            <span class="p-facility__text-title fadeUp">DEKObokoの空間</span>
                        </h3>
                        <p class="p-facility__text fadeUp">DEKObokoの教室は、自分のペースで自然と集中できる自習スペースと、気持ちを切り替えて過ごせる交流スペース、そして中心にある授業スペースが一体となった空間です。<br>普段の授業だけでなく、自習室はコワーキングスペースのようにレンタルのみの利用も可能。勉強や仕事の拠点として、地域の方にも幅広くご活用いただけます。<br>「集中」「リラックス」「学び合い」の環境がそろっているからこそ、勉強だけでなく、人とのつながりや居場所感も自然に育まれていきます。</p>
                    </div>
                </div>
                <div class="p-facility__wave-area">
                    <div class="p-facility__wave-bg"></div>
                    <div class="p-facility__wave-container">
                        <div class="p-facility__box">
                            <h3 class="p-facility__subtitle fadeUp">エリア紹介</h3>
                            <div class="p-facility__area-container">
                                <div class="p-facility__area-wrapper fadeUp">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img01.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">授業・講座エリア</h4>
                                    <p class="p-facility__area-text">授業や講座を行うスペース。講師とのやり取りやグループワークにも対応可能です。少人数ならではの一体感と、程よい広さによる安心感が両立した空間です。</p>
                                </div>
                                <div class="p-facility__area-wrapper fadeUp">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img02.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">グループワークエリア</h4>
                                    <p class="p-facility__area-text">仲間と意見を交わしながら課題に取り組めるスペース。宿題や共同作業を通じて、コミュニケーション力や発想力を育みます。</p>
                                </div>
                                <div class="p-facility__area-wrapper fadeUp">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img03.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">自習席エリア</h4>
                                    <p class="p-facility__area-text">静かに集中して学習できる環境。コワーキングのように席のレンタルも可能で、自分のペースで学習できます。</p>
                                    <div class="p-facility__area-btn-wrapper">
                                        <a class="p-facility__area-btn" href="https://lin.ee/ivHAxks" target="_blank">予約はこちら<i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="p-facility__area-wrapper fadeUp">
                                    <div class="p-facility__area-img-wrapper">
                                        <img class="p-facility__area-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/area-img04.png" alt="">
                                    </div>
                                    <h4 class="p-facility__area-title">休憩エリア</h4>
                                    <p class="p-facility__area-text">本を読んだり、仲間とゲームや映画鑑賞を楽しんだりしながら気分を切り替えられます。休憩しつつ自然に交流が生まれる“リフレッシュの場”としてご利用いただけます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-facility__box">
                            <h3 class="p-facility__subtitle fadeUp">設備</h3>
                            <div class="p-facility__equipment-container">
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment01.png" alt="フリーWi-Fi">
                                    </div>
                                    <h4 class="p-facility__equipment-title">フリーWi-Fi</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment02.png" alt="自習室">
                                    </div>
                                    <h4 class="p-facility__equipment-title">自習室</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment03.png" alt="給湯スペース">
                                    </div>
                                    <h4 class="p-facility__equipment-title">給湯スペース</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment04.png" alt="参考書・教材棚">
                                    </div>
                                    <h4 class="p-facility__equipment-title">参考書・教材棚</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment05.png" alt="授業席">
                                    </div>
                                    <h4 class="p-facility__equipment-title">冷蔵庫</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment06.png" alt="楽器">
                                    </div>
                                    <h4 class="p-facility__equipment-title">楽器</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
                                    <div class="p-facility__equipment-img-wrapper">
                                        <img class="p-facility__equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/class-equipment07.png" alt="ダーツ">
                                    </div>
                                    <h4 class="p-facility__equipment-title">ダーツ</h4>
                                </div>
                                <div class="p-facility__equipment-wrapper fadeUp">
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

            <section id="rental" class="p-facility__wrapper p-facility__wrapper--rental">
                <div class="c-section__page-title-wrapper p-facility__title-wrapper fadeUp">
                    <h2 class="c-section__page-title">自習室レンタル</h2>
                    <span class="c-section__page-title-en p-facility__page-title-en">Study Space Rental</span>
                </div>
                <div class="p-facility__column-wrapper">
                    <div class="p-facility__img-wrapper fadeUp">
                        <img class="p-facility__img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-img.png" alt="">
                    </div>
                    <div class="p-facility__text-wrapper">
                        <h3 class="p-facility__text-title-wrapper">
                            <span class="p-facility__text-title fadeUp">未来につながる、</span>
                            <span class="p-facility__text-title fadeUp">もうひとつの学習空間</span>
                        </h3>
                        <div class="p-facility__text-block">
                            <p class="p-facility__text fadeUp">
                                DEKObokoの自習室コースは、学校や職場、自宅とは少しちがう「もうひとつの学びの場」です。<br>
                                小・中・高校生の塾生はもちろん、<span class="p-facility__text-orange">塾外生・大学生・社会人など、多世代の学び手が集まり、各自の目標に向かって手を動かす共学スペース</span>としてご利用いただけます。<br>
                                一人用ブースで自分のスペースは守りながらも、周りには同じように勉強や仕事に向き合う人の気配があります。<br>
                                <span class="p-facility__text-orange">ほどよい静けさと「みんなも頑張っている」という空気感</span>の中で、集中と安心の両方を感じられる学習環境です。<br>
                                Wi-Fiや電源も完備しているため、パソコンを使った勉強やレポート作成、リモートワークにも最適。<br>
                                休憩時間には、世代の違う利用者同士で軽く言葉を交わし、学びやキャリアの話に広がることもあります。
                            </p>
                            <div class="p-facility__text-block-sub">
                                <h3 class="p-facility__text-block-title">◎特徴</h3>
                                <div class="p-facility__text-block-number-box">
                                    <div class="p-facility__text-block-number-wrapper">
                                        <h4 class="p-facility__text-block-number-title">① 集中しやすいけれど、ちゃんと人の気配がある空間</h4>
                                        <p class="p-facility__text-block-number-text">完全な無音の“サイレントルーム”ではなく、それぞれが静かに作業している気配が伝わる、自習室らしい空気感があります。自宅で一人きりで勉強するのとは違う、「みんなも頑張っているから、自分ももうひと踏ん張りしようかな」と思える場です。</p>
                                    </div>
                                    <div class="p-facility__text-block-number-wrapper">
                                        <h4 class="p-facility__text-block-number-title">② 静かに作業しつつ、必要なときは会話や交流もOK</h4>
                                        <p class="p-facility__text-block-number-text">基本は「学びや仕事に向き合う時間」が中心ですが、ちょっとした質問や情報交換、世間話程度の会話は歓迎しています。大声で騒いだり、長時間の雑談で誰かの集中を妨げることは控えつつ、多世代がゆるく声をかけ合える“リビングのような自習室”をイメージしています。</p>
                                    </div>
                                    <div class="p-facility__text-block-number-wrapper">
                                        <h4 class="p-facility__text-block-number-title">③ 多世代交流を大切に</h4>
                                        <p class="p-facility__text-block-number-text">中高生・大学生・社会人・保護者など、さまざまな立場の人が、同じ空間でそれぞれの「学び」を進めています。ふとしたきっかけで、「その資格ってどんな勉強するんですか？」「そのレポート、おもしろそうですね」といった会話が生まれることもあります。ただ一人で机に向かうだけでなく、多世代から刺激を受けたい方におすすめの環境です。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-facility__recommend-wrapper">
                                <h3 class="p-facility__recommend-title">◎こんな方におすすめ</h3>
                                <p class="p-facility__recommend-text">
                                    ・「同じように頑張っている人がいる空間」の方がやる気が出る人<br>
                                    ・世代の違う人と、学びやキャリアの話をしてみたい人<br>
                                    ・「ただ静かなだけの自習室」よりは、ゆるくつながりながら学びたい人
                                </p>
                            </div>
                        </div>
                        <div class="c-btn__wrapper p-facility__rental-btn-wrapper fadeUp">
                            <a class="c-btn p-facility__rental-link p-facility__rental-link-contact" href="<?php echo esc_url( home_url( '/faq/#faq_contact' ) ); ?>" data-scroll-link>お問い合わせへ進む<span class="c-btn__circle-bg p-facility__rental-link-circle-bg"><img class="c-btn__circle-arrow p-facility__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                            <a class="c-btn p-facility__rental-link" href="https://lin.ee/ivHAxks" target="_blank">LINE予約へ進む<span class="c-btn__circle-bg p-facility__rental-link-circle-bg"><img class="c-btn__circle-arrow p-facility__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="p-facility__rental-box">
                    <div class="p-facility__rental-price-container">
                        <h3 class="p-facility__subtitle fadeUp">料金</h3>
                        <div class="p-facility__rental-price-table-container scroll-hint fadeUp">
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
                        <p class="p-facility__rental-price-text fadeUp">※現金決済不可。お振込み、クレジット決済、QR決済、引き落としのみ対応。</p>
                    </div>
                    <div class="p-facility__rental-equipment-container">
                        <h3 class="p-facility__subtitle fadeUp">設備</h3>
                        <div class="p-facility__rental-equipment-box">
                            <div class="p-facility__rental-equipment-wrapper fadeUp">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment01.png" alt="フリーWi-Fi">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">フリーWi-Fi</h4>
                            </div>
                            <div class="p-facility__rental-equipment-wrapper fadeUp">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment02.png" alt="自習席">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">自習席</h4>
                            </div>
                            <div class="p-facility__rental-equipment-wrapper fadeUp">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment03.png" alt="給湯スペース">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">給湯スペース</h4>
                            </div>
                            <div class="p-facility__rental-equipment-wrapper fadeUp">
                                <div class="p-facility__rental-equipment-img-wrapper">
                                    <img class="p-facility__rental-equipment-img" src="<?php echo get_template_directory_uri(); ?>/images/facility/rental-equipment04.png" alt="参考書・教材棚">
                                </div>
                                <h4 class="p-facility__rental-equipment-title">参考書・教材棚</h4>
                            </div>
                        </div>
                    </div>
                    <div class="p-facility__rental-user-container">
                        <h3 class="p-facility__subtitle fadeUp">こんな方が利用しています</h3>
                        <ul class="p-facility__user-list fadeUp">
                            <li class="p-facility__user-item">宿題に集中したい中高生</li>
                            <li class="p-facility__user-item">スキルアップを目指している社会人</li>
                            <li class="p-facility__user-item">浪人生活を有意義に過ごしたい方</li>
                            <li class="p-facility__user-item">在宅ワーク・テレワークの方</li>
                            <li class="p-facility__user-item">課題に集中したい大学生</li>
                            <li class="p-facility__user-item">仕事の作業スペースが必要な方</li>
                        </ul>
                        <div class="c-btn__wrapper fadeUp">
                            <a class="c-btn p-facility__rental-user-link" href="https://lin.ee/ivHAxks" target="_blank">LINEで自習室予約へ進む<span class="c-btn__circle-bg p-facility__rental-user-link-circle-bg"><img class="c-btn__circle-arrow p-facility__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>