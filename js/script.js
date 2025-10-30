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

        // ハンバーガーメニュー開閉
        hamburger.on('click', function () {
            $(this).toggleClass('is-open');
            navWrapper.toggleClass('is-open');
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
                if (hamburger.hasClass('is-open')) {
                    hamburger.removeClass('is-open');
                    navWrapper.removeClass('is-open');
                }

                // スムーススクロール
                $('html, body').animate({ scrollTop: position }, speed, 'swing');
            }
            // 別ページなら通常遷移（home_url指定でもOK）
        });
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

// 価格表の行の高さを同期
function syncAllCourseTableHeights() {
    // すべての価格表を対象に処理
    const wrappers = document.querySelectorAll('.p-course__price-table-wrapper');

    wrappers.forEach(wrapper => {
        const fixedRows = wrapper.querySelectorAll('.p-course__price-table--fixed tbody tr');
        const scrollRows = wrapper.querySelectorAll('.p-course__price-table-scroll tbody tr');
        const fixedHeader = wrapper.querySelector('.p-course__price-table--fixed thead tr');
        const scrollHeader = wrapper.querySelector('.p-course__price-table-scroll thead tr');

        if (!fixedRows.length || !scrollRows.length) return;

        // 一旦リセット
        fixedRows.forEach((row, i) => {
            row.style.height = 'auto';
            if (scrollRows[i]) scrollRows[i].style.height = 'auto';
        });
        if (fixedHeader && scrollHeader) {
            fixedHeader.style.height = 'auto';
            scrollHeader.style.height = 'auto';
        }

        // 行の高さを同期
        fixedRows.forEach((row, i) => {
            const fixedHeight = row.offsetHeight;
            const scrollHeight = scrollRows[i]?.offsetHeight || 0;
            const maxHeight = Math.max(fixedHeight, scrollHeight);
            row.style.height = `${maxHeight}px`;
            if (scrollRows[i]) scrollRows[i].style.height = `${maxHeight}px`;
        });

        // ヘッダーの高さも同期
        if (fixedHeader && scrollHeader) {
            const headerHeight = Math.max(fixedHeader.offsetHeight, scrollHeader.offsetHeight);
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
