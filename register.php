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
</style>
</head>

<body>
<?php include 'layout/header.php'?>
<?php include 'layout/sidemenu.php'?>
<section >
  <?php include 'layout/navbar.php'?>
  
  <article>
  <form action="regis_addDB.php" method="post">
    <h2>Register</h2>
   
    <table>
      <tr>
        <td>Username:</td>
        <td> <input type="text" name="usrname" required></td>
        <td>Gender:</td>
        <td><input type="radio" class="type" name="gender" value="male" checked>
            <input type="radio" class="type" name="gender"value="female">
        </td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="pwdword" required></td>
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
        <td><input type="text" name="fullname" required></td>
        <td>Member Type:</td>
        <td>
        <select name="memberType" >
        <?php 
         //select data from table
           $sql = "SELECT * FROM member_type";
           $query = $conn->query($sql);
           $row = $query->num_rows;
           
       
        while ($getData = $query->fetch_assoc()){
            $typeId=$getData['type_id'];
            $typeName=$getData['type_name'];
          ?>
        <option value="<?php echo $typeId?>"><?php echo $typeName ?></option>
        <?php } ?>
        </select>
        </td>
        
        </tr>
        <tr>
        <td>Address:</td>
        <td><textarea name="address" rows="10" cols="30"></textarea></td>
      </tr>
      <tr>
        <td>Hobbies: </td>
        <td colspan="4">
    <input type="checkbox" name="hobbies0" value="Sport"> Sport
    <input type="checkbox" name="hobbies1" value="Reading"> Reading
    <input type="checkbox" name="hobbies2" value="Traveling"> Traveling
    <input type="checkbox" name="hobbies3" value="Play game"> Play game</td>
      </tr>
      <tr>
        
      </tr>
    </table>
   

  <input type="submit" >
  <input type="reset" >
  <div class="clear"></div>
    </form>
    
    <div id="show">

  </div>
  </article>
  <div class="clear"></div>
</section>
  
   
    
</body>
</html>