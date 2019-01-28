<?php require 'connectDB.php';

    if($_POST["usrname"]!=""&& $_POST["pwdword"]!=""&&$_POST["fullname"]!=""){
        $usrname = $_POST["usrname"];
        $pwdword = $_POST["pwdword"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $fullname = $_POST["fullname"];
        $address = $_POST["address"];
        $hobbies0 = $_POST["hobbies0"];
        $hobbies1 = $_POST["hobbies1"];
        $hobbies2 = $_POST["hobbies2"];
        $hobbies3 = $_POST["hobbies3"];

        $hobbies = $hobbies0." , ".$hobbies1." , ".$hobbies2." , ".$hobbies3;

        $SQL = "INSERT INTO member (username,password,gender,age,fullname,address,hobbies)
                        VALUES ('$usrname',md5('$pwdword'),'$gender','$age','$fullname','$address','$hobbies')" ;

        // echo $SQL ;

        if($conn->query($SQL)){
            echo "INSERT DATA SUCCESSFUL";
            echo "<br> <a href='member_list.php'> Show Member List </a>";
        }
        else{
            echo "FAILED".$conn->error();
        }
    }else{
        echo "please fill empty info";
    }

    
?>
    
