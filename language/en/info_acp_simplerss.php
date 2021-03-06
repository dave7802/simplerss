<?php
/**
 *
 * Simple RSS reader. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Ger, https://github.com/GerB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'ACP_FORUM_ID'					=> 'Feed forum',
	'ACP_FORUM_ID_EXPLAIN'			=> 'The forum to post the new feed items in.',
	'ACP_SETTINGS_EXPLAIN'			=> 'You can add RSS feeds using the form below. Start with posting a RSS feed URL. When you have entered feeds, you find a table with these parameters:',
	'ACP_SIMPLERSS_SETTING_SAVED'	=> 'Simple RSS settings saved',
	'ACP_SIMPLERSS_TITLE'			=> 'Simple RSS reader',
	'ADD_FEED'						=> 'Add feed',
	'FETCH_ALL_FEEDS'				=> 'Fetch all feeds manually',
	'FEED_URL'						=> 'Feed URL',
	'FEED_URL_EXPLAIN'				=> 'The URL to the actual RSS feed, e.g. <code>https://www.phpbb.com/feeds/rss/</code>. Each feed URL should be unique',
	'FEED_URL_INVALID'				=> 'Invalid RSS feed URL. This may be the result of a duplicate in your feed list or simply an URL that does not meet the specifications',
	'NAME'							=> 'Feed name',
	'NAME_EXPLAIN'					=> 'Just a simple identifier for you to easily remember what the feed is about',
	'TIMEOUT'						=> 'Timeout',
	'TIMEOUT_EXPLAIN'				=> 'Timeout for requesting the Feed URL. If this time has passed without retrieving the feed content, the request is cancelled.',
	'USER_ID'						=> 'Feed user id',
	'USER_ID_EXPLAIN'				=> 'The id of the user that will be used to post new items.',
));
