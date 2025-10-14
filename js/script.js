jQuery(function() {
    const speed = 800; // スクロールスピード

    // ページ全体がロードされた後に実行
    jQuery(window).on('load', function() {
        const headerH = jQuery('.l-header').height(); // ヘッダーの高さを取得
        const hash = window.location.hash;

        // URLにハッシュが存在する場合、対象の位置までスクロール
        if (hash !== '' && hash !== undefined) {
            let target = jQuery(hash);
            target = target.length ? target : jQuery('[name=' + hash.slice(1) + ']');
            if (target.length) {
                let position = target.offset().top;
                jQuery('html,body').animate({ scrollTop: position }, speed, 'swing');
            }
        }
    });

    // ページトップへスクロール
    jQuery(function () {
        // ページトップボタンのスムーススクロール
        jQuery('[data-pagetop]').on('click', function(e) {
            e.preventDefault();
            const speed = 800;
            jQuery('html, body').animate({ scrollTop: 0 }, speed);
        });
        // ページ内リンク + ハンバーガー連動
        const header = jQuery('.l-header');
        const hamburger = jQuery('#js-hamburger');
        const navWrapper = jQuery('.p-header__hamburger-nav-wrapper');
        const speed = 800;
        jQuery('[data-scroll-link]').on('click', function (e) {
            const href = jQuery(this).attr('href');
            // mailto:リンクは通常通りに実行させる（処理しない）
            if (href.startsWith('mailto:')) {
                return;
            }
            e.preventDefault();
            const target = jQuery(href === '#' || href === '' ? 'html' : href);
            const headerH = header.outerHeight();
            const position = target.offset().top - headerH;
            // ハンバーガーメニューを閉じる
            if (hamburger.hasClass('is-open')) {
                hamburger.removeClass('is-open');
                navWrapper.removeClass('is-open');
            }
            // スムーススクロール
            jQuery('html, body').animate({ scrollTop: position }, speed, 'swing');
        });
    });
});

// ハンバーガーメニューのトグル
jQuery(function($) {
    $('#js-hamburger').on('click', function () {
        $(this).toggleClass('is-open');
        $('.p-header__hamburger-nav-wrapper').toggleClass('is-open');
    });
});

// メニュー項目クリック時のイベント
jQuery(".p-header__nav-list a").click(function () {
if (jQuery(window).width() < 1000) {
    jQuery(".btn-line").removeClass('open');
    jQuery('.p-header__nav').fadeOut(500).removeClass('active');
}
});

// ブラウザリサイズ時に処理をリセット（リサイズ時のみ発動するように）
jQuery(window).on('resize', function () {
if (jQuery(window).width() >= 1000) {
    jQuery('.p-header__nav').show(); // メニューを表示
    jQuery('.btn-line').removeClass('open'); // ハンバーガーボタンの状態をリセット
    jQuery('.p-header__nav').removeClass('active'); // メニューの状態をリセット
} else if (!jQuery('.btn-line').hasClass('open')) {
    jQuery('.p-header__nav').hide(); // 999px以下で、メニューが開かれていない時は非表示にする
}
});

jQuery(function () {
    // スクロールトリガーのアニメーション（fadeUp, fadeLeft, fadeRight）
    const animations = [
        {
            className: "fadeUp",
            from: { y: 10, autoAlpha: 0 },
            to: { y: 0, autoAlpha: 1, duration: 1.5, ease: "power3.out" }
        },
        {
            className: "fadeLeft",
            from: { x: -10, autoAlpha: 0 },
            to: { x: 0, autoAlpha: 1, duration: 1.5, ease: "power3.out" }
        },
        {
            className: "fadeRight",
            from: { x: 10, autoAlpha: 0 },
            to: { x: 0, autoAlpha: 1, duration: 1.5, ease: "power3.out" }
        }
    ];

    animations.forEach(({ className, from, to }) => {
        gsap.utils.toArray(`.${className}`).forEach((element) => {
            gsap.fromTo(
                element,
                from,
                {
                    ...to,
                    scrollTrigger: {
                        trigger: element,
                        start: "top 70%", // ビューポートの下端に要素が触れた時点で開始
                        end: "center center", // アニメーションの終了条件
                        scrub: false,        // スクロール位置に同期しない
                    },
                }
            );
        });
    });
});


document.getElementById('mv-fixed-close').addEventListener('click', function() {
    document.getElementById('mv-fixed-banner').style.display = 'none';
  });