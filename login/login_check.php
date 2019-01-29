<?php session_start();
require '../connectDB.php';
    
        $inputUser=$_POST["username"];
        $SQL="SELECT * FROM member WHERE username='$inputUser'";

        $query = $conn->query($SQL);

        $getData = $query->fetch_assoc();
        
        $password =$getData['password'];
        
        $inputPwd = md5($_POST["pwdword"]);

            if($password == $inputPwd){
                $_SESSION["username"] = $inputUser;
                $_SESSION["status"] = "login success" ;
                echo "login success";
                echo "<script> window.location.replace('../member_list.php')</script>";

            }
            else{
                echo"login false";
            }
        
        
        
    
