<?php
  $dir = get_template_directory_uri()
?>

  </main>
  <footer class="site-footer">
    <div class="site-footer__wrap flex">
      <div class="spacer flex-stretch"></div>
      <div class="alien flex-fix" style="background-image: url(<?php echo $dir . '/assets/img/footer-alien.svg' ?>)"></div>
      <div class="info flex-fix">
        <div class="name">筑波大学人形劇団NEU</div>
        <address class="address">茨城県つくば市天王台1-1-1 芸術系サークルポスト</address>
        <p><a href="mailto:筑波大学人形劇団NEU&lt;tsukuba.neu@gmail.com&gt;">tsukuba.neu@gmail.com</a></p>
      </div>
      <div class="contacts flex-fix">
        <ul class="contacts-list">
          <li>
            <a href="https://neu0.exblog.jp" target="_blank">Blog</a>
          </li>
          <li>
            <a href="https://twitter.com/tsukuba_neu" target="_blank">Twitter</a>
          </li>
          <li>
            <a href="https://line.me/R/ti/p/@hzu3916v" target="_blank">LINE@</a>
          </li>
        </ul>
      </div>
      <div class="spacer flex-stretch"></div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
