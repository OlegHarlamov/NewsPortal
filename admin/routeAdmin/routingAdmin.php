<?php
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index.php') {
	//main page
	$response = controllerAdmin::formLoginSite();
} //enter
elseif($path == 'login') {
	//form
	$response = controllerAdmin::loginAction();
}
elseif($path == 'logout') {
	//edit
	$response = controllerAdmin::logoutAction();
}
//------------------------- list news
elseif($path=='newsAdmin') {
	$response=controllerAdminNews::NewsList();
}
//------------------add news
	elseif($path=='newsAdd'){
		$response = controllerAdminNews::newsAddForm();
	}
	elseif($path=='newsAddResult'){
		$response = controllerAdminNews::newsAddResult();
	}
else {
	//page is not exist
	$response = controllerAdmin::error404();
}