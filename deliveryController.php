<?php


class delveryController
{
	
	public function index()
	{
		$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
		$slug = explode('/', $url)[0];

		if(file_exists('Views/pages/'.$slug.'.php')){
			include('Views/pages/'.$slug.'.php');

		}else{
		
			include('Views/pages/404.php');
		
		}




	}
}







?>