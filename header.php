<?php
$home_url = esc_url(home_url('/'));
$theme_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= $theme_url; ?>/mfp.statics/mailformpro.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= $theme_url; ?>/css/style.min.css">
  <title>mail-form-pro-cgi</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
  </header>

  <main>