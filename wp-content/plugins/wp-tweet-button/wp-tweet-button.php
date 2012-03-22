<?php
/*
Plugin Name: WP Tweet Button
Version: 2.0.3.3
Plugin URI: http://0xtc.com/plugins/wp-tweet-button
Description: The WordPress implementation of the official Twitter Tweet Button.
Contributors: 0xtc
Author: Tanin Ehrami
Author URI: http://0xtc.com
Stable tag: trunk
Text Domain: wp-tweet-button
Domain Path: /lang
*/

/*
	Hooks:
#	wp_tweet_button_long_url 
	(string:url)
	Use this hook to manipulate the value of the permalink that has about to be used for shortening and for counturl

#	wp_tweet_button_url
	(string:url)
	Use this hook to manipulate the value of the shorturl that has about to be used to tweet with.

#	wp_tweet_button
	(string:html)
	Use this hook to manipulate the generated button html code.

#	wp_tweet_button_options
	(Array)
	Use this hook to register new options at runtime.

#	wp_tweet_button_shortenerdata
	(Array)
	Use this hook together with the wp_tweet_button_options hook to add new shorteners to the configuration.
*/

class wpTweetButton {
	var $optionsname = 'wp_tweet_button';
	var $txtdom = 'wp-tweet-button';
	var $readyState = false;
	var $excerptState = false;
	var $postid;
	/**
	* The following are default settings for the plugin's configuration.
	* Most of these settings can be accessed from the plugin's settings page.
	*/
	var $options = array(
		'tw_hook_prio'=> '75',
		'tw_debug'=> '',
		'tw_where'=> 'before',
		'tw_text'=>'entry_title',
		'tw_text_format'=>'VIA',
		'tw_text_custom'=>'',
		'tw_no_wporg'=>'',
		'tw_strip_www'=>'',
		'tw_flush_cache'=>'',
		'tw_url_shortener'=>'none',
		'tw_url_shortener_awesm_key'=>'',
		'tw_url_shortener_snip_user'=>'',
		'tw_url_shortener_snip_key'=>'',
		'tw_url_shortener_cligs_key'=>'',
		'tw_url_shortener_super_user'=>'',
		'tw_url_shortener_super_key'=>'',
		'tw_url_shortener_bitly_user'=>'',
		'tw_url_shortener_bitly_key'=>'',
		'tw_url_shortener_jmp_user'=>'',
		'tw_url_shortener_jmp_key'=>'',
		'tw_url_shortener_tinyarrow_host'=>'',
		'tw_url_shortener_tinyarrow_user'=>'',
		'tw_url_samecount'=>'1',
		'tw_rel_meta'=>'',
		'tw_btn_text'=>'Tweet',
		'tw_via'=>'',
		'tw_ga_code'=>'',
		'tw_enable_ga_code'=>'1',
		'tw_align'=>'none',
		'tw_rec'=>'',
		'tw_rec_desc'=>'',
		'tw_lang'=>'en',
		'tw_style'=> '',
		'tw_style_c'=> '',
		'tw_count'=> 'horizontal',
		'tw_nostyle_feed'=> '',
		'tw_force_manual'=> '',
		'tw_display_single'=> '1',
		'tw_display_archive'=> '1',
		'tw_display_search'=> '1',
		'tw_display_excerpt'=> '1',
		'tw_display_feed'=> '1',
		'tw_display_page'=> '1',
		'tw_display_front'=> '1',
		'tw_display_mobile'=>'',
		'tw_ex_after_home'=>'',
		'tw_bwdata_attr'=> '',
		'tw_use_rel_me'=> '',
		'tw_add_rel_shortlink'=> '',
		'tw_no_https_shortlinks'=> '1',
		'tw_post_type_exclude'=>'',
		'tw_config_ver'=>'',
		'tw_auto_tweet_via'=>'',
		'tw_auto_tweet_token_secret'=>'',
		'tw_auto_tweet_token'=>'',
		'tw_auto_tweet_pages'=>'0',
		'tw_auto_tweet_posts'=>'0',
		'tw_auto_tweet_strip'=>'stext',
		'tw_script_infooter'=>'0'
		);
	/**
	* These are settings from the list above that have boolean values (true or false / 1 or 0) 
	* It is used for cleanup and validation actions.
	*/
	var $boolops = array(
		'tw_debug',
		'tw_script_infooter',
		'tw_force_manual',
		'tw_display_single',
		'tw_display_search',
		'tw_ex_after_home',
		'tw_display_archive',
		'tw_display_page',
		'tw_display_front',
		'tw_display_excerpt',
		'tw_display_feed',
		'tw_display_mobile',
		'tw_enable_ga_code',
		'tw_use_rel_me',
		'tw_add_rel_shortlink',
		'tw_bwdata_attr',
		'tw_url_samecount',
		'tw_auto_tweet_pages',
		'tw_auto_tweet_posts',
		'tw_no_https_shortlinks',
		'tw_nostyle_feed'
		);
	/**
	* These are TinyArro.ws domains. 
	* Due to javascript ristrictions there is currently no method to automatically add
	* TinyArro.ws domains to a tweet button dialog. 
	* Although TinyArro.ws is not supported we're declaring them here in the hope of one day
	* being able to use them.
	*/
	var $tinyarrow_hosts = array(
		'xn--ogi.ws'=>'&#x27A8;.ws',
		'xn--vgi.ws'=>'&#x27AF;.ws',
		'xn--3fi.ws'=>'&#x2794;.ws',
		'xn--egi.ws'=>'&#x279E;.ws',
		'xn--9gi.ws'=>'&#x27BD;.ws',
		'xn--5gi.ws'=>'&#x27B9;.ws',
		'xn--1ci.ws'=>'&#x2729;.ws',
		'xn--odi.ws'=>'&#x273F;.ws',
		'xn--rei.ws'=>'&#x2765;.ws',
		'xn--cwg.ws'=>'&#x203A;.ws',
		'xn--bih.ws'=>'&#x2318;.ws',
		'xn--fwg.ws'=>'&#x203D;.ws',
		'xn--l3h.ws'=>'&#x2601;.ws',
		'ta.gd '=>'ta.gd'
		);
	/**
	* The following array is used to extract data about shorteners and 
	* their configuration.
	*/
	var $shortenerdata = array(
		'none' => array(
			'label'=>'None',
		),
		'awesm' => array(
			'label'=>'awe.sm',
			'params'=>array(
				"awesmapikey" => array('value'=>'tw_url_shortener_awesm_key','name'=>'API Key')
			)
		),
		'tiny' => array(
			'label'=>'tinyurl.com',
			'method'=>'GET',
			'url'=>'http://tinyurl.com/api-create.php',
			'params'=> array(
				'url'=>'%URL%'
			)
		),
		'b2l' => array(
			'label'=>'b2l.me',
			'method'=>'GET',
			'url'=>'http://b2l.me/api.php?alias',
			'params'=> array(
				'alias'=>'',
				'url'=>'%URL%'
			)
		),
		'snipr.com' => array(
			'label'=>'snipr.com',
			'method'=>'POST',
			'url'=>'http://snipr.com/site/getsnip',
			'params'=> array(
				"snipformat" => 'simple',
				"sniplink" => '%RAWURL%',
				"snipuser" => array('value'=>'tw_url_shortener_snip_user','name'=>'Username','important'=>true),
				"snipapi" => array('value'=>'tw_url_shortener_snip_key','name'=>'API Key','important'=>true)
			)
		),
		'cligs'=> array(
			'label'=>'cli.gs',
			'method'=>'GET',
			'url'=>'http://cli.gs/api/v1/cligs/create',
			'params'=>array(
				'url'=>'%URL%',
				'appid'=>'wp-tweet-button',
				'key'=>array('value'=>'tw_url_shortener_cligs_key','name'=>'API Key')
			)
		),
		'supr'=>array(
			'label'=>'su.pr',
			'method'=>'GET',
			'url'=>'http://su.pr/api/simpleshorten',
			'params'=>array(
				'url'=>'%URL%',
				'login'=>array('value'=>'tw_url_shortener_super_user','name'=>'Username'),
				'apiKey'=>array('value'=>'tw_url_shortener_super_key','name'=>'API Key'),
				'version'=>'1.0'
			)
		),
		'jmp'=>array(
			'label'=>'j.mp',
			'method'=>'GET',
			'url'=>'http://api.j.mp/v3/shorten',
			'params'=>array(
				'longUrl'=>'%URL%',
				'history'=>'1',
				'login'=>array('value'=>'tw_url_shortener_jmp_user','name'=>'Username','important'=>true),
				'apiKey'=>array('value'=>'tw_url_shortener_jmp_key','name'=>'API Key','important'=>true),
				'format'=>'txt'
			)
		),
		'bitly'=>array(
			'label'=>'bit.ly',
			'method'=>'GET',
			'url'=>'http://api.bit.ly/v3/shorten',
			'params'=>array(
				'version'=>'3',
				'longUrl'=>'%URL%',
				'history'=>'1',
				'login'=>array('value'=>'tw_url_shortener_bitly_user','name'=>'Username','important'=>true),
				'apiKey'=>array('value'=>'tw_url_shortener_bitly_key','name'=>'API Key','important'=>true),
				'format'=>'txt'
			)
		),
		'tinyarrow'=>array(
			'label'=>'tinyarro.ws',
			'method'=>'GET',
			'url'=>'http://tinyarro.ws/api-create.php',
			'enabled'=>'false',
			'params'=>array(
				'suggest'=>'_nounicode',
				'host'=>array('value'=>'tw_url_shortener_tinyarrow_host'),
				'url'=>'%RAWURL%'
			)
		),
		'tanin'=>array(
			'label'=>'tanin.nl',
			'method'=>'GET',
			'url'=>'http://tanin.nl/s/api-create.php',
			'enabled'=>'false',
			'params'=>array(
				'u'=>'%URL%'
			)
		),
		'slly'=>array(
			'label'=>'sl.ly',
			'method'=>'GET',
			'url'=>'http://sl.ly/',
			'enabled'=>'false',
			'params'=>array(
				'module'=>'ShortURL',
				'file'=>'Add',
				'mode'=>'API',
				'url'=>'%RAWURL%'
			)
		)
	);

	/**
	* Auto-tweet provider URL.
	*/
	
	var $wptbsrv = 'http://wptbsrv.0xtc.com/a/';

	/**
	* This function is used during development to output debug data.
	*/
	function decho ($var_name,$thingie){
		if ($this->tw_get_option('tw_debug') != '1') return false;
		echo '<!-- '.$var_name.' = ';
		if (is_array($thingie)){
			print_r ($thingie);
		} else {
			echo $thingie;
		}
		echo ' -->'."\r\n";
	}

	/**
	* This function isn't actually used but is left here for historical reasons. Yeah, that's it...historical reasons.
	*/
	function init() {
		$this->tw_readoptions();
	}

	/**
	* Commits options to database.
	*/
	function tw_writeoptions(){
		update_option($this->optionsname, $this->options);
	}

	/**
	* Validate and write settings.
	*/
	function tw_updateoptions() {
		if( isset($_POST['tw_where']) ) {
			$new_options = $_POST;
			$bool_options = $this->boolops;
			foreach($bool_options as $key) {
				$new_options[$key] = $new_options[$key] ? '1' : '';
			}
			$new_options['tw_via'] = $this->tw_sanitize_username($new_options['tw_via']);
			$new_options['tw_rec'] = $this->tw_sanitize_username($new_options['tw_rec']);
			$new_options['tw_ga_code'] = trim($new_options['tw_ga_code']);
			foreach($this->options as $key => $option) {
				$this->options[$key] = $new_options[$key];
			}			
			$this->tw_writeoptions();
			return true;
		}
		return false;
	}
	
	/**
	* Validate and read configuration into class.
	*/
	function tw_readoptions() {
		$values = $this->options;
		$twOptions = get_option($this->optionsname);
		if (!empty($twOptions)) {
			foreach ($twOptions as $key => $option) $values[$key] = $option;	
		} elseif ($values['tw_config_ver']!='1') {
			$bool_options = $this->boolops;
			if (get_option('tw_count')){
				foreach( $values as $key => $value ) {
					if($tmpvar = (string)get_option($key)){
						$values[$key] = get_option($key);
					}
				}
				foreach($bool_options as $key) {
					if (get_option($key)!='1'){
						update_option($bool_options[$key],'0');
						$values[$key] = '0';
					}
				}
				foreach( $values as $key => $value ) {
					delete_option($key);
				}
				$values['tw_config_ver']='1';
			}
		}
		$this->options=$values;
		$this->tw_writeoptions();
		return $values;
	}

	/**
	* This function reads individual settings 
	*/
	function tw_get_option($optionname){
		return $this->options[$optionname];
	}

	/**
	* This function sets individual settings 
	*/
	function tw_set_option($optionname=null, $value=null){
		$this->options[$optionname]=$value;
	}

	/**
	* Clear cached shortURLs if requested. 
	*/
	function tw_flush_cached_shortlinks(){
		if ($_POST['tw_flush_cached_shortlinks']=='1'){
			$allposts = get_posts('numberposts=-1&post_type=post&post_status=any');
			foreach( $allposts as $postinfo) {
				delete_post_meta($postinfo->ID, '_twitterrelated_short_url');
				delete_post_meta($postinfo->ID, '_twitterrelated_short_urlHash');
				delete_post_meta($postinfo->ID, '_activeshortener');
			}
			return 'fs';
		}
	}
	
	/**
	* Clear page cache if requested 
	*/
	function tw_flush_cache(){
		$msg = '';
		if ($_POST['tw_flush_cache']=='1'){
			if (function_exists('w3tc_pgcache_flush')) {
				w3tc_pgcache_flush();
				return 'w3';
			} else if (function_exists('wp_cache_clear_cache')) {
				wp_cache_clear_cache();
				return 'sc';
			}
		}
		return false;
	}

	/**
	* Find the author's twitter name from various settings. 
	*/
	function tw_get_twitter_name(){
		$viauser=false;
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		if (function_exists('get_user_meta')){
			if (get_user_meta($post->post_author, 'twitter',true)){
				$viauser = get_user_meta($post->post_author, 'twitter',true);
			} else {
				$viauser = $this->tw_get_option('tw_via');
			}
		} else {
			$viauser = $this->tw_get_option('tw_via');
		}
		return $viauser;
	}

	/**
	* This function decides the format of the tweet text based on preferences and limitations.
	*/
	function tw_get_text($entitydecode=false){
		global $post;
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			$this->postid = $post->ID;
		}
		
		if (get_post_meta($post->ID, '_twitterrelated_custom_text', true)){
			if ($entitydecode){
				$button_data_text =  html_entity_decode($this->tw_preptext(get_post_meta($post->ID, '_twitterrelated_custom_text', true)));
			} else {
				$button_data_text =  $this->tw_preptext(get_post_meta($post->ID, '_twitterrelated_custom_text', true));
			}
		} else {
			$tw_text = $this->tw_get_option('tw_text');
			if ($tw_text=='entry_title') { $button_data_text = $post->post_title;}
			if ($tw_text=='page_title') { $button_data_text = $post->post_title .' - '. get_bloginfo('name');}
			if ($tw_text=='blog_title')	 { $button_data_text = get_bloginfo('name');}
			if ($tw_text=='custom_title') { $button_data_text = $this->tw_preptext(stripslashes($this->tw_get_option('tw_text_custom')));}
		}
		return $button_data_text;
	}
	
	/**
	* Applies formatting and transformations to texts. 
	*/	
	function tw_preptext($text){
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		$tmptxt = null;
		$tmptxt= str_replace('%POSTTITLE%', $post->post_title, $text);
		$tmptxt= str_replace('%BLOGTITLE%', get_bloginfo('name'), $tmptxt);
		$tmptxt= str_replace('%BLOGHASHTAGS%', $this->tw_get_hash_tags(), $tmptxt);
		$tmptxt= str_replace('%BLOGHASHCATS%', $this->tw_get_hash_cats(), $tmptxt);
		return $tmptxt;
	}

	/**
	* Adds relational tag "me" to header. 
	*/
	function tw_add_rel_me(){
		echo '<link rel="me" href="http://twitter.com/'.$this->tw_get_twitter_name().'" />';
	}
	
	/**
	* Adds relational tag "shortlink" to header. 
	*/
	function tw_add_rel_shortlink(){
		echo '<link rel="shortlink" href="'.$this->tw_get_short_url().'" />';
	}
	
	/**
	* Used once to hook up actions. 
	*/
	function tw_hook_up_actions (){
			add_action('admin_menu', 			array(&$this, 'tw_options'));
			add_action('admin_init', 			array(&$this, 'tw_init'));
			add_action('admin_menu', 			array(&$this, 'tw_tweet_button_post_options_box'));

			add_action('new_to_publish', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('new_to_future', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('new_to_draft',			array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('future_to_draft', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('future_to_future', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('draft_to_future', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('draft_to_draft', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('draft_to_publish', 		array(&$this, 'tw_post_tweet_button_box_process'));
			add_action('pending_to_publish', 	array(&$this, 'tw_post_tweet_button_box_process'));

			add_action('publish_post', 			array(&$this, 'tw_post_tweet_button_box_process'));			
			add_action('publish_page', 			array(&$this, 'tw_post_tweet_button_box_process'));

			add_action('publish_post',			array(&$this, 'tw_send_auto_tweet'),100,1);
			add_action('new_to_publish',		array(&$this, 'tw_send_auto_tweet'),100,1);
			add_action('draft_to_publish',		array(&$this, 'tw_send_auto_tweet'),100,1);
			add_action('pending_to_publish',	array(&$this, 'tw_send_auto_tweet'),100,1);

			add_action('profile_update', 		array(&$this, 'tw_account_cleanup'));	
	}
	
	/**
	* The function that runs the show.
	*/
	function wpTweetButton(){
/*
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
*/
//			global $post;
	//		$this->postid = $post->ID;
/*		}
*/
		$this->options = $this->tw_readoptions();
		$this->shortenerdata = apply_filters('wp_tweet_button_shortenerdata', $this->shortenerdata);
		$this->options = apply_filters('wp_tweet_button_options', $this->options);
		add_action('future_to_publish',			array(&$this, 'tw_send_auto_tweet'),100,1);
		if (is_admin()){
			$this->tw_hook_up_actions();
			$uri=null;
			if($this->tw_updateoptions()){
				$uri='&op1=1';
			}
			$tfcr = $this->tw_flush_cache();
			if  ($tfcr=='w3'){$uri .='&op2=w3';}
			if  ($tfcr=='sc'){$uri .='&op2=sc';}

			$tfcr = $this->tw_flush_cached_shortlinks();
			if  ($tfcr=='fs'){$uri .='&op3=fs';}

			if (function_exists('filter_input')){
				$t1 = filter_input(INPUT_GET, 't1', FILTER_SANITIZE_STRING);
				$t2 = filter_input(INPUT_GET, 't2', FILTER_SANITIZE_STRING);
				$t3 = filter_input(INPUT_GET, 't3', FILTER_SANITIZE_STRING);
				$oauth = filter_input(INPUT_GET, 'oauth', FILTER_SANITIZE_STRING);
			} else {
				$t1 = $_GET['t1'];
				$t2 = $_GET['t2'];
				$t3 = $_GET['t3'];
				$oauth = $_GET['oauth'];
			}
			if ($t1 != '' & $t2 !=''){
				$this->tw_set_option('tw_auto_tweet_token',$t1);
				$this->tw_set_option('tw_auto_tweet_token_secret',$t2);
				$this->tw_set_option('tw_auto_tweet_via',$t3);
				$this->tw_writeoptions();
				$uri .= '&op2=oauthok';
			}
			if ($oauth=='delete'){
				$this->tw_set_option('tw_auto_tweet_token','');
				$this->tw_set_option('tw_auto_tweet_token_secret','');
				$this->tw_set_option('tw_auto_tweet_pages','');
				$this->tw_set_option('tw_auto_tweet_posts','');
				$this->tw_set_option('tw_auto_tweet_via','');
				$this->tw_writeoptions();
				$uri .= '&op2=oauthdel';
			}

			if ($uri){
				header('location: options-general.php?page=wp-tweet-button.php' .$uri);
				die;
			}
		} else {
			if ($this->tw_get_option('tw_use_rel_me') == '1' && $this->tw_get_option('tw_via') !='') {
				add_action('wp_head', array(&$this, 'tw_add_rel_me'));
			}
			if ($this->tw_get_option('tw_add_rel_shortlink') == '1') {
				add_action('wp_head', array(&$this, 'tw_add_rel_shortlink'));
			}
		}
		add_filter('the_title', array(&$this,'tw_set_placement_ready'), 9);
		add_filter('the_content', array(&$this, 'tw_update'),$this->tw_get_option('tw_hook_prio'));
		add_filter('get_the_excerpt', array(&$this,'tw_enter_excerpt'), 1);
		add_filter('get_the_excerpt', array(&$this,'tw_exit_excerpt'), 9999);
		// add_filter('get_the_excerpt', array(&$this, 'tw_remove_filter'), 9);
		// ----------------------
		if ($this->tw_get_option('tw_display_excerpt') == '1') add_filter('the_excerpt', array(&$this, 'tw_update'), $this->tw_get_option('tw_hook_prio'));
		add_action('init', array(&$this, 'tw_add_script'));
		if (function_exists('get_user_meta')){
			add_filter('user_contactmethods',array(&$this, 'tw_add_twitter_contactmethod'),10,1);
		}
		if (function_exists('wp_get_shortlink') && ($this->tw_get_option('tw_url_shortener') == 'wordpress')) {
			if ($this->tw_get_option('tw_no_wporg')=='1') remove_filter('get_shortlink', 'wpme_get_shortlink_handler', 10, 4);
			if ($this->tw_get_option('tw_strip_www')=='1') add_filter('get_shortlink',array(&$this,'tw_strip_www'),9,1);
		}
	}

	/**
	* This is called if a post is in excerpt mode.  It sets $this->excerptState to
	* true, so we can test for it later.
	*/
	function tw_enter_excerpt($the_excerpt) {
		$this->excerptState = true;
		return $the_excerpt;
	}
	
	function tw_exit_excerpt($the_excerpt) {
		$this->excerptState = false;
		return $the_excerpt;
	}
	
	/**
	* This writes a twitter username to the user's settings.
	*/
	function tw_account_cleanup($user_id) {
		$twitter_username = $_POST['twitter'];
		$twitter_username =  $this->tw_sanitize_username($twitter_username);
		if (function_exists('update_user_meta')){
			update_user_meta($user_id, 'twitter', $twitter_username);
		}	else {
			update_usermeta($user_id, 'twitter', $twitter_username);
		}
	}

	
	/**
	* This function sets the readyState when the title is displayed.
	* This prevents that the tweet button isn't rendered in the header area.
	*/
	function tw_set_placement_ready($title){
		$this->readyState=true;
		return $title;
	}

	/**
	* Deprecated function that removed content filter and added kit again at a later time 
	*/
	function tw_remove_filter($content) {
		remove_action('the_content', array(&$this, 'tw_update'),$this->tw_get_option('tw_hook_prio'));
		add_filter('the_content', array(&$this, 'tw_add_content_filter'),$this->tw_get_option('tw_hook_prio'));
		return $content;
	}

	/**
	* Deprecated function that added content filter
	*/
	function tw_add_content_filter ($content){
		add_filter('the_content', array(&$this, 'tw_update'),$this->tw_get_option('tw_hook_prio'));
		return $content;
	}

	/**
	* Function returns a list of hashtags (#one #two #three) based on post tags.
	*/
	function tw_get_hash_tags(){
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		$textsuff = null;
		$posttags = get_the_tags();
		if ($posttags) {
			foreach($posttags as $tag) {
					$textsuff .= htmlspecialchars(' #'.$tag->slug);
			}
		}
		return trim(str_replace('-','',$textsuff));
	}

	/**
	* Function returns a list of category hash tags (#one #two #three) based on post categories.
	*/
	function tw_get_hash_cats(){
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		$textsuff = null;
		$posttags = get_the_category();
		if ($posttags) {
			foreach($posttags as $tag) {
					$textsuff .= htmlspecialchars(' #'.$tag->slug);
			}
		}
		return trim(str_replace('-','',$textsuff));
	}

	/**
	* Universal function for gettings the URL of a post.
	*/
	function tw_get_the_url($bwdata=false){
		$shortener = $this->tw_get_option('tw_url_shortener');
		if ($shortener != 'none' && $shortener != 'awesm' && $shortener != ''){
			$url=$this->tw_get_short_url();
		} else {
			$url = $this->tw_get_long_url($bwdata);
		}
		return $url;
	}

	/**
	* Function returns the post's relationship with a twitter account.
	*/
	function tw_get_related_text($urenc=false){
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		$text = null;
		if (get_post_meta($post->ID, '_twitterrelated', true)){
				$text = get_post_meta($post->ID, '_twitterrelated', true);
		} elseif (get_post_meta($post->ID, 'twitterrelated', true)){
				$text = get_post_meta($post->ID, 'twitterrelated', true);
		} else {
			if ($this->tw_get_option('tw_rec')) {
				$text = $this->tw_get_option('tw_rec');
				if ($this->tw_get_option('tw_rec_desc')) {$text .= ':' . (($urenc) ? urlencode($this->tw_get_option('tw_rec_desc')) : $this->tw_get_option('tw_rec_desc'));}				
			}
		}
		return $text;
	}
	
	/**
	* Function returns attributes for HTML5 based buttons
	*/
	function tw_build_options_data() {
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
			$this->postid = $post->ID;
		}
		$textprefix = null;
		$button_data_via=null;
		$button_data_status_id = null;
		$button_data_url = 'data-url="' . $this->tw_get_the_url(true) . '"';
		$viauser = $this->tw_get_twitter_name();
		if ($viauser){
			if ($this->tw_get_option('tw_text_format')=='VIA' || $this->tw_get_option('tw_use_rel_me')=='1') {
				$button_data_via = 'data-via="' . $viauser.'"';
			} elseif ($this->tw_get_option('tw_text_format')=='RT') {
				$textprefix = 'RT @'.$viauser.' ';
			}
		}
		$tdata = get_post_meta($post->ID, '_tw_autotweeted',true);
		if ($tdata !=''){
			$tdata = explode(':',$tdata );
			$tid = $tdata[0];
			$tname = $tdata[1];
			//$button_data_status_id = 'data-status-id="'.$tid.'"';
		}
		$button_data_text = 'data-text="'.$textprefix . htmlspecialchars($this->tw_get_text()).'"';
		$button_data_related = 'data-related="'.$this->tw_get_related_text().'"';
		$button_data_count = 'data-count="'.$this->tw_get_option('tw_count').'"';
		$button_data_lang = 'data-lang="'.$this->tw_get_option('tw_lang').'"';
		if ($this->tw_get_option('tw_url_shortener')=='awesm' && $this->tw_get_option('tw_url_shortener_awesm_key') != null){
			$button_data_awesmkey = 'data-awesm-key="'.$this->tw_get_option('tw_url_shortener_awesm_key').'"';
		} else {
			$button_data_awesmkey = null;
		}
		if ($this->tw_get_option('tw_url_samecount')=='1'){
			$button_data_counturl = 'data-counturl="'.$this->tw_get_long_url(false). '"';
		} else {
			$button_data_counturl=null;
		}
		$anchordata = $button_data_url." ".$button_data_related." ".$button_data_via." ".$button_data_text." ".$button_data_lang." ".$button_data_count." ".$button_data_awesmkey." ".$button_data_counturl." ".$button_data_status_id;
		return $anchordata;	
	}
	
	/**
	* Function returns url parameters for legacy buttons
	*/
	function tw_build_options($bwdata=false) {
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
			$this->postid = $post->ID;
		}
		$textprefix =null;
		if ($bwdata==true && !is_feed()){return false;}
		$viauser = $this->tw_get_twitter_name();
		$button = '?url=' . urlencode($this->tw_get_the_url(true));
		if ($viauser){
			if ($this->tw_get_option('tw_text_format')=='VIA' || $this->tw_get_option('tw_use_rel_me')=='1') {
				$button .= '&amp;via=' . $viauser;
			} elseif ($this->tw_get_option('tw_text_format')=='RT') {
				$textprefix = 'RT @'.$viauser.' ';
			}
		}
		$button .= '&amp;text='.str_replace('+','%20',urlencode($textprefix . $this->tw_get_text(true)));
		$button .= '&amp;related='.$this->tw_get_related_text(true);
		$button .= '&amp;lang='.$this->tw_get_option('tw_lang');
		$button .= '&amp;count='.$this->tw_get_option('tw_count');
		if ($this->tw_get_option('tw_url_shortener')=='awesm' && $this->tw_get_option('tw_url_shortener_awesm_key') != null){
			$button .= '&amp;awesmapikey='.$this->tw_get_option('tw_url_shortener_awesm_key');
		}
		if ($this->tw_get_option('tw_url_samecount')=='1'){
			$button .= '&amp;counturl='.urlencode($this->tw_get_long_url(false));
		} 
		return $button;
	}

	/**
	* Function is an HTTP tool for requesting HTML.
	*/
	function tw_nav_browse($url, $use_POST_method = false, $POST_data = null) {
		if(function_exists('wp_remote_request') && function_exists('wp_remote_retrieve_response_code') && function_exists('wp_remote_retrieve_body') && $use_POST_method == 'GET') {
			if($use_POST_method == 'POST') {
				$request_params = array('method' => 'POST', 'body' => $POST_data,'timeout'=>15);
			} else {
				$request_params = array('method' => 'GET');
			}
			$url_request = wp_remote_request($url, $request_params);
			$url_response = wp_remote_retrieve_response_code($url_request);
			if($url_response == 200 || $url_response == '200'){
				$source = wp_remote_retrieve_body($url_request);
				if ($url_request['headers']['content-encoding']=='deflate'){
					$source = wp_remote_retrieve_body($url_request);
				} else {
					$source = wp_remote_retrieve_body($url_request);
				}
			} else {
			  $source = '';
			}
		} elseif (function_exists('curl_init') && function_exists('curl_exec')) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			if($use_POST_method == 'POST'){
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_data);
			}
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
			curl_setopt($ch, CURLOPT_TIMEOUT, 15);
			$source = trim(curl_exec($ch));
			if ( curl_errno($ch) != 0 ) {
			  $source = '';
			}
			curl_close($ch);
		} else {
			$source = '';
		}
		return $source;
	}

	/**
	* Function returns the "long" url for a post.
	*/
	//	hook: wp_tweet_button_long_url
	function tw_get_long_url($addtrack=false) {
		global $my_transposh_plugin;
	
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		$perms=null;
		if (empty($post->post_title)) {
			$perms= 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		} else {
			$perms = trim(get_permalink($post->ID));
		}
		
		if (is_object($my_transposh_plugin)){
			if ($my_transposh_plugin->target_language) {
				$perms= transposh_utils::rewrite_url_lang_param($perms, $my_transposh_plugin->home_url, $my_transposh_plugin->enable_permalinks_rewrite, $my_transposh_plugin->target_language, $my_transposh_plugin->edit_mode);
			}
		}
			if ($addtrack && $this->tw_get_option('tw_ga_code') && $this->tw_get_option('tw_enable_ga_code')==1) {
			if (strstr($perms,'?')){$prestr='&';} else {$prestr='?';}
			$tmptxt= str_replace('?', '', $this->tw_get_option('tw_ga_code'));
			$tmptxt= str_replace('+', '', $tmptxt);
			$tmptxt= str_replace('%POSTID%', $post->ID, $tmptxt);
			$tmptxt= str_replace('%POSTSLUG%', $post->post_name, $tmptxt);
			$tmptxt= str_replace('%2B', '', $tmptxt);
			$tmptxt= str_replace('%20', '', $tmptxt);
			$perms = $perms . $prestr . $tmptxt;
		}
		
		$perms = apply_filters('wp_tweet_button_long_url', $perms);
		if (strstr($perms,admin_url())){return false;}

		return $perms;
	}

	/**
	* Function strips www. prefix from URLs.
	*/
	function tw_strip_www($content){
		$str = str_replace('http://www.','http://',$content);
		$str = str_replace('https://www.','https://',$str);
		return $str;
	}
	
	/**
	* Function returns the "short" url for a post (or not...).
	*/
	// hook: wp_tweet_button_url
	function tw_get_short_url() {
		global $post;
		$this->postid = $post->ID;
		$perms = $this->tw_get_long_url(true);
		if ($perms == false) return false;
		if (strstr($perms,'https://') && $this->tw_get_option('tw_no_https_shortlinks')=='1') return $perms;
		if (strstr($perms,'preview=true')) return $perms;
		$selectedshortener=$this->tw_get_option('tw_url_shortener');
		if (
//			($post && $post->post_status != 'publish') || 
			($selectedshortener == 'none')) {
			return $perms;
		}
		if ($selectedshortener == 'tflp' && function_exists('permalink_to_twitter_link')) {
			$fetch_url = permalink_to_twitter_link($perms);
		}
		if ($selectedshortener == 'yourls' && function_exists('wp_ozh_yourls_raw_url')) {
			$fetch_url = wp_ozh_yourls_raw_url();
		}
		if (function_exists('wp_get_shortlink') && ($selectedshortener == 'wordpress')){
			$fetch_url = wp_get_shortlink($post->ID);
		}
		if(!empty($fetch_url)){
			return $fetch_url;
		}
		$paramsarray = $this->shortenerdata[$selectedshortener]['params'];
		if (is_array($paramsarray)){
			$method = 'GET';
			$POST_data = array(); 
			$paramstr = '';
			foreach ($paramsarray as $name=>$value){
				if (is_array($value)){
					if (isset($value['value'])){
						$tmp1 = $this->shortenerdata[$selectedshortener]['params'][$name]; //=$this->tw_get_option($value['value']);
						$tmp1 = $this->tw_get_option($value['value']);
					}
				} else {
						$tmp = str_replace('%URL%',urlencode($perms),$this->shortenerdata[$selectedshortener]['params'][$name]);
						$tmp = str_replace('%RAWURL%',rawurlencode($perms),$tmp);
						$tmp1=$tmp;
				}
				$paramstr .= $name.'='.$tmp1.'&';
			}

			$paramstr = substr($paramstr,0, -1);
			$method = $this->shortenerdata[$selectedshortener]['method'];
			if ($method=='POST'){
				$POST_data = $this->shortenerdata[$selectedshortener]['params'];
				$request_url = $this->shortenerdata[$selectedshortener]['url'];
			} else {
				$request_url = $this->shortenerdata[$selectedshortener]['url'] . '?'.$paramstr;
			}

			if (($selectedshortener != get_post_meta($post->ID, '_activeshortener',true)) || 
				(md5($perms) != get_post_meta($post->ID, '_twitterrelated_short_urlHash',true))) {
				if (!(strstr($request_url,'http://' . $_SERVER['SERVER_NAME'])) && ($request_url != '')){
					$fetch_url = trim($this->tw_nav_browse($request_url, $method, $POST_data));
				}
				if ( !empty( $fetch_url ) && ($fetch_url != $perms) && strstr($fetch_url,'http://') && (!strstr($perms,'preview=true'))) {
					if (!update_post_meta($post->ID, '_activeshortener', $selectedshortener )) {
						add_post_meta($post->ID, '_activeshortener', $selectedshortener);
					}
					if (!update_post_meta($post->ID, '_twitterrelated_short_url', $fetch_url)) {
						add_post_meta($post->ID, '_twitterrelated_short_url', $fetch_url);
					}
					if (!update_post_meta($post->ID, '_twitterrelated_short_urlHash', md5($perms))) {
						add_post_meta($post->ID, '_twitterrelated_short_urlHash', md5($perms));
					}
				} else {
//					$fetch_url = $perms;
				}
			} else {
				$fetch_url = get_post_meta($post->ID, '_twitterrelated_short_url',true);
				if ($fetch_url ==''){
					$fetch_url = $perms;
				}
			}
		}
		if ($fetch_url=='') $fetch_url=$perms;
		$fetch_url = apply_filters('wp_tweet_button_url', $fetch_url);
		return $fetch_url;
	}

	/**
	* Function generates a tweet button.
	* $bwdata can be used to return HTML5 (true) or not (false)
	*/
	// Hook : wp_tweet_button
	function tw_generate_button($bwdata=false) {
		$data=null;
		$tw_text = $this->tw_get_option('tw_btn_text');
		$alignstr = null;
		$relstr = null;
		if ($bwdata==true && !is_feed()){
			$data=$this->tw_build_options_data().' ';
		}
		if ($this->tw_get_option('tw_rel_meta')!=''){
			$relstr = 'rel="'.$this->tw_get_option('tw_rel_meta').'" ';
		}
		$alignment = $this->tw_get_option('tw_align');
		if ($alignment!='none' && $this->tw_get_option('tw_align')!=null && $alignment!=''){
			if ($alignment=='right') $alignstr = ';float:right;margin-left:10px;';
			if ($alignment=='left') $alignstr = ';float:left;margin-right:10px;';
			if ($alignment=='center') $alignstr = ';float:none;margin:0 auto;text-align:center;';
		}

		if ($this->tw_get_option('tw_nostyle_feed') == ''){
			$StyleStrDiv = ' style="' . $this->tw_get_option('tw_style_c') . $alignstr . '"';
			$StyleStrBtn = ' style="width:55px;height:22px;background:transparent url(\''. WP_PLUGIN_URL.'/wp-tweet-button/tweetn.png\') no-repeat  0 0;text-align:left;text-indent:-9999px;display:block;"';
		} else {
			$StyleStrDiv = '';
			$StyleStrBtn = '';	
		}

		$button = 	'<div class="tw_button"'.$StyleStrDiv.'>';
		$button .= 	'<a href="http://twitter.com/share'.$this->tw_build_options($bwdata).'" class="twitter-share-button" target="_blank" ' . $data . $relstr . $StyleStrBtn.'>'.$tw_text.'</a>';
		$button .= 	'</div>';
		$button = apply_filters( 'wp_tweet_button', $button );
		return $button;
	}
	
	/**
	* Function places button in content.
	*/
	function tw_update($content) {
		global $post;
		$this->postid = $post->ID;
		if (
			(!$this->readyState) ||
			($this->tw_get_option('tw_display_excerpt') == '' && $this->excerptState) ||
			(get_post_meta($post->ID, '_exclude_tweet_button', true))							||
			($this->tw_get_option('tw_display_feed') == '' && is_feed())						||
			(($this->tw_get_option('tw_display_page') == '' && is_page()) && (get_post_meta($post->ID, 'forcetweetbutton', true)== '')) ||
			($this->tw_get_option('tw_display_front') == '' && (is_home() || is_front_page()))						||
			(($this->tw_get_option('tw_display_single') == '' && is_single()) && (get_post_meta($post->ID, 'forcetweetbutton', true) == '')) ||
			($this->tw_get_option('tw_display_single') == '' && (is_home() || is_front_page()))						||
			($this->tw_get_option('tw_display_archive') == '' && is_archive())					||
			($this->tw_get_option('tw_display_search') == '' && is_search())
		) {
			return $content;
		}
		$selectedPT = $this->tw_get_option('tw_post_type_exclude');
		if (is_array($selectedPT)){
			if (in_array(get_post_type($post->ID),$selectedPT)){
				return $content;
			}
		}
		if (function_exists("bnc_wptouch_is_mobile")) {		
			if (bnc_wptouch_is_mobile() && $this->tw_get_option('tw_display_mobile')==''){
					return $content;
			}
		}
		if (is_feed()){
			$button = $this->tw_generate_button();
		} else {
			$button = $this->tw_generate_button($this->tw_get_option('tw_bwdata_attr') || $this->tw_get_option('tw_url_shortener')=='tinyarrow');
		}
		$where = $this->tw_get_option('tw_where');
		if ($where == 'shortcode') {
			return str_replace('[tweetbutton]', $button, $content);
		} else if ($where == 'beforeandafter') {
			if ($this->tw_get_option('tw_ex_after_home') && (is_home() || is_front_page())){
				return $button . $content;
			} else {
				return $button . $content . $button;			
			}
		} else if ($where == 'before') {
			return $button . $content;
		} else if ($where == 'after') {
			return $content . $button;
		} else {
			return $content;
		}
		return $content;
	}

	/**
	* Function returns a tweet button.
	*/
	function tweetbutton($post,$bwdata=false) {
		if (isset($post->ID)){
			if (get_post_meta($post->ID, '_exclude_tweet_button', true)){
				return false;
			}
		}
		if ($this->tw_get_option('tw_where') == 'manual' || $this->tw_get_option('tw_force_manual') == '1') {
			return $this->tw_generate_button($bwdata);
		} else {
			return false;
		}
	}

	/**
	* Function places twitter script in your header or footer
	*/
	function tw_add_script() {
		if ($this->tw_get_option('tw_url_shortener')=='awesm') {
			wp_register_script('twitter-widgets','http://tools.awe.sm/tweet-button/files/widgets.js',array(),'1.1',($this->tw_get_option('tw_script_infooter') == '1'));
		} else {
			wp_register_script('twitter-widgets','http://platform.twitter.com/widgets.js',array(),'1.1',($this->tw_get_option('tw_script_infooter') == '1'));
		}
		wp_enqueue_script('twitter-widgets');
		if (is_admin()) {
			add_action('admin_head',array(&$this,'tw_drawcss_admin'));
		}
	}

	/**
	* Function outputs CSS for the settings page
	*/
	function tw_drawcss_admin(){
			?><style type="text/css">
			#wptweetbutton-mbox-general .green {color: #0A0;}
			#wptweetbutton-mbox-general .inside {margin:0;}
			#wptweetbutton-mbox-general .floatleft180 {width:180px;float:left;}
			#wptweetbutton-mbox-general .floatleft100 {width:100px;float:left;}
			#wptweetbutton-mbox-general .floatleftm10 {float:left;margin-right:10px;margin-top: 4px;}
			#wptweetbutton-mbox-general .tweetbtnc {font-size:100%;display:block;float:left;height:90px;}
			#wptweetbutton-mbox-general .floatlm4 {float:left;margin-top:4px;}
			#wptweetbutton-mbox-general .floatlml2 {margin-left:2px;width:100px;display:block;float:left;}
			#wptweetbutton-mbox-general .floatlmn2 {margin-left:2px;display:block;float:left;}
			#wptweetbutton-mbox-general .pad45 {padding:6px;}
			#wptweetbutton-mbox-general .w99c29c {width: 99%;color: #444;}
			#wptweetbutton-mbox-general .bt1pcs {}
			#wptweetbutton-mbox-general .w150 {width: 150px;}
			#wptweetbutton-mbox-general .twhdata p {margin:6px 0;}
			#wptweetbutton-mbox-general .twhrow label {line-height:15px;font-weight: bold;display: block;}
			#wptweetbutton-mbox-general table {border-bottom:1px solid #E3E3E3;}
			#wptweetbutton-mbox-general tr td .warning {color: #D00;}
			#wptweetbutton-mbox-general tr td input:hover,
			#wptweetbutton-mbox-general tr td textarea:hover {background:#f3f7fa;color:#444}
			#wptweetbutton-mbox-general tr td input:focus,
			#wptweetbutton-mbox-general tr td textarea:focus {background:#EAF2FA;color:#000}
			#wptweetbutton-mbox-general td.twhdata label {}
			#wptweetbutton-mbox-general .twhdata {background: #fff;vertical-align:top;}
			#wptweetbutton-mbox-general .twhrow {background: #f1f1f1;border-bottom: 1px solid #e3e3e3;border-right:1px solid #e3e3e3;width: 115px;}
			#wptweetbutton-mbox-general .twhhlp {background: #f1f1f1; width: 200px;color:#565656;padding:6px;border-left:1px solid #e3e3e3;}
			</style><?php
	}

	/**
	* Function returns settings page
	*/
	function tw_options_page(){
		if( function_exists( 'add_meta_box' )) {
			add_meta_box( 'TweetButtonSettings1', 'General settings', array(&$this, 'tw_options_box'), 'wptweetbutton', 'normal');
			?>
				<div id="wptweetbutton-mbox-general" class="wrap">
					<?php screen_icon('options-general'); ?>
					<h2>WP Tweet Button</h2>
					<?php 
					wp_nonce_field('wptweetbutton-mbox-general');
					wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false );
					wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false ); 
					?>
					<div id="poststuff" class="metabox-holder">
						<div id="post-body" class="has-sidebar">
							<div id="post-body-content" class="">
								<?php do_meta_boxes('wptweetbutton', 'normal', null); ?>
							</div>
						</div>
						<p style="clear:both;"></p>
					</div>
				</div>
			<?php
		}
	}

	/**
	* Function returns a row on the settings page
	*/
	function tw_row_head($rh,$lfor=""){
		return ' 
					<th class="twhrow" scope="row" valign="top">
						<label for="'.$lfor.'">
							'.$rh.'
						</label>
					</th>';
	}
	
	/**
	* Function outputs the settings page contents
	*/
	function tw_options_box() {
		$msg['w3'] = __('W3 Total Cache page cache has been cleared',$this->txtdom);
		$msg['sc'] = __('WP Super Cache cleared',$this->txtdom);
		$msg['oauthok'] = __('Auto-Tweeting authorized. You can now <a href="#tw_auto_tweet_box">configure</a> Auto-Tweeting.',$this->txtdom);
		$msg['oauthdel'] = __('Auto-Tweeting authorization has been removed. Auto-Tweeting has been disabled.',$this->txtdom);
		if (isset($_GET['op2'])) if ($_GET['op2']=='w3' || $_GET['op2']=='oauthok' || $_GET['op2']=='oauthdel' || $_GET['op2']=='sc') {
			$updmsg = '<p><strong>' . $msg[$_GET['op2']] . '</strong></p>';
		} else {
			$updmsg = null;
		}
		if (isset($_GET['op1'])) if ($_GET['op1']=='1') echo '<div id="message" class="updated fade"><p><strong>' . __('Tweet Button settings have been saved',$this->txtdom) . '</strong></p>'.$updmsg.'</div>';
		if (isset($_GET['op2'])) if ($_GET['op2']=='oauthok' || $_GET['op2']=='oauthdel') echo '<div id="message" class="updated fade">'.$updmsg.'</div>';
		if (isset($_GET['op3'])) if ($_GET['op3']=='fs') echo '<div id="message" class="updated fade"><p><strong>All cached shortlinks have been deleted.</strong></p></div>';
		if (isset($_GET['showdiag'])) if ($_GET['showdiag']=='1') echo '<div id="message" class="updated fade"><pre><strong>' . 'PHP version: ' . phpversion(). '<br />WP Tweet Button configuration: ' .print_r($this->options,true) . '</strong></pre></div>';
		?>
		<form method="post" action="" name="twsettingsform" id="twsettingsform"><?php
			if (function_exists('settings_fields')){
				settings_fields('tw-options');
			} else {
				wp_nonce_field('update-options');
				$paramstr = '';
				echo '<input type="hidden" name="action" value="update" />';
				echo '<input type="hidden" name="page_options" value="';
				foreach($this->options as $key => $option) {
					$paramstr .= $key.',';
				}
				echo substr($paramstr,0, -1);
				echo '" />';
			}
		?>
			<div>
				<table style="margin:0" class="form-table">
					<tr class="bt1pcs">
						<td class="twhdata" colspan="3"  style="background: #E3E3E3;border-top:1px solid #CCC;border-bottom:1px solid #CCC;">
							<p class="submit">
								<input style="width:160px" type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
							</p>				
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Display',$this->txtdom));?>
						<td class="twhdata">
							<div style="margin-right:20px;width:160px;" class="floatleft180">
								<label for="tw_where"><?php _e('Position',$this->txtdom); ?></label><br />						
								<select name="tw_where" class="w99c29c">
									<option <?php if ($this->tw_get_option('tw_where') == 'before') echo 'selected="selected"'; ?> value="before"><?php _e('Before',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_where') == 'after') echo 'selected="selected"'; ?> value="after"><?php _e('After',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_where') == 'beforeandafter') echo 'selected="selected"'; ?> value="beforeandafter"><?php _e('Before and After',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_where') == 'shortcode') echo 'selected="selected"'; ?> value="shortcode"><?php _e('Shortcode',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_where') == 'manual') echo 'selected="selected"'; ?> value="manual"><?php _e('Manual',$this->txtdom);?></option>
								</select>
							</div>
							<div class="floatleft180">
								<label for="tw_align"><?php _e('Alignment',$this->txtdom); ?></label><br />						
								<select name="tw_align" class="w99c29c">
									<option <?php if ($this->tw_get_option('tw_align') == 'none') echo 'selected="selected"'; ?> value="none"><?php _e('None (Default)',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_align') == 'right') echo 'selected="selected"'; ?> value="right"><?php _e('Right',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_align') == 'left') echo 'selected="selected"'; ?> value="left"><?php _e('Left',$this->txtdom);?></option>
									<option <?php if ($this->tw_get_option('tw_align') == 'center') echo 'selected="selected"'; ?> value="center"><?php _e('Center',$this->txtdom);?></option>
								</select>
							</div>
							<p style="clear:both;"></p>
							<p style="margin:10px 0 0 0"><label><?php _e('Visibility',$this->txtdom);?></label></p>
							<div class="floatleft180">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_single') == '1') echo 'checked="checked"'; ?> name="tw_display_single" id="tw_display_single" group="tw_display"/>
								<label for="tw_display_single"><?php _e('Posts',$this->txtdom); ?></label>
							</div>
							<div class="floatleft100">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_page') == '1') echo 'checked="checked"'; ?> name="tw_display_page" id="tw_display_page" group="tw_display"/>
								<label for="tw_display_page"><?php _e('Pages',$this->txtdom); ?></label>
							</div>
							<div class="floatleft180" style="clear:left;">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_front') == '1') echo 'checked="checked"'; ?> name="tw_display_front" id="tw_display_front" group="tw_display"/>
								<label for="tw_display_front"><?php _e('Front page (home)',$this->txtdom);?></label>
							</div>
							<div class="floatleft100">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_feed') == '1') echo 'checked="checked"'; ?> name="tw_display_feed" id="tw_display_feed" group="tw_display"/>
								<label for="tw_display_feed"><?php _e('RSS feeds',$this->txtdom);?></label>
							</div>
							<div class="floatleft180" style="clear:left;">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_archive') == '1') echo 'checked="checked"'; ?> name="tw_display_archive" id="tw_display_archive" group="tw_display"/>
								<label for="tw_display_archive"><?php _e('Archives',$this->txtdom);?></label>
							</div>
							<div class="floatleft100">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_search') == '1') echo 'checked="checked"'; ?> name="tw_display_search" id="tw_display_search" group="tw_display"/>
								<label for="tw_display_search"><?php _e('Search',$this->txtdom);?></label>
							</div>
							<div class="floatleft180" style="clear:left;">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_excerpt') == '1') echo 'checked="checked"'; ?> name="tw_display_excerpt" id="tw_display_excerpt" group="tw_display"/>
								<label for="tw_display_excerpt"><?php _e('Excerpts',$this->txtdom);?></label>
							</div>
							<?php
							if (function_exists("bnc_wptouch_is_mobile")) {
							?>
							<div class="floatleft180">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_display_mobile') == '1') echo 'checked="checked"'; ?> name="tw_display_mobile" id="tw_display_mobile" />
								<label for="tw_display_mobile"><?php _e('Mobile (WPTouch)',$this->txtdom); ?></label>
							</div>
							<?php
							}
							?>
							<div class="floatleft180" style="clear:left;">
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_ex_after_home') == '1') echo 'checked="checked"'; ?> name="tw_ex_after_home" id="tw_ex_after_home" group="tw_display"/>
								<label for="tw_ex_after_home"><?php _e('No After on Front page',$this->txtdom);?></label>
							</div>
							<p style="clear:both;"></p>
							<?php
							$selectedPT = $this->tw_get_option('tw_post_type_exclude');
							if (!is_array($selectedPT))$selectedPT=array();
							$args=array('public' => true, '_builtin' => false); 								
							$output = 'objects';
							$post_types=get_post_types($args,$output);
							if (!empty($post_types)){?>
							<p style="clear:both;margin:20px 0 0 0"><?php _e('You can also EXCLUDE the Tweet Button from custom post types by checking them here.',$this->txtdom);?></p><?php
								foreach ($post_types  as $name => $post_type ) {
									echo '<div class="floatleft180"><label><input type="checkbox" name="tw_post_type_exclude[]" '.(in_array($name,$selectedPT) ? 'checked="checked" ' : '').'value="'.$name.'" /> ' . $post_type->label .'</label></div>';
								}
							} ?>
							<p style="clear:both;"></p>
						</td>
						<td class="twhdata twhhlp">
							<p style="text-align:center;margin-bottom:20px;">
							<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8YYQTCLT37SEG" title="Donate via paypal">
								<img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG_global.gif" border="0" alt="PayPal - The safer, easier way to pay online!"/>
							</a>
							</p>							
							<p>
								<?php _e('Set your look-and-feel preferences.',$this->txtdom); ?>
							</p>
							<p>
								<?php _e('The <strong>"No After on Front page"</strong> option allows you to use "Before and After" placement and the "Front page" placement but exclude the button from the bottom of posts on the front page.',$this->txtdom); ?>
							</p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Tweet Button style',$this->txtdom));?>
						<td class="twhdata">
							<div style="float:left;margin-right:10px;">
							<input type="radio" value="vertical" class="floatleftm10" <?php if ($this->tw_get_option('tw_count') == 'vertical') echo 'checked="checked"'; ?> name="tw_count" id="tw_count_vertical" group="tw_count"/>
							<label for="tw_count_vertical" class="tweetbtnc" style="border-right: 1px solid #E3E3E3;width:70px;background:transparent url('<?php echo WP_PLUGIN_URL; ?>/wp-tweet-button/tweetv.png') no-repeat 0 24px"><?php _e('Vertical',$this->txtdom);?></label>
							</div>
							<div style="float:left;margin-right:10px;">
							<input type="radio" value="horizontal" class="floatleftm10" <?php if ($this->tw_get_option('tw_count') == 'horizontal') echo 'checked="checked"'; ?> name="tw_count" id="tw_count_horizontal" group="tw_count"/>
							<label for="tw_count_horizontal" class="tweetbtnc" style="border-right: 1px solid #E3E3E3;width:120px;background:transparent url('<?php echo WP_PLUGIN_URL; ?>/wp-tweet-button/tweeth.png') no-repeat  0 24px"><?php _e('Horizontal',$this->txtdom);?></label>
							</div>
							<div style="float:left;">
							<input type="radio" value="none" class="floatleftm10" <?php if ($this->tw_get_option('tw_count') == 'none') echo 'checked="checked"'; ?> name="tw_count" id="tw_count_none" group="tw_count" />
							<label for="tw_count_none" class="tweetbtnc" style="width:60px;background:transparent url('<?php echo WP_PLUGIN_URL; ?>/wp-tweet-button/tweetn.png') no-repeat  0 24px"><?php _e('No count',$this->txtdom);?></label>
							</div>
						</td>
						<td class="twhdata twhhlp">
							<p>
							</p>
						</td>
					</tr>
					<tr class="bt1pcs">
					<?php 
					if (function_exists('get_user_meta')){
						echo $this->tw_row_head(__('Default Twitter username',$this->txtdom),'tw_via');
					} else {
						echo $this->tw_row_head(__('Twitter username',$this->txtdom),'tw_via');
					}
					?>
					<td class="twhdata">
							<input class="pad45 w99c29c" type="text" value="<?php echo $this->tw_get_option('tw_via'); ?>" name="tw_via" id="tw_via" /><br />
						</td>
						<td class="twhdata twhhlp">
							<?php
								if (function_exists('get_user_meta')){?>
								<p>
									<?php _e('Authors can also configure their own Twitter accounts on their <a href="profile.php" title="your profile page">profile</a> page.',$this->txtdom); ?>
								</p>
								<?php
								} ?>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Referral format',$this->txtdom),'tw_text_format');?>
						<td class="twhdata">
							<input class="floatlm4" type="radio" value="VIA" <?php if ($this->tw_get_option('tw_text_format') == 'VIA') echo 'checked="checked"'; ?> name="tw_text_format" id="tw_text_format_via" group="tw_text_format"/>
							<label class="floatlmn2" style="width:160px;" for="tw_text_format_via"><?php _e('{text} {link} via {@user}',$this->txtdom);?></label>
							<input class="floatlm4" type="radio" value="RT" <?php if ($this->tw_get_option('tw_text_format') == 'RT') echo 'checked="checked"'; ?> name="tw_text_format" id="tw_text_format_rt" group="tw_text_format"/>
							<label class="floatlmn2" style="width:150px;" for="tw_text_format_rt"><?php _e('RT {@user} {text} {link}',$this->txtdom);?></label>
						</td>
						<td class="twhdata twhhlp">&nbsp;
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Default Tweet text',$this->txtdom),'tw_text');?>
						<td class="twhdata">
							<input class="" type="radio" value="entry_title" <?php if ($this->tw_get_option('tw_text') == 'entry_title') echo 'checked="checked"'; ?> name="tw_text" id="tw_text_entry_title" group="tw_text"/>
							<label class="" for="tw_text_entry_title"><?php _e('Entry title e.g., "Pictures Of My Cat"',$this->txtdom);?></label><br />
							<input class="" type="radio" value="page_title" <?php if ($this->tw_get_option('tw_text') == 'page_title') echo 'checked="checked"'; ?> name="tw_text" id="tw_text_page_title" group="tw_text"/>
							<label class="" for="tw_text_page_title"><?php _e('Page title e.g., "Pictures of my cat - My Wordpress Blog"',$this->txtdom);?></label><br />
							<input class="" type="radio" value="blog_title" <?php if ($this->tw_get_option('tw_text') == 'blog_title') echo 'checked="checked"'; ?> name="tw_text" id="tw_text_blog_title" group="tw_text"/>
							<label class="" for="tw_text_blog_title"><?php _e('Blog title e.g., "My Wordpress Blog"',$this->txtdom);?></label><br />
							<input class="" type="radio" value="custom_title" onclick="var fnow=document.getElementById('tw_text_custom');fnow.focus();" <?php if ($this->tw_get_option('tw_text') == 'custom_title') echo 'checked="checked"'; ?> name="tw_text" id="tw_text_custom_title" group="tw_text" />
							<label class="" for="tw_text_custom_title" onclick="var fnow=document.getElementById('tw_text_custom');fnow.focus();"><?php _e('Custom text',$this->txtdom);?></label><br />
							<textarea class="pad45" style="font-size: 11px;width:300px" type="text" name="tw_text_custom" id="tw_text_custom"><?php if ($this->tw_get_option('tw_text_custom')) echo stripslashes($this->tw_get_option('tw_text_custom')); ?></textarea>
						</td>
						<td class="twhdata twhhlp">
							<p><strong><?php _e('Tags for custom text:',$this->txtdom);?></strong></p>
							<p>
								<code>%POSTTITLE%</code> - <?php _e('The post\'s title.',$this->txtdom);?><br />
								<code>%BLOGTITLE%</code> - <?php _e('The blog\'s name.',$this->txtdom);?>
								<code>%BLOGHASHTAGS%</code> - <?php _e('#Hash tags generated using blog tags.',$this->txtdom);?>
								<code>%BLOGHASHCATS%</code> - <?php _e('#Hash tags generated using blog categories.',$this->txtdom);?>
							</p>
							<p><?php _e('Setting a tweet text for specific posts will override this default selection.',$this->txtdom);?></p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Auto-Tweeting',$this->txtdom),'tw_auto_tweet_box');?>
						<td class="twhdata"><a href="#" id="tw_auto_tweet_box" name="tw_auto_tweet_box"></a>
							<?php
							if ($this->tw_get_option('tw_auto_tweet_token') == '' || $this->tw_get_option('tw_auto_tweet_token_secret') == ''){
								echo '<p>' . __ ('Before you can configure Auto-Tweeting you must first authorize an account. Once you have authorized an account, return here to configure Auto-Tweeting.',$this->txtdom).'</p>';
								echo '<p><a href="'.$this->wptbsrv.'?do=login&return_url='.urlencode(admin_url().'options-general.php?page=wp-tweet-button.php').'" class="button">'.__ ('Authorize',$this->txtdom).'</a></p>';
							} else {
								echo '<p><a href="'.$this->wptbsrv.'?do=logout&return_url='.urlencode(admin_url().'options-general.php?page=wp-tweet-button.php').'" class="button">'.__ ('Remove authorization data',$this->txtdom).'</a></p>';
								echo '<p>'. __ ('Auto-tweets will be posted by: ',$this->txtdom).'<span class="dark"><strong>'.$this->tw_get_option('tw_auto_tweet_via').'</strong></span></p>';
								?>
								<input type="hidden" value="<?php echo $this->tw_get_option('tw_auto_tweet_via');?>" name="tw_auto_tweet_via" />
								<input type="hidden" value="<?php echo $this->tw_get_option('tw_auto_tweet_token');?>" name="tw_auto_tweet_token" />
								<input type="hidden" value="<?php echo $this->tw_get_option('tw_auto_tweet_token_secret');?>" name="tw_auto_tweet_token_secret" />
								<input type="checkbox" value="1" <?php 
									if ($this->tw_get_option('tw_auto_tweet_token') == '' || $this->tw_get_option('tw_auto_tweet_token_secret') == '') echo 'disabled="disabled"'; 
									if ($this->tw_get_option('tw_auto_tweet_posts') == '1') echo 'checked="checked"';
								?> name="tw_auto_tweet_posts" id="tw_auto_tweet_posts" />
								<label for="tw_auto_tweet_posts"><?php _e('Auto-tweet posts',$this->txtdom); ?></label><br />

								<input type="checkbox" value="1" <?php 
									if ($this->tw_get_option('tw_auto_tweet_token') == '' || $this->tw_get_option('tw_auto_tweet_token_secret') == '') echo 'disabled="disabled"'; 
									if ($this->tw_get_option('tw_auto_tweet_pages') == '1') echo 'checked="checked"';
								?> name="tw_auto_tweet_pages" id="tw_auto_tweet_pages" />
								<label for="tw_auto_tweet_pages"><?php _e('Auto-tweet pages',$this->txtdom); ?></label><br />
							<p>
							<?php _e('If the tweet text + url is too long ',$this->txtdom);?>
							<select name="tw_auto_tweet_strip" id="tw_auto_tweet_strip">
								<option value="url" <?php if ($this->tw_get_option('tw_auto_tweet_strip') == 'url') echo 'selected="selected"'; ?>><?php _e('remove the URL',$this->txtdom);?></option>
								<option value="text" <?php if ($this->tw_get_option('tw_auto_tweet_strip') == 'text') echo 'selected="selected"'; ?>><?php _e('remove the text',$this->txtdom);?></option>
								<option value="stext" <?php if ($this->tw_get_option('tw_auto_tweet_strip') == 'stext') echo 'selected="selected"'; ?>><?php _e('shorten the text',$this->txtdom);?></option>
								<option value="tryall" <?php if ($this->tw_get_option('tw_auto_tweet_strip') == 'tryall') echo 'selected="selected"'; ?>><?php _e('try anything that works',$this->txtdom);?></option>
								<option value="notweet" <?php if ($this->tw_get_option('tw_auto_tweet_strip') == 'notweet') echo 'selected="selected"'; ?>><?php _e('do not auto-tweet',$this->txtdom);?></option>
							</select>
							</p><?php 
							} ?>
							
						</td>
						<td class="twhdata twhhlp">
							<p>
								<?php _e ('Auto-Tweeting will allow your blog to send out a tweet when a post is published or saved. By default auto tweets are sent out only once but can be repeated from the post edit page.',$this->txtdom);?>
							</p>
							<p>
								<?php _e ('It is recommended to select a URL shortener before enabling Auto-Tweeting.',$this->txtdom);?>
							</p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Default recommended Twitter user',$this->txtdom),'tw_rec');?>
						<td class="twhdata">
							<input class="pad45 w99c29c" type="text" value="<?php echo $this->tw_get_option('tw_rec'); ?>" name="tw_rec" id="tw_rec" /><br />
							<label for="tw_rec_desc"><?php _e('Description',$this->txtdom);?></label><br />
							<input class="pad45 w99c29c" type="text" value="<?php echo $this->tw_get_option('tw_rec_desc'); ?>" name="tw_rec_desc" id="tw_rec_desc"/>
							<p><?php _e ('After the user tweets the entry, Twitter will allow the user to follow a recommended users. Set a default recommended user here. You can also recommend Twitter users individually in posts and pages using the Tweet Button options.',$this->txtdom);?></p>
						</td>
						<td class="twhdata twhhlp">
							<p>
								<?php _e ('Twitter recommendations configured in posts override these default settings.',$this->txtdom);?>
							</p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Container style',$this->txtdom),'tw_style_c');?>
						<td class="twhdata">
							<input class="pad45 w99c29c" type="text" value="<?php echo htmlspecialchars($this->tw_get_option('tw_style_c')); ?>" name="tw_style_c" id="tw_style_c" />
						</td>
						<td class="twhdata twhhlp" rowspan="1">
							<p><?php _e ('Use the container style box to add additional CSS properties to the DIV surrounding the Tweet Button.',$this->txtdom);?>
							</p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Tweet Button language',$this->txtdom),'tw_lang');?>
						<td class="twhdata">
							<select id="tw_lang" name="tw_lang" style="" class="w99c29c">
								<option value="en" <?php if ($this->tw_get_option('tw_lang') == 'en') echo 'selected="selected"'; ?>><?php _e('English',$this->txtdom);?></option> 
								<option value="fr" <?php if ($this->tw_get_option('tw_lang') == 'fr') echo 'selected="selected"'; ?>><?php _e('French',$this->txtdom);?></option> 
								<option value="de" <?php if ($this->tw_get_option('tw_lang') == 'de') echo 'selected="selected"'; ?>><?php _e('German',$this->txtdom);?></option> 
								<option value="es" <?php if ($this->tw_get_option('tw_lang') == 'es') echo 'selected="selected"'; ?>><?php _e('Spanish',$this->txtdom);?></option> 
								<option value="ja" <?php if ($this->tw_get_option('tw_lang') == 'ja') echo 'selected="selected"'; ?>><?php _e('Japanese',$this->txtdom);?></option>
							</select> 
						</td>
						<td class="twhdata twhhlp" rowspan="2">
							<p><?php _e('This is the language that the button will render in on your website.',$this->txtdom);?></p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Rel metatag',$this->txtdom),'tw_rel_meta');?>
						<td class="twhdata">
							<input class="pad45 w99c29c" type="text" value="<?php echo htmlspecialchars($this->tw_get_option('tw_rel_meta')); ?>" name="tw_rel_meta" id="tw_rel_meta" />
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Tweet link text',$this->txtdom),'tw_btn_text');?>
						<td class="twhdata">
							<input class="pad45 w99c29c" type="text" value="<?php echo htmlspecialchars($this->tw_get_option('tw_btn_text')); ?>" name="tw_btn_text" id="tw_btn_text" />
						</td>
						<td class="twhdata twhhlp">
							<p><?php _e('The text of the link before it is made into a button by Javascript. Clearing this field will prevent non-javascript clients from seeing the tweet link.',$this->txtdom);?></p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('URL Shortener',$this->txtdom),'tw_url_shortener');?>
						<td class="twhdata" style="border-top:1px solid #fff;">
							<select id="tw_url_shortener" name="tw_url_shortener" style="" class="w99c29c">
								<?php
								$shrtnr = $this->tw_get_option('tw_url_shortener');
								foreach ($this->shortenerdata as $name=>$alias){
									if ($alias['enabled'] != 'false'){
										echo '<option '.(($shrtnr == $name) ? 'selected="selected" ':'').'value="'.$name.'">'. $alias['label'] .'</option>'."\r\n";
									}
								}
								?>
								<?php if (function_exists('permalink_to_twitter_link')){?><option <?php if ($shrtnr == 'tflp') echo 'selected="selected"'; ?> value="tflp">Twitter Friendly Links Plugin</option><?php } ?>
								<?php if (function_exists('wp_get_shortlink')){?><option <?php if ($shrtnr == 'wordpress') echo 'selected="selected"'; ?> value="wordpress">Wordpress 3 shortener function</option><?php } ?>
								<?php if (function_exists('wp_ozh_yourls_raw_url')){?><option <?php if ($shrtnr == 'yourls') echo 'selected="selected"'; ?> value="yourls">YOURLS Plugin</option><?php } ?>
							</select> <br />
								<p style="width:230px;margin-right:10px;float:left;"><strong><?php _e('Limitations',$this->txtdom);?></strong><br /><?php _e('If you select a shortener from the list, Twitter will still wrap the shortened URL with its own short URL. (t.co)',$this->txtdom);?></p>
								<p style="width:230px;float:left;"><strong><?php _e('Usernames and API Keys', $this->txtdom);?></strong><br /><?php _e ('Some URL shortening services may require(*) usernames and/or API key.',$this->txtdom);?></p>
								<br style="clear:both" />
								<input type="checkbox" value="1" name="tw_flush_cached_shortlinks" id="tw_flush_cached_shortlinks" />
								<label for="tw_flush_cached_shortlinks"><?php _e('Delete all previously saved shortlinks when I save.',$this->txtdom); ?></label><br />
								<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_no_https_shortlinks') == '1') echo 'checked="checked"'; ?> name="tw_no_https_shortlinks" id="tw_no_https_shortlinks" />
								<label for="tw_no_https_shortlinks"><?php _e('Do not shrink HTTPS URLs.',$this->txtdom); ?></label><br />
						</td>
						<td class="twhdata twhhlp" crowspan="<?php echo ($this->shortenerdata['tinyarrow']['enabled']!='false') ? '7' : '6';?>" valign="top" style="border-top:1px solid #fff;">
						</td>
					</tr>
<?php if (function_exists('wp_get_shortlink')){?>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Wordpress 3.0 shortener',$this->txtdom));?>
						<td class="twhdata">
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_strip_www') == '1') echo 'checked="checked"'; ?> name="tw_strip_www" id="tw_strip_www" />
							<label for="tw_strip_www"><?php _e('Remove the "www." prefix from my domain.',$this->txtdom); ?></label><br />
							<?php
							if (function_exists('stats_get_option')) {?>
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_no_wporg') == '1') echo 'checked="checked"'; ?> name="tw_no_wporg" id="tw_no_wporg" />
							<label for="tw_no_wporg"><?php _e('Disable the WP.org shortener.',$this->txtdom); ?></label><br />
							<?php } ?>
						</td>
						<td class="twhdata twhhlp" crowspan="<?php echo ($this->shortenerdata['tinyarrow']['enabled']!='false') ? '7' : '6';?>" valign="top" style="border-top:1px solid #fff;">
						</td>
					</tr>
<?php } ?>
					<?php
						foreach ($this->shortenerdata as $name=>$values){
							$labelinput ='';
							if ($values['enabled'] != 'false'){
								if (is_array($values['params'])){
									foreach ($values['params'] as $item=>$props){
										if (is_array($props)){
											if ($props['value'] != ''){
												$labelinput .= '
												<p>
												<label for="'.$props['value'].'">'.__($props['name'],$this->txtdom).'</label>'.(($props['important']==true) ? '*' : '').'<br />
												<input class="pad45 w99c29c" type="text" value="'.$this->tw_get_option($props['value']).'" name="'.$props['value'].'" id="'.$props['value'].'"/>
												</p>';
											}
										}
									}
								}
							}
							if ($labelinput !=''){
								echo '<tr class="bt1pcs">'.$this->tw_row_head($values['label']).'<td class="twhdata">';
								echo $labelinput;
								echo '</td><td class="twhdata twhhlp">&nbsp;</td></tr>';
							}
						}
					if ($this->shortenerdata['tinyarrow']['enabled'] != 'false'){?>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head('TinyArro.ws');
						$tw_url_shortener_tinyarrow_host = $this->tw_get_option('tw_url_shortener_tinyarrow_host');
						?>
						<td>
							<!-- p>
								<label for="tw_url_shortener_tinyarrow_user"><?php _e('UserID',$this->txtdom);?></label>
								<input class="pad45 w99c29c" type="text" value="<?php echo $this->tw_get_option('tw_url_shortener_tinyarrow_user');?>" name="tw_url_shortener_tinyarrow_user" id="tw_url_shortener_tinyarrow_user"/>
							</p -->
							<p>
							<label for="tw_url_shortener_tinyarrow_host"><?php _e('Host',$this->txtdom);?></label>
							<select style="font-size:200%" id="tw_url_shortener_tinyarrow_host" name="tw_url_shortener_tinyarrow_host" style="" class="w99c29c"> 
							<?php
							foreach ($this->tinyarrow_hosts as $host=>$alias){
								echo '<option '. (($tw_url_shortener_tinyarrow_host == $host) ? 'selected="selected" ':'').'value="'. $host .'">'.$alias.'</option>'."\r\n";
							}
							?>
							</select>
						</td>
						<td class="twhdata twhhlp">
						</td>
					</tr>
					<?php } ?>
					<tr class="bt1pcs">
						<?php echo $this->tw_row_head(__('Advanced',$this->txtdom),'tw_bwdata_attr');?>
						<td class="twhdata" style="border-top:1px solid #ccc;">							
							<label for="tw_hook_prio"><?php _e('Filter hook priority. <span class="warning">Only change this value if you know what you\'re doing!</span> (Default is 75)',$this->txtdom); ?></label><br />
							<select name="tw_hook_prio" id="tw_hook_prio" title="<?php echo $this->tw_get_option('tw_hook_prio');?>" class="w99c29c">
							<option value="75">75 (Default)</option>
							<option <?=($this->tw_get_option('tw_hook_prio')=='101')?'selected="selected"':'';?> value="101">101</option>
							<option <?=($this->tw_get_option('tw_hook_prio')=='501')?'selected="selected"':'';?> value="501">501</option>
							<option <?=($this->tw_get_option('tw_hook_prio')=='1001')?'selected="selected"':'';?> value="1001">1001</option>
							</select>
							<script type="text/javascript">
								jQuery(document).ready(function(){
									var ddl = document.getElementById( 'tw_hook_prio' );
									var theOption = new Option;
									var x;
									var i;
									for(i = 3; i < 74; i++) {
									var theOption = new Option;
										x = i + 1;
										if (x == ddl.title){theOption.selected=true;}
										theOption.text = x;
										theOption.value = x;
										ddl.options[i+1] = theOption;
									}
								});
							</script>
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_bwdata_attr') == '1') echo 'checked="checked"'; ?> name="tw_bwdata_attr" id="tw_bwdata_attr" />
							<label for="tw_bwdata_attr"><?php _e('Build Tweet Button with HTML5 data attributes.',$this->txtdom); ?></label><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_url_samecount') == '1') echo 'checked="checked"'; ?> name="tw_url_samecount" id="tw_url_samecount" />
							<label for="tw_url_samecount"><?php _e('Display the same tweet count across all shorteners.',$this->txtdom); ?></label><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_use_rel_me') == '1') echo 'checked="checked"'; ?> name="tw_use_rel_me" id="tw_use_rel_me" />
							<label for="tw_use_rel_me"><?php _e('Add rel=&quot;me&quot; to &lt;head&gt;. (Overrides referral format to \'via {user}\')',$this->txtdom); ?></label><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_add_rel_shortlink') == '1') echo 'checked="checked"'; ?> name="tw_add_rel_shortlink" id="tw_add_rel_shortlink" />
							<label for="tw_add_rel_shortlink"><?php _e('Add rel=&quot;shortlink&quot; to &lt;head&gt;',$this->txtdom); ?></label><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_force_manual') == '1') echo 'checked="checked"'; ?> name="tw_force_manual" id="tw_force_manual" />
							<label for="tw_force_manual"><?php _e('Force manual placement.',$this->txtdom); ?></label><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_script_infooter') == '1') echo 'checked="checked"'; ?> name="tw_script_infooter" id="tw_script_infooter" />
							<label for="tw_script_infooter"><?php _e('Place script in footer.',$this->txtdom); ?></label><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_nostyle_feed') == '1') echo 'checked="checked"'; ?> name="tw_nostyle_feed" id="tw_nostyle_feed" />
							<label for="tw_nostyle_feed"><?php _e('No styles in feeds.',$this->txtdom); ?></label><br />
							<?php
									if (function_exists('w3tc_pgcache_flush')) {
										?>
												<input <?php if ($this->tw_get_option('tw_flush_cache') == '1') echo 'checked="checked"'; ?> type="checkbox" value="1" name="tw_flush_cache" id="tw_flush_cache" />
												<label for="tw_flush_cache"><?php _e('Clear the W3 Total Cache when I save.',$this->txtdom); ?></label>
												<br />
												<?php
										} else if (function_exists('wp_cache_clear_cache')) {
										?>
												<input type="checkbox" value="1" name="tw_flush_cache" id="tw_flush_cache" />
												<label <?php if ($this->tw_get_option('tw_flush_cache') == '1') echo 'checked="checked"'; ?> for="tw_flush_cache"><?php _e('Clear the WP Super Cache when I save.',$this->txtdom); ?></label>
												<br />
												<?php
										}
							?>
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_enable_ga_code') == '1') echo 'checked="checked"'; ?> name="tw_enable_ga_code" id="tw_enable_ga_code" />
							<label for="tw_enable_ga_code"><?php _e('Add Google Analytics campaign tracking code to links.',$this->txtdom); ?></label><br />
							<?php _e('You can use <code>%POSTID%</code> and <code>%POSTSLUG%</code> in this field but no spaces, no + and no domain names. Simply enter the URL parameters. Example:<br />
							<code>utm_source=twitter&utm_medium=twt&utm_campaign=%POSTSLUG%</code>',$this->txtdom); ?><br />
							<label for="tw_ga_code"><?php _e('Google Analytics tracking code',$this->txtdom); ?></label><br />
							<input class="pad45 w99c29c" type="text" value="<?php echo htmlspecialchars($this->tw_get_option('tw_ga_code')); ?>" name="tw_ga_code" id="tw_ga_code" /><br />
							<input type="checkbox" value="1" <?php if ($this->tw_get_option('tw_debug') == '1') echo 'checked="checked"'; ?> name="tw_debug" id="tw_debug" />
							<label for="tw_debug"><?php _e('Debug mode (NOT INTENDED FOR LIVE ENVIRONMENTS).',$this->txtdom); ?></label><br />
						</td>
						<td style="border-top: 1px solid #fff;border-bottom: 1px solid #CCC;" class="twhdata twhhlp" valign="top" style="">
							<p><strong><?php _e('Filter hook priority',$this->txtdom); ?></strong></p>
							<p><?php _e('Hook priority allows you to change the order in which the button is placed in relation to other plugins. It should only be used if you\'re having trouble displaying the Tweet Button in a custom template. Use 7,8,9 or 10 to get your desired result. Changing this value may break the formatting of the button.',$this->txtdom); ?></p>
						</td>
					</tr>
					<tr class="bt1pcs">
						<td class="twhdata" colspan="3" style="background:#E3E3E3;border-top:1px solid #CCC;border-bottom:1px solid #CCC;">
							<p class="submit">
								<input style="width:160px" type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
							</p>				
						</td>
					</tr>
				</table>
				<p style="clear:both;"></p>
			</div>
		</form>
		<div style="float:right">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post"><p><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="8YYQTCLT37SEG"><input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG_global.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online."><img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></p></form>
		</div>
		<p style="margin-left:20px;">
			<?php echo sprintf(__("<a href='%1\$s' class='button'>Show settings for diagnostics</a>"), 'options-general.php?page=wp-tweet-button.php&amp;showdiag=1');?> 
			<?php echo sprintf(__("<a href='%1\$s' target='_blank' class='button'>Report a bug</a>"), 'http://0xtc.com/plugins/wp-tweet-button');?>
			<?php echo sprintf(__("<a href='%1\$s' target='_blank' class='button'>Hire the author</a>"), 'http://0xtc.com/contact');?>
		</p>
		<p style="margin-left:20px;margin-top:20px;">
			<a href="http://twitter.com/share"
				data-url="http://wordpress.org/extend/plugins/wp-tweet-button/"
				data-text="Loving the WP Tweet Button plugin for #WordPress"
				data-lang="<?php echo $this->tw_get_option('tw_lang');?>"
				data-via=""
				data-related="TCorp:The Author of the WP Tweet Button plugin."
				data-count="horizontal"
				data-counturl="http://wordpress.org/extend/plugins/wp-tweet-button/"
				rel="nofollow"
				class="twitter-share-button">
			</a>
		</p>
		<p style="clear:both;"></p>
		<?php
	}

	/**
	* Function saves per-post options
	*/
	function tw_post_tweet_button_box_process($post_ID) {
		$thepost = get_post($post_ID);
		$this->postid = $post_ID;
		if (!empty($_POST)){
			if ($_POST['tw_do_not_send_auto_tweet'] == '1') {
				add_post_meta($thepost->ID, '_tw_do_not_send_auto_tweet', 1, TRUE) or update_post_meta($thepost->ID, '_tw_do_not_send_auto_tweet', 1);
			} elseif ( $_POST['tw_do_not_send_auto_tweet'] == null ) {
				delete_post_meta($thepost->ID, '_tw_do_not_send_auto_tweet');
			}
			
			if ($_POST['tw_clear_short_cache_post'] == '1') {
				delete_post_meta($thepost->ID, '_twitterrelated_short_url');
				delete_post_meta($thepost->ID, '_twitterrelated_short_urlHash');
				delete_post_meta($thepost->ID, '_activeshortener');
			}	

			if ($_POST['tw_exclude_tweet_button'] == '1') {
				add_post_meta($thepost->ID, '_exclude_tweet_button', 1, TRUE) or update_post_meta($thepost->ID, '_exclude_tweet_button', 1);
			} elseif ( $_POST['tw_exclude_tweet_button'] == null ) {
				delete_post_meta($thepost->ID, '_exclude_tweet_button');
			}	
			if ($_POST['tw_post_custom_text'] == null) {
				delete_post_meta($thepost->ID, '_twitterrelated_custom_text');
			} else {
				add_post_meta($thepost->ID, '_twitterrelated_custom_text', $_POST['tw_post_custom_text'], TRUE) or update_post_meta($thepost->ID, '_twitterrelated_custom_text', $_POST['tw_post_custom_text']);
			}
			if ($_POST['tw_twitter_related_user'] == null) {
				delete_post_meta($thepost->ID, '_twitterrelated_user');
			} else {
				add_post_meta($thepost->ID, '_twitterrelated_user', $this->tw_sanitize_username($_POST['tw_twitter_related_user']), TRUE) or update_post_meta($thepost->ID, '_twitterrelated_user', $this->tw_sanitize_username($_POST['tw_twitter_related_user']));
			}
			if ($_POST['tw_twitter_related_desc'] == null) {
				delete_post_meta($thepost->ID, '_twitterrelated_desc');
			} else {
				add_post_meta($thepost->ID, '_twitterrelated_desc', $_POST['tw_twitter_related_desc'], TRUE) or update_post_meta($thepost->ID, '_twitterrelated_desc', $_POST['tw_twitter_related_desc']);
			}
			if (($_POST['tw_twitter_related_desc'] != null) && ($_POST['tw_twitter_related_user'] != null)) {
				add_post_meta($thepost->ID, '_twitterrelated', $this->tw_sanitize_username($_POST['tw_twitter_related_user']).':'.$_POST['tw_twitter_related_desc'], TRUE) or update_post_meta($thepost->ID, '_twitterrelated', $this->tw_sanitize_username($_POST['tw_twitter_related_user']).':'.$_POST['tw_twitter_related_desc']);
			} else 	if (($_POST['tw_twitter_related_desc'] == null) && ($_POST['tw_twitter_related_user'] != null)) {
				add_post_meta($thepost->ID, '_twitterrelated', $this->tw_sanitize_username($_POST['tw_twitter_related_user']), TRUE) or update_post_meta($thepost->ID, '_twitterrelated', $this->tw_sanitize_username($_POST['tw_twitter_related_user']));
			} else {
				delete_post_meta($thepost->ID, '_twitterrelated');
			}
		}
	}

	/**
	* Function regulates and manages autotweeting
	*/
	function tw_send_auto_tweet($post_id){
		global $post_type_object;
		if(is_int($post_id)) {
			$this->postid = $post_id;
			$thepost = get_post($post_id);
		} else {
			$thepost = $post_id;
			$this->postid = $thepost->ID;
		}
		
		if ($thepost->post_type == 'revision' || ($thepost->post_status != 'publish' && $thepost->post_status != 'future') || $thepost->post_password != '' ) return false;	
		if (
				(
					($this->tw_get_option('tw_auto_tweet_posts') == '1' && $post_type_object->hierarchical=='') || 
					($this->tw_get_option('tw_auto_tweet_pages') == '1' && $post_type_object->hierarchical=='1')
				) &&
		$this->tw_get_option('tw_auto_tweet_token') != '' &&
		$this->tw_get_option('tw_auto_tweet_token_secret') != '' &&
		(get_post_meta($thepost->ID, '_tw_do_not_send_auto_tweet',true) == '') &&
		($_POST['tw_do_not_send_auto_tweet'] == '') &&
		(get_post_meta($thepost->ID, '_tw_autotweeted',true) == '' || $_POST['tw_send_auto_tweet_again']==1)
		){
			$Post_data = array();
			$Post_data['r_oauth_token']			=	$this->tw_get_option('tw_auto_tweet_token');
			$Post_data['r_oauth_token_secret']	=	$this->tw_get_option('tw_auto_tweet_token_secret');
			$tweet_text							=	$this->tw_validate_tweet($this->tw_get_text(),$this->tw_get_the_url());
			if ($tweet_text==false){return false;}
			$ctypes = array("ASCII", "UTF-8", "ISO-8859-15", "ISO-8859-1", "JIS", "EUC-JP");
			$enc = mb_detect_encoding($tweet_text,$ctypes);
			if ($enc!='UTF-8') $tweet_text = mb_convert_encoding($tweet_text,'UTF-8');
			$tweet_text_data					=	base64_encode($tweet_text);
			$Post_data['tweet_msg_data']		=	$tweet_text_data;
			$content = $this->tw_nav_browse($this->wptbsrv, 'POST', $Post_data);
			if (strstr($content,'error')==false && $content != '' && strstr($content,'<') == false) {
				add_post_meta($thepost->ID, '_tw_autotweeted', $content, TRUE) or update_post_meta($thepost->ID, '_tw_autotweeted', $content);
			}
			return $content;
		}
		return false;
	}

	/**
	* Function validates, edits and optimizes tweet text for an autotweet
	*/
	function tw_validate_tweet($text, $url){
		$max	= 134;
		if (strstr($url,admin_url())){return false;}
		if ($url==false){return false;}
		$lurl 	= strlen($url);
		$ltext 	= strlen(trim($text))+1;
		if ($lurl+$ltext>$max){
			if ($this->tw_get_option('tw_auto_tweet_strip')=='notweet'){
				return false;
			}
			if ($this->tw_get_option('tw_auto_tweet_strip')=='url'){
				if (strlen(trim($text))<=$max){
					return trim($text);
				} else {
					return false;
				}
			}
			if ($this->tw_get_option('tw_auto_tweet_strip')=='text'){
				if ($lurl<=$max){
					return $url;
				} else return false;
			}
			if ($this->tw_get_option('tw_auto_tweet_strip')=='stext'){
				$strmaxlen = $max - $lurl - 4;
				if (0 <= $strmaxlen){
					$string = wordwrap($text, $strmaxlen);
					$string = substr($string, 0, strpos($string, "\n"));
					$stext = $string.'... ';
				} else {
					return false;
				}
				if (strlen($stext.$url)<=$max) {
					return $stext.$url;
				} else return false;
			}
			if ($this->tw_get_option('tw_auto_tweet_strip')=='tryall'){
				$strmaxlen = $max - $lurl - 4;
				if (0 <= $strmaxlen){
					$string = wordwrap($text, $strmaxlen);
					$string = substr($string, 0, strpos($string, "\n"));
					$stext = $string.'... ';
					if (strlen($stext.$url)<=$max) {
						return $stext.$url;
					} else {
						if (strlen(trim($text))<=$max){
							return trim($text);
						} else {
							if ($lurl<=$max){
								return $url;
							} else {
								$string = wordwrap($text, $max-4);
								$string = substr($string, 0, strpos($string, "\n"));
								$stext = $string.'... ';
								return $stext;
							}
						}
					}
				} else {
					if ($lurl<=$max){
						return $url;
					} else {
						return substr($text, 0, $max-2).'… ';
					}
				}
			}
		} else {
			return $text.' '.$url;
		}
	}

	/**
	* Function outputs the per-post settings dialog.
	*/	
	function tw_post_tweet_button_box() {
		if(is_int($this->postid)) {
			$post = get_post($this->postid);
		} else {
			global $post;
		}
		$tw_do_not_send_auto_tweet	= get_post_meta($post->ID,'_tw_do_not_send_auto_tweet',true);
		$tw_exclude_tweet_button 	= get_post_meta($post->ID,'_exclude_tweet_button',true);
		$tw_twitter_related_user 	= get_post_meta($post->ID,'_twitterrelated_user',true);
		$tw_twitter_related_desc 	= get_post_meta($post->ID,'_twitterrelated_desc',true);
		$tw_post_custom_text 		= get_post_meta($post->ID,'_twitterrelated_custom_text',true);
		
		?><script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#wpTweetButtonPostOp .head').click(function() {
				jQuery(this).next().slideToggle("slow");
				return false;
			}).next().hide();
		});		
		</script><div id="wpTweetButtonPostOp">
		<p class="head" style="margin:0 0 10px 5px"><a href="#"><?php _e('Tweet Button options',$this->txtdom);?></a></p>
		<div>
			<p style="margin:0;"><?php _e('If this post is related to a Twitter user, the Tweet Button can be enhanced by adding the Twitter account as a recommended user.',$this->txtdom);?></p>
			<div class="misc-pub-section">
				<label for="tw_twitter_related_user" style="width:80px;float:left;padding:5px 0"><?php _e('Username:',$this->txtdom);?></label>
				<input class="pad45" style="width:165px;text-align:left;" type="text" value="<?php echo $tw_twitter_related_user; ?>" name="tw_twitter_related_user" id="tw_twitter_related_user"/> <br />
				<label for="tw_twitter_related_desc" style="width:80px;float:left;padding:5px 0"><?php _e('Description:',$this->txtdom);?></label>
				<input class="pad45" style="width:165px;text-align:left;" type="text" value="<?php echo $tw_twitter_related_desc; ?>" name="tw_twitter_related_desc" id="tw_twitter_related_desc"/> 
			</div>
			<div class="misc-pub-section">
				<p style="margin:0;"><?php _e('Enter an optional custom tweet for this post.',$this->txtdom);?></p>
				<label for="tw_post_custom_text" style="width:80px;float:left;padding:5px 0"><?php _e('Tweet text:',$this->txtdom);?></label>
				<textarea class="pad45" style="width:165px;font-size: 11px;" name="tw_post_custom_text" id="tw_post_custom_text"/><?php echo $tw_post_custom_text; ?></textarea> 
			</div>
			<div class="misc-pub-section">
					<img src="<?php echo WP_PLUGIN_URL; ?>/wp-tweet-button/tweetn.png" id="tw_tweet_button_image" style="float:right;margin:-3px 10px 0 10px"/>
					<input style="min-width:20px;" onclick="var twimgp=document.getElementById('tw_tweet_button_image');twimgp.style.display=(this.checked)?'none':'block';" type="checkbox" value="1" <?php if ($tw_exclude_tweet_button == '1') echo 'checked="checked"'; ?> name="tw_exclude_tweet_button" id="tw_exclude_tweet_button"/>
					<label for="tw_exclude_tweet_button"><?php _e('Disable Tweet Button',$this->txtdom);?></label><br />
					<input style="min-width:20px;" type="checkbox" value="1" name="tw_clear_short_cache_post" id="tw_clear_short_cache_post"/>
					<label for="tw_clear_short_cache_post"><?php _e('Clear shortlink cache',$this->txtdom);?></label><br />
					<?php
					if ($this->tw_get_option('tw_auto_tweet_token') != '' && $this->tw_get_option('tw_auto_tweet_token_secret') != ''){
						if (strstr(get_post_meta($post->ID, '_tw_autotweeted',true),':') != false){?>
							<input style="min-width:20px;" type="checkbox" value="1" name="tw_send_auto_tweet_again" id="tw_send_auto_tweet_again"/>
							<label for="tw_send_auto_tweet_again"><?php _e('Auto-tweet again',$this->txtdom);?></label><br />
							<?php
							$tdata = get_post_meta($post->ID, '_tw_autotweeted',true);
							$tdata = explode(':',$tdata );
							$tid = $tdata[0];
							$tname = $tdata[1];
							$turl = 'http://twitter.com/'.$tdata[1].'/status/'.$tdata[0];
							echo '<p><a href="'.$turl.'" target="_blank">'.__('View corresponding tweet',$this->txtdom).'</a></p>';
						} else { ?>
							<input <?php if ($tw_do_not_send_auto_tweet == '1') echo 'checked="checked"'; ?> style="min-width:20px;" type="checkbox" value="1" name="tw_do_not_send_auto_tweet" id="tw_do_not_send_auto_tweet"/>
							<label for="tw_do_not_send_auto_tweet"><?php _e('Do not Auto-Tweet',$this->txtdom);?></label><br />					
						<?php } 
					}
					?>
			</div>
		</div></div><p style="clear:both;"></p><?php
	}

	/**
	* Function hooks per-post settings dialog
	*/
	function tw_tweet_button_post_options_box() {
		if ( version_compare(get_bloginfo('version'), '2.7', '>=')) {
			add_action('post_submitbox_start', array(&$this, 'tw_post_tweet_button_box'));
		} else {
			add_action('submitpost_box', array(&$this, 'tw_post_tweet_button_box'));
		}
	}

	/**
	* Function registers settings record
	*/
	function tw_init(){
		if(function_exists('register_setting')){
			register_setting('tw-options', 'wp_tweet_button');
		}
	}

	/**
	* Function cleans up returned twitter usernames
	*/
	function tw_sanitize_username($username){
		$username = str_replace(array('http://','https://','twitter.com/','twitter.com','@'),'',$username);
		return preg_replace('/[^A-Za-z0-9_]/','',$username);
	}

	/**
	* Function releases the Kraken.
	*/
	function tw_activate(){
		add_option('wp_tweet_button',array());
		$this->tw_readoptions();
	}

	/**
	* Function adds settings page to the menu.
	*/
	function tw_options() {
		add_options_page('WP Tweet Button', 'WP Tweet Button', 8, basename(__FILE__), array(&$this, 'tw_options_page'));
	}

	/**
	* Function adds Twitter as a contact method in the Wordpress user settings.
	*/
	function tw_add_twitter_contactmethod($contactmethods) {
		$contactmethods['twitter'] = 'Twitter <span class="description">(username)</span>';
		return $contactmethods;
	}
}

/**
* Function manages manual tweetbutton() calls to generate a button.
*/
function tweetbutton($thepost='',$bwdata=false,$type='d'){
	global $wpTweetButton, $post;
	$thepost = is_null($post) ? $post : $thepost;
	$bwdata = is_null($bwdata) ? false : $bwdata;
	if ($type=='vertical' || $type=='horizontal' || $type=='none'){
		$wpTweetButton->tw_set_option('tw_count', $type);
	}
	return $wpTweetButton->tweetbutton($post,$bwdata);
}

/**
* Other things...and stuff...
*/
/**
* Class, exciting and new. Create one or even a few. Bugs, a coder's reward. Ruins flow and it comes back to you. Wordpress, soon will be making another run and Wordpress promises something for everyone....
*/	
$wpTweetButton = new wpTweetButton();
load_plugin_textdomain($wpTweetButton->txtdom,null,dirname( plugin_basename( __FILE__ ) ).'/lang/');
register_activation_hook( __FILE__, array(&$wpTweetButton, 'tw_activate'));

?>