<?php

/** Tell WordPress to run theme_setup() when the 'after_setup_theme' hook is run. */

if ( ! function_exists( 'theme_setup' ) ):

function theme_setup() {

  /* This theme uses post thumbnails (aka "featured images")
  *  all images will be cropped to thumbnail size (below), as well as
  *  a square size (also below). You can add more of your own crop
  *  sizes with add_image_size. */
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size(120, 90, true);
  add_image_size('square', 80, 80, true);


  // Add default posts and comments RSS feed links to head
  add_theme_support( 'automatic-feed-links' );

  /* This theme uses wp_nav_menu() in one location.
  * You can allow clients to create multiple menus by
  * adding additional menus to the array. */
  register_nav_menus( array(
    'primary' => 'Primary Navigation',
    'header-menu' => 'Header Menu',
    'artists-menu' => __( 'Artists Menu' ),
    'shows-menu' => __( 'Shows Menu' )
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );

}
endif;

add_action( 'after_setup_theme', 'theme_setup' );



/* Add all our JavaScript files here.
We'll let WordPress add them to our templates automatically instead
of writing our own script tags in the header and footer. */

function lets_add_some_scripts() {
  //Don't use WordPress' local copy of jquery, load our own version from a CDN instead
  wp_deregister_script('jquery');
    wp_enqueue_script(
    'jquery',
    "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js",
    false, //dependencies
    null, //version number
    true //load in footer
  );
}

add_action( 'wp_footer', 'lets_add_some_scripts');

function add_local_scripts() {
  wp_enqueue_script(
    'plugins', //handle
    get_template_directory_uri() . '/js/plugins.js', //source
    false, //dependencies
    null, // version number
    true //load in footer
  );

  wp_enqueue_script(
    'scripts', //handle
    get_template_directory_uri() . '/js/scripts.js', //source
    array( 'jquery', 'plugins' ), //dependencies
    null, // version number
    true //load in footer
  );
}
add_action( 'wp_footer', 'add_local_scripts');


/* Custom Title Tags */

function lisa_wp_title( $title, $sep ) {
  global $paged, $page;

  if ( is_feed() ) {
    return $title;
  }

  // Add the site name.
  $title .= get_bloginfo( 'name', 'display' );

  // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title = "$title $sep $site_description";
  }

  // Add a page number if necessary.
  if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
    $title = "$title $sep " . sprintf( __( 'Page %s', 'lisa' ), max( $paged, $page ) );
  }

  return $title;
}
add_filter( 'wp_title', 'lisa_wp_title', 10, 2 );

/*
  Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function lisa_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'lisa_page_menu_args' );


/*
 * Sets the post excerpt length to 40 characters.
 */
function lisa_excerpt_length( $length ) {
  return 40;
}
add_filter( 'excerpt_length', 'lisa_excerpt_length' );

/*
 * Returns a "Continue Reading" link for excerpts
 */
function lisa_continue_reading_link() {
  return ' <a href="'. get_permalink() . '">Continue reading <span class="meta-nav">&rarr;</span></a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and lisa_continue_reading_link().
 */
function lisa_auto_excerpt_more( $more ) {
  return ' &hellip;' . lisa_continue_reading_link();
}
add_filter( 'excerpt_more', 'lisa_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 */
function lisa_custom_excerpt_more( $output ) {
  if ( has_excerpt() && ! is_attachment() ) {
    $output .= lisa_continue_reading_link();
  }
  return $output;
}
add_filter( 'get_the_excerpt', 'lisa_custom_excerpt_more' );


/*
 * Register a single widget area.
 * You can register additional widget areas by using register_sidebar again
 * within lisa_widgets_init.
 * Display in your template with dynamic_sidebar()
 */
function lisa_widgets_init() {
  // Area 1, located at the top of the sidebar.
  register_sidebar( array(
    'name' => 'Credits Widget Area',
    'id' => 'primary-widget-area',
    'description' => 'Add the credits categories and people',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array(
      'name'          => 'Header Next Show Area',
      'id'            => 'header-next-show-area',
      'description' => 'Update the upcoming shows for the header',
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="header-next-show-text">',
      'after_title'   => '</div>',
    ) );

}

add_action( 'widgets_init', 'lisa_widgets_init' );



if ( ! function_exists( 'lisa_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 */
function lisa_posted_on() {
  printf('<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s',
    'meta-prep meta-prep-author',
    sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
      get_permalink(),
      esc_attr( get_the_time() ),
      get_the_date()
    ),
    sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
      get_author_posts_url( get_the_author_meta( 'ID' ) ),
      sprintf( esc_attr( 'View all posts by %s'), get_the_author() ),
      get_the_author()
    )
  );
}
endif;

if ( ! function_exists( 'lisa_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 */
function lisa_posted_in() {
  // Retrieves tag list of current post, separated by commas.
  $tag_list = get_the_tag_list( '', ', ' );
  if ( $tag_list ) {
    $posted_in = 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';
  } elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
    $posted_in = 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';
  } else {
    $posted_in = 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';
  }
  // Prints the string, replacing the placeholders.
  printf(
    $posted_in,
    get_the_category_list( ', ' ),
    $tag_list,
    get_permalink(),
    the_title_attribute( 'echo=0' )
  );
}
endif;

/* Get rid of junk! - Gets rid of all the crap in the header that you dont need */

function clean_shit_up() {
  // windows live
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  // wordpress gen tag
  remove_action('wp_head', 'wp_generator');
  // comments RSS
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 3 );
}

add_action('init', 'clean_shit_up');


/* Here are some utility helper functions for use in your templates! */

/* pre_r() - makes for easy debugging. <?php pre_r($post); ?> */
function pre_r($obj) {
  echo "<pre>";
  print_r($obj);
  echo "</pre>";
}

/* is_blog() - checks various conditionals to figure out if you are currently within a blog page */
function is_blog () {
  global  $post;
  $posttype = get_post_type($post );
  return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

/* get_post_parent() - Returns the current posts parent, if current post if top level, returns itself */
function get_post_parent($post) {
  if ($post->post_parent) {
    return $post->post_parent;
  }
  else {
    return $post->ID;
  }
}

//     $.filtrify('container', 'placeHolder');

// });


// remove unnecessary menus
function remove_admin_menus () {
  global $menu;

  // all users
  $restrict = explode(',', 'Links,Comments,Posts,Maps');
  
  // non-administrator users
  $restrict_user = explode(',', 'Plugins,Users,Posts,Tools,Options,Maps,Options');

  // WP localization
  $f = create_function('$v,$i', 'return __($v);');
  array_walk($restrict, $f);
  if (!current_user_can('activate_plugins')) {
    array_walk($restrict_user, $f);
    $restrict = array_merge($restrict, $restrict_user);
  }

  // remove menus
  end($menu);
  while (prev($menu)) {
    $k = key($menu);
    $v = explode(' ', $menu[$k][0]);
    if(in_array(is_null($v[0]) ? '' : $v[0] , $restrict)) unset($menu[$k]);
  }

}
add_action('admin_menu', 'remove_admin_menus');

// add_filter('acf/settings/show_admin', '__return_false');

/**
 * MASONRY ENQUEUE SCRIPTS
 */
function lisa_freemason_scripts_method() {
  wp_enqueue_script(
    "jquery-masonry",
    array("jquery")
  );
}
add_action("wp_enqueue_scripts", "lisa_freemason_scripts_method");