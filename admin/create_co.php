<?php include("includes/header.php"); ?>
<?php require_once('server/lang.php');
      require_once($xyz1);
         // require_once("server/init.php");
        $new_staff = new User();
        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $cader     = $_POST['cader'];
            $branch    = $_POST['branch'];

            // Method to check username
            $user_found = User::verify_co($fullname,$branch);

          
            if (!$user_found) {

            $new_staff->fullname = $fullname;
            $new_staff->cader     = $cader;
            $new_staff->branch    = $branch;

            $new_staff->create_co();

            $the_message = "Staff successful created";
            $fullname = "";
            $cader = "";
            $branch = "";
                
            }else{
                $the_message = "User exist";
            }

            
             
        }else{
            $the_message = "";
            $fullname = "";
            $cader = "";
            $branch = "";
        }
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
                            <div class="col-md-12 container well">
                                <h4 class="bg-danger"><?php echo $the_message; ?></h4>
                                <form id="login-id" action="" method="post">
        
                                    <div class="form-group">
                                        <label for="fullname">Fullname</label>
                                        <input type="text" class="form-control" name="fullname" value="<?php echo htmlentities($fullname); ?>" required>

                                    </div>


                                    <div class="form-group">
                                        <label for="cader">Cader</label>
                                        <select name="cader" class="form-control">
                                            <option>Credit Officer</option><!-- 
                                            <option>Branch Manger</option>
                                            <option>Admin</option>
                                            <option>M&E Officer</option> -->
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <select name="branch" class="form-control">
                                            <?php
                                                $branch = User::find_all_branch();
                                                foreach ($branch as $details) {

                                            ?>
                                            <option value="<?php echo $details->branch; ?>"><?php echo $details->branch; ?> </option>
                                            <?php
                                                } 
                                            ?>
                                        </select>
                                        
                                    </div>


                                    <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                                    </div>


                                </form>
                                <div>
                                        <?php include("includes/footer.php"); ?>
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
