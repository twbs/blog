=== WP Tweet Button ===
Contributors: 0xTC
Tags: twitter, tweet button, retweet, tweet, autotweet, WP Tweet Button, advanced, tweeting, social media, button, SEO, share, shortener, awe.sm, b2l.me, bit.ly, cli.gs, sl.ly, snipr, su.pr, tinyurl, analytics, google analytics, campaign, campaign tracking, auto tweeting, auto posts
Requires at least: 2.7.2
Tested up to: 3.0.5
Stable tag: trunk
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6331357

== Description ==

This plugin easily and fully implements Twitter's official *[Tweet Button](http://twitter.com/tweetbutton "Twitter Tweet Button")* on your WordPress blog or site. The tweet button can be positioned as you please and can be styled to your delight in the settings page. You can configure individual messages for your posts, use the title of your entry or a default message for tweets.

WP Tweet Button supports a variety of shorteners and can even help track the effectiveness of campaigns using Google Analytics.

= Features =

* General and **post specific settings** for recommendations and Tweets text.
* Vast array of Tweet Button **placement and alignment** options.
* [WPTouch](http://wordpress.org/extend/plugins/wptouch/ "WP Touch") Support.
* Can be set to vertical, horizontal or no counter.
* Authors can configure their own Twitter accounts on their profile pages. (WP3.x only)
* Supports **Auto-Tweeting** posts.
* Supports all Tweet Button languages.
* Supports exclusion by custom post type
* Possible to add rel="me", rel="shortlink" to header and `rel` attribute to the tweet link for SEO.
* **Google Analytics** support for campaign tracking.
* Option to switch between '{text} {link} via {@user}' and 'RT {@user} {text} {link}' formats.
* Templatable Tweet texts using tags (`%POSTTITLE%`, `%BLOGTITLE%`, `%BLOGHASHTAGS%`, `%BLOGHASHCATS%`).
* Supports data tag output.
* Includes hooks for 3rd party developers.
* Supports WordPress 3 shortener functions.
* Initial URL shrinking with the *[Twitter Friendly Links](http://wordpress.org/extend/plugins/twitter-friendly-links/ "Twitter Friendly Links")* Plugin and *[YOURLS: WordPress to Twitter](http://wordpress.org/extend/plugins/yourls-wordpress-to-twitter/ "YOURLS: WordPress to Twitter")* Plugin.
* Initial URL shrinking with **3rd party shortening services**: *[awe.sm](http://awe.sm/ "awe.sm"), [b2l.me](http://b2l.me/ "b2l.me"), [bit.ly](http://bit.ly "Bit.ly"), [j.mp](http://j.mp "j.mp"), [cli.gs](http://cli.gs "cli.gs"), [sl.ly](http://sl.ly "sl.ly"), [snipr](http://snipr.com "snipr.com"), [su.pr](http://su.pr "su.pr"), [tinyurl](http://tinyurl.com "tinyurl")*
* counturl support for **consistent url counts** across URL shorteners.
* Supports option to load the script in the footer.
* Referral can be turned off by removing the username.
* Additional styling options.
* Supports automatic placement and manual using `tweetbutton();` function or `[tweetbutton]` shortcode.
* Supports **forced manual placement** for a combination of placements.
* Includes **caching controls** for WP Super Cache and W3 Total Cache.
* Tweet Button can be excluded from bottom of posts on front page.
* Optional no-javascript support.

= Support =

This plugin features built-in tips but you may also find the [FAQ](http://wordpress.org/extend/plugins/wp-tweet-button/faq/ "WP Tweet Button FAQ") or WP [Tweet Button](http://0xtc.com/plugins/wp-tweet-button "Tweet Button")'s page useful.

== Installation ==

Follow the steps below to install the plugin.

1. Upload the WP-Tweet-Button directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress
3. Go to Settings/WP Tweet Button to configure the button. Add your Twitter account.

== Frequently Asked Questions ==

= How do I add the post title or blog title in custom tweet texts? =

You can use the `%POSTTITLE%` and `%BLOGTITLE%` tags to do this. These tags are valid in the WP Tweet Button general configuration and in your posts' Tweet Button settings.

Example:

* `New blog entry: %POSTTITLE% #cats`

"#cats" in this example is a tag that's relevant to your blog.

* `New blog entry: %POSTTITLE% - %BLOGHASHTAGS%`

In this example `%BLOGHASHTAGS%` will be replaced with #hash tags generated using your blog entry's tags. You can also use `%BLOGHASHCATS%` to generate #hash tags using the entry's categories.

= How do I create custom recommendations for each separate post/page? =

Simply edit your post and set your recommended user in the Tweet Button options box.

= How do manually create the Tweet Button in my template code? =

To create the Tweet Button manually, call the `tweetbutton();` function.

Examples:

* `echo tweetbutton();`
* `$myCustomPlaceForSocialMedia .= tweetbutton();`

Examples:

* `echo tweetbutton($post);`
* `$myCustomPlaceForSocialMedia .= tweetbutton($post);`

**Parameters**

The tweetbutton function currently includes 3 optional parameters: $thepost, $bwdata and $type.

tweetbutton([object *$thepost*][,boolean *$bwdata*][,string *$type*]);

* `$thepost` - Defaults to $post and is the post object.
* `$bwdata` - Defaults to false. Set this option to true if you want to generate the button using HTML5 data attributes.
* `$type` - Defaults to the setting set in the options page. Set this parameter to 'vertical', 'horizontal' or 'none' to change the type of button.

You can skip parameters by setting them to null (Resulting in default values). Example:

`echo tweetbutton(null,null,'horizontal');`


= How come the tweet count doesn't change right away? =

Twitter uses a caching system that periodically updates the tweet counts. You browser also caches the iframe containing the count. Both these caches need to expire before any changes are made apparent.


= Plugin doesn't work for some reason. How I contact the author? =

You can either leave a comment on the [plugin's page](http://0xtc.com/plugins/wp-tweet-button "WP Tweet Button"), or contact the author on twitter (*[@TCorp](http://twitter.com/tcorp/ "TCorp on Twitter")*). 

== Screenshots ==

1. WP Tweet Button displayed on a post.
2. WP Tweet Button controls for posts and pages.
3. WP Tweet Button settings page.
4. WP Tweet Button help sections.
5. WP Tweet Button Advanced settings includes Google Analytics Campaign Tracking.
6. Twitter Tweet dialog.
7. Users can follow you and a recommended user after their tweet is sent.

== Changelog ==

= 2.0.3.3 =
* Addresses issue where a single shortlinks is generated and saved for all posts on the main page.
* Added option to clear shortlink cache per post/page.

= 2.0.3 =
* Transposh Translation Filter support.
* Added option to remove styles in RSS feeds.
* Improved compatibility with All in One SEO (thanks to monodistortion)

= 2.0.2 =
* Bugfix related to Auto-Tweeting and custom menus.
* Added option to delete all previously saved shortlinks.

= 2.0.1 =
* Fix for sites that don't have PHP5.

= 2.0.0 =
* Supports Auto-Tweeting.
* Supports rel="shortlink"
* Supports exclusion by custom post type.
* Added option to strip www from Wordpress 3.0 shortener.
* Added option to disable wp.org shortener.
* Resolves issue with blogs where home is not the front page.
* Bugfix for awe.sm users (keys should be entered).

= 1.9.6.1 =
* Bugfix for sites that don't use permalinks.

= 1.9.6 =
* Added option to place script in footer instead of header.
* Faster execution due to code optimization.
* Additional filters added allowing developers to add their own URL shorteners.
* Removed IDN URL from the tweet button at the bottom of the config page.

= 1.9.5.1 =
* Support for PHP versions lower than 5.
* Bug fix for sites with multiple users.

= 1.9.5 =
* Added "Force manual placement" option.
* Added rel="me" option.
* Added %BLOGHASHTAGS% and %BLOGHASHCATS% options.
* Added support for no-javascript clients as an option.
* Adjusted for Twitter's new javascript.

= 1.9.4.2 =
* Added awe.sm support.

= 1.9.4.1 =
* Added j.mp support.

= 1.9.4 =
* Typos and spelling. No functionality updates.

= 1.9.3 =
* Google Analytics support for campaigns.
* Added more placement options (archives, search, excerpts).
* Option to exclude button from the bottom of posts on front page when before and after is selected.
* Templating related bug fixes.
* Users can set custom hook priority for advanced positioning.

= 1.9.2 =
* test builds classified as 1.9.2

= 1.9.1 =
* Saves options in an array (fewer DB requests)
* Resolves quotes bug.
* Option to add rel for SEO.
* Better RSS support.
* Better templating support.
* Added hooks for developers: `wp_tweet_button_long_url`, `wp_tweet_button_url`, `wp_tweet_button`
* Supports output in data tags.
* only supporting manual placement inside the loop.
* built-in alignment.
* Caching options for WP Super Cache and W3 Total Cache.

= 1.8.2 =

* More discreet controls for post/page edit screens.
* Added support to disable button for mobile browsing using [WPTouch](http://wordpress.org/extend/plugins/wptouch/ "WP Touch")
* counturl support added for consistent url counts across URL shorteners

= 1.8.1 =

* Object oriented codebase
* Removed need for JSON library (Resolves issues with some hosts)
* Button on posts is a switchable option.
* Uses newer bit.ly API.
* Uses simplified su.pr API.
* Supports excerpt compatibility for poorly written templates.

= 1.7.x =
* Minor plugin conflict resolved.
* Fixed incompatibility bug for WP2.8 users.
* Fixed bit.ly save bug.
* Added support for WordPress 3 shortener functions.
* Authors can configure their own Twitter accounts on their profile pages.
* Added referral formatting options.
* Added support for optional URL shrinking services:  b2l.me, bit.ly, cli.gs, sl.ly, snipr.com, su.pr, tinyurl.com
* Added support for the [Twitter Friendly Links](http://wordpress.org/extend/plugins/twitter-friendly-links/ "Twitter Friendly Links") Plugin
* Added support for the [YOURLS: WordPress to Twitter](http://wordpress.org/extend/plugins/yourls-wordpress-to-twitter/ "YOURLS: WordPress to Twitter") Plugin
* using wp_register_script for widgets.js

= 1.6.x =
* Custom tweet text bug fix
* Option for each blog post to have its own custom tweet text.
* Custom tweet texts can include tags like `%POSTTITLE%` and `%BLOGTITLE%`

= 1.5.0 =
* Option box in posts included for easy configuration of Tweet Button per post.
* Option box includes optional disabling of tweet button per post.
* Option box includes recommended user and description.

= 1.4.x =
* RSS feed option
* No more default CSS
* Internationalization
* Fixed manual content missing bug.
* Added better control of tweet text.
* Cosmetic changes.

= 1.2.0 =

* Added support for recommendations.
* Added support for custom recommendations for each post (Read FAQ).

= 1.1.x =

* Cosmetic changes to the settings screen.
* Tweet Button Language enabled

= 1.0.0 =

* First build