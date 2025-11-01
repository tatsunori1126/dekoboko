<?php get_header(); ?>
<main class="l-main p-main">
    <div class="p-privacy">
        <div class="c-circle__page-top-img-wrapper">
            <picture class="c-circle__page-top-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle.png" media="(min-width: 800px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-top-bg-circle-sp.png" alt="">
            </picture>
        </div>
        <div class="c-circle__page-right-img-wrapper">
            <img class="c-circle__page-right-img" src="<?php echo get_template_directory_uri(); ?>/images/common/bg-circle.png" alt="">
        </div>
        <div class="c-inner">
            <div class="c-section__page-title-wrapper">
                <h1 class="c-section__page-title">プライバシーポリシー</h1>
                <span class="c-section__page-title-en">Privacy policy</span>
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
            <div class="p-privacy__container">
                <p class="p-privacy__top-text">ウェブサイトは、株式会社DEKOboko（以下「当社」）の事業内容等を紹介するサイトです。</p>
                <div class="p-privacy__section-container">
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">個人情報保護方針</h2>
                        <p class="p-privacy__section-text">当社は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">個人情報の管理</h2>
                        <p class="p-privacy__section-text">当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">個人情報の利用目的</h2>
                        <p class="p-privacy__section-text">本ウェブサイトでは、お客様からのお問い合わせ時に、お名前、e-mailアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。<br>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">個人情報の第三者への開示・提供の禁止</h2>
                        <p class="p-privacy__section-text">当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br><br>
                            ・お客さまの同意がある場合<br>
                            ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br>
                            ・法令に基づき開示することが必要である場合</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">個人情報の安全対策</h2>
                        <p class="p-privacy__section-text">当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">ご本人の照会</h2>
                        <p class="p-privacy__section-text">お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">法令、規範の遵守と見直し</h2>
                        <p class="p-privacy__section-text">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                    </div>
                    <div class="p-privacy__wrapper">
                        <h2 class="p-privacy__section-title">お問い合せ</h2>
                        <p class="p-privacy__section-text">当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>株式会社DEKOboko</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>