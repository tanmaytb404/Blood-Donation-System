<?php
//SETTINGS TABLE(FOR DEBUG):
	function data_settings_value($dbc, $id)
	{
		$q = "SELECT * FROM settings WHERE id = '$id'";
		$r = mysqli_query($dbc, $q);
		$data = mysqli_fetch_assoc($r);
		return $data['value'];
	}

/*/USERS TABLE:
	function data_public($dbc, $id)
	{
		$q ="SELECT * FROM public WHERE email = '$id'";
		$r = mysqli_query($dbc, $q);
		$data = mysqli_fetch_assoc($r);
		$data['fullname'] = $data['name'];
		return $data;
	}*/

//PAGES TABLE:
	function data_page($dbc, $id) 
	{
		$q ="SELECT * FROM pages WHERE ID= $id"; 
	   	$r =mysqli_query($dbc, $q);
	   	$data =mysqli_fetch_assoc($r);
		/*
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

	
	/*
		foreach($rows AS $index=>$row) {
			if($rows['menu_id']){
				$id = $rows['menu_id'];
				
				$pages['menu_'.$id]['submenu'][] = [
				
				'id' => $row['id'],
				'title' => $row['title'],
				'page' => $row['page'],
				
				];
				
			} else {
				
				$id = $rows['id'];
				
				$pages['menu_'.$id] = [
				
				'id' => $row['id'],
				'title' => $row['title'],
				'page' => $row['page'],
				
				];
				
			}
		}
		
		return $pages;
		
	}
	
	function display_pages()
	{
		$pages = $data_page();
		if(!$pages)
		{
			return 'no menu exits in database';
		}
	
	$html = '';
	$html .= '<ul class="menu">'; 
	foreach( $pages AS $data_page)
	{
		if(isset($menu['submenu']))
		{
			
		}
		else {
			if($menu['page'])
			{
				$html .= '<li><a href = "'.$menu['page'].'">'.$menu['title'].'</a></li>';
			}
else{
	$html .= '<li><a href = "#">'.$menu['title'].'</a></li>';
}
		}
	}
	
	$html .= '</ul>';
	return $html;
	
	} */
	

?>