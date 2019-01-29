
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
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
<?php include '../layout/header.php'?>
<?php include '../layout/sidemenu.php'?>
<section >
  <?php include '../layout/navbar.php'?>
  
  <article>
  <form action="login_check.php" method="post">
  <h2>Login</h2><br>
    <hr>
    <table>
      <tr>
        <td>Username:</td>
        <td> <input type="text" name="username" required></td>
       
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="pwdword" required></td>
        
      </tr>
     
      
      
    </table>

   
    <input type="submit" name="submit" value="Login">
    
    <div class="clear"></div>
  </form>
  </article>

</section>
  
   
    
</body>
</html>