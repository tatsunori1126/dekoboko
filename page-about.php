<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-about">
        <div class="c-circle__page-top-img-wrapper">
            <img class="c-circle__page-top-img" src="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle.png" alt="">
        </div>
        <div class="c-circle__page-right-img-wrapper">
            <img class="c-circle__page-right-img" src="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" alt="">
        </div>
        <div class="c-circle__page-top-main-img-wrapper">
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/about/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">デコボコとは</h1>
                <span class="c-section__page-title-en p-about__page-title-en">About</span>
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
        </div>
        <section class="p-about__concept">
            <div class="p-about__concept-container">
                <div class="p-about__concept-img-wrapper">
                    <img class="p-about__concept-img" src="<?php echo get_template_directory_uri(); ?>/images/about/concept-img.png" alt="">
                </div>
                <div class="p-about__concept-text-wrapper">
                    <span class="p-about__concept-title-en">Concept</span>
                    <div class="p-about__concept-column-wrapper">
                        <h2 class="p-about__concept-title-ja-wrapper">
                            <span class="p-about__concept-title-ja">明日が来るのが、</span>
                            <span class="p-about__concept-title-ja">ちょっと楽しみになる</span>
                            <span class="p-about__concept-title-ja">学習塾。</span>
                        </h2>
                        <p class="p-about__concept-text">学習習慣と思考力、コミュニケーション力を育む<br>“自分を育てる学びの場”。<br>それが、「 Co-learning park DEKOboko 」です。<br>私たちは、学びをテストの点数や偏差値だけで評価しません。<br>一人ひとりが“その人”になっていくこと、<br>“自分らしい生き方”を歩んでいける力を育んでいくこと。<br>それを何より大切にしています。</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-about__important">
            <div class="p-about__important-bg-wave"></div>
            <div class="c-inner">
                <div class="p-about__important-container">
                    <h2 class="p-about__important-title">大切にしている<span class="p-about__important-title-font">4</span>つのこと</h2>
                    <div class="p-about__important-box">
                        <div class="p-about__important-wrapper">
                            <div class="p-about__important-item-title-wrapper">
                                <div class="p-about__important-item-number-wrapper">
                                    <img class="p-about__important-item-number" src="<?php echo get_template_directory_uri(); ?>/images/about/important-number01.png" alt="01">
                                </div>
                                <h3 class="p-about__important-item-title">安心して自分を出せる「居場所」であること</h3>
                            </div>
                            <div class="p-about__important-item-text-wrapper">
                                <div class="p-about__important-item-text-block">
                                    <p class="p-about__important-item-text">DEKObokoの学びは、「安心して自分らしくいられる場所」から始まります。学校や家庭以外にも、<span class="p-about__important-item-text-font">もうひとつ“安心できる場”</span>があること。誰かと比べられたり、評価されたりすることなく、「今の自分」でいられること。そんな居場所だからこそ、人は少しずつ前を向き、自分のペースで学びを進めることができます。「今日は話したい気分じゃない」「なんとなく不安がある」。そうした気持ちも含めて、受けとめてもらえる環境であることが、DEKObokoのいちばんの出発点であり、土台です。</p>
                                </div>
                                <div class="p-about__important-item-img-wrapper">
                                    <img class="p-about__important-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/important-img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="p-about__important-wrapper">
                            <div class="p-about__important-item-title-wrapper">
                                <div class="p-about__important-item-number-wrapper">
                                    <img class="p-about__important-item-number" src="<?php echo get_template_directory_uri(); ?>/images/about/important-number02.png" alt="02">
                                </div>
                                <h3 class="p-about__important-item-title">学びを「自分ごと化」する仕組み</h3>
                            </div>
                            <div class="p-about__important-item-text-wrapper">
                                <div class="p-about__important-item-text-block p-about__important-item-text-block-02">
                                    <p class="p-about__important-item-text"><span class="p-about__important-item-text-font">「なぜ学ぶのか？」</span>という問いから学びが始まります。<br>そのために、以下の3ステップを取り入れています。</p>
                                    <ul class="p-about__important-item-text-list">
                                        <li class="p-about__important-item-text-list-item"><span class="p-about__important-item-text-list-item-number">1</span><span class="p-about__important-item-text-list-item-font">メタ学習</span>… 自分のクセや傾向を知り、学習スタイルを整える</li>
                                        <li class="p-about__important-item-text-list-item"><span class="p-about__important-item-text-list-item-number">2</span><span class="p-about__important-item-text-list-item-font">伴走学習</span>… 講師と一緒に計画を立て、自分のペースで進めていく</li>
                                        <li class="p-about__important-item-text-list-item"><span class="p-about__important-item-text-list-item-number">3</span><span class="p-about__important-item-text-list-item-font">自走学習</span>… 自分で問いを立て、自ら学び、仲間と共有する</li>
                                    </ul>
                                    <p class="p-about__important-item-text">こうしたプロセスを通して、学びが<span class="p-about__important-item-text-font">「自分ごと」</span>になっていきます。</p>
                                </div>
                                <div class="p-about__important-item-img-wrapper">
                                    <img class="p-about__important-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/important-img02.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="p-about__important-wrapper">
                            <div class="p-about__important-item-title-wrapper">
                                <div class="p-about__important-item-number-wrapper">
                                    <img class="p-about__important-item-number" src="<?php echo get_template_directory_uri(); ?>/images/about/important-number03.png" alt="03">
                                </div>
                                <h3 class="p-about__important-item-title">対話を通じた自己理解と他者交流</h3>
                            </div>
                            <div class="p-about__important-item-text-wrapper">
                                <div class="p-about__important-item-text-block">
                                    <p class="p-about__important-item-text">学びを深めていく中で欠かせないのが<span class="p-about__important-item-text-font">「対話」</span>です。DEKObokoでは、講師や仲間との対話を通じて、自身の考えや価値観を言葉にし、他者とすり合わせる機会を大切にしています。自分の気持ちを<span class="p-about__important-item-text-font">表現する力</span>、相手の話を聞いて<span class="p-about__important-item-text-font">受けとめる力</span>、違いを<span class="p-about__important-item-text-font">認める姿勢</span>。対話の積み重ねが、自己理解と他者理解の両方を育んでいきます。また、他者との関わりを通して、「自分はどう在りたいか」に気づくこともあります。一人では得られない気づきや、他社に支えられる経験も、DEKObokoでの学びの一部です。</p>
                                </div>
                                <div class="p-about__important-item-img-wrapper">
                                    <img class="p-about__important-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/important-img03.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="p-about__important-wrapper">
                            <div class="p-about__important-item-title-wrapper">
                                <div class="p-about__important-item-number-wrapper">
                                    <img class="p-about__important-item-number" src="<?php echo get_template_directory_uri(); ?>/images/about/important-number04.png" alt="04">
                                </div>
                                <h3 class="p-about__important-item-title">自走力（自己効力感）の育成</h3>
                            </div>
                            <div class="p-about__important-item-text-wrapper">
                                <div class="p-about__important-item-text-block">
                                    <p class="p-about__important-item-text">DEKObokoが育てたいのは、自ら問い、考え、行動できる<span class="p-about__important-item-text-font">「自走力」</span>です。これは「自分ならできる」と信じ、前に進んでいく力のこと。日々の学びの中で、自分の選択を振り返ったり、問い直したりする機会を重ねることで、少しずつ「できた」「わかった」という実感が積み重なっていきます。その実感が、自信となり、自分の意思で未来に向かって進む力へとつながっていきます。私たちは、この<span class="p-about__important-item-text-font">“自ら進む力”</span>を、学びの最終ゴールとして大切に育てています。</p>
                                </div>
                                <div class="p-about__important-item-img-wrapper">
                                    <img class="p-about__important-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/important-img04.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>