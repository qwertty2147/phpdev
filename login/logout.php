<?php session_start();
           $_SESSION["username"]=="";
           session_destroy();
           echo "<script> window.location.replace('login.php')</script>";
        ?>
       
        