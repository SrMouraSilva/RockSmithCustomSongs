<?php
$pages = array('search', 'about', 'approved', 'albums', 'songs', 'song', 'requests');

if (count($_GET) == 0) {
	$pageRequired = 'search';

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