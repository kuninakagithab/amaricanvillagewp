<?php
// アイキャッチ画像の表示
add_theme_support('post-thumbnails');
add_filter('filesystem_method',function($args) {
    return 'direct';
  });
