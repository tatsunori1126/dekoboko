jQuery(function () {
    const speed = 800; // スクロールスピード

    // ▼ ページ全体がロードされた後にハッシュ付きURLに対応
    jQuery(window).on('load', function () {
        const hash = window.location.hash;

        if (hash !== '' && hash !== undefined) {
            let target = jQuery(hash);
            target = target.length ? target : jQuery('[name=' + hash.slice(1) + ']');
            if (target.length) {
                const position = target.offset().top;
                jQuery('html, body').animate({ scrollTop: position }, speed, 'swing');
            }
        }
    });

    // ▼ ページトップへスクロール + ページ内リンク処理
    jQuery(function ($) {
        const hamburger = $('#js-hamburger');
        const navWrapper = $('.p-header__hamburger-nav-wrapper');
        const body = $('body');
    
        // ハンバーガーメニュー開閉
        hamburger.on('click', function () {
            const isOpen = $(this).toggleClass('is-open').hasClass('is-open');
            navWrapper.toggleClass('is-open', isOpen);
    
            // 背景スクロール制御
            if (isOpen) {
                body.addClass('is-menu-open');
            } else {
                body.removeClass('is-menu-open');
            }
        });
    
        // ページ内リンク + ハンバーガー連動
        $('[data-scroll-link]').on('click', function (e) {
            const href = $(this).attr('href');
            const currentPath = window.location.pathname;
            const linkUrl = new URL(href, window.location.origin);
            const linkPath = linkUrl.pathname;
    
            // mailto:リンクは除外
            if (href.startsWith('mailto:')) return;
    
            // 同一ページならスムーススクロール
            if (currentPath === linkPath) {
                e.preventDefault();
                const target = $(linkUrl.hash === '' ? 'html' : linkUrl.hash);
                const position = target.offset().top;
    
                // ハンバーガー閉じる
                hamburger.removeClass('is-open');
                navWrapper.removeClass('is-open');
                body.removeClass('is-menu-open');
    
                $('html, body').animate({ scrollTop: position }, speed, 'swing');
            }
        });
    });
    
});
// ▼ ページロード完了後にアンカー位置を再調整
window.addEventListener('load', function() {
    const hash = window.location.hash;
    if (hash) {
        const target = document.querySelector(hash);
        if (target) {
            setTimeout(() => {
                const position = target.getBoundingClientRect().top + window.pageYOffset;
                window.scrollTo(0, position); // ← スムーススクロールを削除して瞬時に移動
            }, 100); // ページ構築完了後に1回だけジャンプ
        }
    }
});

// メインビジュアルのアニメーション
document.addEventListener("DOMContentLoaded", () => {
    const tl = gsap.timeline({ delay: 0.5 }); // サイト読み込みから0.5秒で開始

    // ① まずは画像とテキストを可視化
    gsap.set([".p-top__mv__img-wrapper", ".p-top__mv__main-title-wrapper"], {
        visibility: "visible",
        opacity: 1 // ここでvisibleにしてからopacityアニメに入る
    });

    // ② 画像：下からふわっと表示
    tl.from(".p-top__mv__img-wrapper", {
        y: 20,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });

    // ③ 各タイトル行の文字を分割
    const titles = document.querySelectorAll(".p-top__mv__main-title");
    titles.forEach(title => {
        const chars = title.textContent.split("");
        title.innerHTML = chars.map(ch => `<span class="char">${ch}</span>`).join("");
    });

    // ④ 各行を順番に表示（行間に少し時間を置く）
    titles.forEach((title, index) => {
        tl.to(title.querySelectorAll(".char"), {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power2.out",
            stagger: 0.14, // 文字ごとの遅延
        }, index === 0 ? "-=0.2" : "+=0.08");
    });
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

// 固定バナーの閉じるボタンのイベントリスナー
const closeBtn = document.getElementById('mv-fixed-close');
if (closeBtn) {
    closeBtn.addEventListener('click', function() {
        document.getElementById('mv-fixed-banner').style.display = 'none';
    });
}


// お客様の声のスライダー
jQuery(function () {
    const swiperVoice = new Swiper('.p-top__voice-slider', {
        slidesPerView: 1.2, // スライド幅自動
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        speed: 800, // スクロールスピード（大きいほどゆっくり）
        // autoHeight: true, // ✅ これを追加！
        navigation: {
            nextEl: '.p-top__voice-next',
            prevEl: '.p-top__voice-prev',
        },
        autoplay: {
            delay: 15000, // 自動スライドの遅延時間（ミリ秒）
            disableOnInteraction: false, // ユーザー操作後も自動再生を続ける
        },
        pagination: {
            el: '.p-top__voice-pagination', // 👈 ドットナビの要素を指定
            clickable: true,                // 👈 クリックでスライド可能に
        },
        breakpoints: {
            800: {
                slidesPerView: 1.4,
                spaceBetween: 80,
            },
            1200: {
                slidesPerView: 1.6,
                spaceBetween: 80,
            },
            1440: {
                slidesPerView: 1.8,
                spaceBetween: 80,
            },
        },
    });
    /** ▼ すべてのスライドの高さを最大値に統一 */
    function adjustSlideHeights() {
        let maxHeight = 0;

        $('.p-top__voice-slider-item').each(function () {
            $(this).css('height', 'auto'); // 一旦リセット
            const h = $(this).outerHeight(true);
            if (h > maxHeight) maxHeight = h;
        });

        // 統一
        $('.p-top__voice-slider-item').css('height', maxHeight + 'px');

        // Swiperを再描画
        swiperVoice.update();
    }

    /** ▼ 初期化・画像読み込み後・リサイズ時に高さを揃える */
    $(window).on('load', adjustSlideHeights);
    swiperVoice.on('init', adjustSlideHeights);
    $(window).on('resize', function () {
        clearTimeout(window._resizeTimer);
        window._resizeTimer = setTimeout(adjustSlideHeights, 300);
    });

    swiperVoice.init();
});

// よくある質問のアコーディオン
jQuery(function () {
    jQuery(".p-faq__question-text-block").on('click', function() {
        jQuery(this).next().stop().slideToggle(200);
        jQuery(".toggle-btn",this).toggleClass("open");
    });
});

// コース詳細の開閉
jQuery(function($){
    $('.p-course__detail-container').hide();

    $('.p-course__list-open-wrapper').on('click', function(){
        var $container = $(this).next('.p-course__detail-container');
        var $btn = $(this).find('.p-course__toggle-btn');
        var $text = $btn.find('.p-course__toggle-text');
        var $icon = $btn.find('.p-course__toggle-icon');

        if(!$container.is(':animated')) {
            $container.slideToggle(400);
            $(this).toggleClass('is-active');

            // テキストとアイコンの切り替え
            if($(this).hasClass('is-active')) {
                $text.text('閉じる');
                $icon.text('－');
            } else {
                $text.text('詳しくみる');
                $icon.text('＋');
            }
        }
    });
});

// コース料金表の行高さ同期
function syncAllCourseTableHeights() {
    const wrappers = document.querySelectorAll('.p-course__price-table-wrapper');
    wrappers.forEach(wrapper => {
        const fixedRows = wrapper.querySelectorAll('.p-course__price-table--fixed tbody tr');
        const scrollRows = wrapper.querySelectorAll('.p-course__price-table-scroll tbody tr');
        const fixedHeader = wrapper.querySelector('.p-course__price-table--fixed thead tr');
        const scrollHeader = wrapper.querySelector('.p-course__price-table-scroll thead tr');
        if (!fixedRows.length || !scrollRows.length) return;

        // 一旦リセット
        [...fixedRows, ...scrollRows].forEach(row => (row.style.height = 'auto'));
        if (fixedHeader && scrollHeader) {
            fixedHeader.style.height = 'auto';
            scrollHeader.style.height = 'auto';
        }

        // 行の高さを同期（小数点誤差吸収）
        fixedRows.forEach((row, i) => {
            const fixedHeight = Math.ceil(row.getBoundingClientRect().height);
            const scrollHeight = scrollRows[i] ? Math.ceil(scrollRows[i].getBoundingClientRect().height) : 0;
            const maxHeight = Math.max(fixedHeight, scrollHeight);

            row.style.height = `${maxHeight}px`;
            if (scrollRows[i]) scrollRows[i].style.height = `${maxHeight}px`;
        });

        // ヘッダーの高さも同期（こちらも誤差吸収）
        if (fixedHeader && scrollHeader) {
            const headerHeight = Math.max(
            Math.ceil(fixedHeader.getBoundingClientRect().height),
            Math.ceil(scrollHeader.getBoundingClientRect().height)
            );
            fixedHeader.style.height = `${headerHeight}px`;
            scrollHeader.style.height = `${headerHeight}px`;
        }
    });
}

// 初回ロード時とリサイズ時に再実行
window.addEventListener('load', syncAllCourseTableHeights);
window.addEventListener('resize', () => {
    clearTimeout(window._courseResizeTimer);
    window._courseResizeTimer = setTimeout(syncAllCourseTableHeights, 150);
});


// スクロールヒント
document.addEventListener("DOMContentLoaded", function () {
    new ScrollHint('.scroll-hint', {
      suggestiveShadow: true, // スクロールヒントの影を表示
        i18n: { // ヒントのテキストをカスタマイズ
            scrollable: 'スクロールできます',
            scrollableSub: 'スクロールしてください',
            notScrollable: 'スクロールできません',
            notScrollableSub: 'このコンテンツはスクロールできません',
        },
    });
});
