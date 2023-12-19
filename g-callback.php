<?php	
require_once ("config.php");
if(isset($_SESSION['accessToken'])){
	$gClient->setAccessToken($_SESSION['accessToken']);
} else if(isset($_GET['code']))
{
	$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
	$_SESSION['accessToken'] =$token;
}
 // else{
	// header("location: index.php");
// }
$oAuth = new Google_Service_Oauth2($gClient);
$user = $oAuth->userinfo->get();
	$userdata['name'] = $user->name;
	$userdata['gender'] = $user->gender;
	// $userdata['pagelink'] = $user->link;
	// $userdata['picture'] = $user->picture;
	$userdata['email'] = $user->email;

	$_SESSION['user'] = $userdata;
	
	header("location: index.php");

?>		