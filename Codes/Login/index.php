<?php

ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']){
	case '/insert.php':
		require 'insert.php';
		break;
	case '/connection.php':
		require 'connection.php';
		break;
	default:
		http_response_code(404);
		echo @parse_url($_SERVER['REQUEST_URI'])['path'];
		exit('Not Found');

}

?>