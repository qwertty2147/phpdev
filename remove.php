<?php require 'connectDB.php'; ?>
<h2>Remove Member</h2>
<?php
$idEdit=$_GET["id"];

    $SQL = "DELETE FROM member WHERE id=$idEdit";
  if($conn->query($SQL)=== true){
        echo "Remove DATA SUCCESSFUL";
        echo "<br> <a href='member_list.php'> Show Member List </a>";
  }else
  {echo "FAILED";}

?>