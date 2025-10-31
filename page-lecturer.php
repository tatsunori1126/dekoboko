<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-lecturer">
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
            <img class="c-circle__page-top-main-img" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/page-main-img.png" alt="">
        </div>
        <div class="p-lecturer__inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">講師紹介</h1>
                <span class="c-section__page-title-en">Our team</span>
            </div>
        </div>
        <div class="c-circle__page-top-main-img-wrapper-sp">
            <img class="c-circle__page-top-main-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/page-main-img.png" alt="">
        </div>
        <div class="p-lecturer__inner">
            <?php if(!is_front_page()): ?>
                <div class="c-breadcrumbs">
                    <div class="c-breadcrumbs__inner" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="p-lecturer__container">
                <div class="p-lecturer__wrapper fadeUp">
                    <div class="p-lecturer__img-wrapper">
                        <img class="p-lecturer__img" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/item-img01.png" alt="講師写真">
                        <span class="p-lecturer__nickname">タッキー/あやっち/あやてぃー</span>
                    </div>
                    <div class="p-lecturer__text-wrapper">
                        <div class="p-lecturer__name-wrapper">
                            <h2 class="p-lecturer__name">瀧上 彩斗</h2>
                            <span class="p-lecturer__subname">AYATO TAKIGAMI</span>
                            <span class="p-lecturer__subname">国語・数学・英語</span>
                        </div>
                        <p class="p-lecturer__text">初めまして！教室長の瀧上です！学生時代から、少年センターや家庭訪問にて、不登校支援を行っていました！中学校教諭一種免許状（社会）、不登校訪問支援カウンセラー、メンタル心理カウンセラーの資格を所持しております。みんなからは色々なあだ名で呼ばれているので、お好きあだ名で呼んでください！(新しいあだ名も大募集中です)明るく、楽しく、笑顔でをモットーにみんなが居たいと思える塾作りを心がけています！今読んでくれている「あなた」とお話できる日を心待ちにしております！</p>
                        <div class="p-lecturer__hobby-container">
                            <div class="p-lecturer__hobby-wrapper">
                                <h3 class="p-lecturer__hobby-title">趣味・好きなこと</h3>
                                <ul class="p-lecturer__hobby-list">
                                    <li class="p-lecturer__hobby-item">・お笑い(実は芸人としても活動しています)</li>
                                    <li class="p-lecturer__hobby-item">・深夜ラジオ</li>
                                    <li class="p-lecturer__hobby-item">・ワンピースカード</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lecturer__wrapper fadeUp">
                    <div class="p-lecturer__img-wrapper">
                        <img class="p-lecturer__img" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/item-img01.png" alt="講師写真">
                        <span class="p-lecturer__nickname">りょーちん</span>
                    </div>
                    <div class="p-lecturer__text-wrapper">
                        <div class="p-lecturer__name-wrapper">
                            <h2 class="p-lecturer__name">毛塚 亮</h2>
                            <span class="p-lecturer__subname">Kezuka Ryo</span>
                            <span class="p-lecturer__subname">英語・（数学）</span>
                        </div>
                        <p class="p-lecturer__text">こんにちは！りょーちん改め毛塚です。<br>もともと私は生徒として通っていたのですが、ここで交流する中でデコボコの魅力に惹かれ、ご縁もあって今では講師として働いています。<br>かつて生徒だった頃の私にとってデコボコは自分の心をオープンにしやすい場所であり、それが心の支えとなっていました。今通っている生徒たちにとってもそのような場所であり続けられるように頑張ります！</p>
                        <div class="p-lecturer__hobby-container">
                            <div class="p-lecturer__hobby-wrapper">
                                <h3 class="p-lecturer__hobby-title">趣味・好きなこと</h3>
                                <ul class="p-lecturer__hobby-list">
                                    <li class="p-lecturer__hobby-item">・読書</li>
                                    <li class="p-lecturer__hobby-item">・ゲーム全般</li>
                                    <li class="p-lecturer__hobby-item">・カービィグッズ集め</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lecturer__wrapper fadeUp">
                    <div class="p-lecturer__img-wrapper">
                        <img class="p-lecturer__img" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/item-img01.png" alt="講師写真">
                        <span class="p-lecturer__nickname">あんちゃん</span>
                    </div>
                    <div class="p-lecturer__text-wrapper">
                        <div class="p-lecturer__name-wrapper">
                            <h2 class="p-lecturer__name">安 卓修</h2>
                            <span class="p-lecturer__subname">Takusu An</span>
                            <span class="p-lecturer__subname">英語・数学・理科</span>
                        </div>
                        <p class="p-lecturer__text">はじめまして、あんちゃんです！『近所のお兄さんが勉強を教えてくれている』と思ってもらえるような対話を意識して授業をしています。<br>『初めましてでも人見知りでも、なんでも話せる』と、お友達からよく言われます♪<br>日韓ハーフの27歳で、心理福祉系の大学に通い直して今は大学1年生です。<br>これを見ている方と、一緒に楽しく授業ができる日を心待ちにしています🌱</p>
                        <div class="p-lecturer__hobby-container">
                            <div class="p-lecturer__hobby-wrapper">
                                <h3 class="p-lecturer__hobby-title">趣味・好きなこと</h3>
                                <ul class="p-lecturer__hobby-list">
                                    <li class="p-lecturer__hobby-item">・歌うこと</li>
                                    <li class="p-lecturer__hobby-item">・映画</li>
                                    <li class="p-lecturer__hobby-item">・ゲーム</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lecturer__wrapper fadeUp">
                    <div class="p-lecturer__img-wrapper">
                        <img class="p-lecturer__img" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/item-img01.png" alt="講師写真">
                        <span class="p-lecturer__nickname">たなかれいり</span>
                    </div>
                    <div class="p-lecturer__text-wrapper">
                        <div class="p-lecturer__name-wrapper">
                            <h2 class="p-lecturer__name">田中 伶利</h2>
                            <span class="p-lecturer__subname">Ryoto Tanaka</span>
                            <span class="p-lecturer__subname">理科・数学・英語</span>
                        </div>
                        <p class="p-lecturer__text">はじめまして、田中です！現在、週に一度デコボコで指導しています。また、オンラインでの授業も行っています。8年程、塾講師とオンラインでの指導経験があり、「なぜそうなるのか？」という勉強の本質を大切にしながら、生徒が理解できるよう丁寧に教えることを心がけています。よろしくお願いします！</p>
                        <div class="p-lecturer__hobby-container">
                            <div class="p-lecturer__hobby-wrapper">
                                <h3 class="p-lecturer__hobby-title">趣味・好きなこと</h3>
                                <ul class="p-lecturer__hobby-list">
                                    <li class="p-lecturer__hobby-item">・運動</li>
                                    <li class="p-lecturer__hobby-item">・家の模様替え</li>
                                    <li class="p-lecturer__hobby-item">・ゲーム</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lecturer__wrapper fadeUp">
                    <div class="p-lecturer__img-wrapper">
                        <img class="p-lecturer__img" src="<?php echo get_template_directory_uri(); ?>/images/lecturer/item-img01.png" alt="講師写真">
                        <span class="p-lecturer__nickname">きょうちゃん</span>
                    </div>
                    <div class="p-lecturer__text-wrapper">
                        <div class="p-lecturer__name-wrapper">
                            <h2 class="p-lecturer__name">髙田 響</h2>
                            <span class="p-lecturer__subname">Kyo Takada</span>
                            <span class="p-lecturer__subname">理科・数学・英語</span>
                        </div>
                        <p class="p-lecturer__text">初めまして！現在は大学2年生、塾講師歴は1年ほどです。当塾では週2回英語と数学を担当しています。<br>「根本的な仕組み」を理解してもらえることを意識して授業を行っています！<br>講師の中では一番生徒の皆さんと年齢が近いので気軽に質問や雑談してもらえると嬉しいです！<br>よろしくお願いします！！</p>
                        <div class="p-lecturer__hobby-container">
                            <div class="p-lecturer__hobby-wrapper">
                                <h3 class="p-lecturer__hobby-title">趣味・好きなこと</h3>
                                <ul class="p-lecturer__hobby-list">
                                    <li class="p-lecturer__hobby-item">・漫画</li>
                                    <li class="p-lecturer__hobby-item">・ゲーム</li>
                                    <li class="p-lecturer__hobby-item">・楽器演奏</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>