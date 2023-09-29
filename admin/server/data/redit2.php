<?php
	$profie = 'Admin';
       if ($_SESSION['cader'] != $profie) {
                redirect("logout.php");
?>