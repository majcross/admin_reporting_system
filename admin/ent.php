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
        <script type="text/javascript">
<!--
document.write(unescape('%3c%6e%61%76%20%63%6c%61%73%73%3d%22%6e%61%76%62%61%72%20%6e%61%76%62%61%72%2d%69%6e%76%65%72%73%65%20%6e%61%76%62%61%72%2d%66%69%78%65%64%2d%74%6f%70%22%20%72%6f%6c%65%3d%22%6e%61%76%69%67%61%74%69%6f%6e%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%21%2d%2d%20%42%72%61%6e%64%20%61%6e%64%20%74%6f%67%67%6c%65%20%67%65%74%20%67%72%6f%75%70%65%64%20%66%6f%72%20%62%65%74%74%65%72%20%6d%6f%62%69%6c%65%20%64%69%73%70%6c%61%79%20%2d%2d%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6e%61%76%62%61%72%2d%68%65%61%64%65%72%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%62%75%74%74%6f%6e%20%74%79%70%65%3d%22%62%75%74%74%6f%6e%22%20%63%6c%61%73%73%3d%22%6e%61%76%62%61%72%2d%74%6f%67%67%6c%65%22%20%64%61%74%61%2d%74%6f%67%67%6c%65%3d%22%63%6f%6c%6c%61%70%73%65%22%20%64%61%74%61%2d%74%61%72%67%65%74%3d%22%2e%6e%61%76%62%61%72%2d%65%78%31%2d%63%6f%6c%6c%61%70%73%65%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%73%72%2d%6f%6e%6c%79%22%3e%54%6f%67%67%6c%65%20%6e%61%76%69%67%61%74%69%6f%6e%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%69%63%6f%6e%2d%62%61%72%22%3e%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%69%63%6f%6e%2d%62%61%72%22%3e%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%69%63%6f%6e%2d%62%61%72%22%3e%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%62%75%74%74%6f%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%63%6c%61%73%73%3d%22%6e%61%76%62%61%72%2d%62%72%61%6e%64%22%20%68%72%65%66%3d%22%69%6e%64%65%78%2e%68%74%6d%6c%22%3e%53%42%20%41%64%6d%69%6e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%21%2d%2d%20%54%6f%70%20%4d%65%6e%75%20%49%74%65%6d%73%20%2d%2d%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%75%6c%20%63%6c%61%73%73%3d%22%6e%61%76%20%6e%61%76%62%61%72%2d%72%69%67%68%74%20%74%6f%70%2d%6e%61%76%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%64%72%6f%70%64%6f%77%6e%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%20%63%6c%61%73%73%3d%22%64%72%6f%70%64%6f%77%6e%2d%74%6f%67%67%6c%65%22%20%64%61%74%61%2d%74%6f%67%67%6c%65%3d%22%64%72%6f%70%64%6f%77%6e%22%3e%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%65%6e%76%65%6c%6f%70%65%22%3e%3c%2f%69%3e%20%3c%62%20%63%6c%61%73%73%3d%22%63%61%72%65%74%22%3e%3c%2f%62%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%75%6c%20%63%6c%61%73%73%3d%22%64%72%6f%70%64%6f%77%6e%2d%6d%65%6e%75%20%6d%65%73%73%61%67%65%2d%64%72%6f%70%64%6f%77%6e%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%6d%65%73%73%61%67%65%2d%70%72%65%76%69%65%77%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%70%75%6c%6c%2d%6c%65%66%74%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%6d%67%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%6f%62%6a%65%63%74%22%20%73%72%63%3d%22%68%74%74%70%3a%2f%2f%70%6c%61%63%65%68%6f%6c%64%2e%69%74%2f%35%30%78%35%30%22%20%61%6c%74%3d%22%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%62%6f%64%79%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%68%35%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%68%65%61%64%69%6e%67%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%74%72%6f%6e%67%3e%4a%6f%68%6e%20%53%6d%69%74%68%3c%2f%73%74%72%6f%6e%67%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%68%35%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%20%63%6c%61%73%73%3d%22%73%6d%61%6c%6c%20%74%65%78%74%2d%6d%75%74%65%64%22%3e%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%63%6c%6f%63%6b%2d%6f%22%3e%3c%2f%69%3e%20%59%65%73%74%65%72%64%61%79%20%61%74%20%34%3a%33%32%20%50%4d%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%3e%4c%6f%72%65%6d%20%69%70%73%75%6d%20%64%6f%6c%6f%72%20%73%69%74%20%61%6d%65%74%2c%20%63%6f%6e%73%65%63%74%65%74%75%72%2e%2e%2e%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%6d%65%73%73%61%67%65%2d%70%72%65%76%69%65%77%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%70%75%6c%6c%2d%6c%65%66%74%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%6d%67%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%6f%62%6a%65%63%74%22%20%73%72%63%3d%22%68%74%74%70%3a%2f%2f%70%6c%61%63%65%68%6f%6c%64%2e%69%74%2f%35%30%78%35%30%22%20%61%6c%74%3d%22%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%62%6f%64%79%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%68%35%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%68%65%61%64%69%6e%67%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%74%72%6f%6e%67%3e%4a%6f%68%6e%20%53%6d%69%74%68%3c%2f%73%74%72%6f%6e%67%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%68%35%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%20%63%6c%61%73%73%3d%22%73%6d%61%6c%6c%20%74%65%78%74%2d%6d%75%74%65%64%22%3e%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%63%6c%6f%63%6b%2d%6f%22%3e%3c%2f%69%3e%20%59%65%73%74%65%72%64%61%79%20%61%74%20%34%3a%33%32%20%50%4d%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%3e%4c%6f%72%65%6d%20%69%70%73%75%6d%20%64%6f%6c%6f%72%20%73%69%74%20%61%6d%65%74%2c%20%63%6f%6e%73%65%63%74%65%74%75%72%2e%2e%2e%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%6d%65%73%73%61%67%65%2d%70%72%65%76%69%65%77%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%70%75%6c%6c%2d%6c%65%66%74%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%6d%67%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%6f%62%6a%65%63%74%22%20%73%72%63%3d%22%68%74%74%70%3a%2f%2f%70%6c%61%63%65%68%6f%6c%64%2e%69%74%2f%35%30%78%35%30%22%20%61%6c%74%3d%22%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%62%6f%64%79%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%68%35%20%63%6c%61%73%73%3d%22%6d%65%64%69%61%2d%68%65%61%64%69%6e%67%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%73%74%72%6f%6e%67%3e%4a%6f%68%6e%20%53%6d%69%74%68%3c%2f%73%74%72%6f%6e%67%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%68%35%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%20%63%6c%61%73%73%3d%22%73%6d%61%6c%6c%20%74%65%78%74%2d%6d%75%74%65%64%22%3e%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%63%6c%6f%63%6b%2d%6f%22%3e%3c%2f%69%3e%20%59%65%73%74%65%72%64%61%79%20%61%74%20%34%3a%33%32%20%50%4d%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%3e%4c%6f%72%65%6d%20%69%70%73%75%6d%20%64%6f%6c%6f%72%20%73%69%74%20%61%6d%65%74%2c%20%63%6f%6e%73%65%63%74%65%74%75%72%2e%2e%2e%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%6d%65%73%73%61%67%65%2d%66%6f%6f%74%65%72%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%52%65%61%64%20%41%6c%6c%20%4e%65%77%20%4d%65%73%73%61%67%65%73%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%75%6c%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%64%72%6f%70%64%6f%77%6e%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%20%63%6c%61%73%73%3d%22%64%72%6f%70%64%6f%77%6e%2d%74%6f%67%67%6c%65%22%20%64%61%74%61%2d%74%6f%67%67%6c%65%3d%22%64%72%6f%70%64%6f%77%6e%22%3e%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%62%65%6c%6c%22%3e%3c%2f%69%3e%20%3c%62%20%63%6c%61%73%73%3d%22%63%61%72%65%74%22%3e%3c%2f%62%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%75%6c%20%63%6c%61%73%73%3d%22%64%72%6f%70%64%6f%77%6e%2d%6d%65%6e%75%20%61%6c%65%72%74%2d%64%72%6f%70%64%6f%77%6e%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%41%6c%65%72%74%20%4e%61%6d%65%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%6c%61%62%65%6c%20%6c%61%62%65%6c%2d%64%65%66%61%75%6c%74%22%3e%41%6c%65%72%74%20%42%61%64%67%65%3c%2f%73%70%61%6e%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%41%6c%65%72%74%20%4e%61%6d%65%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%6c%61%62%65%6c%20%6c%61%62%65%6c%2d%70%72%69%6d%61%72%79%22%3e%41%6c%65%72%74%20%42%61%64%67%65%3c%2f%73%70%61%6e%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%41%6c%65%72%74%20%4e%61%6d%65%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%6c%61%62%65%6c%20%6c%61%62%65%6c%2d%73%75%63%63%65%73%73%22%3e%41%6c%65%72%74%20%42%61%64%67%65%3c%2f%73%70%61%6e%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%41%6c%65%72%74%20%4e%61%6d%65%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%6c%61%62%65%6c%20%6c%61%62%65%6c%2d%69%6e%66%6f%22%3e%41%6c%65%72%74%20%42%61%64%67%65%3c%2f%73%70%61%6e%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%41%6c%65%72%74%20%4e%61%6d%65%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%6c%61%62%65%6c%20%6c%61%62%65%6c%2d%77%61%72%6e%69%6e%67%22%3e%41%6c%65%72%74%20%42%61%64%67%65%3c%2f%73%70%61%6e%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%41%6c%65%72%74%20%4e%61%6d%65%20%3c%73%70%61%6e%20%63%6c%61%73%73%3d%22%6c%61%62%65%6c%20%6c%61%62%65%6c%2d%64%61%6e%67%65%72%22%3e%41%6c%65%72%74%20%42%61%64%67%65%3c%2f%73%70%61%6e%3e%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%64%69%76%69%64%65%72%22%3e%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%56%69%65%77%20%41%6c%6c%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%75%6c%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e'));
//-->
</script>

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

        <script type="text/javascript">
<!--
document.write(unescape('%3c%64%69%76%20%69%64%3d%22%70%61%67%65%2d%77%72%61%70%70%65%72%22%3e%0d%0a%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%63%6f%6e%74%61%69%6e%65%72%2d%66%6c%75%69%64%22%3e%0d%0a%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%21%2d%2d%20%50%61%67%65%20%48%65%61%64%69%6e%67%20%2d%2d%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%72%6f%77%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%63%6f%6c%2d%6c%67%2d%31%32%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%68%31%20%63%6c%61%73%73%3d%22%70%61%67%65%2d%68%65%61%64%65%72%22%20%73%74%79%6c%65%3d%22%74%65%78%74%2d%61%6c%69%67%6e%3a%20%63%65%6e%74%65%72%3b%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%53%45%4c%46%2d%52%45%4c%49%41%4e%43%45%20%45%43%4f%4e%4f%4d%49%43%20%41%44%56%41%4e%43%45%4d%45%4e%54%20%50%52%4f%47%52%41%4d%4d%45%20%28%53%45%41%50%29%20%4d%26%45%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%21%2d%2d%20%3c%73%6d%61%6c%6c%3e%53%75%62%68%65%61%64%69%6e%67%3c%2f%73%6d%61%6c%6c%3e%20%2d%2d%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%68%31%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6f%6c%20%63%6c%61%73%73%3d%22%62%72%65%61%64%63%72%75%6d%62%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%64%61%73%68%62%6f%61%72%64%22%3e%3c%2f%69%3e%20%20%3c%61%20%68%72%65%66%3d%22%69%6e%64%65%78%2e%70%68%70%22%3e%44%61%73%68%62%6f%61%72%64%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6c%69%20%63%6c%61%73%73%3d%22%61%63%74%69%76%65%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%20%63%6c%61%73%73%3d%22%66%61%20%66%61%2d%66%69%6c%65%22%3e%3c%2f%69%3e%20%42%6c%61%6e%6b%20%50%61%67%65%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6c%69%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%6f%6c%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%72%6f%77%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%21%2d%2d%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%63%6f%6c%2d%6d%64%2d%32%22%3e%3c%2f%64%69%76%3e%20%2d%2d%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%63%6f%6c%2d%6d%64%2d%31%32%22%3e'));
//-->
</script>

                                <?php
                                    if (isset($_POST['submit_branch'])) {
                                        // code...
                                    
                                ?>
                                        <script type="text/javascript">
<!--
document.write(unescape('%3c%64%69%76%20%63%6c%61%73%73%3d%22%74%61%62%6c%65%2d%77%72%61%70%70%65%72%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%61%62%6c%65%20%63%6c%61%73%73%3d%22%74%61%62%6c%65%20%6e%65%77%5f%74%61%62%6c%65%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%68%65%61%64%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%68%3e%46%75%6c%6c%6e%61%6d%65%3c%2f%74%68%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%68%3e%55%73%65%72%6e%61%6d%65%3c%2f%74%68%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%68%3e%43%61%64%65%72%3c%2f%74%68%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%68%3e%41%63%74%69%6f%6e%3c%2f%74%68%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%74%68%65%61%64%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%74%62%6f%64%79%3e'));
//-->
</script>

                                                        <?php
                                                            $branch = $_POST['branch'];
                                                            $users = User::find_all_co_branch($branch);
                                                            foreach ($users as $staff) {

                                                            
                                                            
                                                            ?>
                                                            <form action="" method="POST">
                                                        <tr>
                                                            <td><?php echo $staff->fullname; ?></td>
                                                            <td><?php echo $staff->username; ?> </td>
                                                            <td><?php echo $staff->cader; ?> </td>
                                                            <td><?php echo $staff->branch; ?> </td>
                                                            <input type="" name="id" value="<?php echo $staff->user_id; ?>" hidden>
                                                            <td><a href="data.php?id=<?php echo $staff->user_id ?>" class="btn">View Base Line</button> </a></td>
                                                            
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