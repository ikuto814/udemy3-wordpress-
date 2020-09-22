<?php



//ウィジェットエリアの追加
register_sidebar(
    array(
        'name' => 'サイドバーウィジェット-1',
        'id' => 'my-sidebar',
        'description' => 'サイドバーのウィジェットエリアです',
        'before_widget' => '<li>',
        'after_widget' => '</li>',

    ));
///カスタムメニューの登録
register_nav_menu('footer_menu','フッターメニュー');

//タイトルタグの設定
function setup_my_theme() {
    add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'setup_my_theme');



//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
); 

?>