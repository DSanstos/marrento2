<?php
include($_SERVER["DOCUMENT_ROOT"] . "app/engines/router.php");
$router = new router;
/*
[REQUEST_METHOD]
[REQUEST_URI]
*/

	$url = $_SERVER["REQUEST_URI"];
	$p = explode("/", $url);
	$p[1] ? $p[1] : $p[1] = "default";
	$apppath = "../app/controller/";
	if (file_exists($apppath . $p[1].".php"))
		{
			include("../app/controller/".$p[1].".php");
		} else 
		{
			include($apppath."default.php");
		};
?>