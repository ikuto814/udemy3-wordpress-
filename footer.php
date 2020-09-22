<div id="footer">
      <div id="footMenu">
      <?php
         wp_nav_menu(array(
            'theme_location' => 'footer_menu',
         ));
      ?>
         <!-- <ul>
            <li><a href="index.html">会社概要</a></li>
            <li><a href="index.html">採用情報</a></li>
            <li><a href="index.html">お問い合わせ</a></li>
            <li><a href="index.html">プライバシーポリシー</a></li>
         </ul> -->
      </div><!-- /#footerMenu -->
      <div class="copyright">Copyright &copy; 2011 YOUR SITE NAME All Rights Reserved.</div>
   </div><!-- /#footer -->
</div><!-- /#top -->
<?php wp_footer(); ?>
</body>
</html>