<?php require 'connectDB.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
#topnav {
  float: left; 
  width: 20%;
  background: #ccc;
  margin:0;
  height: -webkit-fill-available;
  list-style-type: none;
  padding: 20px 10px; 
  
}
#topnav li a{
  /* float: left; */
  color: white;
  text-align: center;
  margin:5px;
  display: block;
  text-align: center;
  text-decoration: none;
  padding: 20px 10px;
  background: slategray;


  
}


article {
  float: left;
  padding: 20px;
  width: 80%;
  height: -webkit-fill-available;
  background-color: #f1f1f1;
  
}
form{
  /* padding: 20px; */
  margin:20px;
}
input{
  margin:10px;
}
select{
  margin:10px;
}
textarea{
  margin:10px;
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}
#sidenav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  list-style-type: none;
  

  
  
}

#sidenav li {
  float: left;
}

#sidenav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
#topnav li a:hover{
  
  background-color: #111;
}
li a:hover {
  background-color: #111;
}
.clear{
  clear:both;
}
#tab {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ffeaa7;}

#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2d3436;
  color: white;
}

</style>
</head>

<body>
<?php include 'layout/header.php'?>
<?php include 'layout/sidemenu.php'?>
<section >
  <?php include 'layout/navbar.php'?>
  <?php 
  //select data from table
  $idEdit=$_GET["id"];
 
  $SQL= "SELECT * FROM member WHERE id=$idEdit";
  
      $query = $conn->query($SQL);
      $getData = $query->fetch_assoc();
          $id=$getData['id'];
          $username =$getData['username'];
          $fullname =$getData['fullname'];
          $gender =$getData['gender'];
          $age = $getData['age'];
          $address=$getData['address'];
          $hobbies=$getData['hobbies']; 
          $typeIdGet= $getData['type_id'];

          $explode = explode(",", $hobbies);
          
          
       ?>
  <article>
  <form action="updateMember.php?id=<?php echo $idEdit?>" method="post">
  <h2>Edit member<?php "id =" .$idEdit;?></h2><br>
    <hr>
   
    <table>
    
      <tr>
        <td>Username:</td>
        <td> <input type="text" name="username" value="<?php echo $username;?>" ></td>
        <td>Gender:</td>
        <td><input type="radio" class="type" name="gender" value="male" <?php if('male'==$gender){ echo "checked";} ?>>Male
            <input type="radio" class="type" name="gender"value="female" <?php if('female'==$gender){ echo "checked";} ?>>Female
        </td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password" required></td>
        <td>Age:</td>
        <td><select  name="age">
        <option value="1-10">1-10</option>
        <option value="11-20">11-20</option>
        <option value="21-30">21-30</option>
        <option value="31-40">31-40</option>
        <option value="41-50">41-50</option></td>
      </tr>
      <tr>
        <td>Fullname:</td>
        <td><input type="text" name="fullname" value="<?php echo  $fullname;?>"required></td>
        <td><select name="memberType" >
        <?php 
         //select data from table
           $sql = "SELECT * FROM member_type";
           $query = $conn->query($sql);
           $row = $query->num_rows;
           
       
        while ($getData = $query->fetch_assoc()){
            $typeID=$getData['type_id'];
            $typeName=$getData['type_name'];
          ?>
        <option <?php if ($typeIdGet == $typeID) {
          echo "selected";
        }?>value="<?php echo $typeID?>"><?php echo $typeName ?></option>
        <?php } ?>
        </select>
      </td>
      </tr>

      <tr>
        <td>Address:</td>
        <td><textarea name="address" rows="10" cols="30" value="<?php echo  $address;?>"></textarea></td>
      </tr>
      <tr>
        <td>Hobbies: </td>
        <td colspan="4">
    <input type="checkbox" name="hobbies0" value="Sport" <?php if ($explode[0] == "Sport") { echo "checked"; }?> > Sport
    <input type="checkbox" name="hobbies1" value="Reading" <?php if ($explode[1]== 'Reading') {echo "checked";}?>> Reading
    <input type="checkbox" name="hobbies2" value="Traveling" <?php if ($explode[2]== 'Traveling'){echo "checked";} ?>> Traveling
    <input type="checkbox" name="hobbies3" value="Play game" <?php if ($explode[3]== 'Play game') {echo "checked";}?>> Play game</td>
      </tr>
    </table>

    <input type="submit" value="update">
    <input type="button" href="member_list.php" value="Back">
    
    <div id="show"></div>
  </form>
  </article>
  <div class="clear"></div>
</section>
  
   
    
</body>
</html>