<?php
//SETTINGS TABLE(FOR DEBUG):
	function data_settings_value($dbc, $id)
	{
		$q = "SELECT * FROM settings WHERE id = '$id'";
		$r = mysqli_query($dbc, $q);
		$data = mysqli_fetch_assoc($r);
		return $data['value'];
	}

//USERS TABLE:
	function data_user($dbc, $id)
	{
		$q ="SELECT * FROM users WHERE email = '$id'";
		$r = mysqli_query($dbc, $q);
		$data = mysqli_fetch_assoc($r);
		$data['fullname'] = $data['fname'].' '.$data['lname'];
		return $data;
	}

//PAGES TABLE:
	function data_page($dbc, $id) 
	{
		$q ="SELECT * FROM pages WHERE ID= $id";
	    $r =mysqli_query($dbc, $q);
	    $data =mysqli_fetch_assoc($r);
		
/* AUTOMATICALLY TRANSFORM A TEXT CONTENT IN <PARAGRAPH> TAG: 	   
	   $data['body_nohtml'] = strip_tags($data['body']);
	   
	   if($data['body'] == $data['body_nohtml'])
	   {
	   	  $data['body_formatted'] = '<p>'.$data['body'].'</p>';
	   }
	  else 
	   {
		 $data['body_formatted'] =$data['body'];
	   } */
	   
		return $data;
	}
?>