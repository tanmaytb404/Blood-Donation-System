<?php
	$dbc =mysqli_connect('localhost', 'tester', 'Tanmay8389', 'social-welfare') or die('failed to connect with social-welfare database');
?>
<?php
	// Authorisation details.
	$username = "ritamrjk@gmail.com";
	$hash = "0cecc56f63c736963698dfb34da3487647a34e460bb0e00bdcc0d9f7af2d1174";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "918918352754"; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo "<pre>";
	print_r($result); exit;
?>