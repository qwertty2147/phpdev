<html>
<body>

<form action="form.php" method="get">
Name: <input type="text" name="name"><span style="color:red;">
<?php 
if($_GET["name"]==""){
    echo "*please input name";
    }
    else{
        $name = $_GET["name"];
       
    }
    ?></span><br>
E-mail: <input type="text" name="email"><span style="color:red;">
<?php 
if($_GET["email"]==""){
    echo "*please input email";   
}
else{
    $email = $_GET["email"];
    
}
?></span><br>
<!-- <input type="submit"> -->
</form>
<?php
 if ($name!=""){
     echo "your name is : ".$name."<br>";
 }
 if ($email!=""){ 
       echo "your email : ".$email;
 }










?>
</body>
</html>