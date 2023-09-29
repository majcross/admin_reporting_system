<?php
	
	class Session{

		private $signed_in = false;
		public $user_id;
		public $fullname;
		public $exam_id;
		public $message;

		function __construct(){

			session_start();
			$this->check_the_login();
			$this->check_message();
		}


		public function message($the_message=""){
			if (!empty($the_message)) {
				$_SESSION['message'] = $the_message;
			} else {
				return $this->message;
			}
		}


		public function check_message(){
			if (isset($_SESSION['message'])) {
				$this->message = $_SESSION['message'];
				unset($_SESSION['message']);

				
			} else {
				return $this->message ="";
			}
		}



		public function is_signed_in(){
			return $this->signed_in;
		}

		public function login($user){

			if ($user) {
				$this->user_id = $_SESSION['user_id'] = $user->user_id;
				$this->fullname = $_SESSION['fullname'] = $user->fullname;
				$this->cader = $_SESSION['cader'] = $user->cader;
				// $this->fullname = $_SESSION['staff_id'] = $user->fullname;
				$this->signed_in = true;
			}
		}

		public function logout(){
			unset($_SESSION['user_id']);
			unset($this->user_id);
			$this->signed_in = false;
		}


		private function check_the_login(){
			if (isset($_SESSION['user_id'])) {
				
				$this->user_id = $_SESSION['user_id'];
				$this->signed_in = true;
			}else{

				unset($this->user_id);
				$this->signed_in = false;
			}

		}

		public function redirect(){
			if (!$session->is_signed_in()) {redirect("login.php");}
		}





	}

	$session = new Session();

?>