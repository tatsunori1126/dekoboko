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
                <h1 class="c-section__page-title">個別相談・<br class="c-tab-hidden">体験授業・<br>セミナーのご予約</h1>
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
                        <h2 class="c-section__page-title">個別相談・<br class="c-tab-hidden">体験授業のご予約</h2>
                        <span class="c-section__page-title-en p-reservation__page-title-en">Individual Consultation</span>
                    </div>
                    <div class="p-reservation__column-container">
                        <div class="p-reservation__column-img-wrapper fadeUp">
                            <img class="p-reservation__column-img" src="<?php echo get_template_directory_uri(); ?>/images/reservation/consulting.png" alt="セミナーのイメージ">
                        </div>
                        <div class="p-reservation__column-text-wrapper">
                            <h3 class="p-reservation__column-text-title fadeUp">一人ひとりに合わせた学び方を、<br class="c-sp-only">じっくりとご相談いただけます。</h3>
                            <div class="p-reservation__column-text-block">
                                <p class="p-reservation__column-text fadeUp">より具体的にご相談されたい方には、個別相談や体験授業をご用意しています。<br>お子さまの状況やご家庭のご希望をお伺いし、一人ひとりに合わせた学び方をご提案いたします。不登校・発達特性・進学など、どんなテーマでも安心してお話しください。また体験授業も随時受け付けておりますので個別相談の際に、お気軽にお申し付けください。<br><br>※体験授業のみご希望の場合は、公式LINEにてその旨お問い合わせください。</p>
                            </div>
                            <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                                <a class="c-btn p-reservation__link" href="https://liff.line.me/1661073504-0kZWVBjp?liff_id=1661073504-0kZWVBjp&is=3mNMMSmaD2" target="_blank">個別相談の予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__link-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
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
                                <h4 class="p-reservation__merit-item-title">お子さんに関する<br>お悩みごとを<br>じっくり相談できる</h4>
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
                        <a class="c-btn p-reservation__link" href="https://liff.line.me/1661073504-0kZWVBjp?liff_id=1661073504-0kZWVBjp&is=3mNMMSmaD2" target="_blank">個別相談の予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                    </div>
                </div>

                <div id="session" class="p-reservation__wrapper">
                    <div class="c-section__page-title-wrapper p-reservation__title-wrapper fadeUp">
                        <h2 class="c-section__page-title">セミナーのご予約</h2>
                        <span class="c-section__page-title-en p-reservation__page-title-en">Information Session</span>
                    </div>
                    <div class="p-reservation__column-container">
                        <div class="p-reservation__column-img-wrapper fadeUp">
                            <img class="p-reservation__column-img" src="<?php echo get_template_directory_uri(); ?>/images/reservation/session-img.png" alt="セミナーのイメージ">
                        </div>
                        <div class="p-reservation__column-text-wrapper">
                            <h3 class="p-reservation__column-text-title fadeUp">子どもの「つまずき」を、<br class="c-sp-only">家で支えられるようになる60分<br>― 親子の関わり方と学習支援の<br class="c-sp-only">“考え方”を学ぶセミナー </h3>
                            <div class="p-reservation__column-text-block">
                                <p class="p-reservation__column-text fadeUp">DEKObokoでは、「安心して試せる環境」と「明日から使える実践知」をキーワードに、子どもの学びと心を支えるサポートを行っています。</p>
                                <p class="p-reservation__column-text fadeUp">本セミナーでは、<br>・子どもへの声かけや関わり方<br>・勉強の伴走の仕方<br>・家庭内コミュニケーションの整え方<br>について、臨床心理学・発達心理学・教育学・脳科学の知見をベースに、事例を交えながらお伝えします。</p>
                                <p class="p-reservation__column-text fadeUp">「うちの子、このままで大丈夫かな…」<br>「勉強を教える以前に、関わり方に自信がない…」<br>そんな不安やモヤモヤを、一緒に“言語化”し、具体的な打ち手まで落とし込んでいく時間です。</p>
                                <p class="p-reservation__column-text fadeUp"><span class="p-reservation__column-text-font">●セミナーで得られること</span><br>・今日から使える「声かけ」と「関わり方」のポイントがわかる<br>・宿題・勉強に向き合えない背景を、心理学的な視点から整理できる<br>・イライラや不安が生まれにくい家庭内コミュニケーションの工夫が学べる<br>・「頑張れる子」ではなく、「自分で整えながら進める子」を育てる考え方が理解できる<br>・DEKObokoが実践している支援メソッドの全体像を知ることができる</p>
                                <p class="p-reservation__column-text fadeUp"><span class="p-reservation__column-text-font">●こんな方におすすめです</span><br>・お子さまの不登校・学習の遅れ・凸凹特性などに悩んでいる保護者の方<br>・家庭の中で子どもとどう関わっていいか分からなくて方針を見つけたい方<br>・将来、子ども・保護者支援に関わる仕事をしたい・すでに携わっている方</p>
                            </div>
                            <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                                <a class="c-btn p-reservation__link" href="https://liff.line.me/1661073504-0kZWVBjp?liff_id=1661073504-0kZWVBjp&group_id=154145" target="_blank">セミナー参加の予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__link-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
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
                                <h4 class="p-reservation__merit-item-title">子どもの困りごとを<br>整理して理解できる</h4>
                                <p class="p-reservation__merit-text">行動の背景にある特性や環境の影響を学べるので、お子さまの今の姿をより立体的にとらえやすくなります。</p>
                            </div>
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper p-reservation__merit-item-number-wrapper02">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number02.png" alt="02">
                                </div>
                                <h4 class="p-reservation__merit-item-title">明日から使える関わり方・<br>声かけのコツが分かる</h4>
                                <p class="p-reservation__merit-text">具体的な声かけ例やサポートのステップが学べるので、家庭での関わり方に安心して新しい工夫を加えられます。</p>
                            </div>
                            <div class="p-reservation__merit-item-wrapper fadeUp">
                                <div class="p-reservation__merit-item-number-wrapper p-reservation__merit-item-number-wrapper03">
                                    <img class="p-reservation__merit-item-number" src="<?php echo get_template_directory_uri(); ?>/images/reservation/number03.png" alt="03">
                                </div>
                                <h4 class="p-reservation__merit-item-title">子育てや学習支援の<br>「軸」がはっきりする</h4>
                                <p class="p-reservation__merit-text">大切にしたい価値観や優先順位を整理できるので、ご家庭なりの子育て方針を言葉にして共有しやすくなります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="c-btn__wrapper p-reservation__btn-wrapper fadeUp">
                        <a class="c-btn p-reservation__link" href="https://liff.line.me/1661073504-0kZWVBjp?liff_id=1661073504-0kZWVBjp&group_id=154145" target="_blank">セミナー参加の予約へ進む<span class="c-btn__circle-bg p-reservation__link-circle-bg"><img class="c-btn__circle-arrow p-reservation__circle-arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-right-black.png" alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>