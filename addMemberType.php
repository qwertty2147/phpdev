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
<form action="insert_memberType.php" method="post">
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


    <input type="submit" >
  <input type="reset" >
  <div class="clear"></div>
</form>
  

  </article>
</body>
</html>