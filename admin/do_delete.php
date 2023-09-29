<?php include("includes/header.php"); ?>
<?php
    require_once('server/lang.php');
      require_once($xyz1);
    $id = $_GET['id'];
    // echo $id;
?>
<?php
        include('server/connect.php');
        $status = 'In Active';  

        $sql2= "UPDATE `user` SET `status` = '$status' WHERE `user_id` = '$id'";
        $result = mysqli_query($conn,$sql2);

        $yourURL="delete.php";
        echo "<script> alert ('You have Deleted the staff'); </script>";
        echo ("<script>window.location='$yourURL'</script>");
            
            
        
?>
