<?php include("includes/header.php"); ?>
<?php
    require_once('server/lang.php');
      require_once($xyz1);
    $id = $_GET['id'];

    // method to check if baseline exits
    $baseline_found = User::verify_baseline($id);
    if ($baseline_found) {
        echo "<script> alert ('Staff already has a baseline created'); </script>";

        header("location:base_line.php");
    }else{  
            $new_staff = new Base();
        if (isset($_POST['submit'])) {
            $loan_portfolio     = $_POST['loan_portfolio'];
            $deposit_portfolio  = $_POST['deposit_portfolio'];
            $default            = $_POST['default'];
            $case_load          = $_POST['case_load'];
            $no_savers          = $_POST['no_savers'];
            $dormant_value      = $_POST['dormant_value'];
            $no_dormant         = $_POST['no_dormant'];
            $fullname           = $_POST['fullname'];
            $user_id            = $_POST['user_id'];

            // others
            $total_deposit_week = "0";
            $expected_repayment_week = "0";
            $total_deposit_monthly = "0";
            $expected_repayment_monthly  = "0";
            $reg = "0";
            $incomes = "0";
            $def = "0";
            $recovery = "0";
            $total_collection = "0";
            $banked = "0";
            $cash_hand = "0";
             $previous_cash_hand = "0";
            $variances = "0";
            $loan_disbursement = "0";
            $no_disbursement = "0";
            $no_full_payment = "0";
            $loan_disbursement_charge = "0";
            $total_repayment = "0";
            $gross_loan = $_POST['loan_portfolio']; 
            $savings_withdrawal = "0";
            $no_savings_withdrawal  = "0";
            $savings_return_quit    = "0";
            $no_savings_return_quit = "0";
            $no_registration        = "0";
            $total_default          = $_POST['default'];

            $new_staff->loan_portfolio = $loan_portfolio;
            $new_staff->deposit_portfolio  = $deposit_portfolio;
            $new_staff->default  = $default;
            $new_staff->case_load     = $case_load;
            $new_staff->no_savers    = $no_savers;
            $new_staff->dormant_value = $dormant_value;
            $new_staff->no_dormant  = $no_dormant;
            $new_staff->fullname  = $fullname;
            $new_staff->user_id     = $user_id;

            // others
            $new_staff->total_deposit_week  = $total_deposit_week;
            $new_staff->expected_repayment_week = $expected_repayment_week;
            $new_staff->total_deposit_monthly   = $total_deposit_monthly;
            $new_staff->expected_repayment_monthly    = $expected_repayment_monthly;
            $new_staff->reg = $reg;
            $new_staff->incomes = $incomes;
            $new_staff->def = $def;
            $new_staff->recovery    = $recovery;
            $new_staff->total_collection    = $total_collection;
            $new_staff->banked  = $banked;
            $new_staff->cash_hand   = $cash_hand;
            $new_staff->previous_cash_hand  = $previous_cash_hand;
            $new_staff->variances    = $variances;
            $new_staff->loan_disbursement   = $loan_disbursement;
            $new_staff->no_disbursement = $no_disbursement;
            $new_staff->no_full_payment = $no_full_payment;
            $new_staff->loan_disbursement_charge    = $loan_disbursement_charge;
            $new_staff->total_repayment = $total_repayment;
            $new_staff->gross_loan  = $gross_loan;
            $new_staff->savings_withdrawal  = $savings_withdrawal;
            $new_staff->no_savings_withdrawal   = $no_savings_withdrawal;
            $new_staff->savings_return_quit = $savings_return_quit;
            $new_staff->no_savings_return_quit  = $no_savings_return_quit;
            $new_staff->no_registration = $no_registration;
            $new_staff->no_savers   = $no_savers;
            $new_staff->total_default  = $total_default;


            $new_staff->create_base();

            $new_staff->create_default_report();  
            


        }
?>
<?php if (!$session->is_signed_in()) {redirect("login.php");} ?>
    
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
                <a class="navbar-brand" href="index.html">SB Admin</a>
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
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align: center;">
                            SELF-RELIANCE ECONOMIC ADVANCEMENT PROGRAMME (SEAP)  M&E
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
                                    $user_id = $id;
                                    $staff = User::find_user_id($user_id);
                                    
                                    // var_dump($staff->cader);
                                    
                                ?>
                                        <div class="table-wrapper" style="overflow: scroll;">
                                            
                                                <table class="table new_table">
                                                    <thead>
                                                        <th>Loan Portfolio</th>
                                                        <th>Deposit Portfolio</th>
                                                        <th>Default</th>
                                                        <th>Case Load</th>
                                                        <th>No of Savers</th>
                                                        <th>Dormant Value</th>
                                                        <th>No of Dormant</th>
                                                        <th>Fullname</th>
                                                    </thead>
                                                    <tbody>
                                                        <form action="" method="POST">
                                                            <tr>
                                                                <td><input type="number" name="loan_portfolio"></td>
                                                                <td><input type="number" name="deposit_portfolio"></td>
                                                                <td><input type="number" name="default"></td>
                                                                <td><input type="number" name="case_load"></td>
                                                                <td><input type="number" name="no_savers"></td>
                                                                <td><input type="number" name="dormant_value"></td>
                                                                <td><input type="number" name="no_dormant"></td>
                                                                <td><input type="text" name="fullname" value="<?php echo $staff->fullname; ?>" readonly></td>
                                                                <td><input type="number" name="user_id" value="<?php echo $staff->user_id; ?>" hidden></td>    
                                                            </tr>
                                                            <tr>
                                                                <td colspan="6" class="center" style="text-align: center;">
                                                                    <button type="submit" class="btn btn-lg btn-primary" name="submit">Submit</button>
                                                                </td>
                                                            </tr>
                                                            
                                                        </form>
                                                        
                                                    </tbody>
                                                </table>
                                        </div>

                               
                            </div>
                                
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

  <?php include("includes/footer.php"); ?>
    }          
            
?>
<?php } ?>
