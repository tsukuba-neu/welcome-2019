<?php

$dir = get_template_directory_uri();

add_action( 'wp_enqueue_scripts', function() {
  global $dir;
  wp_enqueue_script( 'single', $dir . '/dist/app/404.js', null, null, true );
});

get_header();

?>

<div class="error_404">
  <h1>ページが見つかりません</h1>
  <p>お探しのページを見つけることができませんでした。</p>
  <ul>
    <li>このサイトでは2019年度新歓イベントに関する情報を提供しております。新歓に関するお問い合わせ・質問などは、<a href="https://line.me/R/ti/p/@hzu3916v">公式LINE</a>のトークよりお気軽にお問い合わせください。</li>
    <li>公式Twitter、LINEなどのご案内のURLが間違っている場合は、DMやトークでおしらせください。お手数をお掛け致します。</li>
    <li>昨年度新歓情報のページはご覧いただくことができません。ご了承ください。</li>
    <li>公演依頼および劇団へのその他のお問い合わせは、<a href="mailto:筑波大学人形劇団NEU&lt;tsukuba.neu@gmail.com&gt;">tsukuba.neu@gmail.com</a>へお問い合わせください。</li>
  </ul>
</div>

<?php

get_footer();

?>
