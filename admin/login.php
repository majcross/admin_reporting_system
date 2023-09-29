<?php
	require_once('server/lang.php');
	require_once($xyz1); 
	// require_once('server/init.php');
?>

<?php
	
	if ($session->is_signed_in()) {
		redirect("index.php");
	}

	if (isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$passwords  = md5($password);


		// Method to check username
		$user_found = User::verify_user($username, $passwords);

	if ($user_found) {
		
		$session->login($user_found);
		redirect("index.php");
	}else {
		$the_message = "Wrong password or username";
	}

	} else {
		$the_message = "";
		$username = "";
		$password = "";
	}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<?php require_once("includes/header.php");?>
</head>
<body >
	<div class="row" style="padding: 25px;">
		<div class="col-md-2"></div>
		<div class="col-md-6 container well">
            
            <h4>Login</h4>
			<h4 class="bg-danger"><?php echo $the_message; ?></h4>
				
			<form id="login-id" action="" method="post">
				
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >

			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
				
			</div>


			<div class="form-group">
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">

			</div>


			</form>


		</div>
		<div class="col-md-4"></div>	
	</div>
	

</body>
</html>
<?php require_once("includes/footer.php");?>


