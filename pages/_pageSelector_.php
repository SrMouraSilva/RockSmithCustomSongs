<?php
$pages = array('index', 'approved', 'albums', 'songs', 'song');

if (count($_GET) == 0) {
	$pageRequired = 'index';

} else {
	reset($_GET);
	$pageRequired = key($_GET);
}

if (in_array($pageRequired, $pages)) {
	include_once($pageRequired.".php");
} else {
	include_once("404.php");
}
?>