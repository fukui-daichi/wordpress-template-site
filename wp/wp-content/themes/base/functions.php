<?php

namespace {
  require_once __DIR__ . "/inc/admin.php";
  require_once __DIR__ . "/inc/post-types.php";
  require_once __DIR__ . "/inc/reset-head.php";

  function el($o, $k, $d = null)
  {
    if (is_array($o)) {
      return isset($o[$k]) ? $o[$k] : $d;
    } else {
      return isset($o->$k) ? $o->$k : $d;
    }
  }

  function view($view, $vars = [])
  {
    if (file_exists(__DIR__ . "{$view}.php")) {
      extract($vars);
      include __DIR__ . "{$view}.php";
    }
  }

  function part($part, $vars = [])
  {
    view("/parts/{$part}", $vars);
  }

  function get_pagination()
  {
    global $wp_query;

    $current = el($wp_query->query, "paged", 1);
    $max = $wp_query->max_num_pages;

    return [
      "current" => $current,
      "per_page" => $wp_query->query_vars["posts_per_page"],
      "max" => $max,
      "has_prev" => $current != 1,
      "has_next" => $current != $max
    ];
  }

  load_theme_textdomain('base', get_template_directory() . '/languages');
};

namespace Site {
  // サイト固有の関数をここに記述
}
