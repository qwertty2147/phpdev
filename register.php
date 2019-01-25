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
  float: left;
  color: white;
  text-align: center;
  margin:0px;
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

li a:hover {
  background-color: #111;
}
</style>
</head>

<body>
<header>
  <h2>LOGO</h2>
</header>
<ul id="topnav">
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
<section >
  <nav >
    <ul id="sidenav">
      <li><a href="#">Menu1</a></li>
      <li><a href="#">Menu2</a></li>
      <li><a href="#">Menu3</a></li>
      <li><a href="#">Menu4</a></li>
      <li><a href="#">Menu5</a></li>
    </ul>
  </nav>
  
  <article>
  <form action="register.php" method="post">
    <h2>Register</h2>
    Username: <input type="text" name="usrname" required>
    <select type="radio"  name="gender">
  <option value="male" checked> Male
  <option value="female"> Female
    </select><br>

    Password: <input type="password" name="pwdword" required>
    Age: <input type="number" name="age" required><br>
    Fullname: <input type="text" name="fullname" required><br>
    Address: <textarea name="address" rows="10" cols="30">
    </textarea><br>
    Hobbies: 
    <select type="checkbox" name="Hobbies">
    <option value="Sport"> Sport<br>
    <option value="Reading"> Reading<br>
    <option value="Traveling"> Traveling <br>
    <option value="Play game"> Play game <br>
    </select><br>


  <input type="submit">
  <input type="reset">
    </form>
    </article>
</section>
  <?php
  $usrname = $_POST["usrname"];
  $pwdword = $_POST["pwdword"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $fullname = $_POST["fullname"];
  $address = $_POST["address"];
  $Hobbies = $_POST["Hobbies"];
  

  echo $usrname;
  echo $pwdword ;
  echo $gender;
  echo $age;
  echo $fullname;
  echo $address;
  echo $Hobbies;
  ?>
   
    
</body>
</html>