<?php
	
	error_reporting('e_all');  // disable your all notices.

	defined('DB_HOST') ? NULL : define('DB_HOST', 'localhost');
	defined('DB_USER') ? NULL : define('DB_USER', 'root');
	defined('DB_PASS') ? NULL : define('DB_PASS', '');
	defined('DB_NAME') ? NULL : define('DB_NAME', 'media');

	mysql_connect(DB_HOST, DB_USER, DB_PASS);
	mysql_select_db(DB_NAME);

?>