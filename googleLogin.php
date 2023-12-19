<?php
//Google authorization:
require_once ("config.php");
		$authURL = $gClient->createAuthUrl();
		header("location: $authURL");
?>