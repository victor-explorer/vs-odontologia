<?php

function vsodonto_load_scripts()
{
  wp_enqueue_style('vsodonto-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', array(), ' v5.3.0-alpha3');
  wp_enqueue_style('vsodonto-slick', get_template_directory_uri() . '/assets/lib/slick/css/slick.css', array(), ' 1.8.0');
  wp_enqueue_style('vsodonto-slick-theme', get_template_directory_uri() . '/assets/lib/slick/css/slick-theme.css', array(), ' 1.8.0');
  wp_enqueue_style('vsodonto-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0', 'all');
  wp_enqueue_style('vsodonto-style', get_template_directory_uri() . '/assets/styles/css/style.css', array(), '1.0', 'all');
  wp_enqueue_script('jquery-lib', 'https://code.jquery.com/jquery-3.7.0.js', array(), '3.7.0', true);
  wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.4.1.js', array(), '3.4.1', true);
  wp_enqueue_script('vsodonto-bootstrap-lib', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery-lib'), 'v5.3.0-alpha3', true);
  wp_enqueue_script('vsodonto-slick-lib', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), '1.8.0', true);
  wp_enqueue_script('vsodonto-fancybox-lib', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), '5.0', true);
  wp_enqueue_script('vsodonto-slick', get_template_directory_uri() . '/assets/scripts/slick.js', array('jquery'), '1.0', true);
  wp_enqueue_script('vsodonto-script', get_template_directory_uri() . '/assets/scripts/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'vsodonto_load_scripts');


add_filter('use_block_editor_for_post', 'disable_gutenberg_on_settings_page', 5, 2);

function disable_gutenberg_on_settings_page($can, $post)
{
  if ($post) {
    if ($post->post_name === "site-settings") {
      return false;
    }
  }
  return $can;
}

function hide_settings_page($query)
{
  if (!is_admin() && !is_main_query()) {
    return;
  }
  global $typenow;
  if ($typenow === "page") {
    $settings_page = get_page_by_path("site-settings", NULL, "page")->ID;
    $query->set('post__not_in', array($settings_page));
  }
  return;
}
add_action('pre_get_posts', 'hide_settings_page');


// Add the page to admin menu
function add_site_settings_to_menu()
{
  add_menu_page('Informações', 'Informações', 'manage_options', 'post.php?post=' . get_page_by_path("site-settings", NULL, "page")->ID . '&action=edit', '', 'dashicons-admin-settings', 20);
}
add_action('admin_menu', 'add_site_settings_to_menu');

// Change the active menu item

add_filter('parent_file', 'higlight_custom_settings_page');

function higlight_custom_settings_page($file)
{
  global $parent_file;
  global $pagenow;
  global $typenow, $self;

  $settings_page = get_page_by_path("site-settings", NULL, "page")->ID;

  $post = (int)$_GET["post"];
  if ($pagenow === "post.php" && $post === $settings_page) {
    $file = "post.php?post=$settings_page&action=edit";
  }
  return $file;
}

function edit_site_settings_title()
{
  global $post, $title, $action, $current_screen;
  if (isset($current_screen->post_type) && $current_screen->post_type === 'page' && $action == 'edit' && $post->post_name === "site-settings") {
    $title = 'Informações dinâmicas' . ' - ' . get_bloginfo('name');
  }
  return $title;
}

add_action('admin_title', 'edit_site_settings_title');
