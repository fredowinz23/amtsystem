<?php
session_start();
require_once 'config/database.php';
require_once 'config/Models.php';

$action = $_GET['action'];

switch ($action) {


	case 'login' :
		login();
		break;

	case 'cbc' :
		add_cbc();
		break;

	case 'approve_CBC' :
		approve_cbc();
		break;

	case 'deny_CBC' :
		deny_cbc();
		break;

	case 'ua' :
		add_ua();
		break;

	case 'approve_UA' :
		approve_ua();
		break;

	case 'deny_UA' :
		deny_ua();
		break;

	case 'sqar' :
		add_sqar();
		break;

	case 'approve_SQAR' :
		approve_sqar();
		break;

	case 'deny_SQAR' :
		deny_sqar();
		break;

	case 'csc' :
		add_csc();
		break;

	case 'approve_CSC' :
		approve_csc();
		break;

	case 'deny_CSC' :
		deny_csc();
		break;

	case 'hiv' :
		add_hiv();
		break;

	case 'approve_HIV' :
		approve_hiv();
		break;

	case 'deny_HIV' :
		deny_hiv();
		break;

	case 'ksa' :
		add_ksa();
		break;

	case 'approve_KSA' :
		approve_ksa();
		break;

	case 'deny_KSA' :
		deny_ksa();
		break;

	case 'new_patient' :
		new_patient();
		break;

	case 'new_appointment' :
		new_appointment();
		break;

	case 'new_user' :
		new_user();
		break;

	case 'logout' :
		logout();
		break;

	case 'changepassword' :
		changepassword();
		break;

	case 'update_user' :
		update_user();
		break;

	default :
}

function login()
{
	// if we found an error save the error message in this variable

	$username = $_POST['username'];
	$password = $_POST['password'];

	//$result = user()->get("alias='$alias' and password = '".sha1($password)."'");
	$result = user()->get("username='$username' and password = '$password'");

	if ($password=="temppw"){
		header('Location: index.php?view=changepassword&username='.$username);
		return;
	}

	if ($result){
		$_SESSION['user_session'] = $username;
		header('Location: index.php');
	}
	else {
			header('Location: index.php?view=login&error=Username or password not matched!');
	}
}

function changepassword(){
	$p = $_POST['password'];
	$p2 = $_POST['password2'];
	$username = $_GET['username'];

	if ($p!=$p2){
		header('Location: index.php?view=changepassword&username='.$username.'&error=Password not matched!');
	}
	else{
		$model = user();
		$model->obj['password'] = $p;
		$model->update("username='$username'");

		header('Location: index.php?view=login&success=You may now login with your new password!');
	}
}

function add_cbc()
{

	$user = $_SESSION['user_session'];

	$cbc = cbc();
	$cbc->obj = $_POST;
	$cbc->obj["med_tech"] = $user;
	$cbc->obj["date"] = "NOW()";
	$cbc->create();

			header('Location: index.php?view=list&code=CBC&success=You have successfully added a test result!');
}

function approve_cbc(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$cbc = cbc();
	$cbc->obj['status'] = 'Approved';
	$cbc->obj['pathologist'] = $user;
	$cbc->update("Id='$Id'");

	header('Location: index.php?view=list&code=CBC&success=You have successfully approved a test result!');
}

function deny_cbc(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$cbc = cbc();
	$cbc->obj['status'] = 'Denied';
	$cbc->obj['pathologist'] = $user;
	$cbc->update("Id='$Id'");

	header('Location: index.php?view=list&code=CBC&success=You have successfully denied a test result!');
}

function add_ua()
{

	$user = $_SESSION['user_session'];

	$model = ua();
	$model->obj = $_POST;
	$model->obj["med_tech"] = $user;
	$model->obj["date"] = "NOW()";
	$model->create();

			header('Location: index.php?view=list&code=UA&success=You have successfully added a test result!');
}

function approve_ua(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = ua();
	$model->obj['status'] = 'Approved';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=UA&success=You have successfully approved a test result!');
}

function deny_ua(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$cbc = ua();
	$cbc->obj['status'] = 'Denied';
	$cbc->obj['pathologist'] = $user;
	$cbc->update("Id='$Id'");

	header('Location: index.php?view=list&code=UA&success=You have successfully denied a test result!');
}

function add_sqar()
{

	$user = $_SESSION['user_session'];

	$model = sqar();
	$model->obj = $_POST;
	$model->obj["med_tech"] = $user;
	$model->obj["date"] = "NOW()";
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=list&code=SQAR&success=You have successfully added a test result!');
}

function approve_sqar(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = sqar();
	$model->obj['status'] = 'Approved';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=SQAR&success=You have successfully approved a test result!');
}

function deny_sqar(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$cbc = sqar();
	$cbc->obj['status'] = 'Denied';
	$cbc->obj['pathologist'] = $user;
	$cbc->update("Id='$Id'");

	header('Location: index.php?view=list&code=SQAR&success=You have successfully denied a test result!');
}

function add_csc()
{

	$user = $_SESSION['user_session'];

	$model = csc();
	$model->obj = $_POST;
	$model->obj["med_tech"] = $user;
	$model->obj["date"] = "NOW()";
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=list&code=CSC&success=You have successfully added a test result!');
}

function approve_csc(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = csc();
	$model->obj['status'] = 'Approved';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=CSC&success=You have successfully approved a test result!');
}

function deny_csc(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$cbc = csc();
	$cbc->obj['status'] = 'Denied';
	$cbc->obj['pathologist'] = $user;
	$cbc->update("Id='$Id'");

	header('Location: index.php?view=list&code=CSC&success=You have successfully denied a test result!');
}

function add_hiv()
{

	$user = $_SESSION['user_session'];

	$model = hiv();
	$model->obj = $_POST;
	$model->obj["med_tech"] = $user;
	$model->obj["date"] = "NOW()";
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=list&code=HIV&success=You have successfully added a test result!');
}

function approve_hiv(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = hiv();
	$model->obj['status'] = 'Approved';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=HIV&success=You have successfully approved a test result!');
}

function deny_hiv(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = hiv();
	$model->obj['status'] = 'Denied';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=HIV&success=You have successfully denied a test result!');
}

function add_ksa()
{

	$user = $_SESSION['user_session'];

	$model = ksa();
	$model->obj = $_POST;
	$model->obj["med_tech"] = $user;
	$model->obj["date"] = "NOW()";
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=list&code=KSA&success=You have successfully added a test result!');
}

function approve_ksa(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = ksa();
	$model->obj['status'] = 'Approved';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=KSA&success=You have successfully approved a test result!');
}

function deny_ksa(){
	$Id = $_GET['Id'];
	$user = $_SESSION['user_session'];

	$model = ksa();
	$model->obj['status'] = 'Denied';
	$model->obj['pathologist'] = $user;
	$model->update("Id='$Id'");

	header('Location: index.php?view=list&code=KSA&success=You have successfully denied a test result!');
}

function new_patient()
{

	$model = patient();
	$model->obj = $_POST;
	$model->obj['patient_id'] = "P" . round(microtime(true));
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=patients&success=You have successfully added a new patient!');
}

function new_appointment()
{

	$model = appointment();
	$model->obj = $_POST;
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=appointment_list&success=You have successfully added a new appointment!');
}

function new_user()
{

	$model = user();
	$model->obj = $_POST;
	$model->create();

	// var_dump($_POST);return;

			header('Location: index.php?view=accounts&success=You have successfully added a new user!');
}

function update_user()
{
	$Id= $_GET["Id"];

	$model = user();
	$model->obj = $_POST;
	$model->obj['password'] = 'temppw';
	$model->update("Id=$Id");

	// var_dump($_POST);return;

			header('Location: index.php?view=accounts&success=You have successfully updated a user!');
}

function logout()

{
	//logout.php
// session_start();
session_destroy();
header('Location: index.php?view=login');
	exit;
}



?>
