<?php 
	function getUserInfo()
	{
		echo "string";
	}

	function dd($data)
	{
		header('Content-Type:text/html;charset=utf-8');
		echo "<pre>." print_r($data, true)".</pre>"
	}

 ?>