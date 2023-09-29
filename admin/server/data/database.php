<?php
	
	require_once("conn.php");

	class Database{



		public $connect;

		function __construct(){
			$this->open_db_connect();
		}


		public function open_db_connect(){

			//$this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

			$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

			if ($this->conn->connect_error) {
				die("connection failed". $this->conn->connect_error);
			}

		}


		public function query($sql) {

			// $result = mysqli_query($this->conn, $sql);

			$result = $this->conn->query($sql);

			$this->confirm_query($result);
			

			return $result;
		}

		private function confirm_query($result){

			if (!$result) {
				die("Query failed" . $this->conn->error);
			}

		}


		public function escape_string($string) {

			$escaped_string = $this->conn->real_escape_string($string);
			return $escaped_string;
		}

		public function the_payroll() {
			return mysqli_insert_id($this->conn);
		}

		public function user_id(){

			return mysqli_insert_id ($this->conn);
		}

		public function update_the_payroll() {
			return mysqli_insert_id($this->conn);
		}

		public function update_the_staff() {
			return mysqli_insert_id($this->conn);
		}

		
	}





	$database = new Database();
?>