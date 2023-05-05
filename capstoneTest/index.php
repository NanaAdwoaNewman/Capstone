<?php

ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']){
	case '/insert.php':
		require 'insert.php';
		break;
	case '/insertDevice.php':
		require 'insertDevice.php';
		break;
	case '/insertPrescrip.php':
		require 'insertPrescrip.php';
		break;
	case '/insertSignUp.php':
		require 'insertSignUp.php';
		break;
	case '/insertSymptom.php':
		require 'insertSymptom.php';
		break;
	case '/getSymptoms.php':
		require 'getSymptoms.php';
		break;
	case '/getPrescrip.php':
		require 'getPrescrip.php';
		break;
	case '/getPatientStatus.php':
		require 'getPatientStatus.php';
		break;
	case '/getDevices.php':
		require 'getDevices.php';
		break;
	case '/checkLogin.php':
		require 'checkLogin.php';
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