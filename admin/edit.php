<?php include("includes/header.php"); 
    $id = $_GET['id'];
?>

<?php require_once('server/lang.php');
      require_once($xyz1);
         // require_once("server/init.php");
        $new_staff = new User();
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $fullname = $_POST['fullname'];
            $username  = $_POST['username'];
            $new_password  = $_POST['new_password'];
            $password  = md5($new_password);
            $cader     = $_POST['cader'];
            // $branch    = $_POST['branch'];
            var_dump($id);

            // Method to check username
            $user_found = User::verify_username($username);
            $new_staff->id = $id;
            $new_staff->fullname = $fullname;
            $new_staff->username  = $username;
            $new_staff->password  = $password;
            $new_staff->cader     = $cader;
            // $new_staff->branch    = $branch;

            $new_staff->update();
            
                
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
                    <div class="col-md-12">
                        <h1 class="page-header" style="text-align: center;">
                            SELF-RELIANCE ECONOMIC ADVANCEMENT PROGRAMME (SEAP)  M&E                                               

                            <!-- <small>Subheading</small> -->
                            <?php 
                                $user_id = $id;
                                $user = User::find_user_id($user_id);
                            ?>
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
                            <!-- <td><</td> -->
                            <!-- <div class="col-md-2"></div> -->
                            <div class="col-md-12 container well">
                                <form id="login-id" action="" method="post">
    
                                    <div class="form-group">
                                        <input type="text" name="id" value="<?php echo $user->user_id; ?>" hidden>
                                        <label for="fullname">Fullname</label>
                                        <input type="text" class="form-control" name="fullname" value="<?php echo $user->fullname; ?>" required>

                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>" required>

                                    </div>

                                    <div class="form-group">
                                        <label for="password">Enter New Password</label>
                                        <input id="new_password" type="password" class="form-control" name="new_password" value="">

                                    </div>

                                    <div class="form-group">
                                        <label for="password">Confirm password</label>
                                        <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="">

                                    </div>

                                    <div class="form-group">
                                        <label for="cader">Cader</label>
                                        <select name="cader" class="form-control">
                                            <option><?php echo $user->cader; ?></option>
                                            <option>Credit Officer</option>
                                            <option>Branch Manager</option>
                                            <option>Admin</option>
                                            <option>M&E Officer</option>
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
