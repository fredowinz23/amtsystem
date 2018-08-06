<?php
session_start();
include_once("config/database.php");
include_once("config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'login' :
		$content 	= 'pages/login.php';
		$template	= 'include/blank.php';
		break;

	case 'search_patient' :
		$content 	= 'pages/search_patient.php';
		$template	= 'include/blank.php';
		break;

	case 'my_result' :
		$content 	= 'pages/my_result.php';
		$template	= 'include/blank.php';
		break;

	case 'changepassword' :
		$content 	= 'pages/changepassword.php';
		$template	= 'include/blank.php';
		break;

	case 'list' :
		$content 	= 'pages/list.php';
		$template	= 'include/template.php';
		break;

	case 'new_appointment' :
		$content 	= 'pages/new_appointment.php';
		$template	= 'include/template.php';
		break;

	case 'my_appointment' :
		$content 	= 'pages/my_appointment.php';
		$template	= 'include/blank.php';
		break;

	case 'appointment_list' :
		$content 	= 'pages/appointment_list.php';
		$template	= 'include/template.php';
		break;

	case 'choose_patient' :
		$content 	= 'pages/choose_patient.php';
		$template	= 'include/template.php';
		break;

	case 'patients' :
		$content 	= 'pages/patients.php';
		$template	= 'include/template.php';
		break;

	case 'new_patient' :
		$content 	= 'pages/new_patient.php';
		$template	= 'include/template.php';
		break;

	case 'history_list' :
		$content 	= 'pages/history_list.php';
		$template	= 'include/template.php';
		break;

	case 'CBC' :
		$content 	= 'pages/cbc.php';
		$template	= 'include/template.php';
		break;

	case 'CBC_display' :
		$content 	= 'pages/cbc_display.php';
		$template	= 'include/template.php';
		break;

	case 'UA' :
		$content 	= 'pages/ua.php';
		$template	= 'include/template.php';
		break;

	case 'UA_display' :
		$content 	= 'pages/ua_display.php';
		$template	= 'include/template.php';
		break;

	case 'SQAR' :
		$content 	= 'pages/sqar.php';
		$template	= 'include/template.php';
		break;

	case 'SQAR_display' :
		$content 	= 'pages/sqar_display.php';
		$template	= 'include/template.php';
		break;

	case 'CSC' :
		$content 	= 'pages/csc.php';
		$template	= 'include/template.php';
		break;

	case 'CSC_display' :
		$content 	= 'pages/csc_display.php';
		$template	= 'include/template.php';
		break;

	case 'HIV' :
		$content 	= 'pages/hiv.php';
		$template	= 'include/template.php';
		break;

	case 'HIV_display' :
		$content 	= 'pages/hiv_display.php';
		$template	= 'include/template.php';
		break;

	case 'KSA' :
		$content 	= 'pages/ksa.php';
		$template	= 'include/template.php';
		break;

	case 'KSA_display' :
		$content 	= 'pages/ksa_display.php';
		$template	= 'include/template.php';
		break;

	case 'accounts' :
		$content 	= 'pages/accounts.php';
		$template	= 'include/template.php';
		break;

	case 'new_user' :
		$content 	= 'pages/new_user.php';
		$template	= 'include/template.php';
		break;

	case 'my_CBC_display' :
		$content 	= 'pages/cbc_display.php';
		$template	= 'include/blank.php';
		break;

	case 'my_UA_display' :
		$content 	= 'pages/ua_display.php';
		$template	= 'include/blank.php';
		break;

	case 'my_SQAR_display' :
		$content 	= 'pages/sqar_display.php';
		$template	= 'include/blank.php';
		break;

	case 'my_CSC_display' :
		$content 	= 'pages/csc_display.php';
		$template	= 'include/blank.php';
		break;

	case 'my_HIV_display' :
		$content 	= 'pages/hiv_display.php';
		$template	= 'include/blank.php';
		break;

	case 'my_KSA_display' :
		$content 	= 'pages/ksa_display.php';
		$template	= 'include/blank.php';
		break;

	case 'update_user' :
		$content 	= 'pages/update_user.php';
		$template	= 'include/template.php';
		break;

	default :
		$content 	= 'pages/home.php';
		$template	= 'include/template.php';
}

require_once $template;

?>
