<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width; initial-scale=1.0, maximum-scale=1">

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS for Deep Thoughts by Mark Otto" href="http://feeds.feedburner.com/mdo">

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- JS -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/google-code-prettify/prettify.js"></script>
    <script>$(function () { window.prettyPrint && prettyPrint() })</script>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
      /* We add some JavaScript to pages with the comment form
       * to support sites with threaded comments (when in use).
       */
      if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

      /* Always have wp_head() just before the closing </head>
       * tag of your theme, or you will break many plugins, which
       * generally use this hook to add elements to <head> such
       * as styles, scripts, and meta tags.
       */
      wp_head();
    ?>
  </head>

  <body>

    <?php // Container div closes in the footer ?>
    <div class="site-container">

      <header class="masthead">
        <a class="bs-blog-logo" href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/bootstrap-blog-logo.png" alt="Official Twitter Bootstrap Blog">
        </a>
        <p>
          <strong>
            <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a>
          </strong>
          <br>
          Announcements, discussions, and more for <a href="http://getbootstrap.com" title="Visit the official Twitter Bootstrap docs">Bootstrap</a>.
        </p>
      </header>
