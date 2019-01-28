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
  <h2>Member Type</h2><br>
    <hr>
    <?php 
  //select data from table
    $sql = "SELECT * FROM member_type";
    $query = $conn->query($sql);
    $row = $query->num_rows;
    
    
  ?>
    <table id="tab">
        <tr>
            <th>Type ID</th>
            <th>Type Name</th>
            <th>Type Note</th>
            <th>Manage</th>
        </tr><?php 
        while ($getData = $query->fetch_assoc()){
            $typeId= $getData['type_id'];
            $typeName =$getData['type_name'];
            $typeNote =$getData['type_note'];
            
            ?>
            
        <tr>
            <td><?php echo $typeId?></td>
            <td><?php echo $typeName?></td>
            <td><?php echo $typeNote?></td>
            <td>
            <button onclick="edit(<?php echo $typeId?>)">Add Type</button>
            <button onclick="remove(<?php echo $typeId?>)">Remove</button>
            </td>
            
        </tr>
        <?php } ?>
    </table>

  </article>
  <div class="clear"></div>
</section>
  
   
    
</body>
<script>
                function edit(typeId) {
                 window.open("edit_memberType.php?id="+typeId,"",
                  "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=400,left=300,width=400,height=300");
                }
                function remove(typeId){
                    if(confirm("Do you want to remove this type? "+typeId," "))
                        {
                            window.open("remove_memberType.php?id="+typeId,"",
                                "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=400,left=300,width=400,height=300");
                            return true;
    
                        }
                    else
                        {
                            return false;
                        }
                }
            </script>
</html>