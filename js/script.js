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


// Swiper
// let swiper = null; // Swiperインスタンスのための変数

// function initializeSwiper() {
//   if (window.innerWidth >= 1000) {
//     if (!swiper) { // swiperが初期化されていない場合のみ初期化
//       swiper = new Swiper('.swiper-container', {
//         slidesPerView: 2, // 1ページに表示するスライド数
//         spaceBetween: 60, // スライド間のスペース
//         loop: false, // スライダーをループさせない
//         navigation: {
//           nextEl: '.swiper-button-next',
//           prevEl: '.swiper-button-prev',
//         },
//         pagination: {
//           el: '.swiper-pagination',
//           type: 'fraction', // ページネーションをフラクション形式に設定
//         },
//         scrollbar: {
//           el: '.swiper-scrollbar',
//           draggable: true, // スクロールバーをドラッグ可能に
//         },
//       });
//     }
//   } else {
//     if (swiper) { // 1000px以下の場合、Swiperを削除
//       swiper.destroy(true, true); // 完全にSwiperを削除
//       swiper = null;
//     }
//   }
// }
// // 初期化時にSwiperを確認
// initializeSwiper();

// // ウィンドウがリサイズされた時にSwiperを再度チェック
// window.addEventListener('resize', initializeSwiper);


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
