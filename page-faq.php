<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-faq">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/faq/page-main-img.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">よくあるご質問・<br>お問い合わせ</h1>
                <span class="c-section__page-title-en p-faq__page-title-en">FAQ</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/faq/page-main-img.png" alt="">
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
            <div class="p-faq__container">
                <div class="p-faq__question-container">
                    <div class="p-faq__question-wrapper">
                        <h3 class="p-faq__question-title">全体・基本情報</h3>
                        <div class="p-faq__question-item-box">
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">DEKObokoとはどんな塾ですか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">DEKObokoは「安心して自分らしく学べる居場所」です。授業だけでなく、自習・交流・相談の場が一体となり、学力向上とともに人とのつながりや自分で未来を切り拓く自走力を育みます。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">対象年齢や学年は？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">小学生から大学生・社会人、さらには保護者の方まで幅広くご利用いただけます。学年や立場を超えて「学び合える」ことが特徴です。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">他の学習塾と何が違いますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">勉強のサポートにとどまらず、安心できる居場所としての「交流」や「自分らしさの発見」を重視しています。心理学や認知科学の知見も取り入れ、一人ひとりに合わせた学びを提供しています。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">発達特性がある子も通えますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい、ご安心ください。DEKObokoには学校に行きづらいお子さんや発達特性を持つ生徒さんも多く通っています。安心できる空間で、自分のペースで学びを進められます。</p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="p-faq__question-wrapper">
                        <h3 class="p-faq__question-title">入塾・受講について</h3>
                        <div class="p-faq__question-item-box">
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">入塾の流れはどうなっていますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">まずはお問い合わせ後、セミナーや個別相談・体験授業で学びのスタイルをご確認いただきます。その後、ご希望に合わせて入塾手続きを行い、オリエンテーションを経て授業や自習を開始します。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">体験授業はありますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい、毎月第１週と第３週に見学や体験授業を受け付けています！実際の雰囲気を体感いただいた上で、ご判断いただけます。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">途中からでも入塾できますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい、いつからでもご入塾可能です。月途中からの場合は費用も日割りで調整いたしますのでご安心ください。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">受講曜日や時間の変更は可能ですか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい、柔軟に対応しています。学校や家庭の状況に合わせて調整できますので、お気軽にご相談ください。</p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="p-faq__question-wrapper">
                        <h3 class="p-faq__question-title">料金・システム</h3>
                        <div class="p-faq__question-item-box">
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">月謝や維持費はどのくらいですか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">コースや学年によって異なります。詳細は料金表をご覧ください。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">支払い方法は？（口座振替・クレジットカードなど）</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">原則、毎月銀行振込をお願いしておりますが、口座振替にも対応しています。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">兄弟割引や紹介特典はありますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい、ございます。ご兄弟で通われる場合や、お知り合いのご紹介があった場合は割引制度をご利用いただけます。</p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="p-faq__question-wrapper">
                        <h3 class="p-faq__question-title">授業・コース内容</h3>
                        <div class="p-faq__question-item-box">
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">授業は何名くらいで行いますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">学習の段階(3つの段階)に応じて、1対1から少人数（概ね2〜5名）を基本とし、対話や質問がしやすい環境を大切にしています。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">宿題や定期テスト対策はありますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい。コースにはよりますが、基本的に学校の宿題や提出物のサポートはもちろん、定期テスト前には一人ひとりに合わせた対策を行います。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">大学生・社会人コースはどんな内容ですか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">現状は自習室の提供がメインとなります。今後、キャリアコーチング、AIやDXといったスキル、起業やマーケティングといったビジネススキル、TOEIC講座も順次開講予定です。</p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="p-faq__question-wrapper">
                        <h3 class="p-faq__question-title">その他</h3>
                        <div class="p-faq__question-item-box">
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">学校にもあまり行けていないため、塾にも毎回行けないかもしれないのですが大丈夫ですか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">ご安心ください。体調やご都合で通えなかった場合は、翌月の費用で調整させていただきます。無理のない範囲で通っていただければ大丈夫です。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">面談はどのように行われますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">対面・オンラインの両方に対応しています。ご家庭の状況に合わせて柔軟に設定可能ですので、安心してご利用いただけます。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">勉強が苦手でもついていけますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい、大丈夫です。DEKObokoでは「できる・できない」を基準にせず、一人ひとりのペースや興味を大切にしています。小さな「できた！」の積み重ねから、学びをサポートします。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">受験対策にも対応していますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">もちろんです。基礎学習のサポートから、志望理由書の添削・面接対策まで幅広く対応しています。勉強が得意な子も苦手な子も、それぞれの目標に合わせてサポートいたします。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">不登校でも通えますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい。DEKObokoは「学校以外の居場所」として利用される方も多くいらっしゃいます。安心できる空間で過ごしながら、自分のペースで学びや人とのつながりを取り戻せます。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">保護者も学べる機会はありますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">はい。保護者向けの講座では、心理学や発達科学の知見をベースに、子どもの自己肯定感の育て方やコミュニケーションの工夫などを学ぶことができます。交流会も定期的に行っています。</p>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="p-faq__question-box">
                                <dt class="p-faq__question-text-block">
                                    <span class="p-faq__question-icon">Q</span>
                                    <p class="p-faq__question-text-sub">授業や自習の際に、どんなサポートがありますか？</p>
                                    <span class="toggle-btn">開く</span>
                                </dt>
                                <dd class="p-faq__answer-text-box">
                                    <div class="p-faq__answer-text-block">
                                        <span class="p-faq__answer-icon">A</span>
                                        <p class="p-faq__question-answer-text">学習計画の立て方や勉強方法のアドバイスだけでなく、気持ちの面でのサポートも行っています。安心して学べる環境をつくることが第一です。</p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="p-faq__question-wrapper">
                        <h3 class="p-faq__question-title">お問い合わせ</h3>
                        <div class="p-faq__question-item-box">
                            <div class="p-faq__question-box">
                                <div class="p-faq__question-text-block p-faq__question-text-block-contact">
                                    <p class="p-faq__question-text-sub p-faq__question-text-sub-contact">まずはお気軽にお問い合わせください。<br><a href="https://lin.ee/ivHAxks" target="_blank">公式LINE</a> または <a href="<?php echo esc_url( home_url( '/contact-input' ) ); ?>">専用フォーム</a> からご連絡いただけます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>