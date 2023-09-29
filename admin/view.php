<?php include("includes/header.php"); ?>
<?php
    $id = $_GET['id'];
    require_once('server/lang.php');
      require_once($xyz1);

?>
<?php include("server/data/redirect.php"); ?>
<?php 
        $profie = 'Admin';
       if ($_SESSION['cader'] != $profie) {
                redirect("logout.php");
            }
     ?>
     <?php 
    // if (isset($_POST['delete_data'])) {
    //     $staff_id = $_POST['staff_id'];
    //     $find_payroll = Base::delete_data($staff_id);
    // }

    if (isset($_POST['delete_base'])) {
        $id = $_POST['id'];
        $find_payroll = Base::delete_base($id);
    }
    
    if (isset($_POST['delete_data'])) {
        $staff_id = $_POST['staff_ids'];
        $find_payroll = Base::delete_data($staff_id);
    }
     
?>


        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['fullname']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align: center;">
                            Report
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        <div class="row">
                            <!-- <div class="col-md-2"></div> -->
                            <div class="col-md-12">
                                <?php
                                    if (isset($_POST['submit_preform'])) {
                                        // code...
                                    
                                ?>
                                        <div class="table-wrapper" style="overflow: scroll;">
                                            
                                                <table class="table new_table" style="overflow-y: scroll;">
                                                    <h3>Base Line</h3>
                                                    <thead>
                                                        <th>Loan Portfolio</th>
                                                        <th>Deposit Portfolio</th>
                                                        <th>Default</th>
                                                        <th>Case Load</th>
                                                        <th>No of Savers</th>
                                                        <th>Dormant Value</th>
                                                        <th>No of Dormant</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                            $id = $id;
                                                            $branch = $_POST['branch'];
                                                            echo $id;
                                                            echo $branch;
                                                                
                                                                $base = Base::find_base_id($id);
                                                                
                                                            ?>
                                                        <form action="" method="POST">
                                                        <tr>
                                                            <td><input type="text" name="loan" id="loan" value="<?php echo number_format($base->loan_portfolio); ?>" readonly></td>
                                                            <td><input type="text" name="deposit" id="deposit" value="<?php echo number_format($base->deposit_portfolio); ?>" readonly></td>
                                                            <td><input type="text" name="default" id="default" value="<?php echo number_format($base->default); ?>" readonly></td>
                                                            <td><input type="text" name="case_load" id="case_load" value="<?php echo $base->case_load; ?>" readonly></td>
                                                            <td><input type="text" name="no_savers" id="no_savers" value="<?php echo number_format($base->no_savers); ?>" readonly></td>
                                                            <td><input type="text" name="dormant_value" id="dormant_value" value="<?php echo number_format($base->dormant_value); ?>" readonly></td>
                                                            <td><input type="text" name="no_dormant" id="no_dormant" value="<?php echo $base->no_dormant; ?>" readonly></td>
                                                            <input type="text" name="id" value="<?php echo $base->staff_id; ?>" hidden>
                                                            <td><button type="submit" name="delete_base" class="btn btn-danger">Delete</button></td>
                                                        </tr>
                                                    </tbody>
                                                </form>
                                                    <thead>
                                                        <th>Date</th>
                                                        <th>Total Deposit (Weekly)</th>
                                                        <th>Expected Repayment (Weekly)</th>
                                                        <th>Total Deposit (Monthly)</th>
                                                        <th>Expected Repayment (Monthly)</th>
                                                        <th>Amount Registration</th>
                                                        <th>Other Incomes (E.g. Ann. Due, React. etc)</th>
                                                        <th>Default</th>
                                                        <th>Recovery</th>
                                                        <th class="donot_touch">Total Collection</th>
                                                        <th>Total Banked (Teller/ Transfer)</th>
                                                        <th class="donot_touch">Cash at Hand</th>
                                                        <th>Previous Cash at hand banked</th>
                                                        <th>VARIANCES</th>
                                                        <th>Loan Disbursement</th>
                                                        <th>No of Disbursement</th>
                                                        <th>No of Full Payment</th>
                                                        <th>Loan Disbursement with Service Charge</th>
                                                        <th>Savings Withdrawal</th>
                                                        <th>No of Savings Withdrawal</th>
                                                        <th>Savings Return (Quit)</th>
                                                        <th>No of Savings Return (Quit)</th>
                                                        <th>No of Registration</th>
                                                        <th class="donot_touch">Total Repayment</th>
                                                        <th class="donot_touch">Gross Loan Portfolio</th>
                                                        <th class="donot_touch">Case Load</th>
                                                        <th class="donot_touch">Deposit Portfolio</th>
                                                        <th class="donot_touch">No of Savers</th>
                                                        <th class="donot_touch">Total Default</th>
                                                        <th class="donot_touch">Branch</th>
                                                        <th class="donot_touch">Month</th>
                                                        <th class="donot_touch">Year</th>
                                                        <th class="donot_touch">Action</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            
                                                            
                                                            $month  = $_POST['month'];
                                                            $year   = $_POST['year'];
                                                            $base = Base::find_report_id($id,$branch,$month,$year);
                                                            foreach ($base as $performs) {

                                                            
                                                            
                                                            ?>
                                                            <form action="" method="POST">
                                                        <tr>
                                                            <td><input type="date" name="data_date" value="<?php echo $performs->data_date; ?>" readonly></td>
                                                            <td><input type="number" name="total_deposit_week" value="<?php echo $performs->deposit_weekly; ?>" readonly></td>
                                                            <td><input type="number" name="expected_repayment_week" value="<?php echo $performs->expected_repayment_weekly; ?>" readonly></td>
                                                            <td><input type="number" name="total_deposit_monthly" value="<?php echo $performs->total_deposit_monthly; ?>" readonly></td>
                                                            <td><input type="number" name="expected_repayment_monthly" value="<?php echo $performs->expected_repayment_monthly; ?>" readonly></td>
                                                            <td><input type="number" name="reg" value="<?php echo $performs->reg; ?>" readonly></td>
                                                            <td><input type="number" name="incomes" value="<?php echo $performs->incomes; ?>" readonly></td>
                                                            <td><input type="number" name="def" value="<?php echo $performs->def; ?>" readonly></td>
                                                            <td><input type="number" name="recovery" value="<?php echo $performs->recovery; ?>" readonly></td>
                                                            <td><input type="number" name="total_collection" value="<?php echo $performs->total_collection; ?>" readonly></td>
                                                            <td><input type="number" name="banked" value="<?php echo $performs->banked; ?>" readonly></td>
                                                            <td><input type="number" name="cash_hand" value="<?php echo $performs->cash_hand; ?>" readonly></td>
                                                            <td><input type="number" name="previous_cash_hand" value="<?php echo $performs->previous_cash_hand; ?>" readonly></td>
                                                            <td><input type="number" name="variances" value="<?php echo $performs->variances; ?>" readonly></td>
                                                            <td><input type="number" name="loan_disbursement"  value="<?php echo $performs->loan_disbursement; ?>" readonly></td>
                                                            <td><input type="number" name="no_disbursement"  value="<?php echo $performs->no_disbursement; ?>" readonly></td>
                                                            <td><input type="number" name="no_payment" value="<?php echo $performs->no_payment; ?>" readonly></td>
                                                            <td><input type="number" name="disbursement_service" value="<?php echo $performs->disbursement_service; ?>" readonly></td>
                                                            <td><input type="number" name="savings"  value="<?php echo $performs->savings; ?>" readonly></td>
                                                            <td><input type="number" name="no_sav_withdrawal" value="<?php echo $performs->no_sav_withdrawal; ?>" readonly></td>
                                                            <td><input type="number" name="savings_return_quit" value="<?php echo $performs->savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="no_savings_return_quit" value="<?php echo $performs->no_savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="no_registration" value="<?php echo $performs->no_registration; ?>" readonly></td>

                                                            <td><input type="number" name="total_repayment" value="<?php echo $performs->total_repayment; ?>" readonly></td>
                                                            <td><input type="text" name="gross_loan" value="<?php echo $performs->gross_loan; ?>" readonly></td>
                                                            <td><input type="number" name="case_load"  value="<?php echo $performs->case_load; ?>" readonly></td>
                                                            <td><input type="number" name="deposit_portfolio" value="<?php echo $performs->deposit_portfolio; ?>" readonly></td>
                                                            <td><input type="number" name="no_savers" value="<?php echo $performs->no_savers; ?>" readonly></td>
                                                            <td><input type="number" name="total_default" value="<?php echo $performs->total_def; ?>" readonly></td>
                                                            <td><input type="text" name="branch" value="<?php echo $performs->branch; ?>"></td>
                                                            <td><input type="text" name="month" value="<?php echo $performs->month; ?>"></td>
                                                            <td><input type="text" name="year" value="<?php echo $performs->year; ?>"></td>
                                                        </tr>

                                                        <?php 
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td colspan="12"><h2 class="donot_touch" style="text-align: center;">Delete Data Here</h2></td>
                                                        </tr>
                                                        <!-- Get last performance data -->
                                                        <?php 
                                                        $evalute = Base::find_last_perform_id($id);
                                                        foreach ($evalute as $performs) {
                                                            // echo  $perform->gross_loan;
                                                        ?>
                                                    <form action="" method="POST">
                                                        <tr>
                                                            <td><input type="date" name="data_date" value="<?php echo $performs->data_date; ?>" readonly></td>
                                                            <td><input type="number" name="total_deposit_week" value="<?php echo $performs->deposit_weekly; ?>" readonly></td>
                                                            <td><input type="number" name="expected_repayment_week" value="<?php echo $performs->expected_repayment_weekly; ?>" readonly></td>
                                                            <td><input type="number" name="total_deposit_monthly" value="<?php echo $performs->total_deposit_monthly; ?>" readonly></td>
                                                            <td><input type="number" name="expected_repayment_monthly" value="<?php echo $performs->expected_repayment_monthly; ?>" readonly></td>
                                                            <td><input type="number" name="reg" value="<?php echo $performs->reg; ?>" readonly></td>
                                                            <td><input type="number" name="incomes" value="<?php echo $performs->incomes; ?>" readonly></td>
                                                            <td><input type="number" name="def" value="<?php echo $performs->def; ?>" readonly></td>
                                                            <td><input type="number" name="recovery" value="<?php echo $performs->recovery; ?>" readonly></td>
                                                            <td><input type="number" name="total_collection" value="<?php echo $performs->total_collection; ?>" readonly></td>
                                                            <td><input type="number" name="banked" value="<?php echo $performs->banked; ?>" readonly></td>
                                                            <td><input type="number" name="cash_hand" value="<?php echo $performs->cash_hand; ?>" readonly></td>
                                                            <td><input type="number" name="previous_cash_hand" value="<?php echo $performs->previous_cash_hand; ?>" readonly></td>
                                                            <td><input type="number" name="variances" value="<?php echo $performs->variances; ?>" readonly></td>
                                                            <td><input type="number" name="loan_disbursement"  value="<?php echo $performs->loan_disbursement; ?>" readonly></td>
                                                            <td><input type="number" name="no_disbursement"  value="<?php echo $performs->no_disbursement; ?>" readonly></td>
                                                            <td><input type="number" name="no_payment" value="<?php echo $performs->no_payment; ?>" readonly></td>
                                                            <td><input type="number" name="disbursement_service" value="<?php echo $performs->disbursement_service; ?>" readonly></td>
                                                            <td><input type="number" name="savings"  value="<?php echo $performs->savings; ?>" readonly></td>
                                                            <td><input type="number" name="no_sav_withdrawal" value="<?php echo $performs->no_sav_withdrawal; ?>" readonly></td>
                                                            <td><input type="number" name="savings_return_quit" value="<?php echo $performs->savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="no_savings_return_quit" value="<?php echo $performs->no_savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="no_registration" value="<?php echo $performs->no_registration; ?>" readonly></td>

                                                            <td><input type="number" name="total_repayment" value="<?php echo $performs->total_repayment; ?>" readonly></td>
                                                            <td><input type="text" name="gross_loan" value="<?php echo $performs->gross_loan; ?>" readonly></td>
                                                            <td><input type="number" name="case_load"  value="<?php echo $performs->case_load; ?>" readonly></td>
                                                            <td><input type="number" name="deposit_portfolio" value="<?php echo $performs->deposit_portfolio; ?>" readonly></td>
                                                            <td><input type="number" name="no_savers" value="<?php echo $performs->no_savers; ?>" readonly></td>
                                                            <td><input type="number" name="total_default" value="<?php echo $performs->total_def; ?>" readonly></td>
                                                            <td><input type="text" name="branch" value="<?php echo $performs->branch; ?>"></td>
                                                            <td><input type="text" name="month" value="<?php echo $performs->month; ?>"></td>
                                                            <td><input type="text" name="year" value="<?php echo $performs->year; ?>"></td>
                                                            <input type="number" name="staff_ids" value="<?php echo $performs->id; ?>" hidden>
                                                            <td><button type="submit" name="delete_data" class="btn btn-danger">Delete</button></td>
                                                        </tr>
                                                        <?php
                                                            }
                                                        ?>
                                                    </form>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>

                                <?php
                                    } else {?>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="container col-md-8 branch_body">
                                                    <form action="" method="POST">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <label style="text-align: center; padding-left: 50px;">Choose the Branch</label><br>
                                                                <select class="form-control" name="branch">
                                                                 <?php
                                                                    // $id = $_SESSION['user_id'];
                                        include('server/connect.php');
                                                                    
                                                                    $sql = "SELECT DISTINCT branch as branch FROM base WHERE `staff_id` = '$id'";
                                                                    $query = mysqli_query($conn,$sql);

                                                                    $row = mysqli_fetch_all($query,MYSQLI_ASSOC);
                                                                    // $result1 = mysqli_query($conn, $sql_num1);
                                                            // $the_data1   = mysqli_fetch_array($result1);
                                                                    // $query = mysqli_query($conn,$sql);
                                                                    // $branch = User::find_user_branch($id);
                                                                    foreach ($row as $details) {

                                                                ?>
                                                                <option value="<?php echo $details['branch']; ?>"><?php echo $details['branch']; ?> </option>
                                                                <?php
                                                                    } 
                                                                ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label style="text-align: center; padding-left: 50px;">Select Month:</label><br>
                                                                <select class="form-control" name= "month">
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label style="text-align: center; padding-left: 50px;">Choose the Year</label><br>
                                                                <select class="form-control" name="year">
                                                                    <option>2023</option>
                                                                    <option>2024</option>
                                                                </select>
                                                                <br>
                                                                 <button type="submit" name="submit_preform" class="btn btn-primary">Submit</button>
                                                            </div>    
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4"></div>    
                                            </div>
                                            
                                <?php
                                    }
                                ?>
                            </div>
                                <?php include("includes/footer.php"); ?>
                            </div>
                            <!-- <div class="col-md-2"></div> -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  