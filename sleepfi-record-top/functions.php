
<?php
function sleepfi_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sleepfi_theme_setup');
?>

<?php function sleepfi_enqueue_assets() {

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