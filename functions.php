<?php
/***********************************************************
* テーマサポートの追加
***********************************************************/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-logo' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'align-wide' );

/***********************************************************
* SEO対策のためのタイトルタグのカスタマイズ
***********************************************************/
function seo_friendly_title( $title ) {
  // トップページの場合
  if ( is_front_page() ) {
      $title = get_bloginfo( 'name', 'display' ); // トップページではサイトのタイトルのみを表示
  } 
  // トップページ以外の場合
  elseif ( is_singular() ) {
      $title = single_post_title( '', false ) . ' | ' . get_bloginfo( 'name', 'display' ); // ページタイトル | サイトタイトル
  }
  return $title;
}
add_filter( 'pre_get_document_title', 'seo_friendly_title' );


/***********************************************************
* 不要なwp_headアクションを削除（パフォーマンス向上）
***********************************************************/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles');

/***********************************************************
* 絵文字機能を無効化（パフォーマンス向上）
***********************************************************/
function disable_emoji_feature() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'emoji_svg_url', '__return_false' ); // さらに絵文字を無効化
}
add_action( 'init', 'disable_emoji_feature' );

/***********************************************************
* CSSとJavaScriptの読み込み
***********************************************************/
function enqueue_theme_assets() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));

    // Swiper CSS
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null);

    // Font Awesome CSS
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v6.6.0/css/all.css', array(), null);

    // Scroll Hint CSS
    wp_enqueue_style('scroll-hint', 'https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css', array(), null);

    // Google Fonts（preconnectを追加）
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"', array(), null);

    // Custom CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.min.css', array(), filemtime(get_template_directory() . '/css/style.min.css'));

    // Scroll Hint JS
    wp_enqueue_script('scroll-hint-js', 'https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js', array(), null, true);

    // jQuery
    wp_enqueue_script('jquery');

    // Swiper JS
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

    // Custom JS - 圧縮版を読み込むように修正
    wp_enqueue_script(
      'theme-script',
      get_template_directory_uri() . '/js/script.min.js',
      array('jquery'),
      filemtime(get_template_directory() . '/js/script.min.js'),
      true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

// GSAPとScrollTriggerの読み込み
function enqueue_gsap_with_scrolltrigger() {
    // GSAP本体を読み込む
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_script_add_data('gsap', 'async', true); // 非同期読み込み

    // ScrollTriggerプラグインを読み込む
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);
    wp_script_add_data('gsap-scrolltrigger', 'async', true); // 非同期読み込み
}
add_action('wp_enqueue_scripts', 'enqueue_gsap_with_scrolltrigger');

/***********************************************************
 * 管理画面（Gutenberg + Classic Editor）専用CSSの読み込み
 ***********************************************************/
function enqueue_admin_wp_styles() {
  wp_enqueue_style(
      'admin-wp-style',
      get_template_directory_uri() . '/css/wordpress.css',
      [],
      filemtime(get_template_directory() . '/css/wordpress.css')
  );
}
add_action('admin_enqueue_scripts', 'enqueue_admin_wp_styles');
add_action('enqueue_block_editor_assets', 'enqueue_admin_wp_styles');


/***********************************************************
* カスタム投稿によって表示件数を変える
***********************************************************/
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  // カスタム投稿タイプ "news" のアーカイブページの場合
  if ( $query->is_post_type_archive('news') ) {
      $query->set( 'posts_per_page', 16 );
      return;
  }

  // カスタム投稿タイプ "news" のアーカイブページの場合
  if ( $query->is_post_type_archive('voice') ) {
    $query->set( 'posts_per_page', 8 );
    return;
  }

  // タクソノミー "news_category" のアーカイブページの場合
  if ( $query->is_tax('news_category') ) {
      $query->set( 'posts_per_page', 16 );
      return;
  }

  // タクソノミー "news_category" のアーカイブページの場合
  if ( $query->is_tax('voice_category') ) {
    $query->set( 'posts_per_page', 8 );
    return;
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


/***********************************************************
* Options Page
***********************************************************/
// if( function_exists('acf_add_options_page') ) {
//   acf_add_options_page(array(
//     'page_title' 	=> 'RECRUIT - 数字でみる',
//     'menu_title'	=> 'RECRUIT - 数字でみる',
//     'menu_slug' 	=> 'top-data',
//     'capability'	=> 'edit_posts',
//     'redirect'		=> false
//   ));
// }



/***********************************************************
* Contact Form7
***********************************************************/
/* 確認用メールアドレス入力欄を設置 */
function wpcf7_custom_email_validation_filter($result, $tag) {
  if ('email_confirmation' == $tag->name) {
    $your_email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $your_email_confirm = isset($_POST['email_confirmation']) ? trim($_POST['email_confirmation']) : '';
    if ($your_email != $your_email_confirm) {
      $result->invalidate($tag, "メールアドレスが一致しません");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_email', 'wpcf7_custom_email_validation_filter', 20, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_custom_email_validation_filter', 20, 2);

/* recaptchaの読み込みを設定したページ以外読み込ませないように */
function load_recaptcha_js() {
  if (!is_page(array('contact-input', 'contact-confirm'))) {
      wp_deregister_script('google-recaptcha');
  }
}
add_action('wp_enqueue_scripts', 'load_recaptcha_js', 100);

/* 自動挿入されるPタグ、brタグを削除 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}


// Contact Form 7のフックを使って送信ステータスをセッションに保存
add_action('wpcf7_mail_sent', 'my_wpcf7_mail_sent');
add_action('wpcf7_mail_failed', 'my_wpcf7_mail_failed');

function my_wpcf7_mail_sent($contact_form) {
    session_start();
    $_SESSION['cf7_status'] = 'success';
}

function my_wpcf7_mail_failed($contact_form) {
    session_start();
    $_SESSION['cf7_status'] = 'fail';
}

// セッションの開始
function start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session');

// セッションの終了
function end_session() {
    session_destroy();
}
add_action('wp_logout', 'end_session');
add_action('wp_login', 'end_session');

// メールアドレス確認用
function add_custom_script_to_footer() {
  echo '<script>
  document.addEventListener("DOMContentLoaded", function() {
    var emailField = document.getElementById("your-email");
    var confirmEmailField = document.getElementById("your-email-confirm");
    var emailMatchMessage = document.getElementById("email-match-message");
    var confirmButton = document.querySelector(".p-page-contact-input-confirm-btn");

    function validateEmailMatch() {
      if (emailField && confirmEmailField && emailMatchMessage) {
        if (emailField.value !== confirmEmailField.value) {
          emailMatchMessage.style.display = "inline";
          return false;
        } else {
          emailMatchMessage.style.display = "none";
          return true;
        }
      }
      return true;
    }

    if (emailField && confirmEmailField) {
      emailField.addEventListener("input", validateEmailMatch);
      confirmEmailField.addEventListener("input", validateEmailMatch);
    }

    if (confirmButton) {
      confirmButton.addEventListener("click", function(event) {
        if (!validateEmailMatch()) {
          event.preventDefault(); // 確認画面への遷移をブロック
          alert("メールアドレスが一致していません。フォームを修正してください。");
        }
      });
    }
  });
  </script>';
}
add_action('wp_footer', 'add_custom_script_to_footer');

/***********************************************************
* Contact Form7 確認モーダル用スクリプト読み込み
***********************************************************/
function enqueue_contact_modal_script() {
  if (is_page('contact-input')) {
    wp_enqueue_script(
      'contact-modal',
      get_template_directory_uri() . '/js/contact-modal.js',
      array('jquery'),
      filemtime(get_template_directory() . '/js/contact-modal.js'),
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_contact_modal_script');


// NoImage画像選択メタボックス（カスタム投稿対応）
function add_noimage_select_box_for_custom_posts() {
  $custom_post_types = get_post_types(['_builtin' => false], 'names');

  foreach ($custom_post_types as $post_type) {
      add_meta_box(
          'noimage_select_box',
          'NoImage画像の選択',
          'noimage_select_box_html',
          $post_type,
          'side',
          'low'
      );
  }
}
add_action('add_meta_boxes', 'add_noimage_select_box_for_custom_posts');

function noimage_select_box_html($post) {
  $value = get_post_meta($post->ID, '_noimage_select', true);
  if (empty($value)) {
      $value = 'noimage1'; // 初期選択を noimage1 に
  }

  $theme_dir = get_template_directory_uri() . '/images/noimage/';
  $options = [
      'noimage1' => 'NoImage①',
      'noimage2' => 'NoImage②',
      'noimage3' => 'NoImage③',
      'noimage4' => 'NoImage④',
  ];

  echo '<p>アイキャッチ未設定時に表示されるNoImage画像を選択してください。</p>';
  echo '<div style="display:flex; flex-wrap:wrap; gap:10px;">';
  foreach ($options as $key => $label) {
      $checked = checked($value, $key, false);
      $img_src = esc_url($theme_dir . $key . '.png');
      echo '<label style="text-align:center; width:48%; display:block; border:1px solid #ccc; border-radius:6px; padding:8px;">';
      echo "<img src='{$img_src}' alt='{$label}' style='max-width:100%; height:auto; display:block; margin-bottom:6px; border-radius:4px;'>";
      echo "<input type='radio' name='noimage_select' value='{$key}' {$checked}> {$label}";
      echo '</label>';
  }
  echo '</div>';
}

// 選択内容を保存
function save_noimage_select_meta_for_custom_posts($post_id) {
  if (isset($_POST['noimage_select'])) {
      update_post_meta(
          $post_id,
          '_noimage_select',
          sanitize_text_field($_POST['noimage_select'])
      );
  } else {
      // 未選択時は noimage1 を自動セット
      update_post_meta($post_id, '_noimage_select', 'noimage1');
  }
}
add_action('save_post', 'save_noimage_select_meta_for_custom_posts');

// アイキャッチ画像が設定されていない場合にNoImageを表示する関数
function custom_get_noimage($post_id) {
  $selected = get_post_meta($post_id, '_noimage_select', true);
  if (empty($selected)) {
      $selected = 'noimage1'; // 選択がない場合もデフォルトに
  }

  $theme_dir = get_template_directory_uri() . '/images/noimage/';
  return $theme_dir . $selected . '.png';
}


// カスタム投稿タイプ 'course' からエディターサポートを削除
function remove_course_editor_support() {
  remove_post_type_support('course', 'editor');
}
add_action('init', 'remove_course_editor_support');


// お知らせ（news）用のサムネイルサイズを登録
add_theme_support('post-thumbnails'); // まだ書いていない場合は必須
add_image_size('news-thumb', 436, 326, true); // true はハードクロップ（中央トリミング）


// ACF カスタムフィールド：voice_icon の選択肢を動的に生成
add_filter('acf/load_field/name=voice_icon', function ($field) {

  $base = get_template_directory_uri() . '/images/voice/';

  $icons = [];
  for ($i = 1; $i <= 20; $i++) {
      // 01, 02 のようなゼロ詰め
      $num = sprintf('%02d', $i);
      $key = 'icon' . $num; // 保存される値（例：icon01）

      $label = sprintf(
          '<img src="%s%s.png" style="width:40px;height:40px; display:inline-block; vertical-align:middle; margin-right:8px;"> %s',
          $base,
          $key,
          strtoupper($key)
      );

      $icons[$key] = $label;
  }

  $field['choices'] = $icons;
  $field['return_format'] = 'value';

  return $field;
});

