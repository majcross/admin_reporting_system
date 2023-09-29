<?php include("includes/header.php"); ?>
<?php
    require_once('server/lang.php');
      require_once($xyz1);
    $id = $_GET['id'];
    // echo $id;
?>
<?php
        include('server/connect.php');
        $status = 'Active';  

        $sql2= "UPDATE `user` SET `status` = '$status' WHERE `user_id` = '$id'";
        $result = mysqli_query($conn,$sql2);

        $yourURL="exit.php";
        echo "<script> alert ('You have Restore the staff'); </script>";
        echo ("<script>window.location='$yourURL'</script>");
            
            
        
?>
