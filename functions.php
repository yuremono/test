<?php
// no type in link&script tag
function my_theme_setup() {
	add_theme_support( 'html5', array( 'script', 'style' ) );
}
add_action( 'after_setup_theme', 'my_theme_setup');
// link&script
function add_my_files() {
	wp_enqueue_style('ress',get_template_directory_uri().'/css/ress.css' );
	wp_deregister_script( 'jquery');  
	wp_enqueue_script('jquery3.6', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
	wp_enqueue_script('fontawesome','//kit.fontawesome.com/6b3a3541c3.js', array(), '3.6.0', true);
		// front-page.php
	if ( is_front_page()) {
		wp_enqueue_style('Mplus','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400;700;900&display=swap',array(),NULL,true);
		wp_enqueue_style('CSB',get_template_directory_uri().'/css/jquery.mCustomScrollbar.css' );
		wp_enqueue_style('style',get_template_directory_uri().'/style.css');
		wp_enqueue_script('mousewheel', get_template_directory_uri().'/js/jquery.mousewheel.js', array(), '3.6.0', true);
		wp_enqueue_script('CSBC', get_template_directory_uri().'/js/jquery.mCustomScrollbar.concat.min.js', array(), '3.6.0', true);
		// wp_enqueue_script('gsap', get_template_directory_uri().'/umd/gsap.js');
		// wp_enqueue_script('ScrollTrigger', get_template_directory_uri().'/umd/ScrollTrigger.js');
		wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery3.6','mousewheel','CSBC'), '3.6.0', true);
	} elseif  // page.php
	( is_page( ) ) {
		wp_enqueue_style('Arvo','//fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Cardo:ital@1&display=swap',array(),NULL,true);
		wp_enqueue_style('swiperBundle',get_template_directory_uri().'/css/vendors/swiper-bundle.min.css' );
		wp_enqueue_style('lightbox', get_template_directory_uri().'/css/lightbox.css');
		wp_enqueue_style('mature', get_template_directory_uri().'/css/mature.css');
		wp_enqueue_style('menu',get_template_directory_uri().'/css/menu.css' );
		wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css', array('ress','Arvo','swiperBundle','lightbox','mature','menu'));
		wp_enqueue_script('vivus','//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js', array(), '3.6.0', true);
		wp_enqueue_script('lazy','//cdn.jsdelivr.net/npm/vanilla-lazyload@17.5.0/dist/lazyload.min.js', array(), '3.6.0', true);
		wp_enqueue_script('lightboxJS', get_template_directory_uri().'/matureJS/lightbox.js', array(), '3.6.0', true);
		wp_enqueue_script('swiper', get_template_directory_uri().'/matureJS/swiper-bundle.min.js', array(), '3.6.0', true);
		wp_enqueue_script('hero-slider', get_template_directory_uri().'/matureJS/hero-slider.js', array(), '3.6.0', true);
		wp_enqueue_script('Mscript', get_template_directory_uri().'/matureJS/Mscript.js', array('jquery3.6','vivus','lazy','lightboxJS','swiper','hero-slider'), '3.6.0', true);
	} elseif ( is_post( ) ) {} 
		elseif ( is_singular() ) {}
}
add_action('wp_enqueue_scripts', 'add_my_files');

// custum-post setting
add_action('init', 'menu_init');
function menu_init(){
		$labels = array(
			'name' => _x('CafeMenu編集', 'post type general name'),
			'singular_name' => _x('メニュー用', 'post type singular name'),
			'add_new' => _x('新規追加', 'menu'),
			'add_new_item' => __('新しくメニューを追加する'),
			'edit_item' => __('メニューを編集'),
			'new_item' => __('新しいメニュー'),
			'view_item' => __('メニューを見る'),
			'search_items' => __('メニューを探す'),
			'not_found' =>  __('メニューはありません'),
			'not_found_in_trash' => __('ゴミ箱にメニューはありません'),
			'parent_item_colon' => ''
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
				'rewrite_withfront'=> true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
				'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
			'supports' => array('title','editor','thumbnail','page-attributes'),
			'has_archive' => true,
		
		);
		register_post_type('menu',$args);
	
	/* カスタム分類を作成 - エリアの追加 */
	register_taxonomy(
		'menu_kind',
		'menu',
		array( 
		'hierarchical' => true, 
		'label' => 'メニューの種類',
		'labels' => array(
				'all_items' => 'メニューの種類一覧',
				'add_new_item' => 'メニューの種類を追加'
			),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'singular_label' => 'メニューの種類',
		'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
		)
				/* カスタム分類の作成はここまで */ 
	);
		
}

// カスタム投稿タイプの追加
function cpt_register_works(){
	$labels = [
		"singular_name" => "works",
		"edit_item" => "works",
	];
	$args = [
		"label" => "works",
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "works", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"supports" => ["title", "editor", "thumbnail" ],
	];
	
	register_post_type( "works", $args );
}
add_action('init', 'cpt_register_works');

// カスタム投稿タイプの追加
function cpt_register_dep(){
	$labels = [
		"singular_name" => "dep",
	];
	$args = [
		"label" => "カテゴリー",
		"labels" => $labels,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_in_menu" => true,
		"query_var" => true,
		"rewrite" => ["slug" => "dep", "with_front" => true ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "dep",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
	];
	
	register_taxonomy( "dep", ["works"], $args );
}
add_action('init', 'cpt_register_dep');

// テーマカスタマイザーにロゴアップロード設定機能追加
///////////////////////////////////////
define('LOGO_SECTION', 'logo_section'); //セクションIDの定数化
define('LOGO_IMAGE_URL', 'logo_image_url'); //セッティングIDの定数化
function themename_theme_customizer( $wp_customize ) {
 $wp_customize->add_section( LOGO_SECTION , array(
 'title' => 'ロゴ画像１', //セクション名
 'priority' => 30, //カスタマイザー項目の表示順
 'description' => 'サイトのロゴ設定。', //セクションの説明
 ) );

 $wp_customize->add_setting( LOGO_IMAGE_URL );
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, LOGO_IMAGE_URL, array(
 'label' => 'ロゴ１', //設定ラベル
 'section' => LOGO_SECTION, //セクションID
 'settings' => LOGO_IMAGE_URL, //セッティングID
 'description' => '画像をアップロードすると画像１が差し変わります。',
 ) ) );

}
add_action( 'customize_register', 'themename_theme_customizer' );//カスタマイザーに登録

//ロゴイメージURLの取得
function get_the_logo_image_url(){
 return esc_url( get_theme_mod( LOGO_IMAGE_URL ) );
}

if ( is_singular() ){//投稿・固定ページの場合
  $head_custom = get_post_meta($post->ID, 'head_custom', true);
  if ( $head_custom ) {
    echo $head_custom;
  }
}