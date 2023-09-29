<?php include("includes/header.php"); ?>
<?php require_once('server/lang.php');
      require_once($xyz1);
    if (isset($_POST['submit'])) {
        
        $total_deposit_week = $_POST['total_deposit_week'];
        $expected_repayment_week = $_POST['expected_repayment_week'];
        $total_deposit_monthly = $_POST['total_deposit_monthly'];
        $expected_repayment_monthly = $_POST['expected_repayment_monthly'];
        $reg = $_POST['reg'];
        $incomes = $_POST['incomes'];
        $def = $_POST['def'];
        $recovery = $_POST['recovery'];
        $total_collection = $total_deposit_week + $expected_repayment_week + $total_deposit_monthly + $expected_repayment_monthly + $reg + $incomes - $def + $recovery;
        $banked = $_POST['banked'];
        $cash_hand = $total_collection - $banked;
        $previous_cash_hand = $_POST['previous_cash_hand'];
        $last_cash_hand = $_POST['last_cash_hand'];
        $variances = $cash_hand - $last_cash_hand;
        $loan_disbursement = $_POST['loan_disbursement'];
        $no_disbursement = $_POST['no_disbursement'];
        $no_payment = $_POST['no_payment'];
        $disbursement_service = $_POST['disbursement_service'];
        $total_repayment = $expected_repayment_week + $expected_repayment_monthly - $def;
        $old_gross_loan = $_POST['old_gross_loan'];
        $gross_loan = $old_gross_loan + $disbursement_service - $total_repayment - $recovery;
        $old_case_load = $_POST['old_case_load']; 
        $case_load  = $old_case_load + $no_disbursement - $no_payment;
        $savings = $_POST['savings'];
        $no_sav_withdrawal  = $_POST['no_sav_withdrawal'];
        $savings_return_quit    = $_POST['savings_return_quit'];
        $no_savings_return_quit = $_POST['no_savings_return_quit'];
        $old_deposit_portfolio = $_POST['old_deposit_portfolio'];
        $deposit_portfolio      = $old_deposit_portfolio + $total_deposit_week + $total_deposit_monthly - $savings - $savings_return_quit;
        $no_registration        = $_POST['no_registration'];
        $old_no_savers          = $_POST['old_no_savers'];
        $no_savers              = $old_no_savers + $no_registration - $no_savings_return_quit;
        $old_total_default          = $_POST['old_total_default'];
        $total_default          = $old_total_default + $def - $recovery;
        $staff_id               = $_POST['staff_id'];

        // var_dump($expected_repayment_monthly);
    }

    if (isset($_POST['save'])) {
        $perform = new Base();
        
        $total_deposit_week = $_POST['total_deposit_week'];
        $expected_repayment_week = $_POST['expected_repayment_week'];
        $total_deposit_monthly = $_POST['total_deposit_monthly'];
        $expected_repayment_monthly = $_POST['expected_repayment_monthly'];
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
        $staff_id               = $_POST['staff_id'];



        $perform->total_deposit_week  = $total_deposit_week;
        $perform->expected_repayment_week = $expected_repayment_week;
        $perform->total_deposit_monthly   = $total_deposit_monthly;
        $perform->expected_repayment_monthly    = $expected_repayment_monthly;
        $perform->reg = $reg;
        $perform->incomes = $incomes;
        $perform->def = $def;
        $perform->recovery    = $recovery;
        $perform->total_collection    = $total_collection;
        $perform->banked  = $banked;
        $perform->cash_hand   = $cash_hand;
        $perform->previous_cash_hand  = $previous_cash_hand;
        $perform->variances    = $variances;
        $perform->loan_disbursement   = $loan_disbursement;
        $perform->no_disbursement = $no_disbursement;
        $perform->no_payment = $no_payment;
        $perform->disbursement_service    = $disbursement_service;
        $perform->total_repayment = $total_repayment;
        $perform->gross_loan  = $gross_loan;
        $perform->case_load   = $case_load;
        $perform->savings  = $savings;
        $perform->no_sav_withdrawal   = $no_sav_withdrawal;
        $perform->savings_return_quit = $savings_return_quit;
        $perform->no_savings_return_quit  = $no_savings_return_quit;
        $perform->deposit_portfolio   = $deposit_portfolio;
        $perform->no_registration = $no_registration;
        $perform->no_savers   = $no_savers;
        $perform->total_default  = $total_default;
        $perform->staff_id      = $staff_id;

        $perform->create_report();


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
                <a class="navbar-brand" href="index.html">SELF-RELIANCE ECONOMIC ADVANCEMENT PROGRAMME (SEAP)</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align: center;">
                            M & E
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
                                            
                                                <table class="table new_table">
                                                    <h3>Base Line</h3>
                                                    
                                                    <thead>
                                                        <th>Total Deposit (Weekly)</th>
                                                        <th>Expected Repayment (Weekly)</th>
                                                        <th>Total Deposit (Monthly)</th>
                                                        <th>Expected Repayment (Monthly)</th>
                                                        <th>Registration</th>
                                                        <th>Other Incomes (E.g. Ann. Due, React. etc)</th>
                                                        <th>Default</th>
                                                        <th>Recovery</th>
                                                        <th>Total Collection</th>
                                                        <th>Total Banked (Teller/ Transfer)</th>
                                                        <th>Cash at Hand</th>
                                                        <th>Previous Cash at hand banked</th>
                                                        <th>VARIANCES</th>
                                                        <th>Loan Disbursement</th>
                                                        <th>No of Disbursement</th>
                                                        <th>No of Full Payment</th>
                                                        <th>Loan Disbursement with Service Charge</th>
                                                        <th>Total Repayment</th>
                                                        <th>Gross Loan Portfolio</th>
                                                        <th>Case Load</th>
                                                        <th>Savings Withdrawal</th>
                                                        <th>No of Savings Withdrawal</th>
                                                        <th>Savings Return (Quit)</th>
                                                        <th>No of Savings Return (Quit)</th>
                                                        <th>Deposit Portfolio</th>
                                                        <th>No of Registration</th>
                                                        <th>No of Savers</th>
                                                        <th>Total Default</th>
                                                    </thead>
                                                    
                                                    <tbody>
                                                      
                                                    <form action="" method="POST">
                                                        <tr>
                                                            <td><input type="number" name="total_deposit_week" id="total_deposit_week" value="<?php echo $total_deposit_week; ?>" readonly></td>
                                                            <td><input type="number" name="expected_repayment_week" id="expected_repayment_week" value="<?php echo $expected_repayment_week; ?>" readonly></td>
                                                            <td><input type="number" name="total_deposit_monthly" id="total_deposit_monthly" value="<?php echo $total_deposit_monthly; ?>" readonly></td>
                                                            <td><input type="number" name="expected_repayment_monthly" id="expected_repayment_monthly" value="<?php echo $expected_repayment_monthly; ?>" readonly></td>
                                                            <td><input type="number" name="reg" id="reg" value="<?php echo $reg; ?>" readonly></td>
                                                            <td><input type="number" name="incomes" id="incomes" value="<?php echo $incomes; ?>" readonly></td>
                                                            <td><input type="number" name="def" id="def" value="<?php echo $def; ?>" readonly></td>
                                                            <td><input type="number" name="recovery" id="recovery"  value="<?php echo $recovery; ?>" readonly></td>
                                                            <td><input type="number" name="total_collection" id="total_collection" value="<?php echo $total_collection; ?>" readonly></td>
                                                            <td><input type="number" name="banked" id="banked" value="<?php echo $banked; ?>" readonly></td>
                                                            <td><input type="number" name="cash_hand" id="cash_hand" value="<?php echo $cash_hand; ?>" readonly></td>
                                                            <td><input type="number" name="previous_cash_hand" id="pre_cash_hand" value="<?php echo $previous_cash_hand; ?>" readonly></td>
                                                            <td><input type="number" name="variances" id="variances" value="<?php echo $variances; ?>" readonly></td>
                                                            <td><input type="number" name="loan_disbursement" id="loan_disbursement" value="<?php echo $loan_disbursement; ?>"></td>
                                                            <td><input type="number" name="no_disbursement" id="no_disbursement" value="<?php echo $no_disbursement; ?>"></td>
                                                            <td><input type="number" name="no_payment" id="no_payment" value="<?php echo $no_payment; ?>"></td>
                                                            <td><input type="number" name="disbursement_service" id="disbursement_service" value="<?php echo $disbursement_service; ?>"></td>
                                                            <td><input type="number" name="total_repayment" id="total_repayment" value="<?php echo $total_repayment; ?>"></td>
                                                            <td><input type="number" name="gross_loan" id="gross_loan" value="<?php echo $gross_loan; ?>" readonly></td>
                                                            <td><input type="number" name="case_load" id="case_load" value="<?php echo $case_load ?>" readonly></td>
                                                            <td><input type="number" name="savings" id="savings" value="<?php echo $savings; ?>" readonly></td>
                                                            <td><input type="number" name="no_sav_withdrawal" id="no_sav_withdrawal" value="<?php echo $no_sav_withdrawal; ?>" readonly></td>
                                                            <td><input type="number" name="savings_return_quit" id="savings_return_quit" value="<?php echo $savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="no_savings_return_quit" id="no_savings_return_quit" value="<?php echo $no_savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="deposit_portfolio" id="deposit_portfolio" value="<?php echo $deposit_portfolio; ?>" readonly></td>
                                                            <td><input type="number" name="no_registration" id="no_registration" value="<?php echo $no_registration; ?>" readonly></td>
                                                            <td><input type="number" name="no_savers" id="no_savers" value="<?php echo $no_savers; ?>" readonly></td>
                                                            <td><input type="number" name="total_default" id="total_default" value="<?php echo $total_default; ?>" readonly></td>
                                                            <td><input type="number" name="staff_id" value="<?php echo $staff_id ?>" hidden></td>
                                                            <td><button type="submit" name="save" class="btn btn-primary">Submit</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
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