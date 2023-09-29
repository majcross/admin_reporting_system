<?php include("includes/header.php"); ?>

<?php
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
                            SELF-RELIANCE ECONOMIC ADVANCEMENT PROGRAMME (SEAP) M&E
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
                                    if (isset($_POST['submit_branch'])) {
                                        // code...
                                    
                                ?>
                                        <div class="table-wrapper">
                                            
                                                <table class="table new_table">
                                                    <thead>
                                                        <th>Fullname</th>
                                                        <th>Username</th>
                                                        <th>Cader</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $branch = $_POST['branch'];
                                                            $users = User::find_all_user_branch($branch);
                                                            foreach ($users as $staff) {

                                                            
                                                            
                                                            ?>
                                                            <form action="" method="POST">
                                                        <tr>
                                                            <td><a href="edit.php?id=<?php echo $staff->user_id; ?>"><?php echo $staff->fullname; ?></a></td>
                                                            <td><?php echo $staff->username; ?> </td>
                                                            <td><?php echo $staff->cader; ?> </td>
                                                            <td><?php echo $staff->branch; ?> </td>
                                                            <input type="" name="id" value="<?php echo $staff->user_id; ?>" hidden>
                                                            <!-- <td><a href="view.php?id=<?php echo $staff->user_id ?>" class="btn btn-primary">View Records </a></td> -->
                                                            
                                                        </tr>

                                                        <?php 
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>

                                <?php
                                    } else {?>
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="container col-md-4 branch_body">
                                                    <form action="" method="POST">
                                                        <div class="form-group">
                                                            <label style="text-align: center; padding-left: 50px;">Pick a Branch</label><br>
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
                                                            <br>
                                                             <button type="submit" name="submit_branch" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4"></div>    
                                            </div>
                                            
                                <?php
                                    }
                                ?>
                                <div>
                                        <?php include("includes/footer.php"); ?>
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
