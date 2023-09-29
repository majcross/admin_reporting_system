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
                               
                                        <div class="table-wrapper" style="overflow: scroll;">
                                            
                                                <table class="table new_table" style="overflow-y: scroll;">
                                                    
                                                    <thead>
                                                        <th>Fullname</th>
                                                        <th>User Id</th>
                                                        <th>Staff Id</th>
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
                                                            
                                                            
                                                           // $id = $_SESSION['user_id'];
                                        include('server/connect.php');
                                                                    
                                                                    $sql = "SELECT DISTINCT staff_id as staff_id FROM base";
                                                                    $query = mysqli_query($conn,$sql);

                                                                    $row = mysqli_fetch_all($query,MYSQLI_ASSOC);
                                                                    // $result1 = mysqli_query($conn, $sql_num1);
                                                            // $the_data1   = mysqli_fetch_array($result1);
                                                                    // $query = mysqli_query($conn,$sql);
                                                                    // $branch = User::find_user_branch($id);
                                                                    foreach ($row as $details) {
                                                                        $sql2 = "SELECT * FROM perform where `staff_id` = '".$details['staff_id']."' ORDER BY `staff_id` DESC LIMIT 1";
                                                                        $query2 = mysqli_query($conn,$sql2);
                                                                        $row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);
                                                                        // echo var_dump($row2);

                                                                        $sql3 = "SELECT `fullname` AS name, `user_id` AS name_id FROM user WHERE `user_id` = '".$details['staff_id']."' ORDER BY `user_id` DESC";
                                                                        $query3 = mysqli_query($conn,$sql3);
                                                                        $row3 = mysqli_fetch_array($query3);

                                                                ?>
                                                                <!-- <option value="<?php echo $details['staff_id']; ?>"><?php echo $details['staff_id']; ?> </option> -->
                                                                
                                                            <form action="" method="POST">
                                                        <tr>
                                                            <td><?php echo $row3['name']; ?></td>
                                                            <td><?php echo $row3['name_id']; ?></td>
                                                            <td><?php echo $row2['staff_id']; ?></td>
                                                            <td><?php echo $row2['data_date']; ?></td>
                                                            <td><?php echo $row2['deposit_weekly']; ?></td>
                                                            <td><?php echo $row2['expected_repayment_weekly']; ?></td>
                                                            <td><?php echo $row2['total_deposit_monthly']; ?></td>
                                                            <td><?php echo $row2['expected_repayment_monthly']; ?></td>
                                                            <td><?php echo $row2['reg']; ?></td>
                                                            <td><?php echo $row2['incomes']; ?></td>
                                                            <td><?php echo $row2['def']; ?></td>
                                                            <td><?php echo $row2['recovery']; ?></td>
                                                            <td><?php echo $row2['total_collection']; ?></td>
                                                            <td><?php echo $row2['banked']; ?></td>
                                                            <td><?php echo $row2['cash_hand']; ?></td>
                                                            <td><?php echo $row2['previous_cash_hand']; ?></td>
                                                            <td><?php echo $row2['variances']; ?></td>
                                                            <td><?php echo $row2['loan_disbursement']; ?></td>
                                                            <td><?php echo $row2['no_disbursement']; ?></td>
                                                            <td><?php echo $row2['no_payment']; ?></td>
                                                            <td><?php echo $row2['disbursement_service']; ?></td>
                                                            <td><?php echo $row2['savings']; ?></td>
                                                            <td><?php echo $row2['no_sav_withdrawal']; ?></td>
                                                            <td><?php echo $row2['savings_return_quit']; ?></td>
                                                            <td><?php echo $row2['no_savings_return_quit']; ?></td>
                                                            <td><?php echo $row2['no_registration']; ?></td>

                                                            <td><?php echo $row2['total_repayment']; ?></td>
                                                            <td><?php echo $row2['gross_loan']; ?></td>
                                                            <td><?php echo $row2['case_load']; ?></td>
                                                            <td><?php echo $row2['deposit_portfolio']; ?></td>
                                                            <td><?php echo $row2['no_savers']; ?></td>
                                                            <td><?php echo $row2['total_def']; ?></td>
                                                            <td><?php echo $row2['branch']; ?></td>
                                                            <td><?php echo $row2['month']; ?></td>
                                                            <td><?php echo $row2['year']; ?></td>
                                                        </tr>

                                                        <?php 
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>

                               
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

  