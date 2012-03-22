<?php

  // Enable Custom Menus in WP3.x
  add_theme_support('menus');

  // Enable all post types in the loop
  add_filter( 'pre_get_posts', 'my_get_posts' );
  function my_get_posts( $query ) {
  	if ( is_home() && false == $query->query_vars['suppress_filters'] )
  		$query->set('post_type', array('post','photos','quotes'));
  	return $query;
  }

?>