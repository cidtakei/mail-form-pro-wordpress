<?php
/*
Template Name: サンクスページ
*/
$home_url = esc_url(home_url('/'));
$theme_url = get_template_directory_uri();

get_header();
?>

<div id="wrapper">
  <div id="header">
    <h1>Mailform Pro</h1>
    <p>もっと究極の進化を遂げたメールフォームプロの登場です。</p>
  </div>
  <div id="container">
    <div class="mfp_thanks">
      <script type="text/javascript" src="<?= $theme_url; ?>/mfp.statics/thanks.js"></script>
      <!-- Googleスプレッドシート連携
					<script type="text/javascript" src="mfp.statics/google.spreadsheet.connect.js"></script>
					-->
      <!-- Paypal ウェブペイメントプラス対応
					<script type="text/javascript" src="mfp.statics/PaypalWebPaymentPlus.js"></script>
					-->
      <p>このページが表示されているという事は、無事メールが送信されたはずです。</p>
      <div id="ThanksComment"></div>
      <p>このページが表示されているにも関わらず、メールが届いていない場合は</p>
      <ul class="mfp_caution">
        <li>sendmailのパスが間違っている</li>
        <li>迷惑メールフォルダに入っている</li>
        <li>メールアドレスが間違っている</li>
        <li>サーバに送信が許可されていないメールアドレスを利用している</li>
      </ul>
      <p>などの可能性があります。</p>
      <p>サンクスページが標準の状態のため、このページが表示されておりますので、ぜひサンクスページの設定を変更してください。設置作業もあともう少しです！がんばってくださいっ！</p>
      <p>うまくいかない場合は<a href="https://www.synck.com/contents/faq/">サポートFAQ</a>でお問い合わせください。</p>
    </div>
  </div>
  <div id="footer">
    <p>Copyright &copy; 2004 SYNCKGRAPHICA.All Rights Reserved.</p>
  </div>
</div>