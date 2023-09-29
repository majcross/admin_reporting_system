<?php
	
	class User{

		protected static $db_table = "user";
		public $user_id;
		public $username;
		public $password;
		public $email;
		public $first_name;
		public $fullname;
		public $lastname;
		public $id;
		// public $password;
		public $cader;
		public $salary;
		public $branch;
		public $phone_no;
		public $sex;
		public $qualification;
		public $appiont;
		public $bank;
		public $birth;
		public $account_no;
		public $status;

		public function find_all_user() {
		// global $database;
		// $result_set = $database->query("SELECT * FROM user");
		// return $result_set;
		return	self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE status = 'Active'");
		}

		public function delete_user($branch) {
		return	self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE status = 'Active' AND branch = '$branch'");
		}

		public function find_all_exit_user($branch){
		return	self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE status = 'Disable' AND branch = '$branch'");
		}

		public function find_user_id($user_id) {
		global $database;
		// $result_set = $database->query("SELECT * FROM user WHERE id = $user_id");
		$the_user_array = self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE user_id = $user_id");

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		// if (!empty($the_user_array)) {
		// 	$first_detail = array_shift($the_user_array);
		// 	return $first_detail;
		// }else {
		// 	return false;
		// }


		// $found_user = mysqli_fetch_array($result_set);




		// return $found_user;
		}

		public function find_all_user_branch($branch) {
		global $database;
		$status = 'Active';

		$branch = $database->escape_string($branch);
		// $the_user_array = self::find_this_query("SELECT * FROM " .self::$db_table . " WHERE branch = '$branch'");

		// return !empty($the_user_array) ? array_shift($the_user_array) : false;
		return	self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE branch = '$branch' AND `status` = '$status'");

		}

		public function find_all_exit_branch($branch) {
		global $database;
		$status = 'In Active';

		$branch = $database->escape_string($branch);
		// $the_user_array = self::find_this_query("SELECT * FROM " .self::$db_table . " WHERE branch = '$branch'");

		// return !empty($the_user_array) ? array_shift($the_user_array) : false;
		return	self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE branch = '$branch' AND `status` = '$status'");

		}

		public function find_all_co_branch($branch) {
		global $database;
		$status = 'Active';

		$branch = $database->escape_string($branch);
		// $the_user_array = self::find_this_query("SELECT * FROM " .self::$db_table . " WHERE branch = '$branch'");

		// return !empty($the_user_array) ? array_shift($the_user_array) : false;
		return	self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE branch = '$branch' AND cader = 'Credit Officer' AND status = '$status'");

		}


		public function find_username($user_name) {
		global $database;
		$the_user_array = self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE username = $username");

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		}
		
		  // CO
        public static function verify_co($fullname,$branch){
        global $database;

        $fullname = $database->escape_string($fullname);
        $branch = $database->escape_string($branch);


        $sql = "SELECT * FROM " .self::$db_table. " WHERE fullname = '{$fullname}' AND branch = '{$branch}'  LIMIT 1";

        $the_user_array = self::find_this_query($sql);

        return !empty($the_user_array) ? array_shift($the_user_array) : false;

        }

		public static function verify_user($username, $passwords){
		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($passwords);
		$cader 	  = 'Admin';

		$sql = "SELECT * FROM " .self::$db_table. " WHERE username = '{$username}' AND password = '{$password}' AND cader = '{$cader}' LIMIT 1";

		$the_user_array = self::find_this_query($sql);

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		}

		public static function verify_mg($username, $password){
		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($password);
		$cader = "Branch Manager";

		$sql = "SELECT * FROM " .self::$db_table. " WHERE username = '{$username}' AND password = '{$password}' AND cader = '{$cader}' LIMIT 1";

		$the_user_array = self::find_this_query($sql);

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		}


		public static function verify_username($username){
		global $database;

		$username = $database->escape_string($username);

		$sql = "SELECT * FROM " .self::$db_table. " WHERE username = '{$username}'  LIMIT 1";

		$the_user_array = self::find_this_query($sql);

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		}

		public static function verify_baseline($id){
		global $database;

		$id = $database->escape_string($id);

		$sql = "SELECT * FROM base WHERE id = '{$id}'  LIMIT 1";

		$the_user_array = self::find_this_query($sql);
		echo "<script> alert ('Staff already has a baseline created'); </script>";

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		}

		public function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		$the_object_array = array();
		
		while ($row = mysqli_fetch_array($result_set)) {
			$the_object_array[] = self::instant($row);
		}
		return $the_object_array;
		// return $result_set;
		}

		public static function instant($the_user_record){
			$the_object = new self();

			foreach ($the_user_record as $the_user_attributies => $value) {
				
				if ($the_object->has_the_user_record($the_user_attributies)) {
					$the_object->$the_user_attributies = $value;
				}
			}

			return $the_object;
		}

		private function has_the_user_record($the_user_attributies){
			$obj_pro = get_object_vars($this);

			return array_key_exists($the_user_attributies, $obj_pro);
		}


		public function message() {

			echo "<script> alert ('Username Exist'); </script>";
		}

		// public function checkuser () {

		// 	return isset($this->username) ? $this->message() : $this->create();
		// }

		public function create(){
		global $database;
			$fullname = $_POST['fullname'];
            $username  = $_POST['username'];
            $password  = $_POST['password'];
            $passwords  = md5($password);
            $cader     = $_POST['cader'];
            $branch    = $_POST['branch'];
            // $password  = md5($_POST['password']);

			$sql = "INSERT INTO " .self::$db_table. " (fullname, branch, cader, username, password)";
			$sql .= "VALUES ('";
			$sql .= $database->escape_string($this->fullname) . "', '";
			$sql .= $database->escape_string($this->branch) . "', '";
			$sql .= $database->escape_string($this->cader) . "', '";
			$sql .= $database->escape_string($this->username) . "', '";
			$sql .= $database->escape_string($this->passwords) . "')";

			
			if ($database->query($sql)) {

				$this->id = $database->user_id();
				return true;
			} else {
				return false;
			}
		}
		
		public function create_co(){
        global $database;
            $fullname = $_POST['fullname'];
            $cader     = $_POST['cader'];
            $branch    = $_POST['branch'];
            // $password  = md5($_POST['password']);

            $sql = "INSERT INTO " .self::$db_table. " (fullname, branch, cader)";
            $sql .= "VALUES ('";
            $sql .= $database->escape_string($this->fullname) . "', '";
            $sql .= $database->escape_string($this->branch) . "', '";
            $sql .= $database->escape_string($this->cader) . "')";

            
            if ($database->query($sql)) {

                $this->id = $database->user_id();
                return true;
            } else {
                return false;
            }
        }

		// Branch details

		public function create_branch(){
		global $database;
            $branch    = $_POST['branch'];

			$sql = "INSERT INTO branch (branch)";
			$sql .= "VALUES ('";
			$sql .= $database->escape_string($this->branch) . "')";

			
			if ($database->query($sql)) {

				$this->id = $database->user_id();
				return true;
			} else {
				return false;
			}
		}


		public function find_all_branch() {
		global $database;

		return	self::find_this_query("SELECT * FROM branch ORDER BY branch ASC");

		}


		public static function verify_branch($branch){
		global $database;

		$branch = $database->escape_string($branch);

		$sql = "SELECT * FROM branch WHERE branch = '{$branch}'  LIMIT 1";

		$the_user_array = self::find_this_query($sql);
		// echo "<script> alert ('Branch already Exist'); </script>";

		return !empty($the_user_array) ? array_shift($the_user_array) : false;

		}

		// branch details end


		public function update(){
		global $database;
		$firstname = $database->escape_string($this->first_name);
		// $lastname = $database->escape_string($this->lastname);
		$id = $database->escape_string($this->id);

			$sql = "UPDATE " .self::$db_table. " SET";
			$sql .= "`fullname`= '" . $database->escape_string($this->fullname) . "', ";
			// $sql .= "`lastname`= '" . $database->escape_string($this->lastname) . "', ";
			$sql .= "`username`= '" . $database->escape_string($this->username) . "', ";
			$sql .= "`password`= '" . $database->escape_string($this->password) . "', ";
			// $sql .= "`cader`= '" . $database->escape_string($this->cader) . "', ";
			// $sql .= "`salary`= '" . $database->escape_string($this->salary) . "', ";
			// $sql .= "`status`= '" . $database->escape_string($this->status) . "', ";
			$sql .= "`cader`= '" . $database->escape_string($this->cader) . "' ";
			$sql .=	" WHERE `user_id`= '$id'";

			var_dump($sql);

			
			// $database->query($sql);

			if($database->query($sql)){
				$this->id = $database->update_the_staff();
				echo "<script> alert ('You have updated the staff details'); </script>";
				echo "<script> window.location.replace('list.php'); </script>";
				return true;
			}else{
				return false;
			}
		}

		public function delete() {
			global $database;

			$sql = "DELETE FROM " .self::$db_table. " ";
			$sql .=	" WHERE id=". $database->escape_string($this->id);
			$sql .= " LIMIT 1";

			$database->query($sql);

			return (mysqli_affected_rows($database->conn) == 1) ? true : false;

		}


		public function update_staff_status($id,$status){
		global $database;

		$id = $database->escape_string($this->id);
		$status = $database->escape_string($this->status);
		

			// $sql = "UPDATE " .self::$db_table . " SET";
			// $sql .= "`status`= '" . $status . "' ";
			// $sql .=	" WHERE `id`= '$id'";



			// var_dump($status);
			$sql = "UPDATE `user` SET `status` = '$status' WHERE `user_id` = '$id'";
			
			$database->query($sql);

			return (mysqli_affected_rows($database->conn) == 1) ? redirect("index.php") : false;

		// 	if($database->query($sql)){
		// 		$this->id = $database->update_the_staff();
		// 		echo "<script> alert ('You have Deleted the staff'); </script>";
		// 		return true;
		// 	}else{
		// 		return false;
		// 	}
		}



	}
?>