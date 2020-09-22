<?php get_header(); ?>
   <div id="contents">
      <div id="topicPath">
         <a href="<?php bloginfo( 'stylesheet_directory' ); ?>/">HOME</a> &gt; <?php wp_title(); ?>
      </div><!-- /#topicPath -->
      <div id="main">


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 		
?>
         <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

<?php 

	} // end while
} // end if
?>

<p>
<?php next_posts_link('次へ'); ?>
<?php previous_posts_link('前へ'); ?>
</p>
         <p>
            <a href="<?php bloginfo('url'); ?>/">&raquo; インデックスページに戻る</a>
         </pp>
      </div><!-- /#main -->
<?php get_sidebar(); ?>
      <div id="pageTop">
         <a href="#top">ページのトップへ戻る</a>
      </div><!-- /#pageTop -->
   </div><!-- /#contents -->
<?php get_footer(); ?>