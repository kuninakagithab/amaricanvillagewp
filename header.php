<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/toppage.css">
  <title>American Village</title>
  <? wp_deregister_script('jquery'); ?>
</head>

<body>
  <?php wp_head(); ?>
  <header>
    <nav>
      <li><a href="#">Menu01</a></li>
      <li><a href="#">Menu02</a></li>
      <li><a href="#">Menu03</a></li>
      <li><a href="#">Menu04</a></li>
    </nav>
  </header>

  <div id="ham-menu">
    <ul>
      <li><a href="#">Menu01</a></li>
      <li><a href="#">Menu02</a></li>
      <li><a href="#">Menu03</a></li>
      <li><a href="#">Menu04</a></li>
    </ul>
  </div>
  <div id="menu-background"></div>
