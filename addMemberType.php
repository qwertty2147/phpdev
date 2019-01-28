<?php require 'connectDB.php'; ?>
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
<article>
<form action="addMemberTypes.php" method="post">
  <h2>Add Member Type</h2><br>
    <hr>
   <table>
      <tr>
        <td>Member type :</td>
        <td> <input type="text" name="memberTypeName" required></td>
      
        <td>Type Note:</td>
        <td><textarea name="typeNote" rows="10" cols="30"></textarea>
        </td>
      </tr>
      
    </table>

    <?php 
$typeName = $_POST["memberTypeName"];
$typeNote = $_POST["typeNote"];
    if($typeName!=""){
        
       

        $SQL = "INSERT INTO member_type (type_name,type_note)
                        VALUES ('$typeName','$typeNote')" ;

         echo "if success" ;

        if($conn->query($SQL)){
            echo "Add Type SUCCESSFUL";
            echo "<br> <a href='memberType.php'> Show Member Type </a>";
        }
        else{
            echo "FAILED".$conn->error();
        }
    }else{
        echo "please fill empty info";
    }

    
?>
    <input type="submit" >
  <input type="reset" >
  <div class="clear"></div>
</form>
  

  </article>
</body>
</html>