<?php 

	function dhalt($data)
	{
		header('Content-Type:text/html;charset=utf-8');
		echo "<pre>" . print_r($data, true) . "</pre>";
	}

 ?>