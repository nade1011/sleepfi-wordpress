
<?php
function sleepfi_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sleepfi_theme_setup');
?>

<?php
 // カスタム投稿タイプ「Goods」を登録
  function register_goods_post_type() {
    register_post_type('goods', [
      'labels' => [
        'name' => 'goods',
        'singular_name' => 'goods'
      ],
      'public' => true,
      'has_archive' => false,
      'menu_position' => 5,
      'supports' => ['thumbnail','title'],
    ]);
  }
  add_action('init', 'register_goods_post_type');



  //メタボックス音源ui
  add_action('add_meta_boxes', function () {
    add_meta_box(
      'goods_audio_box',
      '音源',
      'render_goods_audio_box',
      'goods',
      'normal',
      'high'
    );
  });
  //メタボックス音源の内容を表示
  function render_goods_audio_box($post) {
    $audio_url = get_post_meta($post->ID, 'audio_url', true);
?>
<p>
  <input type="text" id="goods_audio_url" name="audio_url" value="<?php echo esc_attr($audio_url); ?>" style="width: 100%;" placeholder="音源URLを入力してください">
  </p>
  <p>
    <button type="button" class="button" id="goods_audio_select">
      メディアから選択
    </button>
  </p>
  <p style="color: #666; font-size: 12px;">
    ※ この音源ファイルは商品視聴用です。Jukeboxプレイヤーで再生されます。
  </p>
<?php
  }
  
    //アイキャッチuiの位置を変更
  add_action('do_meta_boxes', function () {
    // 投稿編集画面のアイキャッチ画像メタボックスを削除
    remove_meta_box('postimagediv', 'goods', 'side');

    // アイキャッチ画像メタボックスをコンテンツエリアの下部に追加
    add_meta_box(
      'postimagediv',
      'アイキャッチ画像',
      'post_thumbnail_meta_box',
      'goods',
      'normal',
      'high'
    );
  });
  // メタボックス商品情報「artist」「price」などの情報を追加
  add_action('add_meta_boxes', function () {
    add_meta_box(
      'goods_info_box',
      '商品情報',
      'render_goods_info_box',
      'goods',
      'normal',
      'default'
    );
  });

  // メタボックス商品情報の内容を表示
  function render_goods_info_box($post) {
    $artist = get_post_meta($post->ID, 'artist', true);
    $title =  get_post_meta($post->ID, 'title', true);
    $description = get_post_meta($post->ID, 'description', true);
    $price = get_post_meta($post->ID, 'price', true);
    
  
?>
<p>
  <label>アーティスト名:</label><br>
  <input type="text" name="artist"  value="<?php echo esc_attr($artist); ?>" style="width: 100%;">
</p>
<p>
  <label>タイトル:</label><br>
  <input type="text" name="title"  value="<?php echo esc_attr($title); ?>" style="width: 100%;">
</p>
<p>
  <label>商品説明:</label><br>
  <textarea name="description" rows="4" style="width: 100%;"><?php echo esc_textarea($description); ?></textarea>
<p>
  <label>価格:</label><br>
  <input type="text" name="price" value="<?php echo esc_attr($price); ?>" style="width: 100%;">
</p>

<?php
  }

// メタボックスのデータを保存
  add_action('save_post_goods', function ($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['artist'])) {
      update_post_meta($post_id, 'artist', sanitize_text_field($_POST['artist']));
    }
    if (isset($_POST['title'])) {
      update_post_meta($post_id, 'title', sanitize_text_field($_POST['title']));
    }
    if (isset($_POST['description'])) {
      update_post_meta($post_id, 'description', sanitize_textarea_field($_POST['description']));
    }
    if (isset($_POST['price'])) {
      update_post_meta($post_id, 'price', sanitize_text_field($_POST['price']));
    }
    if (isset($_POST['audio_url'])) {
      update_post_meta($post_id, 'audio_url', esc_url_raw($_POST['audio_url']));
    }
  });
  
  // カスタム投稿タイプ「Goods」用の音源メディア選択用のスクリプトを追加
  add_action('admin_enqueue_scripts', function ($hook) {
    global $post;
     if (!in_array($hook, ['post-new.php', 'post.php'])) return;
     if ($post->post_type !== 'goods') return;
      wp_enqueue_media();

      wp_add_inline_script('jquery-core', "
      jQuery(function($){
      $('#goods_audio_select').on('click', function(e){
        e.preventDefault();
        
        const frame = wp.media({
          title: '音源を選択',
          button: { text: '選択' },
          multiple: false,
          library: { type: 'audio' }
        });
        frame.on('select', function(){
          const url = frame.state().get('selection').first().get('url');
          $('#goods_audio_url').val(url);
        });
        frame.open();
      });
      });
    ");
  });
  
// テーマのCSSとJSを読み込む
 function sleepfi_enqueue_assets() {

//css
wp_enqueue_style('sleepfi-reset', get_template_directory_uri() . '/assets/css/reset.css', [], '1.0');
wp_enqueue_style('sleepfi-common', get_template_directory_uri() . '/assets/css/common.css', ['sleepfi-reset'], '1.0');
wp_enqueue_style('sleepfi-top', get_template_directory_uri() . '/assets/css/top.css', ['sleepfi-common'], '1.0');
wp_enqueue_style('sleepfi-about', get_template_directory_uri() . '/assets/css/about.css', ['sleepfi-top'], '1.0');
wp_enqueue_style('sleepfi-artist', get_template_directory_uri() . '/assets/css/artist.css', ['sleepfi-about'], '1.0');
wp_enqueue_style('sleepfi-goods', get_template_directory_uri() . '/assets/css/goods.css', ['sleepfi-artist'], '1.0');

//google fonts
  wp_enqueue_style(
    'sleepfi-google-fonts',
    'https://fonts.googleapis.com/css2?family=League+Gothic&family=Carrois+Gothic&family=Gothic+A1:wght@100;200;300;400;500;600;700;800;900&display=swap',
    [],
    null
  );

//js
wp_enqueue_script('sleepfi-nav', get_template_directory_uri() . '/assets/js/nav.js', [], '1.0', true);
wp_enqueue_script('sleepfi-jukebox', get_template_directory_uri() . '/assets/js/jukebox.js', ['sleepfi-nav'], '1.0', true);

}
add_action('wp_enqueue_scripts', 'sleepfi_enqueue_assets');