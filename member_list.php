<?php session_start();
echo $_SESSION["status"];
require 'connectDB.php'; ?>
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
<?PHP include 'login/Auth.php'?>
<?php include 'layout/header.php'?>
<?php include 'layout/sidemenu.php'?>
<section >
  <?php include 'layout/navbar.php'?>
  
  <article>
  <h2>Member List</h2><br>
    <hr>
    
    <table id="tab">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Hobbies</th>
            <th>Member Type</th>
            <th>Manage</th>
        </tr>
        <?php 
        $pagelen =2;
        $page = $_GET['page'];
        
          if(empty($page)){
            $page=1;
          }
          $SQL = "SELECT * FROM member";
          $query =$conn->query($SQL);
          $row = $query->num_rows;
          $totalpage= ceil($row/$pagelen);
          $goto=(($page-1)*$pagelen);

          $SQL = "SELECT member.*,member_type.type_name
          FROM member
          LEFT JOIN member_type ON (member.type_id=member_type.type_id) LIMIT $goto,$pagelen";
          $query = $conn->query($SQL);
          $row = $query->num_rows;

        while ($getData = $query->fetch_assoc()){
            $id= $getData['id'];
            $username =$getData['username'];
            $fullname =$getData['fullname'];
            $gender =$getData['gender'];
            $age = $getData['age'];
            $address=$getData['address'];
            $hobbies=$getData['hobbies'];
            $typeName=$getData['type_name'];?>
        <tr>
            <td><?php echo $id?></td>
            <td><?php echo $username?></td>
            <td><?php echo $fullname?></td>
            <td><?php echo $gender?></td>
            <td><?php echo $age?></td>
            <td><?php echo $address?></td>
            <td><?php echo $hobbies?></td>
            <td><?php echo $typeName?></td>
            <td>
                <a href="edit.php?id=<?php echo $id ?>">Edit</a>
                <a href="remove.php?id=<?php echo $id ?>">Remove</a>
            </td>
            
        </tr>
        <?php } ?>
    </table>
          <?php 
          echo "&nbsp;[Page $page/$totalpage]";
          echo "&nbsp;Goto; ";
          if($page>1){
            $back = $page-1;
            echo "<a href=$PHP_SELF?page=1>First</a> |";
            echo "<a href=$PHP_SELF?page=".$back."></a>";
          }
          for($i=1; $i<=$totalpage; $i++){
            if($i == $page){
              echo "[<b>$i</b>]";
            }else{
              echo "<a href=$PHP_SELF?page=$i> $i </a>";
            }
          }
          ?>
    <div id="show">
    
  
  
  
  
  
  
  </div>
  </article>
  <div class="clear"></div>
</section>
  
   
    
</body>
</html>