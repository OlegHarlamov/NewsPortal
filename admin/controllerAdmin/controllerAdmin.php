<?php
class controllerAdmin {
	public static function formLoginSite(){
		include_once('viewAdmin/formLogin.php');
	}
	//admin form
	public static function loginAction() {
		$logIn=modelAdmin::userAuthentication();
		//echo $logIn;
		if(isset($logIn) and $logIn==true) {
			include_once('viewAdmin/startAdmin.php');
		}
		else {
			$_SESSION['errorString']='Неправильное имя пользователя или пароль';
			include_once('viewAdmin/formLogin.php');
		}
	}
	//выход из админ панели
	public static function logoutAction() {
		modelAdmin::userLogout();
		include_once('viewAdmin/formLogin.php');
	}
	//page error
	public static function error404(){
		include_once('viewAdmin/error404.php');
	}
}
?>