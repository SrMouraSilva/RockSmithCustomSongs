<?php
if (isset($_GET['albums'])) {
	$include = "albums";
} else {
	$include = "index";
}

include_once($include.".php");
?>