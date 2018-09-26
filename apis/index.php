<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('blogs.php');
$obj = new Blogs();

switch($_GET['action'])
{
	 case 'getBlogs':
	 	$obj->getBlogs();
	 	break;
	default:
		$arrMsg = array(
			"status" => 1,
			"message" =>array("Error"),
			"class"   => "danger"
		);
	echo json_encode($arrMsg);
}
?>
