<?php 
	
	Class Base {

		public $loan_portfolio;
		public $deposit_portfolio;
		public $default;
		public $case_load;
		public $no_savers;
		public $dormant_value;
		public $no_dormant;
		public $fullname;
		public $user_id;
		public $id;

		public $deposit_weekly;
		public $expected_repayment_weekly;
		public $total_deposit_monthly;
		public $expected_repayment_monthly;
		public $reg;
		public $incomes;
		public $def;
		public $recovery;
		public $total_collection;
		public $banked;
		public $cash_hand;
		public $previous_cash_hand;
		public $variances;
		public $loan_disbursement;
		public $no_disbursement;
		public $no_payment;
		public $disbursement_service;
		public $total_repayment;
		public $gross_loan;
		// public $case_load;
		public $savings;
		public $no_sav_withdrawal;
		public $savings_return_quit;
		public $no_savings_return_quit;
		// public $deposit_portfolio;
		public $no_registration;
		// public $no_savers;
		public $total_def;
		public $data_date;
		public $branch;
		public $month;
		public $year;


		public function find_base_id($id) {
			$the_basel_array = self::find_this_query("SELECT * FROM base WHERE staff_id = $id");

			return !empty($the_basel_array) ? array_shift($the_basel_array) : false;
		}

		public function find_base_branch($branch,$id) {
			$the_basel_array = self::find_this_query("SELECT * FROM base WHERE `branch` = '$branch' AND `staff_id` = '$id'");

			return !empty($the_basel_array) ? array_shift($the_basel_array) : false;
		}

		public function find_perform() {
			global $database;
			return self::find_this_query("SELECT * FROM perform");
		}

		public function find_perform_id($id) {
			global $database;
			return self::find_this_query("SELECT * FROM perform WHERE staff_id = $id");
		}

		public function find_last_perform() {
			global $database;
			return self::find_this_query("SELECT * FROM perform ORDER BY id DESC LIMIT 1");
		}

		public function find_last_perform_id($id) {
			global $database;
			return self::find_this_query("SELECT * FROM perform WHERE staff_id = $id ORDER BY id DESC LIMIT 1");
		}

		public function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		$the_object_array = array();
		
		while ($row = mysqli_fetch_array($result_set)) {
			$the_object_array[] = self::instant($row);
		}
		return $the_object_array;
		}

		public static function instant($the_base_record){
			$the_object = new self();

			foreach ($the_base_record as $the_base_attributies => $value) {
				
				if ($the_object->has_the_base_record($the_base_attributies)) {
					$the_object->$the_base_attributies = $value;
				}
			}

			return $the_object;
		}

		private function has_the_base_record($the_base_attributies){
			$obj_pro = get_object_vars($this);

			return array_key_exists($the_base_attributies, $obj_pro);
		}


		public function create_report(){
			global $database;

		$total_deposit_week = $_POST['total_deposit_week'];
        $expected_repayment_week = $_POST['expected_repayment_week'];
        $total_deposit_monthly = $_POST['total_deposit_monthly'];
        $expected_repayment_month = $_POST['expected_repayment_month'];
        $reg = $_POST['reg'];
        $incomes = $_POST['incomes'];
        $def = $_POST['def'];
        $recovery = $_POST['recovery'];
        $total_collection = $_POST['total_collection'];
        $banked = $_POST['banked'];
        $cash_hand = $_POST['cash_hand'];
         $previous_cash_hand = $_POST['previous_cash_hand'];
        $variances = $_POST['variances'];
        $loan_disbursement = $_POST['loan_disbursement'];
        $no_disbursement = $_POST['no_disbursement'];
        $no_payment = $_POST['no_payment'];
        $disbursement_service = $_POST['disbursement_service'];
        $total_repayment = $_POST['total_repayment'];
        $gross_loan = $_POST['gross_loan']; 
        $case_load  = $_POST['case_load'];
        $savings = $_POST['savings'];
        $no_sav_withdrawal  = $_POST['no_sav_withdrawal'];
        $savings_return_quit    = $_POST['savings_return_quit'];
        $no_savings_return_quit = $_POST['no_savings_return_quit'];
        $deposit_portfolio      = $_POST['deposit_portfolio'];
        $no_registration        = $_POST['no_registration'];
        $no_savers              = $_POST['no_savers'];
        $total_default          = $_POST['total_default'];
        $staff_id      			= $_POST['staff_id'];


			$sql = "INSERT INTO perform (deposit_weekly,expected_repayment_weekly,total_deposit_monthly,expected_repayment_monthly,reg,incomes,def,recovery,total_collection,banked,cash_hand,previous_cash_hand,	variances,loan_disbursement,no_disbursement,no_payment,disbursement_service,total_repayment,gross_loan,case_load,savings,no_sav_withdrawal,savings_return_quit,no_savings_return_quit,deposit_portfolio,no_registration,no_savers,total_def,staff_id) values ('$total_deposit_week','$expected_repayment_week','$total_deposit_monthly','$total_deposit_monthly','$reg','$incomes','$def','$recovery','$total_collection','$banked','$cash_hand','$previous_cash_hand','$variance','$loan_disbursement','$no_disbursement','$no_payment','$disbursement_service','$total_repayment','$gross_loan','$case_load','$savings','$no_sav_withdrawal','$savings_return_quit','$no_savings_return_quit','$deposit_portfolio','$no_registration ','$no_savers','$total_default','$staff_id')";

			if ($database->query($sql)) {
				$this->id = $database->the_payroll();
				echo "<script> alert ('Data Successfully Created'); </script>";
				return true;
			}else{
				return false;
			}
		}


		public function create_default_report(){
			global $database;

		$total_deposit_week = $_POST['total_deposit_week'];
        $expected_repayment_week = $_POST['expected_repayment_week'];
        $total_deposit_monthly = $_POST['total_deposit_monthly'];
        $total_deposit_monthly = $_POST['expected_repayment_month'];
        $reg = $_POST['reg'];
        $incomes = $_POST['incomes'];
        $def = $_POST['def'];
        $recovery = $_POST['recovery'];
        $total_collection = $_POST['total_collection'];
        $banked = $_POST['banked'];
        $cash_hand = $_POST['cash_hand'];
        $previous_cash_hand = $_POST['previous_cash_hand'];
        $variance = $_POST['variance'];
        $loan_disbursement = $_POST['loan_disbursement'];
        $no_disbursement = $_POST['no_disbursement'];
        $no_payment = $_POST['no_payment'];
        $disbursement_service = $_POST['disbursement_service'];
        $total_repayment = $_POST['total_repayment'];
        $gross_loan = $_POST['loan_portfolio']; 
        $case_load  = $_POST['case_load'];
        $savings = $_POST['savings'];
        $no_sav_withdrawal  = $_POST['no_sav_withdrawal'];
        $savings_return_quit    = $_POST['savings_return_quit'];
        $no_savings_return_quit = $_POST['no_savings_return_quit'];
        $deposit_portfolio      = $_POST['deposit_portfolio'];
        $no_registration        = $_POST['no_registration'];
        $no_savers              = $_POST['no_savers'];
        $total_default          = $_POST['default'];
        $user_id          = $_POST['user_id'];


			$sql = "INSERT INTO perform (deposit_weekly,expected_repayment_weekly,total_deposit_monthly,expected_repayment_monthly,reg,incomes,def,recovery,total_collection,banked,cash_hand,previous_cash_hand,	variances,loan_disbursement,no_disbursement,no_payment,disbursement_service,total_repayment,gross_loan,case_load,savings,no_sav_withdrawal,savings_return_quit,no_savings_return_quit,deposit_portfolio,no_registration,no_savers,total_def,staff_id) values ('$total_deposit_week','$expected_repayment_week','$total_deposit_monthly','$total_deposit_monthly','$reg','$incomes','$def','$recovery','$total_collection','$banked','$cash_hand','$previous_cash_hand','$variance','$loan_disbursement','$no_disbursement','$no_payment','$disbursement_service','$total_repayment','$gross_loan','$case_load','$savings','$no_sav_withdrawal','$savings_return_quit','$no_savings_return_quit','$deposit_portfolio','$no_registration ','$no_savers','$total_default','$user_id')";

			if ($database->query($sql)) {
				$this->id = $database->the_payroll();
				echo "<script> alert ('Data Successfully Created'); </script>";
				echo "<script> window.location.replace('index.php'); </script>";
				return true;
			}else{
				return false;
			}
		}


		public function find_report_id($id,$branch,$month,$year) {
			global $database;

			return self::find_this_query("SELECT * FROM perform WHERE `staff_id` = '$id' AND `branch` = '$branch' AND `month` = '$month' AND `year` = '$year'");
		}
		
		public function find_last_report($staff_id) {
			global $database;

			return self::find_this_query("SELECT * FROM perform WHERE `staff_id` = '$id' LIMIT 1");
		}


		public function create_base(){
		global $database;
			$loan_portfolio     = $_POST['loan_portfolio'];
            $deposit_portfolio  = $_POST['deposit_portfolio'];
            $default            = $_POST['default'];
            $case_load          = $_POST['case_load'];
            $no_savers          = $_POST['no_savers'];
            $dormant_value      = $_POST['dormant_value'];
            $no_dormant         = $_POST['no_dormant'];
            $fullname           = $_POST['fullname'];
            $user_id            = $_POST['user_id'];

			$sql = "INSERT INTO base (`loan_portfolio`,`deposit_portfolio`,`default`,`case_load`,`no_savers`,`dormant_value`,`no_dormant`,`fullname`,`staff_id`)";
			$sql .= "VALUES ('";
			$sql .= $database->escape_string($this->loan_portfolio) . "', '";
			$sql .= $database->escape_string($this->deposit_portfolio) . "', '";
			$sql .= $database->escape_string($this->default) . "', '";
			$sql .= $database->escape_string($this->case_load) . "', '";
			$sql .= $database->escape_string($this->no_savers) . "', '";
			$sql .= $database->escape_string($this->dormant_value) . "', '";
			$sql .= $database->escape_string($this->no_dormant) . "', '";
			$sql .= $database->escape_string($this->fullname) . "', '";
			$sql .= $database->escape_string($this->user_id) . "')";

			
			if ($database->query($sql)) {

				$this->id = $database->user_id();
				return true;
			} else {
				return false;
			}
		}


		public function delete_data($staff_id) {
				global $database;

				$staff_id = $database->escape_string($staff_id);

				$sql = "DELETE FROM perform WHERE id = '$staff_id' ";
				$database->query($sql);
				echo "<script> alert ('Successfully Deleted Data'); </script>";

				return (mysqli_affected_rows($database->conn) == 1) ? true : false;

			}

			public function delete_base($id) {
				global $database;

				$id = $database->escape_string($id);

				$sql = "DELETE FROM perform WHERE id = '$id' ";
				$database->query($sql);
				echo "<script> alert ('Successfully Deleted Base'); </script>";

				return (mysqli_affected_rows($database->conn) == 1) ? true : false;

			}







		// Basel end
	}
?>