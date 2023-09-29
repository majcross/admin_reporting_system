<?php include("includes/header.php");
     $id = $_GET['id'];
 ?>
<?php require_once('server/lang.php');
      require_once($xyz1);
 ?>
<?php if (!$session->is_signed_in()) {redirect("login.php");} ?>
<?php 
        $profie = 'Admin';
       if ($_SESSION['cader'] != $profie) {
                redirect("logout.php");
            }
     ?>
    
    <style>
        .donot_touch{
            color: darkred;
        }
    </style>
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
                <a class="navbar-brand" href="index.php">SELF-RELIANCE ECONOMIC ADVANCEMENT PROGRAMME (SEAP)</a>
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
                    <div class="col-md-12">
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
                            <div class="col-md-12" onload="show_gross_loan()">
                              
                                        <div class="table-wrapper" style="overflow: scroll;">
                                            
                                                <table class="table new_table">
                                                    <h3>Base Line</h3>
                                                    <thead>
                                                        <th>Loan Portfolio</th>
                                                        <th>Deposit Portfolio</th>
                                                        <th>Default</th>
                                                        <th>Case Load</th>
                                                        <th>No of Savers</th>
                                                        <th>Dormant Value</th>
                                                        <th>No of Dormant</th>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 

                                                                $base = Base::find_base_id($id);
                                                                
                                                            ?>
                                                        <tr>
                                                            <td><input type="number" name="loan" id="loan" value="<?php echo $base->loan_portfolio; ?>" readonly></td>
                                                            <td><input type="text" name="deposit" id="deposit" value="<?php echo number_format($base->deposit_portfolio); ?>" readonly></td>
                                                            <td><input type="text" name="default" id="default" value="<?php echo number_format($base->default); ?>" readonly></td>
                                                            <td><input type="text" name="case_load" id="case_load" value="<?php echo $base->case_load; ?>" readonly></td>
                                                            <td><input type="text" name="no_savers" id="no_savers" value="<?php echo number_format($base->no_savers); ?>" readonly></td>
                                                            <td><input type="text" name="dormant_value" id="dormant_value" value="<?php echo number_format($base->dormant_value); ?>" readonly></td>
                                                            <td><input type="text" name="no_dormant" id="no_dormant" value="<?php echo $base->no_dormant; ?>" readonly></td>
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                         <th>Date</th> 
                                                        <th>Total Deposit (Weekly)</th>
                                                        <th>Expected Repayment (Weekly)</th>
                                                        <th>Total Deposit (Monthly)</th>
                                                        <th>Expected Repayment (Monthly)</th>
                                                        <th>Registration</th>
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
                                                        <th class="donot_touch">Total Repayment</th>
                                                        <th class="donot_touch">Gross Loan Portfolio</th>
                                                        <th class="donot_touch">Case Load</th>
                                                        <th>Savings Withdrawal</th>
                                                        <th>No of Savings Withdrawal</th>
                                                        <th>Savings Return (Quit)</th>
                                                        <th>No of Savings Return (Quit)</th>
                                                        <th class="donot_touch">Deposit Portfolio</th>
                                                        <th>No of Registration</th>
                                                        <th class="donot_touch">No of Savers</th>
                                                        <th class="donot_touch">Total Default</th>
                                                    </thead>
                                                    
                                                    <tbody>


                                                        <!-- Get last performance data -->
                                                        <?php 
                                                        $evalute = Base::find_perform_id($id);
                                                        foreach ($evalute as $performs) {
                                                            // echo  $performs->gross_loan;
                                                        ?>
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
                                                            <td><input type="number" name="total_repayment" value="<?php echo $performs->total_repayment; ?>" readonly></td>
                                                            <td><input type="text" name="gross_loan" value="<?php echo $performs->gross_loan; ?>" readonly></td>
                                                            <td><input type="number" name="case_load"  value="<?php echo $performs->case_load; ?>" readonly></td>
                                                            <td><input type="number" name="savings"  value="<?php echo $performs->savings; ?>" readonly></td>
                                                            <td><input type="number" name="no_sav_withdrawal" value="<?php echo $performs->no_sav_withdrawal; ?>" readonly></td>
                                                            <td><input type="number" name="savings_return_quit" value="<?php echo $performs->savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="no_savings_return_quit" value="<?php echo $performs->no_savings_return_quit; ?>" readonly></td>
                                                            <td><input type="number" name="deposit_portfolio" value="<?php echo $performs->deposit_portfolio; ?>" readonly></td>
                                                            <td><input type="number" name="no_registration" value="<?php echo $performs->no_registration; ?>" readonly></td>
                                                            <td><input type="number" name="no_savers" value="<?php echo $performs->no_savers; ?>" readonly></td>
                                                            <td><input type="number" name="total_default" value="<?php echo $performs->total_def; ?>" readonly></td>
                                                        </tr>
                                                        <?php
                                                            }
                                                        ?>

                                                        <!-- Get last performance data -->
                                                        <?php 
                                                        $evalute = Base::find_last_perform_id($id);
                                                        foreach ($evalute as $perform) {
                                                            // echo  $perform->gross_loan;
                                                        ?>
                                                        <tr>
                                                            <td><input type="number" name="total_deposit_week" value="<?php echo $perform->deposit_weekly; ?>" hidden></td>
                                                            <td><input type="number" name="expected_repayment_week" value="<?php echo $perform->expected_repayment_weekly; ?>" hidden></td>
                                                            <td><input type="number" name="total_deposit_monthly" value="<?php echo $perform->total_deposit_monthly; ?>" hidden></td>
                                                            <td><input type="number" name="expected_repayment_monthly" value="<?php echo $perform->expected_repayment_monthly; ?>" hidden></td>
                                                            <td><input type="number" name="reg" value="<?php echo $perform->reg; ?>" hidden></td>
                                                            <td><input type="number" name="incomes" value="<?php echo $perform->incomes; ?>" hidden></td>
                                                            <td><input type="number" name="def" value="<?php echo $perform->def; ?>" hidden></td>
                                                            <td><input type="number" name="recovery" value="<?php echo $perform->recovery; ?>" hidden></td>
                                                            <td><input type="number" name="total_collection" value="<?php echo $perform->total_collection; ?>" hidden></td>
                                                            <td><input type="number" name="banked" value="<?php echo $perform->banked; ?>" hidden></td>
                                                            <td><input type="number" name="cash_hand" id="first_cash_hand" value="<?php echo $perform->cash_hand; ?>" hidden></td>
                                                            <td><input type="number" name="previous_cash_hand" id="" value="<?php echo $perform->previous_cash_hand; ?>" hidden></td>
                                                            <td><input type="number" name="variances" value="<?php echo $perform->variances; ?>" hidden></td>
                                                            <td><input type="number" name="loan_disbursement"  value="<?php echo $perform->loan_disbursement; ?>" hidden></td>
                                                            <td><input type="number" name="no_disbursement"  value="<?php echo $perform->no_disbursement; ?>" hidden></td>
                                                            <td><input type="number" name="no_payment" value="<?php echo $perform->no_payment; ?>" hidden></td>
                                                            <td><input type="number" name="disbursement_service" value="<?php echo $perform->disbursement_service; ?>" hidden></td>
                                                            <td><input type="number" name="total_repayment" value="<?php echo $perform->total_repayment; ?>" hidden></td>
                                                            <td><input type="text" name="gross_loan" id="gross_loans" value="<?php echo $perform->gross_loan; ?>" hidden></td>
                                                            <td><input type="number" name="case_load" id="case_load" value="<?php echo $perform->case_load; ?>" hidden></td>
                                                            <td><input type="number" name="savings" id="savings" value="<?php echo $perform->savings; ?>" hidden></td>
                                                            <td><input type="number" name="no_sav_withdrawal" id="no_sav_withdrawal" value="<?php echo $perform->no_sav_withdrawal; ?>" hidden></td>
                                                            <td><input type="number" name="savings_return_quit" id="savings_return_quit" value="<?php echo $perform->savings_return_quit; ?>" hidden></td>
                                                            <td><input type="number" name="no_savings_return_quit" id="no_savings_return_quit" value="<?php echo $perform->no_savings_return_quit; ?>" hidden></td>
                                                            <td><input type="number" name="deposit_portfolio" id="deposit_portfolio" value="<?php echo $perform->deposit_portfolio; ?>" hidden></td>
                                                            <td><input type="number" name="no_registration" id="no_registration" value="<?php echo $perform->no_registration; ?>" hidden></td>
                                                            <td><input type="number" name="no_savers" id="no_savers" value="<?php echo $perform->no_savers; ?>" hidden></td>
                                                            <td><input type="number" name="total_default" id="total_default" value="<?php echo $perform->total_def; ?>" hidden></td>
                                                        </tr>
                                                        <?php
                                                            }
                                                        ?>
                                                    <form action="data_enrty.php" method="POST">
                                                        <tr>
                                                             <td><input type="date" name="today_date" required></td> 
                                                            <td><input type="number" name="total_deposit_week" id="total_deposit_week" value="" required></td>
                                                            <td><input type="number" name="expected_repayment_week" id="expected_repayment_week" value="" required></td>
                                                            <td><input type="number" name="total_deposit_monthly" id="total_deposit_monthly" value="" required></td>
                                                            <td><input type="number" name="expected_repayment_monthly" id="expected_repayment_monthly" required></td>
                                                            <td><input type="number" name="reg" id="reg" value="" required></td>
                                                            <td><input type="number" name="incomes" id="incomes" value="" required></td>
                                                            <td><input type="number" name="def" id="def" oninput="repayment()" required></td>
                                                            <td><input type="number" name="recovery" id="recovery"  required oninput="collection()"></td>
                                                            <td><input type="number" name="total_collection" id="total_collection" readonly></td>
                                                            <td><input type="number" name="banked" id="banked" oninput="hand_bank()" required></td>
                                                            <td><input type="number" name="cash_hand" id="cash_hand" readonly></td>
                                                            <td><input type="number" name="previous_cash_hand" id="pre_cash_hand" oninput="prev_hand_bank()"></td>
                                                            <input type="number" name="last_cash_hand" id="" value="<?php echo $perform->previous_cash_hand; ?>" hidden>
                                                            <td><input type="number" name="variances" id="variances" readonly></td>
                                                            <td><input type="number" name="loan_disbursement" id="loan_disbursement" required></td>
                                                            <td><input type="number" name="no_disbursement" id="no_disbursement" required></td>
                                                            <td><input type="number" name="no_payment" id="no_payment" required></td>
                                                            <td><input type="number" name="disbursement_service" id="disbursement_service" required></td>
                                                            <td><input type="number" name="total_repayment" id="total_repayment" oninput="myFunction()" readonly></td>
                                                            <input type="text" name="old_gross_loan" value="<?php echo $perform->gross_loan; ?>" hidden>
                                                            <td><input type="number" name="gross_loan" id="gross_loan" value="" readonly></td>
                                                            <input type="number" name="old_case_load" value="<?php echo $perform->case_load; ?>" hidden>
                                                            <td><input type="number" name="case_load" id="case_load" readonly></td>
                                                            <td><input type="number" name="savings" id="savings" required></td>
                                                            <td><input type="number" name="no_sav_withdrawal" id="no_sav_withdrawal" required></td>
                                                            <td><input type="number" name="savings_return_quit" id="savings_return_quit" required></td>
                                                            <td><input type="number" name="no_savings_return_quit" id="no_savings_return_quit" required></td>
                                                            <input type="number" name="old_deposit_portfolio" value="<?php echo $perform->deposit_portfolio; ?>" hidden>
                                                            <td><input type="number" name="deposit_portfolio" id="deposit_portfolio" readonly></td>
                                                            <td><input type="number" name="no_registration" id="no_registration" required></td>
                                                            <input type="number" name="old_no_savers" value="<?php echo $perform->no_savers; ?>" hidden>
                                                            <td><input type="number" name="no_savers" id="no_savers" readonly></td>
                                                            <input type="number" name="old_total_default" value="<?php echo $perform->total_def; ?>" hidden>
                                                            <td><input type="number" name="total_default" id="total_default" readonly></td>
                                                            <td><input type="number" name="staff_id" value="<?php echo $id ?>" hidden></td>
                                                            
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
        <script>
            function show_gross_loan() {
                var a = document.getElementById("gross_loans").value;      
                // var b = document.getElementById("total_repayments").value;
                document.getElementById("gross_loan").value = a;
            //     // alert("Page");
            }
            window.onload = show_gross_loan();

            function myFunction() {
                var a = parseInt(document.getElementById("loan").value);
                var b = parseInt(document.getElementById("total_repayment").value);
                var d = parseInt(document.getElementById("disbursement_service").value);
                var e = parseInt(document.getElementById("recovery").value);
                var c = a - b + d - e;
                document.getElementById("gross_loan").value = c;
            }
        </script>
        <script>
            function collection() {
                var a = parseInt(document.getElementById("total_deposit_week").value);
                var b = parseInt(document.getElementById("expected_repayment_week").value);
                var c = parseInt(document.getElementById("total_deposit_monthly").value);
                var d = parseInt(document.getElementById("expected_repayment_monthly").value);
                var e = parseInt(document.getElementById("reg").value);
                var f = parseInt(document.getElementById("incomes").value);
                var g = parseInt(document.getElementById("def").value);
                var h = parseInt(document.getElementById("recovery").value);
                var i = a + b + c + d + e + f - g + h;
                document.getElementById("total_collection").value = i;
            }
        </script>
        <!-- calculate banked -->
        <script>
            function hand_bank() {
                var collection = parseInt(document.getElementById("total_collection").value);
                var banked = parseInt(document.getElementById("banked").value);
                var cash_hand = collection - banked;
                document.getElementById("cash_hand").value = cash_hand;
            }
        </script>

        <!-- previous cash hand -->
        <script>
            function prev_hand_bank() {
                var pre_cash_hand = parseInt(document.getElementById("pre_cash_hand").value);
                var first_cash_hand = parseInt(document.getElementById("first_cash_hand").value);
                var variances = pre_cash_hand - first_cash_hand;
                document.getElementById("variances").value = variances;
            }
        </script>

        <!-- previous cash hand -->
        <script>
            function repayment() {
                var expected_repayment_week = parseInt(document.getElementById("expected_repayment_week").value);
                var expected_repayment_monthly = parseInt(document.getElementById("expected_repayment_monthly").value);
                var def = parseInt(document.getElementById("def").value);
                var total_repayment = expected_repayment_week + expected_repayment_monthly - def;
                document.getElementById("total_repayment").value = total_repayment;
            }
        </script>

  <?php include("includes/footer.php"); ?>