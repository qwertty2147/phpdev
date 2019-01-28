<?php require 'connectDB.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit member type</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
  //select data from table
  $idEdit=$_GET["id"];
 
  $SQL= "SELECT * FROM member_type WHERE id=$idEdit";
  
      $query = $conn->query($SQL);
      $getData = $query->fetch_assoc();
          
          $typeName =$getData['type_name'];
          $typeNote =$getData['type_note'];
          
       ?>
<article>
<form action="update_memberType.php" method="post">
  <h2>Edit Member Type</h2><br>
    <hr>
    
   <table>
      <tr>
        <td>Member type :</td>
        <td> <input type="text" name="type_name" value="<?php echo $typeName;?>"  required></td>
      
        <td>Type Note:</td>
        <td><textarea name="type_note" value="<?php echo $typeNote;?>" rows="10" cols="30"></textarea>
        </td>
      </tr>
      
    </table>


    <input type="submit" >
  <input type="reset" >
  <div class="clear"></div>
</form>
  

  </article>
</body>
</html>