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
	case '/getGraph.php':
		require 'getDevices.php';
		break;
	case '/getDiagnosis.php':
		require 'getDiagnosis.php';
		break;
	case '/checkLogin.php':
		require 'checkLogin.php';
		break;
	case '/connection.php':
		require 'connection.php';
		break;
	case '/ChoosePatDoc.html':
		require 'ChoosePatDoc.html';
		break;
	case '/':
		require 'index.html';
		break;
	case '/index.html':
		require 'index.html';
		break;
	case '/ListPatients.html':
		require 'ListPatients.html';
		break;
	case '/PatientDashboard.html':
		require 'PatientDashboard.html';
		break;
	case '/PatientResultSym.html':
		require 'PatientResultSym.html';
		break;
	case '/SignUpDoc.html':
		require 'SignUpDoc.html';
		break;
	case '/SignUpPat.html':
		require 'SignUpPat.html';
		break;
	case '/SymPrescribPat.html':
		require 'SymPrescribPat.html';
		break;
	case '/images/icons/favicon.ico':
		require 'images/icons/favicon.ico';
		break;
	case '/vendor/bootstrap/css/bootstrap.min.css':
		require 'vendor/bootstrap/css/bootstrap.min.css';
		break;
	case '/fonts/font-awesome-4.7.0/css/font-awesome.min.css':
		require 'fonts/font-awesome-4.7.0/css/font-awesome.min.css';
		break;
	case '/fonts/Linearicons-Free-v1.0.0/icon-font.min.css':
		require 'fonts/Linearicons-Free-v1.0.0/icon-font.min.css';
		break;
	case '/vendor/animate/animate.css':
		require 'vendor/animate/animate.css';
		break;
	case '/vendor/css-hamburgers/hamburgers.min.css':
		require 'vendor/css-hamburgers/hamburgers.min.css';
		break;
	case '/vendor/animsition/css/animsition.min.css':
		require 'vendor/animsition/css/animsition.min.css';
		break;
	case '/vendor/select2/select2.min.css':
		require 'vendor/select2/select2.min.css';
		break;
	case '/vendor/daterangepicker/daterangepicker.css':
		require 'vendor/daterangepicker/daterangepicker.css';
		break;
	case '/css/util.css':
		require 'css/util.css';
		break;
	case '/css/main.css':
		require 'css/main.css';
		break;
	case '/images/logo.png':
		require 'images/logo.png';
		break;
	case '/vendor/jquery/jquery-3.2.1.min.js':
		require 'vendor/jquery/jquery-3.2.1.min.js';
		break;
	case '/vendor/animsition/js/animsition.min.js':
		require 'vendor/animsition/js/animsition.min.js';
		break;
	case '/vendor/bootstrap/js/popper.js':
		require 'vendor/bootstrap/js/popper.js';
		break;
	case '/vendor/bootstrap/js/bootstrap.min.js':
		require 'vendor/bootstrap/js/bootstrap.min.js';
		break;
	case '/vendor/select2/select2.min.js':
		require 'vendor/select2/select2.min.js';
		break;
	case '/vendor/daterangepicker/moment.min.js':
		require 'vendor/daterangepicker/moment.min.js';
		break;
	case '/vendor/daterangepicker/daterangepicker.js':
		require 'vendor/daterangepicker/daterangepicker.js';
		break;
	case '/vendor/countdowntime/countdowntime.js':
		require 'vendor/countdowntime/countdowntime.js';
		break;
	case '/js/main.js':
		require 'js/main.js';
		break;
	case '/assets/images/favicon.png':
		require 'assets/images/favicon.png';
		break;
	case '/assets/libs/chartist/dist/chartist.min.css':
		require 'assets/libs/chartist/dist/chartist.min.css';
		break;
	case '/dist/css/style.min.css':
		require 'dist/css/style.min.css';
		break;
	case '/assets/images/users/1.jpg':
		require 'assets/images/users/1.jpg';
		break;
	case '/pages-profile.html':
		require 'pages-profile.html';
		break;
	case '/assets/libs/jquery/dist/jquery.min.js':
		require 'assets/libs/jquery/dist/jquery.min.js';
		break;
	case '/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js':
		require 'assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js';
		break;
	case '/dist/js/app-style-switcher.js':
		require 'dist/js/app-style-switcher.js';
		break;
	case '/dist/js/waves.js':
		require 'dist/js/waves.js';
		break;
	case '/dist/js/sidebarmenu.js':
		require 'dist/js/sidebarmenu.js';
		break;
	case '/dist/js/custom.js':
		require 'dist/js/custom.js';
		break;
	case '/assets/libs/chartist/dist/chartist.min.js':
		require 'assets/libs/chartist/dist/chartist.min.js';
		break;
	case '/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js':
		require 'assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js';
		break;
	case '/dist/js/pages/dashboards/dashboard1.js':
		require 'dist/js/pages/dashboards/dashboard1.js';
		break;
	case '/dist/css/style.min.css':
		require 'dist/css/style.min.css';
		break;
	case '/newfile.txt':
		require 'newfile.txt';
		break;
	default:
		http_response_code(404);
		echo @parse_url($_SERVER['REQUEST_URI'])['path'];
		exit('Not Found');

}

?>