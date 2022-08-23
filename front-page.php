<?php
$home_url = esc_url(home_url('/'));
$theme_url = get_template_directory_uri();

get_header();
?>

<form id="mailformpro" action="<?= $theme_url; ?>/mailformpro/mailformpro.cgi" method="post">
  <div class="form">
    <dl>
      <dt class="form_title">お名前</dt>
      <dd class="form_cont">
        <input class="form_input" type="text" name="お名前">
      </dd>
    </dl>
    <div class="submit">
      <button type="submit">送信する</button>
    </div>
  </div>
<script type="text/javascript" id="mfpjs" src="<?= $theme_url; ?>/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
</form>

<?php
get_footer();
?>