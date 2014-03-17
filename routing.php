<?php

// OR if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"]))
$uri = explode('?',$_SERVER['REQUEST_URI']);
$uri = $uri[0];

if (file_exists(__DIR__ . '/' . $uri))
{
	return false; // serve the requested resource as-is.
}
else
{
	include 'wordpress/index.php';
}
