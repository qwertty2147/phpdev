<?php require 'connectDB.php'; ?>
<h2>Remove MemberType</h2>
<?php
$idEdit=$_GET["id"];

    $SQL = "DELETE FROM member_type WHERE type_id=$idEdit";
  if($conn->query($SQL)=== true){
        echo "Remove DATA SUCCESSFUL";
        echo "<br> <a href='memType.php'> Show Member List </a>";
  }else
  {echo "FAILED";}

?>