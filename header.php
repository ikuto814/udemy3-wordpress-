<!DOCTYPE html>
<html lang="ja">
<head>    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo(‘template_url’); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo(‘template_url’); ?>/js/common.js"></script>
<!-- <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title> -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="top">
   <div id="headWrap">
      <div id="header">
         <h1><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.gif" alt="" /></a></h1>
         <div id="pr">
            <p><?php bloginfo('description'); ?></p>
         </div>
         <div id="gnavi">
            <ul>
               <li>お電話からのご予約は<br /><span class="tel">0120-000-000</span></li>
               <li><a href="<?php bloginfo('url'); ?>/contact/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/btn_access.gif" alt="お問い合わせ" class="rollover" /></a></li>
            </ul>
         </div>
      </div><!-- /#header -->
   </div><!-- /#headWrap -->
   <div id="menu">
      <ul>
         <li class="home"><a href="<?php bloginfo('url'); ?>/">ホーム</a></li>
         <li><a href="<?php bloginfo('url'); ?>/news/">新着情報</a></li>
         <li><a href="<?php bloginfo('url'); ?>/service/">サービス・設備</a></li>
         <li><a href="<?php bloginfo('url'); ?>/room/">客室・料金</a></li>
         <li><a href="<?php bloginfo('url'); ?>/food/">料理</a></li>
         <li><a href="<?php bloginfo('url'); ?>/access/">アクセス</a></li>
      </ul>
   </div><!-- /#menu -->
