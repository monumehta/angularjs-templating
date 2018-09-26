<?php 
class Services {
	
	function __construct()
	{

	}

	
	public function displayResponse($status = NULL,  $message = NULL, $result = array() ) 
	{		
		$response = new StdClass();
		$response->status = $status;
		$response->message = $message; 
		$response->data = $result; 
		return $response;
    }	
	
	
	
}   


?>
