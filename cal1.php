<?php include 'function.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="cal1.php" method="post">
input 1st number : <input type="text" name="num1"><span style="color:red;">
<?php 
if($_POST["num1"]==""){
    echo "*please input number";
    }
    else{
        $num1 = $_POST["num1"];
       
    }
    ?></span><br>
input 2nd number : <input type="text" name="num2"><span style="color:red;">
<?php 
if($_POST["num2"]==""){
    echo "*please input number";   
}
else{
    $num2 = $_POST["num2"];
    
}
?></span><br>
<select name="oper">
  <option value="plus">+</option>
  <option value="minus">-</option>
  <option value="multiple">*</option>
  <option value="divine">/</option>
</select>
<input type="submit">
</form>
</body>
</html>
<?php
$oper= $_POST["oper"];

cal($num1,$num2,$oper);
?>