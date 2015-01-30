<?php
/* main PHP file for Trade */
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
/* may need to access php pages--if so, below will change. */
$user->setup();
/* some user-access will be here
// may change to inaccessible for anon, but for now:
Always show:
    - Recent Trades started
	- Search/Filter
if ($user->data['user_id'] == ANONYMOUS) { basic info (nothing in here)}
else { fetch myTrades and tradesReceived }
*/

page_header('Trade');

$template->set_filenames(array(
    'body' => 'trade.html',
));

// not sure exactly what this next line is doing--it might get modified
// to fit format, depending upon where in the page it lands
make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));
page_footer();
?>