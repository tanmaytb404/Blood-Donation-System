<?php
		require_once("GoogleAPI/vendor/autoload.php");
		session_start();
		$gClient = new Google_Client();
		$gClient->setAuthConfig('client_credentials.json');
		$gClient->setClientId("1074398632600-1dk0u6ebln6c33hb6of8c15ultaa1nhm.apps.googleusercontent.com");
		$gClient->setClientSecret("4BE910fYbAyz5SKOnURAli8O");
		$gClient->setApplicationName("BSWS login");
		$gClient->addScope([Google_Service_Oauth2::PLUS_LOGIN, Google_Service_Oauth2::USERINFO_EMAIL]);
		$gClient->setRedirectUri("http://localhost/social-welfare/g-callback.php");

		// print_r($gClient);
?>