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
  
  <article>
  <h2>Member List</h2><br>
    <hr>
    <?php 
  //select data from table
    $sql = "SELECT * FROM member";
    $query = $conn->query($sql);
    $row = $query->num_rows;
    
    
  ?>
    <table id="tab">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Hobbies</th>
            <th>Manage</th>
        </tr><?php #endregion
        while ($getData = $query->fetch_assoc()){
            $id= $getData['id'];
            $username =$getData['username'];
            $fullname =$getData['fullname'];
            $gender =$getData['gender'];
            $age = $getData['age'];
            $address=$getData['address'];
            $hobbies=$getData['hobbies'];?>
        <tr>
            <td><?php echo $id?></td>
            <td><?php echo $username?></td>
            <td><?php echo $fullname?></td>
            <td><?php echo $gender?></td>
            <td><?php echo $age?></td>
            <td><?php echo $address?></td>
            <td><?php echo $hobbies?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Remove</a>
            </td>
            
        </tr>
        <?php } ?>
    </table>
    
    <div id="show">
    
  
  
  
  
  
  
  </div>
  </article>
  <div class="clear"></div>
</section>
  
   
    
</body>
</html>