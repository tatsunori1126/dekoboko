<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-about">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/about/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">デコボコとは</h1>
                <span class="c-section__page-title-en p-about__page-title-en">About</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/about/page-main-img.png" alt="">
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
        <section id="concept" class="p-about__concept">
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
                        <p class="p-about__concept-text">学習習慣と思考力、コミュニケーション力を育む<br class="c-sp-hidden">“自分を育てる学びの場”。<br>それが、「 Co-learning park DEKOboko 」です。<br>私たちは、学びをテストの点数や偏差値だけで評価しません。<br>一人ひとりが“その人”になっていくこと、<br class="c-sp-hidden">“自分らしい生き方”を歩んでいける力を育んでいくこと。<br>それを何より大切にしています。</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-about__important">
            <div class="p-about__important-bg-wave"></div>
            <div class="c-inner">
                <div class="p-about__important-container">
                    <h2 class="p-about__important-title">大切にしている<br class="c-pc-hidden"><span class="p-about__important-title-font">4</span>つのこと</h2>
                    <div class="p-about__important-box">
                        <div class="p-about__important-wrapper">
                            <div class="p-about__important-item-title-wrapper">
                                <div class="p-about__important-item-number-wrapper">
                                    <img class="p-about__important-item-number" src="<?php echo get_template_directory_uri(); ?>/images/about/important-number01.png" alt="01">
                                </div>
                                <h3 class="p-about__important-item-title">安心して自分を出せる<br class="c-sub-hidden">「居場所」であること</h3>
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
                                <h3 class="p-about__important-item-title">学びを<br class="c-sub-hidden">「自分ごと化」する<br class="c-sub-hidden">仕組み</h3>
                            </div>
                            <div class="p-about__important-item-text-wrapper">
                                <div class="p-about__important-item-text-block p-about__important-item-text-block-02">
                                    <p class="p-about__important-item-text"><span class="p-about__important-item-text-font">「なぜ学ぶのか？」</span>という問いから学びが始まります。<br>そのために、以下の3ステップを取り入れています。</p>
                                    <ul class="p-about__important-item-text-list">
                                        <li class="p-about__important-item-text-list-item">
                                            <div class="p-about__important-item-text-list-item-box">
                                                <span class="p-about__important-item-text-list-item-number">1</span>
                                                <span class="p-about__important-item-text-list-item-font">メタ学習</span>
                                            </div>
                                            <span class="p-about__important-item-text-list-item-dot">…</span>自分のクセや傾向を知り、学習スタイルを整える
                                        </li>
                                        <li class="p-about__important-item-text-list-item">
                                            <div class="p-about__important-item-text-list-item-box">
                                                <span class="p-about__important-item-text-list-item-number">2</span>
                                                <span class="p-about__important-item-text-list-item-font">伴走学習</span>
                                            </div>
                                            <span class="p-about__important-item-text-list-item-dot">…</span>講師と一緒に計画を立て、自分のペースで進めていく
                                        </li>
                                        <li class="p-about__important-item-text-list-item">
                                            <div class="p-about__important-item-text-list-item-box">
                                                <span class="p-about__important-item-text-list-item-number">3</span>
                                                <span class="p-about__important-item-text-list-item-font">自走学習</span>
                                            </div>
                                            <span class="p-about__important-item-text-list-item-dot">…</span>自分で問いを立て、自ら学び、仲間と共有する
                                        </li>
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
                                <h3 class="p-about__important-item-title">対話を通じた<br class="c-sub-hidden">自己理解と他者交流</h3>
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
                                <h3 class="p-about__important-item-title">自走力<br class="c-sub-hidden">（自己効力感）の<br class="c-sub-hidden">育成</h3>
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
        <section class="p-about__method">
            <div class="c-inner">
                <div class="c-section__page-title-wrapper p-about__method-title-wrapper">
                    <h2 class="c-section__page-title">DEKOメソッド</h2>
                    <span class="c-section__page-title-en p-about__method-page-title-en">Method</span>
                </div>
                <p class="p-about__method-top-text">「メソッド」とは、目的を達成するための手順や手法のこと。<br>私たちは、学びのプロセスを4つの段階に整理し、独自のメソッドとして支援を行っています。</p>
                <div class="p-about__method-container">
                    <div class="p-about__method-wrapper">
                        <div class="p-about__method-item-title-wrapper">
                            <div class="p-about__method-item-title-en-wrapper">
                                <span class="p-about__method-item-title-big-en">D</span>
                                <span class="p-about__method-item-title-en">Dive in</span>
                            </div>
                            <h3 class="p-about__method-item-title">新たな環境に<br>飛び込む</h3>
                        </div>
                        <div class="p-about__method-item-img-wrapper">
                            <div class="p-about__method-item-img-box">
                                <img class="p-about__method-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/method-img01.png" alt="">
                            </div>
                            <p class="p-about__method-item-text">DEKObokoでの学びは、まず“飛び込むこと”から始まります。新しい環境に身を置き、自分のペースで挑戦してみること。ぜひ勇気を出して一歩を踏み出してもらいたいと思っています。</p>
                        </div>
                    </div>
                    <div class="p-about__method-wrapper">
                        <div class="p-about__method-item-title-wrapper">
                            <div class="p-about__method-item-title-en-wrapper">
                                <span class="p-about__method-item-title-big-en">E</span>
                                <span class="p-about__method-item-title-en">Engagement</span>
                            </div>
                            <h3 class="p-about__method-item-title">自他と<br>関わる</h3>
                        </div>
                        <div class="p-about__method-item-img-wrapper">
                            <div class="p-about__method-item-img-box">
                                <img class="p-about__method-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/method-img02.png" alt="">
                            </div>
                            <p class="p-about__method-item-text">DEKObokoでは、問いを通じた「対話」を学びの中心に置いています。授業中の問いかけ、対話、雑談など、あらゆる場面で自分の言葉で話し、違いを認め合い、自分や他者への理解が深まっていきます。</p>
                        </div>
                    </div>
                    <div class="p-about__method-wrapper">
                        <div class="p-about__method-item-title-wrapper">
                            <div class="p-about__method-item-title-en-wrapper">
                                <span class="p-about__method-item-title-big-en">K</span>
                                <span class="p-about__method-item-title-en">Knowledge</span>
                            </div>
                            <h3 class="p-about__method-item-title">学び、<br>そして知る</h3>
                        </div>
                        <div class="p-about__method-item-img-wrapper">
                            <div class="p-about__method-item-img-box">
                                <img class="p-about__method-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/method-img03.png" alt="">
                            </div>
                            <p class="p-about__method-item-text">メタ学習・伴走学習・自走学習を通じて、自身や他者と向き合いながら、「学ぶ意味」や「成長の実感」を知っていきます。この過程が、「できる喜び」「知る楽しさ」へとつながっていきます。</p>
                        </div>
                    </div>
                    <div class="p-about__method-wrapper">
                        <div class="p-about__method-item-title-wrapper">
                            <div class="p-about__method-item-title-en-wrapper">
                                <span class="p-about__method-item-title-big-en">O</span>
                                <span class="p-about__method-item-title-en">Outreach</span>
                            </div>
                            <h3 class="p-about__method-item-title">未来に向けて<br>挑戦していく</h3>
                        </div>
                        <div class="p-about__method-item-img-wrapper">
                            <div class="p-about__method-item-img-box">
                                <img class="p-about__method-item-img" src="<?php echo get_template_directory_uri(); ?>/images/about/method-img04.png" alt="">
                            </div>
                            <p class="p-about__method-item-text">「できた」という実感が、「もっとやってみたい」という意志へと変わります。挑戦と学びの行き来のなかで、やがて未来の自分を支える“小さな確信”となって育っていきます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="philosophy" class="p-about__philosophy">
            <div class="c-inner">
                <div class="c-section__page-title-wrapper p-about__philosophy-title-wrapper">
                    <h2 class="c-section__page-title">教育理念</h2>
                    <span class="c-section__page-title-en p-about__philosophy-page-title-en">Philosophy</span>
                </div>
                <div class="p-about__philosophy-container">
                    <div class="p-about__philosophy-text-wrapper">
                        <p class="p-about__philosophy-text">人は、安心できる「居場所」と、深くつながる「対話」、そして変化に応じられる「柔軟性」によって、自分らしく育っていきます。</p>
                        <p class="p-about__philosophy-text">DEKObokoは、「誰もが自分の人生の主役」という想いのもと、その人らしさを育む場をつくり、出会いと関わりの中で「ともに生きる力」を育てていきます。</p>
                        <p class="p-about__philosophy-text">私たちは、中高生・浪人生・不登校生・発達障がいのある方・通信制の生徒・大学生・社会人・保護者など、さまざまな立場の人々が、感情と対話を通してゆるやかにつながり合える学びの場を日々育んでいます。</p>
                    </div>
                    <div class="p-about__philosophy-img-wrapper">
                        <img class="p-about__philosophy-img" src="<?php echo get_template_directory_uri(); ?>/images/about/philosophy-img.png" alt="居場所・柔軟性・対話・共に生きる力">
                    </div>
                </div>
            </div>
        </section>
        <section class="p-about__message">
            <div class="p-about__message-bg-wave"></div>
            <div class="c-inner">
                <div class="p-about__message-container">
                    <div class="p-about__message-img-wrapper">
                        <img class="p-about__message-img" src="<?php echo get_template_directory_uri(); ?>/images/about/message-img.png" alt="代表取締役 熊谷 歩真">
                    </div>
                    <div class="p-about__message-text-container">
                        <div class="p-about__message-text-title-wrapper">
                            <span class="p-about__message-text-title-en">Message</span>
                            <h2 class="p-about__message-text-title-box">
                                <span class="p-about__message-text-title">それぞれの</span>
                                <span class="p-about__message-text-title">「デコボコ」をうけとめ、</span>
                                <span class="p-about__message-text-title">ともに育つ場へ</span>
                            </h2>
                        </div>
                        <div class="p-about__message-img-wrapper-sp">
                            <img class="p-about__message-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/about/message-img.png" alt="代表取締役 熊谷 歩真">
                        </div>
                        <div class="p-about__message-text-wrapper">
                            <p class="p-about__message-text">人にはそれぞれ、得意や不得意、心の揺らぎがあります。DEKObokoは、そうした違いや個性をありのままに“その人らしさ”として受けとめることから始まります。<br>自分のペースで意味のある学びを重ね、迷いながらでも前に進めるように、必要なときは支え合える関係を大切にしています。<br>安心できる空間と、前に進みたくなる気持ちの両方が積み重なっていく“学びの場”を、これからも丁寧に育て続けます。</p>
                            <div class="p-about__message-post-name">代表取締役<span class="p-about__message-name">熊谷 歩真</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="company" class="p-about__company">
            <div class="c-inner">
                <div class="c-section__page-title-wrapper p-about__company-title-wrapper">
                    <h2 class="c-section__page-title p-about__company-page-title">会社概要</h2>
                    <span class="c-section__page-title-en p-about__company-page-title-en">Company</span>
                </div>
                <dl class="p-about__company-info-list">
                    <div class="p-about__company-info-item">
                        <dt>会社名</dt>
                        <dd>株式会社DEKOboko</dd>
                    </div>

                    <div class="p-about__company-info-item">
                        <dt>設立日</dt>
                        <dd>2022年10月04日</dd>
                    </div>

                    <div class="p-about__company-info-item">
                        <dt>資本金</dt>
                        <dd>4000(千円)</dd>
                    </div>

                    <div class="p-about__company-info-item">
                        <dt>所在地</dt>
                        <dd>〒359-0044　埼玉県所沢市松葉町2-22 矢島ビル4階</dd>
                    </div>

                    <div class="p-about__company-info-item">
                        <dt>代表取締役</dt>
                        <dd>熊谷歩真</dd>
                    </div>

                    <div class="p-about__company-info-item">
                        <dt>取引銀行</dt>
                        <dd>飯能信用金庫/住信SBIネット銀行</dd>
                    </div>
                </dl>
            </div>
        </section>
        <section id="access" class="p-about__access">
            <div class="c-inner">
                <div class="c-section__page-title-wrapper p-about__access-title-wrapper">
                    <h2 class="c-section__page-title p-about__access-page-title">アクセス案内</h2>
                    <span class="c-section__page-title-en p-about__access-page-title-en">Access</span>
                </div>
                <div class="p-about__access-container">
                    <div class="p-about__access-img-wrapper">
                        <img class="p-about__access-img" src="<?php echo get_template_directory_uri(); ?>/images/about/access-img.png" alt="">
                    </div>
                    <div class="p-about__access-detail-wrapper">
                        <div class="p-about__access-detail-box">
                            <h3 class="p-about__access-detail-title">名称</h3>
                            <p class="p-about__access-detail-text">Co-learning park DEKOboko</p>
                        </div>
                        <div class="p-about__access-detail-box">
                            <h3 class="p-about__access-detail-title">所在地</h3>
                            <p class="p-about__access-detail-text">〒359-0044<br>埼玉県所沢市松葉町2-22 矢島ビル4階</p>
                        </div>
                        <div class="p-about__access-detail-box">
                            <h3 class="p-about__access-detail-title">営業日時</h3>
                            <p class="p-about__access-detail-text">平日（月〜金）　13:00〜21:30<br>土曜日　13:00〜20:00<br>定休日／日曜・祝日</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-about__access-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18498.16888801931!2d139.4429761325403!3d35.80680393095863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018dda4ee683771%3A0x7b9702faf17b4f7e!2zQ28tbGVhcm5pbmcgcGFyayBERUtPYm9rb--8iOOCs-ODq-ODkeODu-ODh-OCs-ODnOOCs--8iQ!5e0!3m2!1sja!2sjp!4v1761277161446!5m2!1sja!2sjp" width="1200" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="c-inner">
                <div class="p-about__access-means-container">
                    <h3 class="p-about__access-means-title">交通手段</h3>
                    <div class="p-about__access-means-contents-box">
                        <div class="p-about__access-means-wrapper">
                            <h4 class="p-about__access-means-item-title">お車・自転車でお越しの場合</h4>
                            <p class="p-about__access-means-item-text">お近くに有料コインパーキング・<br class="c-tab-hidden">有料駐輪場がございます。</p>
                        </div>
                        <div class="p-about__access-means-wrapper">
                            <h4 class="p-about__access-means-item-title">電車でお越しの場合</h4>
                            <p class="p-about__access-means-item-text">西武新宿線「新所沢駅」から<br class="c-tab-hidden">徒歩約2分〜3分。</p>
                        </div>
                        <div class="p-about__access-means-wrapper">
                            <h4 class="p-about__access-means-item-title">バスでお越しの場合</h4>
                            <p class="p-about__access-means-item-text">所沢市コミュニティバス 西路線<br class="c-tab-hidden">「松葉町」バス停下車、徒歩約5分。</p>
                            <p class="p-about__access-means-item-detail">※「新所沢駅東口」からも徒歩約<br class="c-tab-hidden">2〜3分でお越しいただけます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>