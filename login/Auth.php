<?php session_start();
            if($_SESSION["username"] == ""){
                
                echo "Please Login";
                echo "<script> window.location.replace('login/login.php')</script>";

            }
            
        ?>
       
        
        
    
