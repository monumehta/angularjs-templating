<?php
	
	class Database
	{
		private $_host;
		private $_username;
		private $_password;
		private $_dbname;
		
		function __construct()
		{
			$this->_host = "localhost";
			$this->_username = "root";
			$this->_password = "admin";
			$this->_dbname = "angular-test";


			//connect to database
			$this->dbConn = new PDO("mysql:host=localhost;dbname=angular-test", 'root', 'admin');	
				
			if (!$this->dbConn){
				$this->show_error('Could not connect to database server or data base.');
			}
		}

		// select record
		public function select($query_string) 
		{
			$result = $this->dbConn->prepare($query_string);
			$result->execute();

			$response = array();

			if ($result->rowCount() >= 1)
				$response = $result->fetchAll();

			$this->dbConn = null;

			return $response;
		}



	}

?>