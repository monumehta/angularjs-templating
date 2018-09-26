<?php 
	require_once("database.php");
	require_once("services.php");

	class Blogs
	{
		function __construct()
		{

		}

		public function getBlogs() 
		{
			$query_string = "select * from tbl_blogs";
			$database = new Database();
			$result = $database->select($query_string);
			unset($database);
			$data = array();

			if(count($result)) {
				foreach ($result as $key => $value) {
					$data[$key]['id'] = $value['id'];
					$data[$key]['title'] = $value['title'];
					$data[$key]['author'] = $value['author'];
					$data[$key]['image'] = $value['image'];
					$data[$key]['icon'] = $value['icon'];
					$data[$key]['date_time'] = $value['date_time'];
					$data[$key]['description'] = $value['description'];
				}
			}

			$service = new Services();
			$response = $service->displayResponse('success', NULL , $data);

			echo json_encode($response);
		}
	}



?>