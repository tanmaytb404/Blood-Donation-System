<?php

//FILE SETUP:
	include('config/connection.php');
	$site_title='Social-Welfare';

#constants: (check tutorial 12 for more information why we using it)
	DEFINE('D_TEMPLATE', 'template');
//INCLUDE CONNECTIONS:
	include('functions/data.php');
	include('functions/template.php');

//CHECK DEBUG STATUS:
	$debug = data_settings_value($dbc, 'debug_status');

//DEFAULT PAGE WILL BE HOMEPAGE:
	if(isset($_GET['page']))
		{
		$pageid = $_GET['page'];
	    } 
		else 
		{
		$pageid =1;
	    }

//RUN THE FUNCTION:
	$page = data_page($dbc, $pageid);
//RUN THE data_public FUNCTION:
	// $user = data_public($dbc, $_SESSION['username']);
?>